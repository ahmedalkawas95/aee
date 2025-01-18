CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    phone VARCHAR(15) NOT NULL,
    governorate VARCHAR(50) NOT NULL,
    referral_phone VARCHAR(15) NOT NULL,
    age INT NOT NULL,
    college VARCHAR(255) NOT NULL,
    university VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
