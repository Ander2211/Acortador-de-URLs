<?php
class LinkController {
    private $link_model;

    public function __construct($link_model) {
        $this->link_model = $link_model;
    }

    public function shorten() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $long_url = $_POST['long_url'];
            $short_code = $this->link_model->createShortCode($long_url);
            header("Location: /index.php?short_code=" . $short_code);
            exit();
        }
    }

    public function redirect($short_code) {
        $long_url = $this->link_model->getLongUrl($short_code);
        if ($long_url) {
            header("Location: " . $long_url);
            exit();
        } else {
            echo "URL not found!";
        }
    }
}
?>
