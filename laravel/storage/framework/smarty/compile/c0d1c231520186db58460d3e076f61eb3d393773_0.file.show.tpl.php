<?php
/* Smarty version 3.1.36, created on 2020-06-02 16:26:08
  from 'E:\phpWorkspace\food_tribu_project\base_test\laravel\resources\views\themes\fipitaly\home\show.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ed661805095f9_70715721',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c0d1c231520186db58460d3e076f61eb3d393773' => 
    array (
      0 => 'E:\\phpWorkspace\\food_tribu_project\\base_test\\laravel\\resources\\views\\themes\\fipitaly\\home\\show.tpl',
      1 => 1591107875,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../home/header.tpl' => 1,
    'file:../home/navigation.tpl' => 1,
    'file:../home/mobile_menu.tpl' => 1,
    'file:../home/footer.tpl' => 1,
  ),
),false)) {
function content_5ed661805095f9_70715721 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../home/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?><nav id="menu" class="menu">##catalogue_category_0_offcanvascategories.tpl##</nav><main id="panel"><?php $_smarty_tpl->_subTemplateRender("file:../home/navigation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?><section class="container-fluid"><?php $_smarty_tpl->_subTemplateRender('file:../home/mobile_menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?></section>##album_11####link_4####link_3##<div class="boxsearch col-sm-6 col-sm-offset-3 mb30">##catalogue_boxsearch##</div>##link_5####link_6####link_7##</main><?php $_smarty_tpl->_subTemplateRender("file:../home/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
