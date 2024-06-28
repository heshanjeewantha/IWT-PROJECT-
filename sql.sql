CREATE TABLE login (
    id int AUTO_INCREMENT PRIMARY KEY,
    name varchar(255) NOT NULL,
    lastName varchar(255) NOT NULL,
    email varchar(255) NOT NULL,
    pass varchar(255) NOT NULL
);

CREATE TABLE comment (
    id int AUTO_INCREMENT PRIMARY KEY,
    name varchar(255) NOT NULL,
    email varchar(255) NOT NULL,
    comment varchar(255) NOT NULL,
    login_id INT,
    FOREIGN KEY (login_id) REFERENCES login(id)
);
