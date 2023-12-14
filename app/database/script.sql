CREATE TABLE user (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50),
    email VARCHAR(50),
    password VARCHAR(255),
    confirmedPass VARCHAR(255),
    role int      
);

CREATE TABLE rooms (
    id INT PRIMARY KEY AUTO_INCREMENT,
    image VARCHAR (255) NOT NULL,
    name VARCHAR(255) NOT NULL,
    nombre VARCHAR(255) NOT NULL,
    status VARCHAR(255) NOT NULL,
    prix VARCHAR(255) NOT NULL,
    type VARCHAR(255) NOT NULL,
    capacite ENUM('reserved', 'not reserved') NOT NULL
);




