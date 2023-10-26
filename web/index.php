<?php 

/**
 * Depeurate errors;
 */
ini_set("display_errors", 1);
ini_set("log_errors", 1);
ini_set("error_log", "php_error.log");

require_once "controllers/controller.template.php";

$index = new TemplateController;
$index->index();