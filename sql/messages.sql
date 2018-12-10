CREATE TABLE messages (
  name varchar(40) NOT NULL,
  email varchar(60) NOT NULL,
  message varchar(200) NOT NULL);

INSERT INTO messages (name, email, message) VALUES
('John','johnsemail@email.com','Your game is way too hard'),
('Larry','notthecableguy@gmail.com','Nice game');
