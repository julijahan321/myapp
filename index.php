<?php
require 'functions.php';
$uri=$_SERVER['REQUEST_URI'];

if($uri==='/myapp/index.php'){
    require 'controllers/index.php';
}else if($uri==='myapp/about.php'){
    require 'controllers/about.php';
}else if($uri==='myapp/contact.php'){
    require 'controllers/contact.php';
}
