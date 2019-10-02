<?php
/* Smarty version 3.1.34-dev-7, created on 2019-10-02 18:01:57
  from 'C:\OSPanel\domains\blogers.php\app\views\admin\Dashboard.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5d94bbe57cab28_35578615',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7f56b42ebafbfbefb759dac17a23e0affc4ca504' => 
    array (
      0 => 'C:\\OSPanel\\domains\\blogers.php\\app\\views\\admin\\Dashboard.tpl',
      1 => 1570028516,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/blocks/head.tpl' => 1,
    'file:global/footer.tpl' => 1,
  ),
),false)) {
function content_5d94bbe57cab28_35578615 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:admin/blocks/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">
    <div class="mb-3 text-right">
        <a href="/admin/posts/create" class="btn btn-success">Create</a>
    </div>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['posts']->value, 'post');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
?>
        <div>
            <div class="card card-body mb-3 d-flex flex-row align-content-start justify-content-start">
                <div><div class="mb-1"><h3><a href="/admin/users/<?php echo $_smarty_tpl->tpl_vars['post']->value['author']['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['post']->value['author']['name'];?>
</a> - <?php echo $_smarty_tpl->tpl_vars['post']->value['title'];?>
</h3></div>
                    <span class="badge badge-secondary"><?php echo $_smarty_tpl->tpl_vars['post']->value['category']['name'];?>
</span>
                    <small class="text-muted"><?php echo $_smarty_tpl->tpl_vars['post']->value['date'];?>
</small>
                </div>
                <div class="btn-group btn-group-sm ml-auto mb-auto">
                    <a href="/posts/<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
" class="btn btn-primary" target="_blank">View</a>
                    <a href="/admin/posts/update/<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
" class="btn btn-secondary">Update</a>
                    <a href="/admin/posts/delete/<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
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
