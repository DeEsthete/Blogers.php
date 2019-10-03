<?php
/* Smarty version 3.1.34-dev-7, created on 2019-10-03 17:19:09
  from 'C:\OSPanel\domains\blogers.php\app\views\admin\Categories.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5d96035d61ee27_21052144',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6243e6081a1f0ae2c93db5a84c10d542e8c17f4e' => 
    array (
      0 => 'C:\\OSPanel\\domains\\blogers.php\\app\\views\\admin\\Categories.tpl',
      1 => 1570112258,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/blocks/head.tpl' => 1,
    'file:global/footer.tpl' => 1,
  ),
),false)) {
function content_5d96035d61ee27_21052144 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:admin/blocks/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">
    <div class="mb-3 text-right">
        <a href="/admin/categories/create" class="btn btn-success">Create</a>
    </div>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
?>
        <div>
            <div class="card card-body mb-3 d-flex flex-row align-content-start justify-content-start">
                <div>
                    <h3><?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
 - <?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
</h3>
                </div>
                <div class="btn-group btn-group-sm ml-auto mb-auto">
                    <a href="/admin/categories/update/<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
" class="btn btn-secondary">Update</a>
                    <a href="/admin/categories/delete/<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
" class="btn btn-danger">Delete</a>
                </div>
            </div>
        </div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:global/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
