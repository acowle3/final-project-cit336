<?php
require('model/database.php');
require('model/days_db.php');
require('model/weeks_db.php');

$action = filter_input(INPUT_POST, 'action');
if($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $check = get_weeks();
        if ($check == NULL) {
            $action = 'add_first_week';
        }
        else {
            $action = 'week_list';
        }
    }
}  

if ($action == 'add_first_week') {
    include('add_first_week.php');
}

if ($action == 'week_list') {
    theWeeks =
    include('week_list.php');
}