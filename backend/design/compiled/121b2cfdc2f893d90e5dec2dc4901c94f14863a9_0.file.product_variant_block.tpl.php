<?php
/* Smarty version 3.1.36, created on 2020-06-29 20:21:45
  from 'C:\OSPanel\domains\test-tasks\Okay\Modules\OkayCMS\NovaposhtaCost\Backend\design\html\product_variant_block.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5efa2329bbe437_35284150',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '121b2cfdc2f893d90e5dec2dc4901c94f14863a9' => 
    array (
      0 => 'C:\\OSPanel\\domains\\test-tasks\\Okay\\Modules\\OkayCMS\\NovaposhtaCost\\Backend\\design\\html\\product_variant_block.tpl',
      1 => 1591208404,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5efa2329bbe437_35284150 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['settings']->value->newpost_use_volume) {?>
    <div class="okay_list_boding variants_item_price">
        <div class="heading_label"><?php echo $_smarty_tpl->tpl_vars['btr']->value->product_np_volume;?>
</div>
        <input class="variant_input" name="variants[volume][]" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value->volume, ENT_QUOTES, 'UTF-8', true);?>
"/>
    </div>
<?php }
}
}
