<?php
/* Smarty version 3.1.34-dev-7, created on 2019-10-03 17:33:55
  from 'C:\OSPanel\domains\blogers.php\app\views\admin\blocks\Navbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5d9606d3ca98b7_66511424',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5b65d8b21c3d75c725fc88d00d2a8b22145bebde' => 
    array (
      0 => 'C:\\OSPanel\\domains\\blogers.php\\app\\views\\admin\\blocks\\Navbar.tpl',
      1 => 1570113234,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d9606d3ca98b7_66511424 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3">
    <a class="navbar-brand" href="#"><?php echo $_smarty_tpl->tpl_vars['g']->value['site_name'];?>
</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="/admin/categories">Categories</a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="/logout">Log out</a>
            </li>
        </ul>
    </div>
</nav><?php }
}
