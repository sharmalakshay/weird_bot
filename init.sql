CREATE TABLE main_table(
id INT(10) PRIMARY KEY NOT NULL auto_increment,
question text NOT NULL,
answer text NOT NULL,
score int(10) NOT NULL DEFAULT 0
);