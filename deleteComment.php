<?php

require_once './includes/ini.inc.php';

if (isset($_GET['cnum'])) {
    $cnum = $_GET['cnum'];
    $user = $_SESSION['username'];
    $commentManagement->deleteComment($cnum, $user);
    header('Location: index.php#b' . $bnum);
    exit;
}
