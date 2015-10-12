<?

$page_load_start = microtime(1);

//connect db
require 'include/database.php';

//set page

$page = !empty($_GET['page']) ? $_GET['page'] : 'home';

//include required page
require "templates/master.php";

//show page load time
echo "Lehte laaditi " . round(microtime(1) - $page_load_start, 4) . " sekundit";
?>