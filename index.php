<?php

// Test 1 : Integration of the view "about" to check if the layout is working correctly:
require 'controllers/AboutController.php';
use Controllers\AboutController;

$testIntegrationView = new AboutController();
$testIntegrationView -> index();