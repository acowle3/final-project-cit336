<?php

function get_mondays() {
    global $db;
    $query = 'SELECT monday FROM weeks'
            . 'ORDER BY monStartDate';
    $statement = $db ->prepare($query);
    $statement ->execute();
    return $statement;
}

function get_tuesdays() {
    global $db;
    $query = 'SELECT tuesday FROM weeks'
            . 'ORDER BY monStartDate';
    $statement = $db ->prepare($query);
    $statement ->execute();
    return $statement;
}

function get_wednesdays() {
    global $db;
    $query = 'SELECT wednesday FROM weeks'
            . 'ORDER BY monStartDate';
    $statement = $db ->prepare($query);
    $statement ->execute();
    return $statement;
}

function get_thursdays() {
    global $db;
    $query = 'SELECT thursday FROM weeks'
            . 'ORDER BY monStartDate';
    $statement = $db ->prepare($query);
    $statement ->execute();
    return $statement;
}

function get_fridays() {
    global $db;
    $query = 'SELECT friday FROM weeks'
            . 'ORDER BY monStartDate';
    $statement = $db ->prepare($query);
    $statement ->execute();
    return $statement;
}

function get_saturdays() {
    global $db;
    $query = 'SELECT saturday FROM weeks'
            . 'ORDER BY monStartDate';
    $statement = $db ->prepare($query);
    $statement ->execute();
    return $statement;
}

function get_sundays() {
    global $db;
    $query = 'SELECT sunday FROM weeks'
            . 'ORDER BY monStartDate';
    $statement = $db ->prepare($query);
    $statement ->execute();
    return $statement;
}

function get_monday($startDate) {
    global $db;
    $query = 'SELECT monday FROM weeks
              WHERE monStartDate = :startDate';
    $statement = $db->prepare($query);
    $statement->bindValue(":startDate", $startDate);
    $statement->execute();
    $day = $statement->fetch();
    $statement->closeCursor();
    return $day;
}

function get_tuesday($startDate) {
    global $db;
    $query = 'SELECT tuesday FROM weeks
              WHERE monStartDate = :startDate';
    $statement = $db->prepare($query);
    $statement->bindValue(":startDate", $startDate);
    $statement->execute();
    $day = $statement->fetch();
    $statement->closeCursor();
    return $day;
}

function get_wednesday($startDate) {
    global $db;
    $query = 'SELECT wednesday FROM weeks
              WHERE monStartDate = :startDate';
    $statement = $db->prepare($query);
    $statement->bindValue(":startDate", $startDate);
    $statement->execute();
    $day = $statement->fetch();
    $statement->closeCursor();
    return $day;
}

function get_thursday($startDate) {
    global $db;
    $query = 'SELECT thursday FROM weeks
              WHERE monStartDate = :startDate';
    $statement = $db->prepare($query);
    $statement->bindValue(":startDate", $startDate);
    $statement->execute();
    $day = $statement->fetch();
    $statement->closeCursor();
    return $day;
}

function get_friday($startDate) {
    global $db;
    $query = 'SELECT friday FROM weeks
              WHERE monStartDate = :startDate';
    $statement = $db->prepare($query);
    $statement->bindValue(":startDate", $startDate);
    $statement->execute();
    $day = $statement->fetch();
    $statement->closeCursor();
    return $day;
}

function get_saturday($startDate) {
    global $db;
    $query = 'SELECT saturday FROM weeks
              WHERE monStartDate = :startDate';
    $statement = $db->prepare($query);
    $statement->bindValue(":startDate", $startDate);
    $statement->execute();
    $day = $statement->fetch();
    $statement->closeCursor();
    return $day;
}

function get_sunday($startDate) {
    global $db;
    $query = 'SELECT sunday FROM weeks
              WHERE monStartDate = :startDate';
    $statement = $db->prepare($query);
    $statement->bindValue(":startDate", $startDate);
    $statement->execute();
    $day = $statement->fetch();
    $statement->closeCursor();
    return $day;
}