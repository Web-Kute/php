<?php
function frenchDate($date) {
    $fmt = datefmt_create(
    'fr_FR',
    IntlDateFormatter::FULL,
    IntlDateFormatter::SHORT,
    'Europe/Paris',
);
return $fmt;
    // return date("d/m/Y", strtotime($date));
}
?>