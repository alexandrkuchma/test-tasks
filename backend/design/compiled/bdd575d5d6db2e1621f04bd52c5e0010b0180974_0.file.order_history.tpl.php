<?php
/* Smarty version 3.1.36, created on 2020-06-20 17:46:50
  from 'C:\OSPanel\domains\test-tasks\backend\design\html\order_history.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5eee215a3fd362_53412673',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bdd575d5d6db2e1621f04bd52c5e0010b0180974' => 
    array (
      0 => 'C:\\OSPanel\\domains\\test-tasks\\backend\\design\\html\\order_history.tpl',
      1 => 1591208404,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:svg_icon.tpl' => 9,
  ),
),false)) {
function content_5eee215a3fd362_53412673 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="order_history">
    <div class="order_history__item">
        <div class="order_history__icon order_history__icon--success"><?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'check'), 0, false);
?></div>
        <div class="order_history__content">
            <div class="boxed__content">
                <div class="order_history__title">
                    <span><?php echo $_smarty_tpl->tpl_vars['btr']->value->order_history_created;?>
</span>
                    <span class="tag tag-chanel_unknown"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'date' ][ 0 ], array( $_smarty_tpl->tpl_vars['order']->value->date ));?>
 | <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'time' ][ 0 ], array( $_smarty_tpl->tpl_vars['order']->value->date ));?>
</span>
                    <?php if ($_smarty_tpl->tpl_vars['order']->value->referer_channel) {?>
                        <span><?php echo $_smarty_tpl->tpl_vars['btr']->value->order_from;?>
</span>
                        <?php if ($_smarty_tpl->tpl_vars['order']->value->referer_channel == Okay\Core\UserReferer\UserReferer::CHANNEL_EMAIL) {?>
                            <span class="tag tag-chanel_email" title="<?php echo $_smarty_tpl->tpl_vars['order']->value->referer_source;?>
">
                                <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'tag_email'), 0, true);
?> <?php echo $_smarty_tpl->tpl_vars['order']->value->referer_channel;?>

                            </span>
                        <?php } elseif ($_smarty_tpl->tpl_vars['order']->value->referer_channel == Okay\Core\UserReferer\UserReferer::CHANNEL_SEARCH) {?>
                            <span class="tag tag-chanel_search" title="<?php echo $_smarty_tpl->tpl_vars['order']->value->referer_source;?>
">
                                <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'tag_search'), 0, true);
?> <?php echo $_smarty_tpl->tpl_vars['order']->value->referer_channel;?>

                            </span>
                        <?php } elseif ($_smarty_tpl->tpl_vars['order']->value->referer_channel == Okay\Core\UserReferer\UserReferer::CHANNEL_SOCIAL) {?>
                            <span class="tag tag-chanel_social" title="<?php echo $_smarty_tpl->tpl_vars['order']->value->referer_source;?>
">
                                <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'tag_social'), 0, true);
?> <?php echo $_smarty_tpl->tpl_vars['order']->value->referer_channel;?>

                            </span>
                        <?php } elseif ($_smarty_tpl->tpl_vars['order']->value->referer_channel == Okay\Core\UserReferer\UserReferer::CHANNEL_REFERRAL) {?>
                            <span class="tag tag-chanel_referral" title="<?php echo $_smarty_tpl->tpl_vars['order']->value->referer_source;?>
">
                                <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'tag_referral'), 0, true);
?> <?php echo $_smarty_tpl->tpl_vars['order']->value->referer_channel;?>

                            </span>
                        <?php } else { ?>
                            <span class="tag tag-chanel_unknown" title="<?php echo $_smarty_tpl->tpl_vars['order']->value->referer_source;?>
">
                                <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'tag_unknown'), 0, true);
?> <?php echo $_smarty_tpl->tpl_vars['order']->value->referer_channel;?>

                            </span>
                        <?php }?>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['order']->value->comment) {?>
        <div class="order_history__item">
            <div class="order_history__icon"><?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'left_comments'), 0, true);
?></div>
            <div class="order_history__content">
                <div class="order_history__title">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->order_client_comment, ENT_QUOTES, 'UTF-8', true);?>

                </div>
                <div class="boxed boxed--success">
                    <div class="boxed__content">
                        <?php echo $_smarty_tpl->tpl_vars['order']->value->comment;?>

                    </div>
                </div>
            </div>
        </div>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['order_history']->value) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['order_history']->value, 'history_item');
$_smarty_tpl->tpl_vars['history_item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['history_item']->value) {
$_smarty_tpl->tpl_vars['history_item']->do_else = false;
?>
            <?php if ($_smarty_tpl->tpl_vars['history_item']->value->new_status_id) {?>
                <div class="order_history__item">
                    <div class="order_history__icon order_history__icon--exchange"><?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'exchange'), 0, true);
?></div>
                    <div class="order_history__content">
                        <div class="order_history__title">
                            <span><?php echo $_smarty_tpl->tpl_vars['btr']->value->order_history_changed_on;?>
</span>
                            <span style="color: #<?php echo $_smarty_tpl->tpl_vars['all_status']->value[$_smarty_tpl->tpl_vars['history_item']->value->new_status_id]->color;?>
;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['all_status']->value[$_smarty_tpl->tpl_vars['history_item']->value->new_status_id]->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
                            <span class="tag tag-chanel_unknown"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'date' ][ 0 ], array( $_smarty_tpl->tpl_vars['history_item']->value->date ));?>
 | <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'time' ][ 0 ], array( $_smarty_tpl->tpl_vars['history_item']->value->date ));?>
</span>
                            <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->order_history_by_manager, ENT_QUOTES, 'UTF-8', true);?>
</span>
                            <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['history_item']->value->manager_name, ENT_QUOTES, 'UTF-8', true);?>
</span>
                        </div>
                    </div>

                </div>
            <?php } else { ?>
                <div class="order_history__item">
                    <div class="order_history__icon"><?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'left_comments'), 0, true);
?></div>
                    <div class="order_history__content">
                        <div class="order_history__title">
                            <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->order_history_changed, ENT_QUOTES, 'UTF-8', true);?>
</span>
                            <span class="tag tag-chanel_unknown"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'date' ][ 0 ], array( $_smarty_tpl->tpl_vars['history_item']->value->date ));?>
 | <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'time' ][ 0 ], array( $_smarty_tpl->tpl_vars['history_item']->value->date ));?>
</span>
                            <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->order_history_by_manager, ENT_QUOTES, 'UTF-8', true);?>
</span>
                            <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['history_item']->value->manager_name, ENT_QUOTES, 'UTF-8', true);?>
</span>
                        </div>
                        <div class="boxed boxed--grey">
                            <div class="boxed__content">
                                <?php echo $_smarty_tpl->tpl_vars['history_item']->value->text;?>

                            </div>
                        </div>
                    </div>
                </div>
            <?php }?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php }?>
</div><?php }
}
