<?php
/* Smarty version 3.1.36, created on 2020-06-02 16:26:08
  from 'E:\phpWorkspace\food_tribu_project\base_test\laravel\resources\views\themes\fipitaly\slot\_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ed661805e48c9_36651389',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '70140222bc2e722e4d14192dc60eb83ae11abeea' => 
    array (
      0 => 'E:\\phpWorkspace\\food_tribu_project\\base_test\\laravel\\resources\\views\\themes\\fipitaly\\slot\\_header.tpl',
      1 => 1591107875,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../slot/_preload.tpl' => 1,
  ),
),false)) {
function content_5ed661805e48c9_36651389 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'E:\\phpWorkspace\\food_tribu_project\\base_test\\laravel\\Modules\\Theme\\Resources\\smarty\\plugins\\function.get_metatag.php','function'=>'smarty_function_get_metatag',),));
?>
<!DOCTYPE html><html><head><meta charset="UTF-8" /><meta http-equiv="X-UA-Compatible" content="IE=edge" /><title><?php echo smarty_function_get_metatag(array('name'=>'title'),$_smarty_tpl);?>
</title><meta name="viewport" content="width=device-width, initial-scale=1.0" /><meta name="generator" content="<?php echo smarty_function_get_metatag(array('name'=>'generator'),$_smarty_tpl);?>
"/><meta name="author" content="Qweb s.r.l."/><meta name="description" content="<?php echo smarty_function_get_metatag(array('name'=>'description'),$_smarty_tpl);?>
"/><meta name="keywords" content="<?php echo smarty_function_get_metatag(array('name'=>'keywords'),$_smarty_tpl);?>
"/><meta name="robots" content="index/follow"/><!-- OPEN GRAPH META --><meta property="og:title" content="<?php echo smarty_function_get_metatag(array('name'=>'title'),$_smarty_tpl);?>
"/><meta property="og:type" content="website"/><meta property="og:url" content="https://<?php echo $_SERVER['HTTP_HOST'];
echo $_SERVER['REQUEST_URI'];?>
" /><meta property="og:site_name" content="<?php echo smarty_function_get_metatag(array('name'=>'title'),$_smarty_tpl);?>
"/><meta property="fb:admins" content="1439057861"/><meta property="og:description" content="<?php echo smarty_function_get_metatag(array('name'=>'description'),$_smarty_tpl);?>
"/><!-- END OPEN GRAPH META --><!-- CHROME CUSTOM --><meta name="theme-color" content="#e10f21"><link rel="shortcut icon" href="/favicon.ico" /><link rel="stylesheet" href="/theme.php/theme.scss" /><!-- javascript -->
	<?php echo '<script'; ?>
>
		(function(n,t){"use strict";function w(){}function u(n,t){if(n){typeof n=="object"&&(n=[].slice.call(n));for(var i=0,r=n.length;i<r;i++)t.call(n,n[i],i)}}function it(n,i){var r=Object.prototype.toString.call(i).slice(8,-1);return i!==t&&i!==null&&r===n}function s(n){return it("Function",n)}function a(n){return it("Array",n)}function et(n){var i=n.split("/"),t=i[i.length-1],r=t.indexOf("?");return r!==-1?t.substring(0,r):t}function f(n){(n=n||w,n._done)||(n(),n._done=1)}function ot(n,t,r,u){var f=typeof n=="object"?n:{test:n,success:!t?!1:a(t)?t:[t],failure:!r?!1:a(r)?r:[r],callback:u||w},e=!!f.test;return e&&!!f.success?(f.success.push(f.callback),i.load.apply(null,f.success)):e||!f.failure?u():(f.failure.push(f.callback),i.load.apply(null,f.failure)),i}function v(n){var t={},i,r;if(typeof n=="object")for(i in n)!n[i]||(t={name:i,url:n[i]});else t={name:et(n),url:n};return(r=c[t.name],r&&r.url===t.url)?r:(c[t.name]=t,t)}function y(n){n=n||c;for(var t in n)if(n.hasOwnProperty(t)&&n[t].state!==l)return!1;return!0}function st(n){n.state=ft;u(n.onpreload,function(n){n.call()})}function ht(n){n.state===t&&(n.state=nt,n.onpreload=[],rt({url:n.url,type:"cache"},function(){st(n)}))}function ct(){var n=arguments,t=n[n.length-1],r=[].slice.call(n,1),f=r[0];return(s(t)||(t=null),a(n[0]))?(n[0].push(t),i.load.apply(null,n[0]),i):(f?(u(r,function(n){s(n)||!n||ht(v(n))}),b(v(n[0]),s(f)?f:function(){i.load.apply(null,r)})):b(v(n[0])),i)}function lt(){var n=arguments,t=n[n.length-1],r={};return(s(t)||(t=null),a(n[0]))?(n[0].push(t),i.load.apply(null,n[0]),i):(u(n,function(n){n!==t&&(n=v(n),r[n.name]=n)}),u(n,function(n){n!==t&&(n=v(n),b(n,function(){y(r)&&f(t)}))}),i)}function b(n,t){if(t=t||w,n.state===l){t();return}if(n.state===tt){i.ready(n.name,t);return}if(n.state===nt){n.onpreload.push(function(){b(n,t)});return}n.state=tt;rt(n,function(){n.state=l;t();u(h[n.name],function(n){f(n)});o&&y()&&u(h.ALL,function(n){f(n)})})}function at(n){n=n||"";var t=n.split("?")[0].split(".");return t[t.length-1].toLowerCase()}function rt(t,i){function e(t){t=t||n.event;u.onload=u.onreadystatechange=u.onerror=null;i()}function o(f){f=f||n.event;(f.type==="load"||/loaded|complete/.test(u.readyState)&&(!r.documentMode||r.documentMode<9))&&(n.clearTimeout(t.errorTimeout),n.clearTimeout(t.cssTimeout),u.onload=u.onreadystatechange=u.onerror=null,i())}function s(){if(t.state!==l&&t.cssRetries<=20){for(var i=0,f=r.styleSheets.length;i<f;i++)if(r.styleSheets[i].href===u.href){o({type:"load"});return}t.cssRetries++;t.cssTimeout=n.setTimeout(s,250)}}var u,h,f;i=i||w;h=at(t.url);h==="css"?(u=r.createElement("link"),u.type="text/"+(t.type||"css"),u.rel="stylesheet",u.href=t.url,t.cssRetries=0,t.cssTimeout=n.setTimeout(s,500)):(u=r.createElement("script"),u.type="text/"+(t.type||"javascript"),u.src=t.url);u.onload=u.onreadystatechange=o;u.onerror=e;u.async=!1;u.defer=!1;t.errorTimeout=n.setTimeout(function(){e({type:"timeout"})},7e3);f=r.head||r.getElementsByTagName("head")[0];f.insertBefore(u,f.lastChild)}function vt(){for(var t,u=r.getElementsByTagName("script"),n=0,f=u.length;n<f;n++)if(t=u[n].getAttribute("data-headjs-load"),!!t){i.load(t);return}}function yt(n,t){var v,p,e;return n===r?(o?f(t):d.push(t),i):(s(n)&&(t=n,n="ALL"),a(n))?(v={},u(n,function(n){v[n]=c[n];i.ready(n,function(){y(v)&&f(t)})}),i):typeof n!="string"||!s(t)?i:(p=c[n],p&&p.state===l||n==="ALL"&&y()&&o)?(f(t),i):(e=h[n],e?e.push(t):e=h[n]=[t],i)}function e(){if(!r.body){n.clearTimeout(i.readyTimeout);i.readyTimeout=n.setTimeout(e,50);return}o||(o=!0,vt(),u(d,function(n){f(n)}))}function k(){r.addEventListener?(r.removeEventListener("DOMContentLoaded",k,!1),e()):r.readyState==="complete"&&(r.detachEvent("onreadystatechange",k),e())}var r=n.document,d=[],h={},c={},ut="async"in r.createElement("script")||"MozAppearance"in r.documentElement.style||n.opera,o,g=n.head_conf&&n.head_conf.head||"head",i=n[g]=n[g]||function(){i.ready.apply(null,arguments)},nt=1,ft=2,tt=3,l=4,p;if(r.readyState==="complete")e();else if(r.addEventListener)r.addEventListener("DOMContentLoaded",k,!1),n.addEventListener("load",e,!1);else{r.attachEvent("onreadystatechange",k);n.attachEvent("onload",e);p=!1;try{p=!n.frameElement&&r.documentElement}catch(wt){}p&&p.doScroll&&function pt(){if(!o){try{p.doScroll("left")}catch(t){n.clearTimeout(i.readyTimeout);i.readyTimeout=n.setTimeout(pt,50);return}e()}}()}i.load=i.js=ut?lt:ct;i.test=ot;i.ready=yt;i.ready(r,function(){y()&&u(h.ALL,function(n){f(n)});i.feature&&i.feature("domloaded",!0)})})(window);
	<?php echo '</script'; ?>
>
	
	<?php echo '<script'; ?>
>
		head.load(
      "/web-js/paceload/paceload.min.js",
			"/web-css/fonts.css",
			"/ew-inc/css/vendor/font-awesome.min.css",
			// "/ew-inc/css/compiled/theme.css",
			"/web-js/jquery-1.11.0.min.js",
			"/web-js/cookie2/jquery.cookiebar.min.js",
			"/ew-inc/js/bootstrap/bootstrap.min.js",
			"/web-js/onloadCSS.js",
			"/web-js/imageisloaded.js",
			"/web-js/isotope.pkgd.min.js",
			"/web-js/packery-mode.pkgd.min.js",
			"/web-js/lazyload.min.js",
			"/web-js/wow.js",
			"/web-js/totop/jquery.ui.totop.js",
			"/web-js/fancybox/jquery.fancybox.js",
			"/web-js/mpop/jquery.magnific-popup.min.js",
			"/web-js/owl/owl.carousel.min.js",
			"https://maps.googleapis.com/maps/api/js?key=AIzaSyBE4tmeGBgig-g789vC0Y-94XOrKtPOHgs",
			"/web-js/jquery-ui-1.12.1.min.js",
			"//cdnjs.cloudflare.com/ajax/libs/slideout/1.0.1/slideout.min.js",
			"/ew-inc/js/jquery-validation/jquery.validate.min.js",
			"/ew-inc/js/custom.js",
			"/web-js/parallax.js",
			"https://unpkg.com/react@15/dist/react.min.js",
			"https://unpkg.com/react-dom@15/dist/react-dom.min.js",
			"/web-js/typeahead/bloodhound.min.js",
			"/web-js/typeahead/typeahead.bundle.min.js",
			//"/web-js/react-gallery-swiper/app.js", //questa è zalando
			//"/web-js/react-gallery-swiper-horizontaly/app.js", //questa è zalando orizzontale
			"/web-js/react-gallery-swiper-horizontaly-thumb-x/app.min.js", //questa è zalando orizzontale con thumb su asse x
			"/web-js/loadCSS.js",
			//"/web-js/react-gallery/example.js" //questa è quella base
			function(){
				console.log(">>>>>>>>>>>>>>>>>>>>>>>>>>>");
			}
		);
	<?php echo '</script'; ?>
>
	
	<?php echo '<script'; ?>
>
		head.ready(function() {
			//loadCSS("/web-css/fonts.css","","all");
			loadCSS("/web-js/cookie2/jquery.cookiebar.min.css","","all");
			loadCSS("/web-js/owl/owl.carousel.css","","all");
			loadCSS("/web-js/owl/owl.theme.css","","all");
			loadCSS("/web-js/owl/owl.transitions.css","","all");
			loadCSS("/ew-inc/css/vendor/animate.min.css","","all");
			loadCSS("/web-js/fancybox/jquery.fancybox.css","","all");
			loadCSS("/web-js/mpop/magnific-popup.css","","all");
			loadCSS("/web-css/flag/css/flag-icon.min.css","","all");
			//loadCSS("/web-js/react-gallery/app.css");
			//loadCSS("/web-js/react-gallery/css/image-gallery.css");
			//loadCSS("/web-js/react-gallery-swiper/style.css");
			//loadCSS("/web-js/react-gallery-swiper-horizontaly/style.css");
			loadCSS("/web-js/react-gallery-swiper-horizontaly-thumb-x/style.css");
			loadCSS("//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.min.css");
			loadCSS("/web-css/print.css","","print");
		})
	<?php echo '</script'; ?>
>
	<!--[if lt IE 9]><?php echo '<script'; ?>
 src="http://html5shim.googlecode.com/svn/trunk/html5.js"><?php echo '</script'; ?>
><![endif]--></head><body id="home2" class="<?php if ($_smarty_tpl->tpl_vars['area']->value == 0 && $_smarty_tpl->tpl_vars['menu']->value == 0 && $_smarty_tpl->tpl_vars['page']->value == 0) {?>home<?php }?> <?php if ($_smarty_tpl->tpl_vars['page']->value == 693 || $_smarty_tpl->tpl_vars['page']->value == 598) {?>blog-page news-page<?php }?>" style="opacity: 0;"><?php $_smarty_tpl->_subTemplateRender("file:../slot/_preload.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?><section class="side-offcanvas-blocks"><div class="single ctxt"><a href="/index.php?area=43&menu=41&page=563&lingua=<?php echo $_smarty_tpl->tpl_vars['lingua']->value;?>
" title="B2B" target="_blank"><img src="/web-img/cart.png" class="img-responsive cblock" alt="Cart" width="45px" /><span class="col-xs-12">B2B</span></a></div></section><!--<section class="side-offcanvas-blocks-mobile"><div class="single ctxt"><a href="/index.php?area=43&menu=41&page=563&lingua=<?php echo $_smarty_tpl->tpl_vars['lingua']->value;?>
" title="B2B" target="_blank"><span class=""><i class="fa fa-cart-arrow-down pr5" aria-hidden="true"></i>B2B</span></a></div></section>-->
<?php }
}
