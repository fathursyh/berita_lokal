<?php

use App\Core\App;
require '../vendor/autoload.php';
require '../src/Core/Config.php';

if(!session_id()  ) {
  session_start();
}

$app = new App();