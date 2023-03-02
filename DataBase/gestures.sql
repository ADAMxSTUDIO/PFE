USE PFE;

-- following table will gather all client's followings
CREATE TABLE followings (
    id INT PRIMARY KEY AUTO_INCREMENT,
    client_id INT,
    owner_id INT,
    CONSTRAINT FK_following_client FOREIGN KEY followings(client_id) REFERENCES clients(id),
    CONSTRAINT FK_following_owner FOREIGN KEY followings(owner_id) REFERENCES owners(id)
);

-- followers table will gather all photographer's followers
CREATE TABLE followers (
    id INT PRIMARY KEY AUTO_INCREMENT,
    owner_id INT,
    client_id INT,
    CONSTRAINT FK_follower_owner FOREIGN KEY followers(owner_id) REFERENCES owners(id),
    CONSTRAINT FK_follower_client FOREIGN KEY followers(client_id) REFERENCES clients(id)
);

-- collections table will gather all pictures which were collected by a client
CREATE TABLE collections (
    id INT PRIMARY KEY AUTO_INCREMENT,
    client_id INT,
    picture_id INT,
    CONSTRAINT FK_collection_client FOREIGN KEY collections(client_id) REFERENCES clients(id),
    CONSTRAINT FK_collection_picture FOREIGN KEY collections(picture_id) REFERENCES pictures(id)
);

-- likes table will gather all pictures which were liked by a client
CREATE TABLE likes (
    id INT PRIMARY KEY AUTO_INCREMENT,
    client_id INT,
    picture_id INT,
    CONSTRAINT FK_like_client FOREIGN KEY likes(client_id) REFERENCES clients(id),
    CONSTRAINT FK_like_picture FOREIGN KEY likes(picture_id) REFERENCES pictures(id)
);