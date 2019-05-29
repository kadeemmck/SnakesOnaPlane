<?php
/* Smarty version 3.1.33, created on 2019-05-15 11:12:43
  from '/Applications/MAMP/htdocs/prestashop/themes/classic/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cdc2c6bdcf618_81977987',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b72e5c905dcf9bfe3ccf86012c06c17e2d5194bb' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop/themes/classic/templates/page.tpl',
      1 => 1556657196,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cdc2c6bdcf618_81977987 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21462670955cdc2c6bdc7763_28250143', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_20291454345cdc2c6bdc8b84_33806232 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_12071883105cdc2c6bdc8051_50513928 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20291454345cdc2c6bdc8b84_33806232', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_16517318515cdc2c6bdcbbc5_63819189 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_21282595245cdc2c6bdcc7d2_45557735 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_14462676865cdc2c6bdcb336_45412983 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16517318515cdc2c6bdcbbc5_63819189', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21282595245cdc2c6bdcc7d2_45557735', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_17502814065cdc2c6bdce209_58171892 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_1206908305cdc2c6bdcd9b8_33235181 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17502814065cdc2c6bdce209_58171892', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_21462670955cdc2c6bdc7763_28250143 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_21462670955cdc2c6bdc7763_28250143',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_12071883105cdc2c6bdc8051_50513928',
  ),
  'page_title' => 
  array (
    0 => 'Block_20291454345cdc2c6bdc8b84_33806232',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_14462676865cdc2c6bdcb336_45412983',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_16517318515cdc2c6bdcbbc5_63819189',
  ),
  'page_content' => 
  array (
    0 => 'Block_21282595245cdc2c6bdcc7d2_45557735',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_1206908305cdc2c6bdcd9b8_33235181',
  ),
  'page_footer' => 
  array (
    0 => 'Block_17502814065cdc2c6bdce209_58171892',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12071883105cdc2c6bdc8051_50513928', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14462676865cdc2c6bdcb336_45412983', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1206908305cdc2c6bdcd9b8_33235181', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
