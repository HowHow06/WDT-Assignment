<?php
include_once("_admin.function.php");
if (isset($_GET['sort'])) {
    displaycurrent($_GET['sort'], $_GET['order']);
}
if (isset($_GET['sortc'])) {
    displayclosed($_GET['sortc'], $_GET['order']);
}
