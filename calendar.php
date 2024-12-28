<?php
include "./inc_php/conf.php";
include "./inc_php/session.php";
include "./inc_php/init.php";
include "./inc_php/function.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PhpMycalendar 1.0</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./style/style.css">
</head>

<body>
    <main>
        <div class="container">
            <h1 class="p-3 text-center fs-3">Welcome to PhpMycalendar V1.0</h1>
            <h3 class="p-3 text-center fs-5">Year: <?php select_year('select_year', 'form-select w-auto d-inline'); ?>| Month: <?php select_month('select_month', 'form-select w-auto d-inline'); ?></h3>
            <?php calendar(); ?>
            <nav>
                <ul class="pagination pagination-sm justify-content-center">
                    <li class="page-item"><a class="page-link" href="calendar.php?req=<?php echo strtotime(date('Y-m-d', $request_date_first_day_of_month)." - 1 year"); ?>">&lt;&lt; Previous year </a></li>
                    <li class="page-item"><a class="page-link" href="calendar.php?req=<?php echo strtotime(date('Y-m-d', $request_date_first_day_of_month)." - 1 month"); ?>">&lt; Previous month</a></li>
                    <li class="page-item"><a class="page-link" href="calendar.php?clear_session">Current month</a></li>
                    <li class="page-item"><a class="page-link" href="calendar.php?req=<?php echo strtotime(date('Y-m-d', $request_date_first_day_of_month)." + 1 month"); ?>">Next month &gt;</a></li>
                    <li class="page-item"><a class="page-link" href="calendar.php?req=<?php echo strtotime(date('Y-m-d', $request_date_first_day_of_month)." + 1 year"); ?>">Next year &gt;&gt;</a></li>
                </ul>
            </nav>
            <div>
                <?php
                //information(); 
                ?>
            </div>
        </div>
    </main>
    <script src="./js/javascript.js"></script>
</body>

</html>