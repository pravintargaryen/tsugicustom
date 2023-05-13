<?php
    session_start();
    header('Content-Type: application/json; charset=utf-8');
    if ( !isset($_SESSION['lessons']) ) $_SESSION['lessons'] = array();
    echo(json_encode($_SESSION['lessons'], JSON_PRETTY_PRINT));
