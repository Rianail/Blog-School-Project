<?php
session_start();

require_once 'PDOConnect.inc.php';
require_once 'loggedin.inc.php';

function myAutoLoader($class)
{
    $dirs = array(
        "./Classes/",
        "./Classes/Models/",
        "./Classes/Managers/",
        "./Classes/Repos/",
    );
    foreach ($dirs as $dir) {
        if (file_exists($dir . $class . '.inc.php')) {
            include_once $dir . $class . '.inc.php';
        }
    } 
}
spl_autoload_register('myAutoLoader');

$db = new DBConnector();
$postManagement = new PostManagement(new PostRepository($db));
$ratingManagement = new RatingManagement(new RatingRepository($db));
$commentManagement = new CommentManagement(new CommentRepository($db));
$userManagement = new UserManagement(new UserRepository($db));

$userManagement->isLoggedIn();
if (isset($_SESSION['username'])) {
    $userManagement->isAdmin($_SESSION['username']);
};
