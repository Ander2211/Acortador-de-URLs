<?php
require_once '../config/database.php';
require_once '../models/Link.php';
require_once '../controllers/LinkController.php';

$link_model = new Link($conn);
$link_controller = new LinkController($link_model);

if (isset($_GET['url'])) {
    $short_code = $_GET['url'];
    $link_controller->redirect($short_code);
} else {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $link_controller->shorten();
    } else {
        include '../index.php';
    }
}
?>
