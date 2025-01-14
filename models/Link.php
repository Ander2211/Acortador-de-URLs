<?php
class Link {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function createShortCode($long_url) {
        $short_code = substr(md5($long_url), 0, 6);
        $stmt = $this->conn->prepare("INSERT INTO links (long_url, short_code) VALUES (:long_url, :short_code)");
        $stmt->bindParam(':long_url', $long_url);
        $stmt->bindParam(':short_code', $short_code);
        $stmt->execute();
        return $short_code;
    }

    public function getLongUrl($short_code) {
        $stmt = $this->conn->prepare("SELECT long_url FROM links WHERE short_code = :short_code");
        $stmt->bindParam(':short_code', $short_code);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result ? $result['long_url'] : null;
    }
}
?>
