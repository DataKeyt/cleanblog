<?

$page_load_start = microtime(1);

//connect db
require 'include/database.php';

//set page

$page = isset($_GET['page']) ? $_GET['page'] : 'home';

//include required page
require "pages/$page.php";

echo "Lehte laaditi " . round(microtime(1) - $page_load_start, 4) . " sekundit";
?>