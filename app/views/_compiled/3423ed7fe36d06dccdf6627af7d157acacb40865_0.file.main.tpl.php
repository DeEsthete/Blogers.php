<?php
/* Smarty version 3.1.34-dev-7, created on 2019-10-03 18:12:24
  from 'C:\OSPanel\domains\blogers.php\app\views\layout\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5d960fd85cd836_92202603',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3423ed7fe36d06dccdf6627af7d157acacb40865' => 
    array (
      0 => 'C:\\OSPanel\\domains\\blogers.php\\app\\views\\layout\\main.tpl',
      1 => 1570115543,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:global/Head.tpl' => 1,
    'file:global/Navbar.tpl' => 1,
    'file:global/Footer.tpl' => 1,
  ),
),false)) {
function content_5d960fd85cd836_92202603 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:global/Head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:global/Navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
        <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['template']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:global/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
