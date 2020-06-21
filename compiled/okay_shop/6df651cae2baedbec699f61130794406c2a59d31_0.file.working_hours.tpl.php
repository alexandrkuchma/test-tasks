<?php
/* Smarty version 3.1.36, created on 2020-06-21 22:27:59
  from 'C:\OSPanel\domains\test-tasks\Okay\Modules\SimplaMarket\WorkingHoursBanner\design\html\working_hours.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5eefb4bf559908_86939089',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6df651cae2baedbec699f61130794406c2a59d31' => 
    array (
      0 => 'C:\\OSPanel\\domains\\test-tasks\\Okay\\Modules\\SimplaMarket\\WorkingHoursBanner\\design\\html\\working_hours.tpl',
      1 => 1592766938,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eefb4bf559908_86939089 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="time-banner"></div>

<?php echo '<script'; ?>
>
    var workingHoursUtc = { from: 6, to: 15 };

    var time = new Date();
    var timeNowUtc = { day: time.getUTCDay(), hours: time.getUTCHours() };
    var msg = '';
    var difference;
    if (timeNowUtc.day === 0 || timeNowUtc.day === 6 || (timeNowUtc.day === 5 && timeNowUtc.hours >= 18)) {
        msg += 'Магазин откроется в понедельник в 09:00';
    } else {
        if (timeNowUtc.hours > workingHoursUtc.from && timeNowUtc.hours < workingHoursUtc.to) {
            difference = workingHoursUtc.to - timeNowUtc.hours;
            msg += 'Магазин закроется через ' + difference + hoursStr(difference) + '\n В 18:00.';
        } else {
            if (timeNowUtc.hours <= 23) {
                difference = 24 - timeNowUtc.hours + workingHoursUtc.from;
            } else {
                difference = workingHoursUtc.from - timeNowUtc;
            }
            msg += 'Магазин откроется через ' + difference + hoursStr(difference) + '\n В 09:00.';
        }
    }
    document.getElementById('time-banner').innerHTML = msg;
    function hoursStr(difference) {
        switch (difference) {
            case 1:
                return ' час.';
            case 2:
            case 3:
            case 4:
                return ' часа.';
            default:
                return ' часов.';
        }
    }

<?php echo '</script'; ?>
><?php }
}
