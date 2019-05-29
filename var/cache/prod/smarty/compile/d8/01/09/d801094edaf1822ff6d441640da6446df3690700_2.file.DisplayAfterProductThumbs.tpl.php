<?php
/* Smarty version 3.1.33, created on 2019-05-15 11:12:43
  from '/Applications/MAMP/htdocs/prestashop/modules/mymodcomments/views/templates/hook/DisplayAfterProductThumbs.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cdc2c6b633d32_28349460',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd801094edaf1822ff6d441640da6446df3690700' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop/modules/mymodcomments/views/templates/hook/DisplayAfterProductThumbs.tpl',
      1 => 1557933073,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cdc2c6b633d32_28349460 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h3 class="page-product-heading">Product Comments</h3>
<div class="rte">
  <form action="" method="POST" id="comment-form">
    <div class="form-group">
      <label for="grade">Grade:</label>
      <div class="row">
        <div class="col-xs-4">
          <select id="grade" class="form-control" name="grade">
            <option value="0">-- Choose --</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
          </select>
        </div>
      </div>
    </div>
    <div class="form-group">
      <label for="comment">Comment:</label>
      <textarea name="comment" id="comment" class="form-control"></textarea>
      </div>
    <div class="submit">
      <button type="submit" name="mymod_pc_submit_comment" class="button btn btn-default button-medium"><span>Send<i class="icon-chevron-right right"></i></span></button>
    </div>
  </form>
</div>


<div class="rte">
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['comments']->value, 'comment');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['comment']->value) {
?>
    <p>
      <strong>Comment #<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value['id_mymod_comment'], ENT_QUOTES, 'UTF-8');?>
:</strong> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value['COMMENT'], ENT_QUOTES, 'UTF-8');?>
<br>
      <strong>Grade:</strong> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value['grade'], ENT_QUOTES, 'UTF-8');?>
/5<br>
    </p><br>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div><?php }
}
