<?php
/* Smarty version 3.1.36, created on 2020-06-20 17:46:11
  from 'C:\OSPanel\domains\test-tasks\backend\design\html\email\email_footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5eee2133be7072_95366797',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '03dc8a4eddc235c36efb110709ab5c87ea4521de' => 
    array (
      0 => 'C:\\OSPanel\\domains\\test-tasks\\backend\\design\\html\\email\\email_footer.tpl',
      1 => 1591208404,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eee2133be7072_95366797 (Smarty_Internal_Template $_smarty_tpl) {
?><table class="es-footer" cellspacing="0" cellpadding="0" align="center">
    <tbody>
    <tr> </tr>
    <tr>
        <td align="center">
            <table class="es-footer-body" width="600" cellspacing="0" cellpadding="0" align="center">
                <tbody>
                <tr>
                    <td class="es-m-p0r es-p20t es-p10b es-p10r es-p10l" width="100%" align="center">
                        <table width="100%" cellspacing="0" cellpadding="0">
                            <tbody>
                            <tr>
                                <td align="center">
                                    <p>
                                        <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->email_details, ENT_QUOTES, 'UTF-8', true);?>
</span><br>
                                        <a target="_blank" href="https://okay-cms.com">okay-cms.com</a>
                                    </p>
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
</table><?php }
}
