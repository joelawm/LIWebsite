<?php
/* Smarty version 3.1.33, created on 2018-12-29 05:22:17
  from '/var/www/html/vanilla/themes/bittersweet/views/default.master.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c2704893129d8_76654341',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd04d31335f42885c2e57f2ab038bc301787adb1e' => 
    array (
      0 => '/var/www/html/vanilla/themes/bittersweet/views/default.master.tpl',
      1 => 1546060936,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c2704893129d8_76654341 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/vanilla/library/SmartyPlugins/function.asset.php','function'=>'smarty_function_asset',),1=>array('file'=>'/var/www/html/vanilla/library/SmartyPlugins/function.searchbox.php','function'=>'smarty_function_searchbox',),2=>array('file'=>'/var/www/html/vanilla/library/SmartyPlugins/function.dashboard_link.php','function'=>'smarty_function_dashboard_link',),3=>array('file'=>'/var/www/html/vanilla/library/SmartyPlugins/function.discussions_link.php','function'=>'smarty_function_discussions_link',),4=>array('file'=>'/var/www/html/vanilla/library/SmartyPlugins/function.activity_link.php','function'=>'smarty_function_activity_link',),5=>array('file'=>'/var/www/html/vanilla/library/SmartyPlugins/function.inbox_link.php','function'=>'smarty_function_inbox_link',),6=>array('file'=>'/var/www/html/vanilla/library/SmartyPlugins/function.custom_menu.php','function'=>'smarty_function_custom_menu',),7=>array('file'=>'/var/www/html/vanilla/library/SmartyPlugins/function.profile_link.php','function'=>'smarty_function_profile_link',),8=>array('file'=>'/var/www/html/vanilla/library/SmartyPlugins/function.signinout_link.php','function'=>'smarty_function_signinout_link',),9=>array('file'=>'/var/www/html/vanilla/library/SmartyPlugins/function.breadcrumbs.php','function'=>'smarty_function_breadcrumbs',),10=>array('file'=>'/var/www/html/vanilla/library/SmartyPlugins/function.module.php','function'=>'smarty_function_module',),11=>array('file'=>'/var/www/html/vanilla/library/SmartyPlugins/function.event.php','function'=>'smarty_function_event',),12=>array('file'=>'/var/www/html/vanilla/library/SmartyPlugins/function.vanillaurl.php','function'=>'smarty_function_vanillaurl',),));
?>
<!DOCTYPE html>
<html lang="<?php echo $_smarty_tpl->tpl_vars['CurrentLocale']->value['Lang'];?>
">
<head>
    <?php echo smarty_function_asset(array('name'=>"Head"),$_smarty_tpl);?>

    <link rel="stylesheet" type="text/css" href="/css/style.css" />
    <link rel="stylesheet" type="text/css" href="/css/main.css" />
</head>
<body id="<?php echo $_smarty_tpl->tpl_vars['BodyID']->value;?>
" class="<?php echo $_smarty_tpl->tpl_vars['BodyClass']->value;?>
">
<div id="Frame">
  <body
  <main>
      <!--Navbar-->
      <div class="topnavbar greygradient">
          <a href="https://lostinstinct.net"><img class="navbarimg" src="/photos/LastInstinctLogo128.png" /></a>
          <a href="#wehaveonegamelmao">GAMES</a>
          <a href="#lolwedonthaveastore">STORE</a>
          <a href="/vanilla/index.php?p=/">FORUMS</a>
          <a href="#lolwedonthaveastore">WIKI</a>
          <a href="#lolwedonthaveastore">JOBS</a>
      </div>
    <div  id="Head" role="navigation">
        <div class="Row">
            <div class="SiteSearch" role="search"><?php echo smarty_function_searchbox(array(),$_smarty_tpl);?>
</div>
            <ul class="SiteMenu">
                <?php echo smarty_function_dashboard_link(array(),$_smarty_tpl);?>

                <?php echo smarty_function_discussions_link(array(),$_smarty_tpl);?>

                <?php echo smarty_function_activity_link(array(),$_smarty_tpl);?>

                <?php echo smarty_function_inbox_link(array(),$_smarty_tpl);?>

                <?php echo smarty_function_custom_menu(array(),$_smarty_tpl);?>

                <?php echo smarty_function_profile_link(array(),$_smarty_tpl);?>

                <?php echo smarty_function_signinout_link(array(),$_smarty_tpl);?>

            </ul>
        </div>
    </div>
    <div class="BreadcrumbsWrapper">
        <div class="Row">
            <?php echo smarty_function_breadcrumbs(array(),$_smarty_tpl);?>

        </div>
    </div>
    <div id="Body">
        <div class="Row">
            <div role="complementary" class="Column PanelColumn" id="Panel">
                <?php echo smarty_function_module(array('name'=>"MeModule"),$_smarty_tpl);?>

                <?php echo smarty_function_asset(array('name'=>"Panel"),$_smarty_tpl);?>

            </div>
            <div class="Column ContentColumn" id="Content" role="main"><?php echo smarty_function_asset(array('name'=>"Content"),$_smarty_tpl);?>
</div>
        </div>
    </div>
</div>
<?php echo smarty_function_event(array('name'=>"AfterBody"),$_smarty_tpl);?>

</main>
</body>
<footer>
  <p class="center" style="color:white;">LOST INSTINCT GAME DEVELOPER &copy</p>
  <div class="center"><a href="<?php echo smarty_function_vanillaurl(array(),$_smarty_tpl);?>
" class="PoweredByVanilla">Powered by Vanilla</a></div>
    <?php echo smarty_function_asset(array('name'=>"Foot"),$_smarty_tpl);?>

</footer
</html>
<?php }
}
