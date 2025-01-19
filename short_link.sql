CREATE DATABASE IF NOT EXISTS short_link;
USE short_link;

CREATE TABLE links (
    id INT AUTO_INCREMENT PRIMARY KEY,
    long_url VARCHAR(255) NOT NULL,
    short_code VARCHAR(10) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


select * from links
