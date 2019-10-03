<?php
/* Smarty version 3.1.34-dev-7, created on 2019-10-03 16:48:49
  from 'C:\OSPanel\domains\blogers.php\app\views\admin\blocks\head.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5d95fc410f97b5_32775094',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '85755ddc3a2f70e7f05c717758022db49996c566' => 
    array (
      0 => 'C:\\OSPanel\\domains\\blogers.php\\app\\views\\admin\\blocks\\head.tpl',
      1 => 1570110471,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:global/Head.tpl' => 1,
    'file:admin/blocks/Navbar.tpl' => 1,
  ),
),false)) {
function content_5d95fc410f97b5_32775094 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:global/Head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:admin/blocks/Navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['g']->value['flashes'], 'flash');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['flash']->value) {
?>
        <div class="alert alert-<?php echo $_smarty_tpl->tpl_vars['flash']->value['type'];?>
 mb-3">
            <?php echo $_smarty_tpl->tpl_vars['flash']->value['message'];?>

        </div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div><?php }
}
