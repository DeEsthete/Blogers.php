<?php
/* Smarty version 3.1.34-dev-7, created on 2019-10-03 17:08:02
  from 'C:\OSPanel\domains\blogers.php\app\views\admin\forms\CategoryForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5d9600c2e43fe6_75854105',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9e10606670d78b27faec6ce0110c4d96dd2e5f03' => 
    array (
      0 => 'C:\\OSPanel\\domains\\blogers.php\\app\\views\\admin\\forms\\CategoryForm.tpl',
      1 => 1570111352,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/blocks/head.tpl' => 1,
    'file:global/footer.tpl' => 1,
  ),
),false)) {
function content_5d9600c2e43fe6_75854105 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:admin/blocks/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">
    <form action="/admin/categories/<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" method="post">
        <div class="form-group">
            <input type="text" class="form-control" name="name" placeholder="Name" value="<?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
" required>
        </div>

        <input type="text" hidden name="id" value="<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
">
        <button class="btn btn-primary">Apply</button>
    </form>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:global/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
