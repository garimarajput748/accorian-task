CREATE TABLE wp_registration (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    mobile_number VARCHAR(10) NOT NULL
);

CREATE TABLE wp_contact_form (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone_number VARCHAR(10) NOT NULL,
    subject VARCHAR(50) NOT NULL,
    message VARCHAR(255) NOT NULL
);
