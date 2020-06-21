<?php
/* Smarty version 3.1.36, created on 2020-06-21 22:28:57
  from 'C:\OSPanel\domains\test-tasks\design\okay_shop\html\advantages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5eefb4f961cb91_75206884',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '62abb6486badab1b14a235df7d3ed61cd49a8ad9' => 
    array (
      0 => 'C:\\OSPanel\\domains\\test-tasks\\design\\okay_shop\\html\\advantages.tpl',
      1 => 1591208405,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eefb4f961cb91_75206884 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['advantages']->value) {?>
    <div class="block block--boxed block--border section_advantages">
        <div class="advantages f_row no_gutters">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['advantages']->value, 'advantage');
$_smarty_tpl->tpl_vars['advantage']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['advantage']->value) {
$_smarty_tpl->tpl_vars['advantage']->do_else = false;
?>
            <div class="advantages__item f_col-6 f_col-md-3">
                <div class="advantages__preview d-flex align-items-center">
                    <?php if ($_smarty_tpl->tpl_vars['advantage']->value->filename) {?>
                        <div class="advantages__icon advantages__icon--delivery d-flex align-items-center justify-content-center">
                            <img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['advantage']->value->filename,50,50,false,$_smarty_tpl->tpl_vars['config']->value->resized_advantages_dir ));?>
" alt="<?php echo $_smarty_tpl->tpl_vars['advantage']->value->text;?>
">
                        </div>
                    <?php }?>
                    <div class="advantages__title"><?php echo $_smarty_tpl->tpl_vars['advantage']->value->text;?>
</div>
                </div>
            </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </div>
<?php }
}
}
