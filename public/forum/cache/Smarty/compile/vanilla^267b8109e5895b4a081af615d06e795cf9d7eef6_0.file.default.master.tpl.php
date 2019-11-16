<?php
/* Smarty version 3.1.33, created on 2018-12-30 03:08:19
  from '/var/www/html/vanilla/themes/basicdark/views/default.master.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c2836a34b53a3_53592850',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '267b8109e5895b4a081af615d06e795cf9d7eef6' => 
    array (
      0 => '/var/www/html/vanilla/themes/basicdark/views/default.master.tpl',
      1 => 1546139298,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c2836a34b53a3_53592850 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/vanilla/library/SmartyPlugins/function.asset.php','function'=>'smarty_function_asset',),1=>array('file'=>'/var/www/html/vanilla/library/SmartyPlugins/function.link.php','function'=>'smarty_function_link',),2=>array('file'=>'/var/www/html/vanilla/library/SmartyPlugins/function.logo.php','function'=>'smarty_function_logo',),3=>array('file'=>'/var/www/html/vanilla/library/SmartyPlugins/function.searchbox.php','function'=>'smarty_function_searchbox',),4=>array('file'=>'/var/www/html/vanilla/library/SmartyPlugins/function.dashboard_link.php','function'=>'smarty_function_dashboard_link',),5=>array('file'=>'/var/www/html/vanilla/library/SmartyPlugins/function.discussions_link.php','function'=>'smarty_function_discussions_link',),6=>array('file'=>'/var/www/html/vanilla/library/SmartyPlugins/function.activity_link.php','function'=>'smarty_function_activity_link',),7=>array('file'=>'/var/www/html/vanilla/library/SmartyPlugins/function.inbox_link.php','function'=>'smarty_function_inbox_link',),8=>array('file'=>'/var/www/html/vanilla/library/SmartyPlugins/function.custom_menu.php','function'=>'smarty_function_custom_menu',),9=>array('file'=>'/var/www/html/vanilla/library/SmartyPlugins/function.profile_link.php','function'=>'smarty_function_profile_link',),10=>array('file'=>'/var/www/html/vanilla/library/SmartyPlugins/function.signinout_link.php','function'=>'smarty_function_signinout_link',),11=>array('file'=>'/var/www/html/vanilla/library/SmartyPlugins/function.breadcrumbs.php','function'=>'smarty_function_breadcrumbs',),12=>array('file'=>'/var/www/html/vanilla/library/SmartyPlugins/function.module.php','function'=>'smarty_function_module',),13=>array('file'=>'/var/www/html/vanilla/library/SmartyPlugins/function.vanillaurl.php','function'=>'smarty_function_vanillaurl',),14=>array('file'=>'/var/www/html/vanilla/library/SmartyPlugins/function.event.php','function'=>'smarty_function_event',),));
?>
<!DOCTYPE html>
<html>
<head>
  <?php echo smarty_function_asset(array('name'=>"Head"),$_smarty_tpl);?>

  <link rel="stylesheet" type="text/css" href="/css/main.css" />
</head>
<body id="<?php echo $_smarty_tpl->tpl_vars['BodyID']->value;?>
" class="<?php echo $_smarty_tpl->tpl_vars['BodyClass']->value;?>
">
   <div id="Frame">
     <!--Navbar-->
      <div class="topnavbar greygradient">
          <a href="https://lostinstinct.net"><img class="navbarimg" src="/photos/LastInstinctLogo128.png" /></a>
          <a href="#wehaveonegamelmao">GAMES</a>
          <a href="#lolwedonthaveastore">STORE</a>
          <a href="/vanilla/index.php?p=/">FORUMS</a>
          <a href="#lolwedonthaveastore">WIKI</a>
          <a href="#lolwedonthaveastore">JOBS</a>
      </div>
      <div class="Head" id="Head">
         <div class="Row">
            <strong class="SiteTitle"><a href="<?php echo smarty_function_link(array('path'=>"/"),$_smarty_tpl);?>
"><?php echo smarty_function_logo(array(),$_smarty_tpl);?>
</a></strong>
            <div class="SiteSearch"><?php echo smarty_function_searchbox(array(),$_smarty_tpl);?>
</div>
            <ul class="SiteMenu">
               <!-- <?php echo smarty_function_dashboard_link(array(),$_smarty_tpl);?>
 -->
               <?php echo smarty_function_discussions_link(array(),$_smarty_tpl);?>

               <?php echo smarty_function_activity_link(array(),$_smarty_tpl);?>

               <!-- <?php echo smarty_function_inbox_link(array(),$_smarty_tpl);?>
 -->
               <?php echo smarty_function_custom_menu(array(),$_smarty_tpl);?>

               <!-- <?php echo smarty_function_profile_link(array(),$_smarty_tpl);?>

               <?php echo smarty_function_signinout_link(array(),$_smarty_tpl);?>
  -->
            </ul>
         </div>
      </div>
      <div id="Body">
         <div class="Row">
            <div class="BreadcrumbsWrapper"><?php echo smarty_function_breadcrumbs(array(),$_smarty_tpl);?>
</div>
            <div class="Column PanelColumn" id="Panel">
               <?php echo smarty_function_module(array('name'=>"MeModule"),$_smarty_tpl);?>

               <?php echo smarty_function_asset(array('name'=>"Panel"),$_smarty_tpl);?>

            </div>
            <div class="Column ContentColumn" id="Content"><?php echo smarty_function_asset(array('name'=>"Content"),$_smarty_tpl);?>
</div>
         </div>
      </div>
      <div class="footer">
        <p class="center" style="color:white;">LOST INSTINCT GAME DEVELOPER &copy</p>
        <div class="center">Powered by <a href="<?php echo smarty_function_vanillaurl(array(),$_smarty_tpl);?>
" title="Community Software by Vanilla Forums">Vanilla Forums</a>
        <?php echo smarty_function_asset(array('name'=>"Foot"),$_smarty_tpl);?>
</dev>
      </div>
   </div>
   <?php echo smarty_function_event(array('name'=>"AfterBody"),$_smarty_tpl);?>

</body>
</html>
<?php }
}
