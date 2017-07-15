<?php

function get_weeks() {
    global $db;
    $query = 'SELECT * FROM weeks'
            . 'ORDER BY monStartDate';
    $statement = $db ->prepare($query);
    $statement ->execute();
    return $statement;
}

function get_week($startDate) {
    global $db;
    $query = 'SELECT * FROM weeks'
            . 'WHERE weeks.monStartDate = :startDate';
    $statement = $db->prepare($query);
    $statement ->bindValue(":startDate", $startDate);
    $statement ->execute();
    $week = $statement->fetchAll();
    $statement ->closeCursor();
    return $week;
}

function delete_week($startDate) {
        global $db;
    $query = 'DELETE FROM weeks
              WHERE weeks.monStartDate = :startDate';
    $statement = $db->prepare($query);
    $statement->bindValue(':startDate', $startDate);
    $statement->execute();
    $statement->closeCursor();
}

function edit_week($startDate, $monday, $tuesday, 
        $wednesday, $thursday, $friday, $saturday, $sunday) {
    global $db;
    $query = 'UPDATE weeks
              SET monday  = :monday, 
              tuesday = :tuesday,
              wednesday = :wednesday,
              thursday = :thursday,
              friday = :friday,
              saturday = :saturday,
              sunday = :sunday 
              WHERE weeks.monStartDate = :startDate';
    $statement = $db->prepare($query);
    $statement->bindValue(':monday', $monday);
    $statement->bindValue(':tuesday', $tuesday);
    $statement->bindValue(':wednesday', $wednesday);
    $statement->bindValue(':thursday', $thursday);
    $statement->bindValue(':friday', $friday);
    $statement->bindValue(':saturday', $saturday);
    $statement->bindValue(':sunday', $sunday);
    $statement->bindValue(':startDate', $startDate);
    $statement->execute();
    $statement->closeCursor();
}

function increment_date($tehDate, $theNumber) {
    global $db;
    $query = 'SELECT DATE_ADD(:tehDate, INTERVAL :theNumber DAY);';
    $statement = $db->prepare($query);
    $statement ->bindValue(':tehDate', $tehDate);
    $statement ->bindValue(':theNumber', $theNumber);
    $date = $statement->fetchAll();
    $statement ->closeCursor();
    return $date;
}

function add_week($startDate, $monday, $tuesday, 
        $wednesday, $thursday, $friday, $saturday, $sunday) {
    global $db;
    $query = 'INSERT INTO weeks
                 (monStartDate, monday, tuesday, wednesday, thursday, friday, saturday, sunday)
              VALUES
                 (:startDate, :monday, :tuesday, :wednesday, :thursday, :friday, :saturday, :sunday)';
    $statement = $db->prepare($query);
    $newDate = increment_date($startDate, 7);
    $statement->bindValue(':monday', $monday);
    $statement->bindValue(':monday', $monday);
    $statement->bindValue(':tuesday', $tuesday);
    $statement->bindValue(':wednesday', $wednesday);
    $statement->bindValue(':thursday', $thursday);
    $statement->bindValue(':friday', $friday);
    $statement->bindValue(':saturday', $saturday);
    $statement->bindValue(':sunday', $sunday);
    $statement->bindValue(':startDate', $newDate);
    $statement->execute();
    $statement->closeCursor();
}