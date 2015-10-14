<?
//Set timezone
date_default_timezone_set('Europe/Tallinn');

// Save wall clock time at the start of the script
$page_load_start = microtime(1);

//connect db
require 'include/database.php';

//set page

$page = !empty($_GET['page']) ? $_GET['page'] : 'home';

// Include controller, if it exists
if (file_exists("controllers/$page.php")) {
    require "controllers/$page.php";
}

//include template
require "templates/master_template.php";

//show page load time
echo "Lehte laaditi " . round(microtime(1) - $page_load_start, 4) . " sekundit";
?>
