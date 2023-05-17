<?php
// error_reporting(0);
// ini_set('display_errors', 0);

require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/config.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/routes.php");

ob_start();
// include($_SERVER['DOCUMENT_ROOT'] . "/template/functions.php"); // Фукции по теме. Title и т.д
include($_SERVER['DOCUMENT_ROOT'] . "/template/index.php");
ob_end_flush();
