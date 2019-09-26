<?php

error_reporting(E_ALL);
ini_set('display_errors', true);

include_once 'vendor/autoload.php';

use TestPrivate\TestPrivate; 

(new TestPrivate)->index();