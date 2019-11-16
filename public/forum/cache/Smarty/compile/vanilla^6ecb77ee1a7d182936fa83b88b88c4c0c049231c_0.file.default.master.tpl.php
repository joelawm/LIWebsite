<?php
/* Smarty version 3.1.33, created on 2018-12-29 05:33:53
  from '/var/www/html/vanilla/themes/Colors/views/default.master.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c270741d56a40_60404475',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6ecb77ee1a7d182936fa83b88b88c4c0c049231c' => 
    array (
      0 => '/var/www/html/vanilla/themes/Colors/views/default.master.tpl',
      1 => 1535400254,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c270741d56a40_60404475 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/vanilla/library/SmartyPlugins/function.asset.php','function'=>'smarty_function_asset',),1=>array('file'=>'/var/www/html/vanilla/library/SmartyPlugins/function.link.php','function'=>'smarty_function_link',),2=>array('file'=>'/var/www/html/vanilla/library/SmartyPlugins/function.text.php','function'=>'smarty_function_text',),3=>array('file'=>'/var/www/html/vanilla/library/SmartyPlugins/function.logo.php','function'=>'smarty_function_logo',),4=>array('file'=>'/var/www/html/vanilla/library/SmartyPlugins/function.searchbox.php','function'=>'smarty_function_searchbox',),5=>array('file'=>'/var/www/html/vanilla/library/SmartyPlugins/function.custom_menu.php','function'=>'smarty_function_custom_menu',),6=>array('file'=>'/var/www/html/vanilla/library/SmartyPlugins/function.breadcrumbs.php','function'=>'smarty_function_breadcrumbs',),7=>array('file'=>'/var/www/html/vanilla/library/SmartyPlugins/function.module.php','function'=>'smarty_function_module',),8=>array('file'=>'/var/www/html/vanilla/library/SmartyPlugins/function.event.php','function'=>'smarty_function_event',),));
?>
<!DOCTYPE html>
<html lang="<?php echo $_smarty_tpl->tpl_vars['CurrentLocale']->value['Lang'];?>
">
<head>
    
    <?php echo smarty_function_asset(array('name'=>"Head"),$_smarty_tpl);?>

	<meta name="viewport" content="width=device-width, initial-scale=1" /> 
	    <link rel="stylesheet" href="<?php echo smarty_function_link(array('path'=>"/"),$_smarty_tpl);?>
themes/Colors/design/custom.css?v=1.0.0">
		<link rel="stylesheet" media="all and (max-width: 1140px) and (min-width: 960px)" href="<?php echo smarty_function_link(array('path'=>"/"),$_smarty_tpl);?>
themes/Colors/design/Extralarge.css?v=1.0.0">
		<link rel="stylesheet" media="all and (max-width: 960px) and (min-width: 720px)" href="<?php echo smarty_function_link(array('path'=>"/"),$_smarty_tpl);?>
themes/Colors/design/Large.css?v=1.0.0">
	    <link rel="stylesheet" media="all and (max-width: 720px) and (min-width: 540px)" href="<?php echo smarty_function_link(array('path'=>"/"),$_smarty_tpl);?>
themes/Colors/design/Medium.css?v=1.0.0">
      	<link rel="stylesheet" media="all and (max-width: 540px)" href="<?php echo smarty_function_link(array('path'=>"/"),$_smarty_tpl);?>
themes/Colors/design/Small.css?v=1.0.0">
        <?php echo '<script'; ?>
 src="<?php echo smarty_function_link(array('path'=>"/"),$_smarty_tpl);?>
themes/Colors/js/resize.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo smarty_function_link(array('path'=>"/"),$_smarty_tpl);?>
themes/Colors/js/footer.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo smarty_function_link(array('path'=>"/"),$_smarty_tpl);?>
themes/Colors/js/texture.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo smarty_function_link(array('path'=>"/"),$_smarty_tpl);?>
themes/Colors/js/social.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo smarty_function_link(array('path'=>"/"),$_smarty_tpl);?>
themes/Colors/js/fix.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo smarty_function_link(array('path'=>"/"),$_smarty_tpl);?>
themes/Colors/js/click.js"><?php echo '</script'; ?>
>
		<?php echo smarty_function_text(array('code'=>"Head&nbsp;Custom&nbsp;Area"),$_smarty_tpl);?>

</head>
<body   onload="isImg();changeTexture();phoneSwith();emailSwith();facebookSwith();twitterSwith();googleSwith();fixPadding();"    onresize="isImgg();"  id="<?php echo $_smarty_tpl->tpl_vars['BodyID']->value;?>
" class="<?php echo $_smarty_tpl->tpl_vars['BodyClass']->value;?>
">

<div id="Frame">
    <?php echo smarty_function_text(array('code'=>"Body&nbsp;Head&nbsp;Custom&nbsp;Area"),$_smarty_tpl);?>

    <div class="Head" id="Head" role="banner">
	    
        <div class="Row">
		    
            <strong class="SiteTitle"><a id="SiteLink" "href="<?php echo smarty_function_link(array('path'=>"/"),$_smarty_tpl);?>
"><?php echo smarty_function_logo(array(),$_smarty_tpl);?>
</a></strong>
            <div class="SiteSearch" role="search"><?php echo smarty_function_searchbox(array(),$_smarty_tpl);?>
</div>
            <ul class="SiteMenu">
			    <li><a  href="<?php echo smarty_function_link(array('path'=>"/search"),$_smarty_tpl);?>
" id="MenuSearch">Search</a></li>
                <li><a  href="<?php echo smarty_function_link(array('path'=>"/categories"),$_smarty_tpl);?>
" id="MenuCategories">Categories</a></li>
                <li><a  href="<?php echo smarty_function_link(array('path'=>"/activity"),$_smarty_tpl);?>
" id="MenuActivity">Activity</a></li>
				<li><a  href="<?php echo smarty_function_link(array('path'=>"/discussions/bookmarked"),$_smarty_tpl);?>
" id="MenuBookmarked">Bookmarked</a></li>
				<li><a  href="<?php echo smarty_function_link(array('path'=>"/discussions"),$_smarty_tpl);?>
" id="MenuDiscussions">Discussions</a></li>
			    
                <?php echo smarty_function_custom_menu(array(),$_smarty_tpl);?>

            </ul>
        </div>
    </div>
    <div id="Body">
        <div class="Row">
	    	<?php echo smarty_function_text(array('code'=>"Body&nbsp;Top&nbsp;Custom&nbsp;Area"),$_smarty_tpl);?>

            <div class="BreadcrumbsWrapper"><?php echo smarty_function_breadcrumbs(array(),$_smarty_tpl);?>
</div>
            <div class="Column PanelColumn" id="Panel" role="complementary">
                <?php echo smarty_function_module(array('name'=>"MeModule"),$_smarty_tpl);?>

                <?php echo smarty_function_asset(array('name'=>"Panel"),$_smarty_tpl);?>

				<?php echo smarty_function_text(array('code'=>"Body&nbsp;Pannel&nbsp;Custom&nbsp;Area"),$_smarty_tpl);?>

            </div>
            <div class="Column ContentColumn" id="Content" role="main"><?php echo smarty_function_asset(array('name'=>"Content"),$_smarty_tpl);?>
</div>
			<?php echo smarty_function_text(array('code'=>"Body&nbsp;Bottom&nbsp;Custom&nbsp;Area"),$_smarty_tpl);?>

        </div>
		
    </div>
    <div id="Foot" role="contentinfo">
        <div class="Row">
            <span>
			    <?php echo smarty_function_text(array('code'=>"Copyright"),$_smarty_tpl);?>

		    </span>
			<span id="PCFoot">
			    <span id="Phone">
				    <span id="PhoneIcon"><a href="<?php echo smarty_function_text(array('code'=>"Phone&nbsp;Number"),$_smarty_tpl);?>
">&nbsp;</a></span><span id="PhoneHidden"><?php echo smarty_function_text(array('code'=>"Phone&nbsp;Number"),$_smarty_tpl);?>
</span>         
			    </span>
				<span id="Email">
				    <span id="EmailIcon"><a href="<?php echo smarty_function_text(array('code'=>"Email&nbsp;Address"),$_smarty_tpl);?>
">&nbsp;</a></span><span id="EmailHidden"><?php echo smarty_function_text(array('code'=>"Email&nbsp;Address"),$_smarty_tpl);?>
</span>
				</span>
			
			    <span id="FaceBookIcon">
				    <a target="_blank" href="<?php echo smarty_function_text(array('code'=>"Facebook"),$_smarty_tpl);?>
">&nbsp;</a>
			    </span>
				<span id="TwitterIcon">
				    <a target="_blank" href="<?php echo smarty_function_text(array('code'=>"Twitter"),$_smarty_tpl);?>
">&nbsp;</a>
			    </span>
				<span  id="GoogleIcon">
				    <a target="_blank" href="<?php echo smarty_function_text(array('code'=>"Google+"),$_smarty_tpl);?>
">&nbsp;</a>
			    </span>
		    </span>
		    <span id="FootRightWrap"><a id="FootRight" href="#Head">&nbsp;</a></span>
			
			
			
		
            <?php echo smarty_function_asset(array('name'=>"Foot"),$_smarty_tpl);?>

			
        </div>
    </div>
	
	
	
	
	<div onclick="showList()" id="MobileFoot">
	    <ul id="MobileFootWrapper">
			    <li id="FaceBookIconSub">
				    <a target="_blank" href="<?php echo smarty_function_text(array('code'=>"Facebook"),$_smarty_tpl);?>
">&nbsp;</a>
			    </li>
				<li id="TwitterIconSub">
				    <a target="_blank" href="<?php echo smarty_function_text(array('code'=>"Twitter"),$_smarty_tpl);?>
">&nbsp;</a>
			    </li>
				<li  id="GoogleIconSub">
				    <a target="_blank" href="<?php echo smarty_function_text(array('code'=>"Google+"),$_smarty_tpl);?>
">&nbsp;</a>
			    </li>
				<li id="PhoneSub">
				    <a href="tel:<?php echo smarty_function_text(array('code'=>"Phone&nbsp;Number"),$_smarty_tpl);?>
">&nbsp;</a>
			    </li>
				<li id="EmailSub">
				    <a href="mailto:<?php echo smarty_function_text(array('code'=>"Email&nbsp;Address",'default'=>"admin@yoursite.com"),$_smarty_tpl);?>
">&nbsp;</a>
			    </li>		
	    </ul>
	</div>

	
	
</div>



<?php echo smarty_function_event(array('name'=>"AfterBody"),$_smarty_tpl);?>

<?php echo smarty_function_text(array('code'=>"Body&nbsp;Foot&nbsp;Custom&nbsp;Area"),$_smarty_tpl);?>


<div id="Detect" style="display:none;">
 
     <span id="DetectTexture"><?php echo smarty_function_text(array('code'=>"Background&nbsp;Selector"),$_smarty_tpl);?>
</span>
	 <span id="DetectPhone"><?php echo smarty_function_text(array('code'=>"Phone&nbsp;Switch"),$_smarty_tpl);?>
</span>
	 <span id="DetectEmail"><?php echo smarty_function_text(array('code'=>"Email&nbsp;Switch"),$_smarty_tpl);?>
</span>
	 <span id="DetectFacebook"><?php echo smarty_function_text(array('code'=>"Facebook&nbsp;Switch"),$_smarty_tpl);?>
</span>
	 <span id="DetectTwitter"><?php echo smarty_function_text(array('code'=>"Twitter&nbsp;Switch"),$_smarty_tpl);?>
</span>
	 <span id="DetectGoogle"><?php echo smarty_function_text(array('code'=>"Google&#43;&nbsp;Switch"),$_smarty_tpl);?>
</span>
 
</div>

</body>
<?php echo smarty_function_text(array('code'=>"Foot&nbsp;Custom&nbsp;Area"),$_smarty_tpl);?>

</html>
<?php }
}
