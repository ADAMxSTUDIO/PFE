CREATE DATABASE PFE;
USE PFE;

-- clients table will contain all client infos
CREATE TABLE clients (
    id INT PRIMARY KEY AUTO_INCREMENT,
    firstname VARCHAR(15) NOT NULL,
    lastname VARCHAR(15) NOT NULL,
    email VARCHAR(35) UNIQUE NOT NULL,
    password VARCHAR NOT NULL,
    profile_pic TEXT
);

-- owners table will contain all photographer or pic owner infos
CREATE TABLE owners (
    id INT PRIMARY KEY AUTO_INCREMENT,
    firstname VARCHAR(15) NOT NULL,
    lastname VARCHAR(15) NOT NULL,
    email VARCHAR(35) UNIQUE NOT NULL,
    password VARCHAR NOT NULL,
    profile_pic TEXT,
    paypal VARCHAR(35) NOT NULL,
    bio VARCHAR(255) NOT NULL DEFAULT 'No bio.',
    -- total_views: total pictures views
    income FLOAT DEFAULT 0
);

-- default profile picture constraint
ALTER TABLE clients
    ALTER profile_pic SET DEFAULT 'imgs/profiles/default-profile-picture.jpg';
ALTER TABLE owners
    ALTER profile_pic SET DEFAULT 'imgs/profiles/default-profile-picture.jpg';

-- categories table will contain all pictures categories
CREATE TABLE categories (
    id INT PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(30) NOT NULL,
    preview VARCHAR NOT NULL 
);

-- pictures table will contain all owner's picture infos
CREATE TABLE pictures (
    id INT PRIMARY KEY AUTO_INCREMENT,
    src TEXT NOT NULL,
    license BOOLEAN NOT NULL,
    category_id INT,
    dimensions VARCHAR(11) NOT NULL,
    aspect_ratio VARCHAR(5) NOT NULL,
    file_size INT NOT NULL,
    views INT DEFAULT 0,
    price FLOAT NOT NULL,
    -- likes
    -- favorites
    owner_id INT,
    CONSTRAINT FK_picture_owner FOREIGN KEY pictures(owner_id) REFERENCES owners(id),
    CONSTRAINT FK_picture_category FOREIGN KEY pictures(category_id) REFERENCES categories(id)
);   

-- sales table will contain all picture sale infos
CREATE TABLE sales (
    id INT PRIMARY KEY AUTO_INCREMENT,
    picture_id INT,
    client_id INT,
    CONSTRAINT FK_sale_picture FOREIGN KEY sales(picture_id) REFERENCES pictures(id),
    CONSTRAINT FK_sale_client FOREIGN KEY sales(client_id) REFERENCES clients(id)
);