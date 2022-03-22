<?php /* Smarty version Smarty-3.1.17, created on 2022-03-22 02:08:59
         compiled from "C:\xampp\htdocs\smarty\app\calc.html" */ ?>
<?php /*%%SmartyHeaderCode:1378042537623921ab621a78-52303602%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4f90f32411d9a37d13bf066a2e7fe89320f4d48a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\app\\calc.html',
      1 => 1647910262,
      2 => 'file',
    ),
    'c58b586e804a5e20db84d31ed3213176d5f0b853' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\templates\\main.html',
      1 => 1647907861,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1378042537623921ab621a78-52303602',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_description' => 0,
    'page_title' => 0,
    'app_url' => 0,
    'hide_intro' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_623921ab68a2f8_34084170',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_623921ab68a2f8_34084170')) {function content_623921ab68a2f8_34084170($_smarty_tpl) {?><!doctype html>
<html lang="pl">
<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_description']->value)===null||$tmp==='' ? "Opis domyślny" : $tmp);?>
">

    <title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_title']->value)===null||$tmp==='' ? "Tytuł domyślny" : $tmp);?>
</title>

	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.4.2/pure.css">

  
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/css/main-grid.css">
   
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/css/layouts/marketing.css">
   

    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/css/style.css">
<?php if ($_smarty_tpl->tpl_vars['hide_intro']->value) {?>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/css/style_hide_intro.css">
<?php }?>
	
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">

	<script src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/js/jquery.min.js"></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/js/softscroll.js"></script>

</head>
<body>

<div id="app_top" class="header">
    <div class="home-menu pure-menu pure-menu-open pure-menu-horizontal pure-menu-fixed">
        <a class="pure-menu-heading" href=""><?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_title']->value)===null||$tmp==='' ? "Tytuł domyślny" : $tmp);?>
</a>
        <ul>
            <li class="pure-menu-selected"><a href="#app_top">Góra strony</a></li>
            <li><a href="#app_content">Idź do formularza</a></li>
        </ul>
    </div>
</div>

<div class="splash-container">
    <div class="splash">
        <h1 class="splash-head"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_title']->value)===null||$tmp==='' ? "Tytuł domyślny" : $tmp);?>
</h1>
        <p class="splash-subhead">
             <?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_description']->value)===null||$tmp==='' ? "Opis domyślny" : $tmp);?>

        </p>
        <p>
            <a href="#app_content" class="pure-button pure-button-primary">Idź do formularza</a>
        </p>
    </div>
</div>

<div class="content-wrapper">

    <div id="app_content" class="content">



<h2 class="content-head is-center">Prosty kalkulator</h2>

<div class="pure-g">
	<div class="l-box-lrg pure-u-1 pure-u-med-2-5">
		<form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/calc.php" method="post">
			<fieldset>

				<label for="kwota">Kwota kredytu</label>
				<input id="kwota" type="text" placeholder="Kwota" name="kwota" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['kwota'];?>
">

				<label for="procent">Oprocntowanie</label>
				<input id="procent" type="text" placeholder="Oprocntowanie" name="procent" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['procent'];?>
">

				<label for="czas">Ile lat</label>
				<input id="czas" type="text" placeholder="Lata" name="czas" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['czas'];?>
">

				<button type="submit" class="pure-button">Oblicz</button>
			</fieldset>
		</form>
	</div>

	<div class="l-box-lrg pure-u-1 pure-u-med-3-5">

		
		<?php if (isset($_smarty_tpl->tpl_vars['messages']->value)) {?>
		<?php if (count($_smarty_tpl->tpl_vars['messages']->value)>0) {?>
		<h4>Wystąpiły błędy: </h4>
		<ol class="err">
			<?php  $_smarty_tpl->tpl_vars['msg'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['msg']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['messages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['msg']->key => $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->_loop = true;
?>
			<li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
			<?php } ?>
		</ol>
		<?php }?>
		<?php }?>

		
		<?php if (isset($_smarty_tpl->tpl_vars['infos']->value)) {?>
		<?php if (count($_smarty_tpl->tpl_vars['infos']->value)>0) {?>
		<h4>Informacje: </h4>
		<ol class="inf">
			<?php  $_smarty_tpl->tpl_vars['msg'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['msg']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['infos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['msg']->key => $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->_loop = true;
?>
			<li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
			<?php } ?>
		</ol>
		<?php }?>
		<?php }?>

		<?php if (isset($_smarty_tpl->tpl_vars['result']->value)) {?>
		<h4>Wynik</h4>
		<p class="res">
			<?php echo $_smarty_tpl->tpl_vars['result']->value;?>

		</p>
		<?php }?>

	</div>
</div>



    </div>

    <div class="footer l-box is-center">
		<p>
Twój kredyt, twoja rata
		</p>
        <p>Widok oparty na stylach i szablonie <a href="http://purecss.io/" target="_blank">http://purecss.io/</a></p>
    </div>

</div>


</body>
</html><?php }} ?>
