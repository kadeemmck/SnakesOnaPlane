<?php
            
    class MyModCommentsCommentsModuleFrontController extends ModuleFrontController{
       
     public function initContent(){
     parent::initContent();
     $this->setTemplate("module:mymodcomments/views/templates/front/list.tpl");



   
    }
    
    }