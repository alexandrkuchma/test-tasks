
<div id="time-banner"></div>

<script>
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

</script>