<?php
//$_GET['firstDate'] = '06.11.2019';
//$_GET['endDate'] = '01.12.2019';
if (empty($_GET['firstDate']) || empty($_GET['endDate'])) {
    return false;
}

/**
 * Возвращает количество определенного дня недели по промежутку
 * @param int $firstDate - точка отчета Unix timestamp
 * @param int $endDate - точка отчета Unix timestamp
 * @param int $DayOfTheWeek - день недели в числовом формате 1-7
 * @return int
 */
function getCountDayOfTheWeek($firstDate, $endDate, $DayOfTheWeek = 2) {
    $day = $firstDate;
    $count = 0;
    for (; $day < $endDate; $day = $day+86400) {
        $count = date('N', $day) == $DayOfTheWeek ? $count + 1 : $count ;
    }
    return $count;
}

preg_match('#(.+)\.(.+)\.(.+)#', $_GET['firstDate'], $firstDate);
preg_match('#(.+)\.(.+)\.(.+)#', $_GET['endDate'], $endDate);
$firstDate = mktime(0, 0, 0, $firstDate[2], $firstDate[1], $firstDate[3]);
$endDate = mktime(0, 0, 0, $endDate[2], $endDate[1], $endDate[3]);
return getCountDayOfTheWeek($firstDate, $endDate);



