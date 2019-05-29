<?php
/* Smarty version 3.1.33, created on 2019-05-20 14:39:03
  from '/Applications/MAMP/htdocs/prestashop/themes/classic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ce2f4472b3493_12460594',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a1505df8612a556abd19783424e80d0648c81f95' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop/themes/classic/templates/index.tpl',
      1 => 1556657196,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ce2f4472b3493_12460594 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18857491655ce2f4472add74_00864069', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_7533533075ce2f4472aea92_24023757 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_19168861395ce2f4472b08f4_39349425 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_7730137595ce2f4472afd24_92630735 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19168861395ce2f4472b08f4_39349425', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_18857491655ce2f4472add74_00864069 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_18857491655ce2f4472add74_00864069',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_7533533075ce2f4472aea92_24023757',
  ),
  'page_content' => 
  array (
    0 => 'Block_7730137595ce2f4472afd24_92630735',
  ),
  'hook_home' => 
  array (
    0 => 'Block_19168861395ce2f4472b08f4_39349425',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7533533075ce2f4472aea92_24023757', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7730137595ce2f4472afd24_92630735', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
