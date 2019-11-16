<?php
/* Smarty version 3.1.33, created on 2018-12-20 20:51:25
  from '/var/www/html/vanilla/applications/dashboard/views/empty.master.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c1c00cd186806_51039459',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '082cbc10574a23e586317877c835104ee5ce71d1' => 
    array (
      0 => '/var/www/html/vanilla/applications/dashboard/views/empty.master.tpl',
      1 => 1540779786,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c1c00cd186806_51039459 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/vanilla/library/SmartyPlugins/function.asset.php','function'=>'smarty_function_asset',),1=>array('file'=>'/var/www/html/vanilla/library/SmartyPlugins/function.event.php','function'=>'smarty_function_event',),));
echo '<?xml ';?>version="1.0" encoding="utf-8"<?php echo '?>';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $_smarty_tpl->tpl_vars['CurrentLocale']->value['Lang'];?>
">
<head>
    <?php echo smarty_function_asset(array('name'=>'Head'),$_smarty_tpl);?>

</head>
<body id="<?php echo $_smarty_tpl->tpl_vars['BodyID']->value;?>
" class="<?php echo $_smarty_tpl->tpl_vars['BodyClass']->value;?>
">
<div id="Content"><?php echo smarty_function_asset(array('name'=>'Content'),$_smarty_tpl);?>
</div>
<?php echo smarty_function_asset(array('name'=>'Foot'),$_smarty_tpl);?>

<?php echo smarty_function_event(array('name'=>'AfterBody'),$_smarty_tpl);?>

</body>
</html>
<?php }
}
