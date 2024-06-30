<?php

ob_start();
require_once "accueil.php";
$pageContent = ob_get_clean();
echo $pageContent;
require "template.php";

?>