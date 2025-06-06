<?php

// API
require_once __DIR__ . '/../../vendor/autoload.php';

$env = parse_ini_file('../.env');

define('DBHOST', $env['DBHOST']);
define('DBNAME', $env['DBNAME']);
define('DBUSER', $env['DBUSER']);
define('DBPASS', $env['DBPASS']);

$_ENV['OPENAI_API_KEY'] = $env['OPENAI_API_KEY'];

// Core
require '../app/core/Router.php';

require '../app/models/Model.php';
require '../app/controllers/Controller.php';

// Controllers
require '../app/controllers/WorkoutController.php';
require '../app/controllers/AuthController.php';
require '../app/controllers/MainController.php';
require '../app/controllers/ContactController.php';
require '../app/controllers/AboutController.php'; 

// Models
require '../app/models/Workout.php';
require '../app/models/User.php';
require '../app/models/Contact.php';