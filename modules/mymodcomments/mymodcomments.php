<?php

    class MyModComments extends Module{

        public function __construct(){
             // same name as file and folder 
            $this->name = 'mymodcomments'; 
            $this->displayName = 'My Module of product comments';
            $this->tab = 'front_office_features';
            $this->version = '0.1';
            $this->author = 'Fabien Serny';
            $this->description = 'With this module, your customers will be able to grade and comments your products';
            $this->bootstrap = true;
            // should be last
            parent::__construct(); 
         
        }

        public function processConfiguration() {
            if (Tools::isSubmit('mymod_pc_form')){
                // GET and POST 
            $enable_grades = Tools::getValue('enable_grades');
            $enable_comments = Tools::getValue('enable_comments');
            Configuration::updateValue('MYMOD_GRADES' , $enable_grades);
            Configuration::updateValue('MYMOD_COMMENTS' , $enable_comments);
                //Assign variable to template 
            $this->context->smarty->assign('confirmation', 'ok');
                        }
        }

        public function getContent(){
            $this->processConfiguration();
            $this->assignConfiguration();
            return $this->display(__FILE__, 'getContent.tpl');
                     }

        public function assignConfiguration(){ 
            $enable_grades = Configuration::get('MYMOD_GRADES');
            $enable_comments = Configuration::get('MYMOD_COMMENTS');
            // Assign variable to Template 
            $this->context->smarty->assign('enable_grades', $enable_grades);
            $this->context->smarty->assign('enable_comments', $enable_comments);

                }

        public function install(){
            parent::install(); 
            $this->registerHook('DisplayAfterProductThumbs');
            return true;
             }

        public function processProductTabContent(){
            if(Tools::isSubmit('mymod_pc_submit_comment')){
            $id_product  = Tools::getValue('id_product');         
            $grade   = Tools::getValue('grade');
            $comment = Tools::getValue('comment');
            $insert  = array('id_product'=>(int)$id_product,
            'grade'=>(int)$grade,
            'comment' => pSQL($comment),
            'date_add' => date('y-m-d H:i:s'), 
                );

                //Insert Data into Database 
            Db::getInstance()->insert('mymod_comment', $insert);
    
                }


                
            }

        public function assignProductTabContent(){

            $enable_grades = Configuration::get('MYMOD_GRADES');
            $enable_comments = Configuration::get('MYMOD_COMMENTS');

            $id_product = Tools::getValue('id_product');
            $comments = Db::getInstance()->executeS('SELECT * FROM `'._DB_PREFIX_.'mymod_comment`WHERE `id_product` = '.(int)$id_product.'
            ORDER BY `date_add` DESC
            LIMIT 3');

            if($comments){
              echo "<script>console.log( 'we got the comments' );</script>";
            } else {
              echo "<script>console.log( 'we didnt find shit! );</script>";
            }
            // Assigning variable to template 
            $this->context->smarty->assign('enable_grades', $enable_grades);
            $this->context->smarty->assign('enable_comments', $enable_comments);
            $this->context->smarty->assign('comments', $comments);
            
            echo "<script>console.log( 'Debug Objects: " . $comments . "' );</script>";
        }
    
        public function hookDisplayAfterProductThumbs(){
            // displays PS component 
             $this->processProductTabContent();
             $this->assignProductTabContent();
            return $this->display(__FILE__, 'DisplayAfterProductThumbs.tpl');
                         }
                           

        public function uninstall(){
            // Call uninstall parent method 
            if(!parent::uninstall())
                return false;

            // Execute module install SQL statements 
            $sql_file = dirname(__FILE__).'/install/uninstall.sql';
            if(!$this->loadSQLFile($sql_file))
                return false;

            
            // Delete configuration values 
            Configuration::deleteByName('MYMOD_GRADES');
            Configuration::deleteByName('MYMOD_COMMENTS');


            return true;

        }

 


    }// End Of Class



