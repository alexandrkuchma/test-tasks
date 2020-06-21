<?php
/* Smarty version 3.1.36, created on 2020-06-21 22:26:16
  from 'C:\OSPanel\domains\test-tasks\Okay\Modules\OkayCMS\YandexXML\Backend\design\html\svg_feed.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5eefb4581301f9_91284916',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3ee1fbaeb1f4b303c1dc7b7ddd96293801b4af0c' => 
    array (
      0 => 'C:\\OSPanel\\domains\\test-tasks\\Okay\\Modules\\OkayCMS\\YandexXML\\Backend\\design\\html\\svg_feed.tpl',
      1 => 1591208404,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eefb4581301f9_91284916 (Smarty_Internal_Template $_smarty_tpl) {
?><button data-hint="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->okaycms__yandex_xml__add_to_yandex_feed, ENT_QUOTES, 'UTF-8', true);?>
" type="button" class="setting_icon setting_icon_yandex fn_ajax_action <?php if ($_smarty_tpl->tpl_vars['product']->value->to__okaycms__yandex_xml) {?>fn_active_class<?php }?> hint-bottom-middle-t-info-s-small-mobile  hint-anim" data-controller="product" data-action="to__okaycms__yandex_xml" data-id="<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
">
    XML
</button><?php }
}
