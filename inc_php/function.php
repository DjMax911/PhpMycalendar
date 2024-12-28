<?php
function echo_p($data)
{
    printf("<p class='m-0'>%s</p>\n", $data);
}

function echo_r($data)
{
    printf("%s\n", $data);
}

function select_year($name = 'select_year', $class = '')
{
    $i = CALENDAR_START;
    echo_r("<select name='$name' class='$class' onchange='jsChangeYear(this)'>");
    while ($i < CALENDAR_STOP) {
        if (date('Y', $i) == date('Y', $GLOBALS['request_date'])) {
            $selected = " selected";
        } else {
            $selected = "";
        };
        echo_r("<option value='$i'$selected>" . date('Y', $i) . "</option>");
        $i = strtotime('+ 1 year', $i);
    }
    echo_r("</select>");
}

function select_month($name = 'select_month', $class = '')
{
    $i = $GLOBALS['request_date_first_day_of_year'];
    echo_r("<select name='$name' class='$class' onchange='jsChangeMonth(this)'>");
    while ($i < $GLOBALS['request_date_last_day_of_year']) {
        if (date('m', $i) == date('m', $GLOBALS['request_date'])) {
            $selected = " selected";
        } else {
            $selected = "";
        };
        echo_r("<option value='$i'$selected>" . date('F', $i) . "</option>");
        $i = strtotime('+ 1 month', $i);
    }
    echo_r("</select>");
}

function calendar()
{
    $diff = date('w', $GLOBALS['request_date_first_day_of_month']) - CALENDAR_WEEK_START;
    if ($diff < 0) {
        $diff = $diff + 7;
    }

    $calendar_date = strtotime(date('Y-m-d', $GLOBALS['request_date_first_day_of_month']) . " - $diff days");
    $calendar_date_header = $calendar_date;

    echo_r('<table class="MyC_table table">');
    echo_r('    <thead>');
    echo_r('        <tr>');
    $i = 0;
    while ($i < CALENDAR_WEEK) {
        echo_r('            <th class="table-secondary fs-5 col-1 text-center" style="height: '.CALENDAR_TH_HEIGHT.'px">');
        echo_r('                ' . date('l', $calendar_date_header));
        echo_r('            </th>');
        $calendar_date_header = strtotime(date('Y-m-d', $calendar_date_header) . " + 1 day");
        $i++;
    }
    echo_r('        </tr>');
    echo_r('    </thead>');
    echo_r('    <tbody>');
    while ($calendar_date <= $GLOBALS['request_date_last_day_of_month']) {
        $i = 0;
        echo_r('        <tr style="height: '.CALENDAR_TD_HEIGHT.'px">');
        while ($i < CALENDAR_WEEK) {
            if ($calendar_date >= $GLOBALS['request_date_first_day_of_month'] and $calendar_date <= $GLOBALS['request_date_last_day_of_month']) {
                $class_in_month = 'MyC_in_month';
            } else {
                $class_in_month = 'MyC_not_in_month';
            }
            if (date('Y-m-d', $calendar_date) == date('Y-m-d', time())){$today_class = ' table-primary';} else {$today_class = '';}
            echo_r('            <td class="MyC_td'.$today_class.'">');
            echo_r('                <span class="MyC_full_date">' . date('Y-m-d', $calendar_date) . '</span>');
            echo_r('                <span class="' . $class_in_month . '">' . date('d', $calendar_date) . '</span>');
            echo_r('            </td>');
            $i++;
            $calendar_date = strtotime(date('Y-m-d', $calendar_date) . " + 1 day");
        }
        echo_r('</tr>');
    }
    echo_r('    <tbody>');
    echo_r('</table>');
}

function information()
{
    echo_p("Actual date: " . date('Y-m-d'));
    echo_p("Request date: " . date('Y-m-d', $GLOBALS['request_date']));
    echo_p("First day of requested month: " . date('Y-m-d', $GLOBALS['request_date_first_day_of_month']));
    echo_p("Last day of requested month: " . date('Y-m-d', $GLOBALS['request_date_last_day_of_month']));
    echo_p("First day of requesed year: " . date('Y-m-d', $GLOBALS['request_date_first_day_of_year']));
    echo_p("Last day of requested year: " . date('Y-m-d', $GLOBALS['request_date_last_day_of_year']));
    echo_p("Request date start by day: " . date('D (w)', $GLOBALS['request_date']));
    echo_p("Weeks start by: " . CALENDAR_WEEK_START);
}
