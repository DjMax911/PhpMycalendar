<?php 
global $request_date, $request_date_first_day_of_month, $request_date_last_day_of_month, $request_date_first_day_of_year, $request_date_last_day_of_year;

if (!isset($_SESSION['request_date'])) {
    $request_date = time();
} else {
    $request_date = $_SESSION['request_date'];
}

if (isset($_GET['req'])) {
    if (is_numeric($_GET['req'])) {
        if ($_GET['req'] > CALENDAR_START and $_GET['req'] < CALENDAR_STOP) {
            $request_date = $_GET['req'];
            $_SESSION['request_date'] = $request_date;
        }
    }
}

$request_date_first_day_of_month = strtotime('first day of this month ' . date('Y-m', $request_date));
$request_date_last_day_of_month = strtotime('last day of this month ' . date('Y-m', $request_date));
$request_date_first_day_of_year = strtotime('first day of january ' . date('Y', $request_date));
$request_date_last_day_of_year = strtotime('last day of december ' . date('Y', $request_date));
?>