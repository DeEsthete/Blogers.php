<?php
/* Smarty version 3.1.34-dev-7, created on 2019-10-01 17:34:56
  from 'C:\OSPanel\domains\blogers.php\app\views\admin\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5d93641091cc49_24383340',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5febcec0c2b5fa8894f28296ef3bba37a2d3fabb' => 
    array (
      0 => 'C:\\OSPanel\\domains\\blogers.php\\app\\views\\admin\\login.tpl',
      1 => 1569940364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:global/Head.tpl' => 1,
    'file:global/footer.tpl' => 1,
  ),
),false)) {
function content_5d93641091cc49_24383340 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:global/Head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container py-3">
    <div class="row">
        <div class="col-12 col-lg-3 offset-lg-4 text-center">

            <h3 class="mb-3"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h3>

            <form method="post" action="">
                <div class="form-group">
                    <input name="username" type="text" class="form-control" placeholder="Login">
                </div>
                <div class="form-group">
                    <input name="password" type="password" class="form-control" placeholder="Password">
                </div>
                <div class="form-group m-0">
                    <button class="btn btn-primary" type="submit">Sign in</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:global/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
