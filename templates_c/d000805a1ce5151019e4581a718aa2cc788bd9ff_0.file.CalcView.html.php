<?php
/* Smarty version 3.1.30, created on 2022-03-29 23:34:45
  from "C:\xampp\htdocs\smarty\app\CalcView.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_62437b75332633_92252424',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd000805a1ce5151019e4581a718aa2cc788bd9ff' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\app\\CalcView.html',
      1 => 1648589676,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62437b75332633_92252424 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_80220391262437b75315c54_84912680', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_79690242662437b7532ee96_55834534', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender(($_smarty_tpl->tpl_vars['conf']->value->root_path).("/templates/main.html"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, true);
}
/* {block 'footer'} */
class Block_80220391262437b75315c54_84912680 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Twój kredyt, twoja rata<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_79690242662437b7532ee96_55834534 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<h2 class="content-head is-center">Prosty kalkulator</h2>

<div class="pure-g">
	<div class="l-box-lrg pure-u-1 pure-u-med-2-5">
		<form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/app/calc.php" method="post">
			<fieldset>

				<label for="kwota">Kwota kredytu</label>
				<input id="kwota" type="text" placeholder="Kwota" name="kwota" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->kwota;?>
">

				<label for="procent">Oprocntowanie</label>
				<input id="procent" type="text" placeholder="Oprocntowanie" name="procent" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->procent;?>
">

				<label for="czas">Ile lat</label>
				<input id="czas" type="text" placeholder="Lata" name="czas" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->czas;?>
">

				<button type="submit" class="pure-button">Oblicz</button>
			</fieldset>
		</form>
	</div>

	<div class="l-box-lrg pure-u-1 pure-u-med-3-5">

		
		<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
		{
		<h4>Wystąpiły błędy: </h4>
		<ol class="err">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getErrors(), 'err');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
?>
			<li><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</li>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

		</ol>
		<?php }?>
		
		
		<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isInfo()) {?>
		<h4>Informacje: </h4>
		<ol class="inf">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getInfos(), 'inf');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['inf']->value) {
?>
			<li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

		</ol>
		<?php }?>
		

		<?php if (isset($_smarty_tpl->tpl_vars['res']->value->result)) {?>
		<h4>Wynik</h4>
		<p class="res">
			<?php echo $_smarty_tpl->tpl_vars['res']->value->result;?>

		</p>
		<?php }?>

	</div>
</div>

<?php
}
}
/* {/block 'content'} */
}
