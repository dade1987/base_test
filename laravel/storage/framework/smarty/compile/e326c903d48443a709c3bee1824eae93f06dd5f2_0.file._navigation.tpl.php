<?php
/* Smarty version 3.1.36, created on 2020-06-02 16:26:08
  from 'E:\phpWorkspace\food_tribu_project\base_test\laravel\resources\views\themes\fipitaly\slot\_navigation.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ed66180827335_47541884',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e326c903d48443a709c3bee1824eae93f06dd5f2' => 
    array (
      0 => 'E:\\phpWorkspace\\food_tribu_project\\base_test\\laravel\\resources\\views\\themes\\fipitaly\\slot\\_navigation.tpl',
      1 => 1591107875,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../slot/_logo.tpl' => 1,
  ),
),false)) {
function content_5ed66180827335_47541884 (Smarty_Internal_Template $_smarty_tpl) {
?><img src="/web-img/logo-fip-articoli-tecnici.png" alt="Logo FIP Italy" class="logo-print print-on hidden-xs hidden-sm hidden-md hidden-lg"><header class="navbar navbar-inverse white animated fadeInDown" role="banner"><div class="container-fluid nsp"><a href="index.php?lingua=<?php echo $_smarty_tpl->tpl_vars['lingua']->value;?>
" class="navbar-brand" id="logo-wrapper" title="Fip Articoli Tecnici Srl - Homepage"><?php $_smarty_tpl->_subTemplateRender("file:../slot/_logo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?></a><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 nsp print-off"><div class="container-fluid nsp mtsm force-up"><div class="navbar-header"><button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span><span class="menu-label">MENU</span></button><button type="button" class="navbar-toggle" style="background: #e10f21; color: #fff"><a href="/index.php?area=43&menu=41&page=563&lingua=<?php echo $_smarty_tpl->tpl_vars['lingua']->value;?>
" style="color: #fff" title="B2B" target="_blank"><span class=""><i class="fa fa-cart-arrow-down pr5" aria-hidden="true"></i><!-- B2B --></span></a></button></div><nav id="navigation-block" class="collapse navbar-collapse bs-navbar-collapse yamm nsp" role="navigation"><ul class="nav navbar-nav navbar"><li class="hidden-sm dropdown area-link <?php if ($_smarty_tpl->tpl_vars['area']->value == 0 && $_smarty_tpl->tpl_vars['menu']->value == 00 && $_smarty_tpl->tpl_vars['page']->value == 0) {?>active<?php }?>" data-area-id="home"><a href="/index.php?lingua=<?php echo $_smarty_tpl->tpl_vars['lingua']->value;?>
" title="Fip Articoli Tecnici Srl - Homepage">Home</a></li><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['aree']->value, 'element');
$_smarty_tpl->tpl_vars['element']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['element']->value) {
$_smarty_tpl->tpl_vars['element']->do_else = false;
if ($_smarty_tpl->tpl_vars['element']->value['visible'] == 1) {
if ($_smarty_tpl->tpl_vars['element']->value['ID_'] == 35) {?>##bandiere##<?php }
if ($_smarty_tpl->tpl_vars['element']->value['ID_'] == 41) {?><li class="dropdown area-link search-button search" data-area-id="search"><a href="#" title="Cerca"><i class="fa fa-search" aria-hidden="true"></i><span class="pl5 hidden-lg hidden-md hidden-sm">Cerca</span></a></li><?php } else { ?><li class="dropdown child-menu-<?php echo $_smarty_tpl->tpl_vars['element']->value['raw']['menu_style'];?>
 area-link <?php if ($_smarty_tpl->tpl_vars['element']->value['on_'] == 1) {?>active<?php }?> <?php if ($_smarty_tpl->tpl_vars['element']->value['raw']['menu_style'] == "mega") {?>yamm-fw<?php }?> <?php if ($_smarty_tpl->tpl_vars['element']->value['ID_'] == 35) {?>client-area<?php }?> <?php if ($_smarty_tpl->tpl_vars['element']->value['ID_'] == 33) {?>hidden-xs<?php }?> <?php if ($_smarty_tpl->tpl_vars['element']->value['ID_'] == 32) {?>toggle-button<?php }?>" data-area-id="<?php echo $_smarty_tpl->tpl_vars['element']->value['ID_'];?>
"><a title="<?php echo $_smarty_tpl->tpl_vars['element']->value['NOME_'];?>
" href="<?php if ($_smarty_tpl->tpl_vars['element']->value['raw']['menu_style'] == "nessuno") {
if ($_smarty_tpl->tpl_vars['element']->value['raw']['linkto'] != '') {
echo $_smarty_tpl->tpl_vars['element']->value['raw']['linkto'];
} else {
echo $_smarty_tpl->tpl_vars['element']->value['url'];
}
} else { ?>#<?php }?>" <?php if ($_smarty_tpl->tpl_vars['element']->value['raw']['menu_style'] != "nessuno") {?>class="dropdown-toggle" data-toggle="dropdown"<?php }?>><?php if ($_smarty_tpl->tpl_vars['element']->value['raw']['menu_style'] != "nessuno") {
} else {
}
if ($_smarty_tpl->tpl_vars['element']->value['ID_'] == 35) {?><i class="fa fa-user pr5" aria-hidden="true"></i><?php }
echo $_smarty_tpl->tpl_vars['element']->value['NOME_'];?>
</a><?php if ($_smarty_tpl->tpl_vars['element']->value['raw']['menu_style'] != "nessuno") {
if ($_smarty_tpl->tpl_vars['element']->value['raw']['menu_style'] == "normale") {
if ($_smarty_tpl->tpl_vars['element']->value['ID_'] == 32) {?>##catalogue_category_0_listadiscesacategorie.tpl##<?php } else { ?>##menuarea_<?php echo $_smarty_tpl->tpl_vars['element']->value['ID_'];?>
##<?php }
}
if ($_smarty_tpl->tpl_vars['element']->value['raw']['menu_style'] == "mega") {?>##menuareatris_<?php echo $_smarty_tpl->tpl_vars['element']->value['ID_'];?>
##<?php }
}?></li><?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul></nav></div></div>##advsearchform##</div></header><div class="after-header"></div>
<?php }
}
