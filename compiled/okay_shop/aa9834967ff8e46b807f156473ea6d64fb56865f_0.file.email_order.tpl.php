<?php
/* Smarty version 3.1.36, created on 2020-06-20 17:46:09
  from 'C:\OSPanel\domains\test-tasks\design\okay_shop\html\email\email_order.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5eee21311a33d5_86139002',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aa9834967ff8e46b807f156473ea6d64fb56865f' => 
    array (
      0 => 'C:\\OSPanel\\domains\\test-tasks\\design\\okay_shop\\html\\email\\email_order.tpl',
      1 => 1591208405,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:design/".$_prefixVariable1."/html/email/email_head.tpl' => 1,
    'file:design/".$_prefixVariable2."/html/email/email_header.tpl' => 1,
    'file:design/".$_prefixVariable3."/html/email/email_footer.tpl' => 1,
  ),
),false)) {
function content_5eee21311a33d5_86139002 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('subject', ((string)$_smarty_tpl->tpl_vars['lang']->value->email_order_title)." ".((string)$_smarty_tpl->tpl_vars['order']->value->id) ,false ,32);?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lang']->value->email_new_order, ENT_QUOTES, 'UTF-8', true);?>
 № <?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
</title>
    <meta name="x-apple-disable-message-reformatting">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="telephone=no" name="format-detection">

    <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_theme'][0], array( array(),$_smarty_tpl ) );
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_subTemplateRender("file:design/".$_prefixVariable1."/html/email/email_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
</head>
<body>
<div class="es-wrapper-color">
    <table class="es-wrapper" width="100%" cellspacing="0" cellpadding="0">
        <tbody>
        <tr>
            <td class="es-p25t es-p25b" valign="center">

                                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_theme'][0], array( array(),$_smarty_tpl ) );
$_prefixVariable2=ob_get_clean();
$_smarty_tpl->_subTemplateRender("file:design/".$_prefixVariable2."/html/email/email_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

                <table class="es-content" cellspacing="0" cellpadding="0" align="center">
                    <tbody>
                    <tr>
                        <td align="center">
                            <table class="es-content-body" width="600" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center">
                                <tbody>
                                <tr>
                                    <td class="es-p10t es-p10b es-p20r es-p20l" align="center">
                                        <table width="100%" cellspacing="0" cellpadding="0">
                                            <tbody>
                                            <tr>
                                                <td valign="top" align="center">
                                                    <table width="100%" cellspacing="0" cellpadding="0">
                                                        <tbody>
                                                        <tr>
                                                            <td class="es-p10t es-p15b" align="center">
                                                                <h1><?php echo $_smarty_tpl->tpl_vars['lang']->value->email_order_heading;?>
 <span class="es-number-order">№ <?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
</span><br></h1>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="es-p10t es-p0b es-p30r es-p30l" align="center">
                                                                <p><?php echo $_smarty_tpl->tpl_vars['lang']->value->email_comment_hello;?>
 <i><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</i>. <?php echo $_smarty_tpl->tpl_vars['lang']->value->email_order_order_message;?>
 <strong>№<?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
</strong> <?php echo $_smarty_tpl->tpl_vars['lang']->value->email_order_text_of;?>
 <strong><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'date' ][ 0 ], array( $_smarty_tpl->tpl_vars['order']->value->date ));?>
:<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'time' ][ 0 ], array( $_smarty_tpl->tpl_vars['order']->value->date ));?>
.</strong> <?php echo $_smarty_tpl->tpl_vars['lang']->value->email_order_text_status;?>

                                                                    <span class="es-status-color"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_status']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span></p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="es-p15t es-p10b" align="center">
                                                                <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>"order",'url'=>$_smarty_tpl->tpl_vars['order']->value->url,'absolute'=>1),$_smarty_tpl ) );?>
" class="es-button" target="_blank"><?php echo $_smarty_tpl->tpl_vars['lang']->value->email_order_button;?>
</a>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <table class="es-content" cellspacing="0" cellpadding="0" align="center">
                    <tbody>
                    <tr>
                        <td align="center">
                            <table class="es-content-body" width="600" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center">
                                <tbody>
                                <tr>
                                    <td class="es-p30b es-p20r es-p20l" align="left">
                                        <table width="100%" cellspacing="0" cellpadding="0" align="left">
                                            <tbody>
                                            <tr>
                                                <td class="es-p20t es-p10b" align="left">
                                                    <table class="es-left" cellspacing="0" cellpadding="0" align="left">
                                                        <tbody>
                                                        <tr>
                                                            <td class="es-m-p0r es-m-p20b" width="100%" valign="top" align="center">
                                                                <table width="100%" cellspacing="0" cellpadding="0">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td class="esd-block-text" align="left">
                                                                            <h4><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lang']->value->email_details_order, ENT_QUOTES, 'UTF-8', true);?>
:</h4>
                                                                        </td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="es-m-p20b" width="100%" align="left">
                                                    <table class="es-table-infobox" cellspacing="1" cellpadding="1" border="0" align="left">
                                                        <tbody>
                                                        <tr valign="top">
                                                            <td class="es-p5t es-p5b" width="180px"><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lang']->value->email_order_number_s, ENT_QUOTES, 'UTF-8', true);?>
:</span></td>
                                                            <td class="es-p5t es-p5b"><span>№ <?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
</span></td>
                                                        </tr>
                                                        <tr valign="top">
                                                            <td class="es-p5t es-p5b" width="180px"><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lang']->value->email_order_date_s, ENT_QUOTES, 'UTF-8', true);?>
:</span></td>
                                                            <td class="es-p5t es-p5b"><span><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'date' ][ 0 ], array( $_smarty_tpl->tpl_vars['order']->value->date ));?>
:<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'time' ][ 0 ], array( $_smarty_tpl->tpl_vars['order']->value->date ));?>
</span></td>
                                                        </tr>
                                                        <tr valign="top">
                                                            <td class="es-p5t es-p5b" width="180px"><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lang']->value->email_order_status_s, ENT_QUOTES, 'UTF-8', true);?>
:</span></td>
                                                            <td class="es-p5t es-p5b"><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_status']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span></td>
                                                        </tr>
                                                        <tr valign="top">
                                                            <td class="es-p5t es-p5b" width="180px"><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lang']->value->email_payment_status, ENT_QUOTES, 'UTF-8', true);?>
:</span></td>
                                                            <td class="es-p5t es-p5b">
                                                                        <span>
                                                                            <?php if ($_smarty_tpl->tpl_vars['order']->value->paid == 1) {?>
                                                                                 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lang']->value->email_paid, ENT_QUOTES, 'UTF-8', true);?>

                                                                             <?php } else { ?>
                                                                                 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lang']->value->email_not_paid, ENT_QUOTES, 'UTF-8', true);?>

                                                                             <?php }?>
                                                                        </span>
                                                            </td>
                                                        </tr>
                                                        <tr valign="top">
                                                            <td class="es-p5t es-p5b" width="180px"><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lang']->value->email_order_name, ENT_QUOTES, 'UTF-8', true);?>
:</span></td>
                                                            <td class="es-p5t es-p5b"><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span></td>
                                                        </tr>
                                                        <tr valign="top">
                                                            <td class="es-p5t es-p5b" width="180px"><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lang']->value->email_order_email, ENT_QUOTES, 'UTF-8', true);?>
:</span></td>
                                                            <td class="es-p5t es-p5b"><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value->email, ENT_QUOTES, 'UTF-8', true);?>
</span></td>
                                                        </tr>
                                                        <?php if ($_smarty_tpl->tpl_vars['order']->value->phone) {?>
                                                        <tr valign="top">
                                                            <td class="es-p5t es-p5b" width="180px"><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lang']->value->email_order_phone, ENT_QUOTES, 'UTF-8', true);?>
:</span></td>
                                                            <td class="es-p5t es-p5b"><span><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'phone' ][ 0 ], array( $_smarty_tpl->tpl_vars['order']->value->phone ));?>
</span></td>
                                                        </tr>
                                                        <?php }?>
                                                        <?php if ($_smarty_tpl->tpl_vars['order']->value->address) {?>
                                                        <tr valign="top">
                                                            <td class="es-p5t es-p5b" width="180px"><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lang']->value->email_order_address, ENT_QUOTES, 'UTF-8', true);?>
:</span></td>
                                                            <td class="es-p5t es-p5b"><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value->address, ENT_QUOTES, 'UTF-8', true);?>
</span></td>
                                                        </tr>
                                                        <?php }?>
                                                        <?php if ($_smarty_tpl->tpl_vars['order']->value->comment) {?>
                                                        <tr valign="top">
                                                            <td class="es-p5t es-p5b" width="180px"><span><?php echo $_smarty_tpl->tpl_vars['lang']->value > htmlspecialchars('email_order_comment', ENT_QUOTES, 'UTF-8', true);?>
:</span></td>
                                                            <td class="es-p5t es-p5b"><span><?php echo nl2br(htmlspecialchars($_smarty_tpl->tpl_vars['order']->value->comment, ENT_QUOTES, 'UTF-8', true));?>
</span></td>
                                                        </tr>
                                                        <?php }?>
                                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_design_block'][0], array( array('block'=>"front_email_order_user_contact_info"),$_smarty_tpl ) );?>

                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <table class="es-content" cellspacing="0" cellpadding="0" align="center">
                    <tbody>
                    <tr>
                        <td align="center">
                            <table class="es-content-body" width="600" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center">
                                <tbody>
                                <tr>
                                    <td class="es-p30b es-p20r es-p20l" align="left">
                                        <table width="100%" cellspacing="0" cellpadding="0" align="center">
                                            <tbody>
                                            <tr>
                                                <td class="es-p20t es-p10b" align="left">
                                                    <table class="es-left" cellspacing="0" cellpadding="0" align="left">
                                                        <tbody>
                                                        <tr>
                                                            <td class="es-m-p0r es-m-p20b" align="left">
                                                                <table class="100%" cellspacing="0" cellpadding="0" align="left">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td class="esd-block-text" align="left">
                                                                            <h4><?php echo $_smarty_tpl->tpl_vars['lang']->value->email_order_purchases;?>
:</h4>
                                                                        </td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="" align="left">
                                                    <table>
                                                        <tbody>
                                                        <tr>
                                                            <td class="" align="left">
                                                                <table width="100%" cellspacing="0" cellpadding="0">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td width="560" valign="top" align="center">
                                                                            <table width="100%" cellspacing="0" cellpadding="0">
                                                                                <tbody>
                                                                                <tr>
                                                                                    <td class="es-p10b" align="center">
                                                                                        <table width="100%" height="100%" cellspacing="0" cellpadding="0" border="0">
                                                                                            <tbody>
                                                                                            <tr>
                                                                                                <td style="border-bottom: 1px solid #dbdbdb; background: #dbdbdb; height: 1px; width: 100%; margin: 0px;"></td>
                                                                                            </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['purchases']->value, 'purchase');
$_smarty_tpl->tpl_vars['purchase']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['purchase']->value) {
$_smarty_tpl->tpl_vars['purchase']->do_else = false;
?>
                                                        <tr>
                                                            <td class="es-p10t es-p10b" align="left">
                                                                <table class="es-left" cellspacing="0" cellpadding="0" align="left">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td class="es-m-p0r es-m-p20b" width="178" valign="top" align="center">
                                                                            <table width="100%" cellspacing="0" cellpadding="0">
                                                                                <tbody>
                                                                                <tr>
                                                                                    <td align="center">
                                                                                        <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>"product",'url'=>$_smarty_tpl->tpl_vars['purchase']->value->product->url,'absolute'=>1),$_smarty_tpl ) );?>
">
                                                                                        <?php if ($_smarty_tpl->tpl_vars['purchase']->value->product->image) {?>
                                                                                        <img align="middle" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['purchase']->value->product->image->filename,120,120 ));?>
" />
                                                                                        <?php } else { ?>
                                                                                        <img width="100" height="100" src="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/backend/design/images/no_image.png" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['purchase']->value->product->name, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['purchase']->value->product->name, ENT_QUOTES, 'UTF-8', true);?>
">
                                                                                        <?php }?>
                                                                                        </a>
                                                                                    </td>
                                                                                </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                                <table width="380px" cellspacing="0" cellpadding="0" align="right">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td width="100%" align="left">
                                                                            <table width="100%" cellspacing="0" cellpadding="0">
                                                                                <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>'product','url'=>$_smarty_tpl->tpl_vars['purchase']->value->product->url,'absolute'=>1),$_smarty_tpl ) );?>
" style="font-family: 'Trebuchet MS';font-size: 16px;color: #222;text-decoration: none;line-height: normal;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['purchase']->value->product_name, ENT_QUOTES, 'UTF-8', true);?>
</a><br />
                                                                                        <span class="es-p5t"><em><span style="color: rgb(128, 128, 128); font-size: 12px;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['purchase']->value->variant_name, ENT_QUOTES, 'UTF-8', true);?>
</span></em></span>
                                                                                        <?php if ($_smarty_tpl->tpl_vars['purchase']->value->variant->stock == 0) {?>
                                                                                        <div class="es-p5t" style="color: #000; font-size: 12px;font-weight: 600"><?php echo $_smarty_tpl->tpl_vars['lang']->value->product_pre_order;?>
</div>
                                                                                        <?php }?>
                                                                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_design_block'][0], array( array('block'=>"front_email_order_user_purchase_name",'vars'=>array('purchase'=>$_smarty_tpl->tpl_vars['purchase']->value)),$_smarty_tpl ) );?>

                                                                                    </td>
                                                                                    <td style="text-align: center;" width="60">
                                                                                        <?php echo $_smarty_tpl->tpl_vars['purchase']->value->amount;?>
 <?php if ($_smarty_tpl->tpl_vars['purchase']->value->units) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['purchase']->value->units, ENT_QUOTES, 'UTF-8', true);
} else {
echo $_smarty_tpl->tpl_vars['settings']->value->units;
}?>
                                                                                    </td>
                                                                                    <td style="text-align: right;" width="100">
                                                                                        <b><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'convert' ][ 0 ], array( $_smarty_tpl->tpl_vars['purchase']->value->price,$_smarty_tpl->tpl_vars['currency']->value->id ));?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['currency']->value->sign;?>
</b>
                                                                                    </td>
                                                                                </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="" align="left">
                                                                <table width="100%" cellspacing="0" cellpadding="0">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td width="560" valign="top" align="center">
                                                                            <table width="100%" cellspacing="0" cellpadding="0">
                                                                                <tbody>
                                                                                <tr>
                                                                                    <td class="es-p10b" align="center">
                                                                                        <table width="100%" height="100%" cellspacing="0" cellpadding="0" border="0">
                                                                                            <tbody>
                                                                                            <tr>
                                                                                                <td style="border-bottom: 1px solid #dbdbdb; background: #dbdbdb; height: 1px; width: 100%; margin: 0px;"></td>
                                                                                            </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_design_block'][0], array( array('block'=>"front_email_order_user_custom_block"),$_smarty_tpl ) );?>

                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="es-p15t" align="left">
                                                    <table width="100%" cellspacing="0" cellpadding="0">
                                                        <tbody>
                                                        <tr>
                                                            <td valign="top" align="center">
                                                                <table width="100%" cellspacing="0" cellpadding="0">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td align="right">
                                                                            <table style="width: 500px;" cellspacing="1" cellpadding="1" border="0" align="right">
                                                                                <tbody>
                                                                                <?php if ($_smarty_tpl->tpl_vars['order']->value->discount) {?>
                                                                                <tr>
                                                                                    <td style="text-align: right; font-size: 18px; line-height: 150%;"><?php echo $_smarty_tpl->tpl_vars['lang']->value->email_order_discount;?>
:</td>
                                                                                    <td style="text-align: right; font-size: 18px; line-height: 150%; color: #000;"><?php echo $_smarty_tpl->tpl_vars['order']->value->discount;?>
&nbsp;%</td>
                                                                                </tr>
                                                                                <?php }?>

                                                                                <?php if ($_smarty_tpl->tpl_vars['order']->value->coupon_discount > 0) {?>
                                                                                <tr>
                                                                                    <td style="text-align: right; font-size: 18px; line-height: 150%;"><?php echo $_smarty_tpl->tpl_vars['lang']->value->email_order_coupon;?>
 <?php echo $_smarty_tpl->tpl_vars['order']->value->coupon_code;?>
:</td>
                                                                                    <td style="text-align: right; font-size: 18px; line-height: 150%; color: #000;">&minus;<?php echo $_smarty_tpl->tpl_vars['order']->value->coupon_discount;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['currency']->value->sign;?>
</td>
                                                                                </tr>
                                                                                <?php }?>

                                                                                <?php if ($_smarty_tpl->tpl_vars['order']->value->separate_delivery || !$_smarty_tpl->tpl_vars['order']->value->separate_delivery && $_smarty_tpl->tpl_vars['order']->value->delivery_price > 0) {?>
                                                                                <tr>
                                                                                    <td style="text-align: right; font-size: 18px; line-height: 150%;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delivery']->value->name, ENT_QUOTES, 'UTF-8', true);?>
:</td>
                                                                                    <td style="text-align: right; font-size: 18px; line-height: 150%; color: #000;">
                                                                                        <?php if (!$_smarty_tpl->tpl_vars['order']->value->separate_delivery) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'convert' ][ 0 ], array( $_smarty_tpl->tpl_vars['order']->value->delivery_price,$_smarty_tpl->tpl_vars['currency']->value->id ));?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['currency']->value->sign;?>
 <?php } else {
}?>
                                                                                    </td>
                                                                                </tr>
                                                                                <?php }?>

                                                                                <tr class="es-p5t">
                                                                                    <td style="text-align: right; font-size: 20px; line-height: 150%;"><strong><?php echo $_smarty_tpl->tpl_vars['lang']->value->email_order_total;?>
:</strong></td>
                                                                                    <td style="text-align: right; font-size: 20px; line-height: 150%; color: #F36D17;"><strong><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'convert' ][ 0 ], array( $_smarty_tpl->tpl_vars['order']->value->total_price,$_smarty_tpl->tpl_vars['currency']->value->id ));?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['currency']->value->sign;?>
</strong></td>
                                                                                </tr>
                                                                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_design_block'][0], array( array('block'=>"front_email_order_user_total"),$_smarty_tpl ) );?>

                                                                                </tbody>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                    </tbody>
                </table>

                                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_theme'][0], array( array(),$_smarty_tpl ) );
$_prefixVariable3=ob_get_clean();
$_smarty_tpl->_subTemplateRender("file:design/".$_prefixVariable3."/html/email/email_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
             </td>
        </tr>
        </tbody>
    </table>
</div>
</body>
</html>
<?php }
}
