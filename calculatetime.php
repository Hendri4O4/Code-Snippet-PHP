<?php
$allDate = array(
    array(
        'date' => '2017-04-14',
        'start_date' => '2017-04-14 08:00',
        'end_date' => '2017-04-14 13:00',
        'day' => 'friday',
        'holiday' => false,
        'weekend' => false,
    ),
    array(
        'date' => '2017-04-15',
        'start_date' => '2017-04-15 08:00',
        'end_date' => '2017-04-15 17:00',
        'day' => 'saturday',
        'holiday' => false,
        'weekend' => true,
    ),
    array(
        'date' => '2017-04-16',
        'start_date' => '2017-04-16 08:00',
        'end_date' => '2017-04-16 17:00',
        'day' => 'sunday',
        'holiday' => false,
        'weekend' => true,
    ),
    array(
        'date' => '2017-04-17',
        'start_date' => '2017-04-17 08:00',
        'end_date' => '2017-04-17 17:00',
        'day' => 'monday',
        'holiday' => false,
        'weekend' => false,
    ),
    array(
        'date' => '2017-04-18',
        'start_date' => '2017-04-18 08:00',
        'end_date' => '2017-04-18 17:00',
        'day' => 'tuesday',
        'holiday' => true,
        'weekend' => false,
    ),
    array(
        'date' => '2017-04-19',
        'start_date' => '2017-04-19 08:00',
        'end_date' => '2017-04-19 17:00',
        'day' => 'wednesday',
        'holiday' => false,
        'weekend' => false,
    ),
);

function calculateWorktime($data) {
    $total = 0;

    foreach ((array) $data as $row) {
        if ($row['holiday'] === false && $row['weekend'] === false) {
            $time1 = strtotime($row['start_date']);
            $time2 = strtotime($row['end_date']);
            $hours = ($time2 - $time1) / (60 * 60); // time / 3600 s
            $total += $hours;
            
            echo $row['date'].', ';
            echo $hours.'<br />';
        }
    }

    return $total;
}

$totalWorktime = calculateWorktime($allDate);
echo 'Total worktime: '.$totalWorktime;
?>