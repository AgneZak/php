<?php
define('ROOT', __DIR__);
define('DB_FILE', ROOT . '/app/data/db.json');

session_start();

require 'core/functions/html.php';
require 'core/functions/form/core.php';
require 'core/functions/form/validators.php';
require 'core/functions/file.php';
require 'core/classes/FileDB.php';
require 'app/functions/form/validators.php';
require 'app/functions/form/auth.php';
require 'app/functions/generators.php';


