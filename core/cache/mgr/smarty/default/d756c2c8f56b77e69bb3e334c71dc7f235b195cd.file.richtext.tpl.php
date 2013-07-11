<?php /* Smarty version Smarty-3.0.4, created on 2013-07-11 22:24:48
         compiled from "/Applications/MAMP/htdocs/ediets/manager/templates/default/element/tv/renders/input/richtext.tpl" */ ?>
<?php /*%%SmartyHeaderCode:129873938451df1490971372-95448437%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd756c2c8f56b77e69bb3e334c71dc7f235b195cd' => 
    array (
      0 => '/Applications/MAMP/htdocs/ediets/manager/templates/default/element/tv/renders/input/richtext.tpl',
      1 => 1370363086,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '129873938451df1490971372-95448437',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include '/Applications/MAMP/htdocs/ediets/core/model/smarty/plugins/modifier.escape.php';
?><textarea id="tv<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
" name="tv<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
" class="modx-richtext" onchange="MODx.fireResourceFormChange();"><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('tv')->value->get('value'));?>
</textarea>

<script type="text/javascript">

Ext.onReady(function() {
    
    MODx.makeDroppable(Ext.get('tv<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
'));
    
});
</script>