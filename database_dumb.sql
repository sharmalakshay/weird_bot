# DBTools DBMYSQL - MySQL Database Dump
#

CREATE DATABASE `weird_bot`;
USE `weird_bot`;

SET FOREIGN_KEY_CHECKS=0;

# Dumping Table Structure for main_table

#
DROP TABLE IF EXISTS `main_table`;
CREATE TABLE `main_table` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `question` text NOT NULL,
  `answer` text NOT NULL,
  `score` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;
#
# Dumping Data for main_table
#
INSERT INTO `main_table` (id, question, answer, score) VALUES (20, 'hello', 'hello', 3);
INSERT INTO `main_table` (id, question, answer, score) VALUES (21, 'hello', 'how are you?', 1);
INSERT INTO `main_table` (id, question, answer, score) VALUES (22, 'how are you?', 'good, how are you?', 1);
INSERT INTO `main_table` (id, question, answer, score) VALUES (23, 'good, how are you?', 'very good, thank you', 2);
INSERT INTO `main_table` (id, question, answer, score) VALUES (24, 'hello', 'hey', 1);
INSERT INTO `main_table` (id, question, answer, score) VALUES (25, 'hey', 'how are you?', 2);
INSERT INTO `main_table` (id, question, answer, score) VALUES (26, 'very good, thank you', 'so what\'s up?', 0);
INSERT INTO `main_table` (id, question, answer, score) VALUES (27, 'hey', 'hey', 3);
INSERT INTO `main_table` (id, question, answer, score) VALUES (28, 'very good, thank you', 'so what\'s up?', 0);
INSERT INTO `main_table` (id, question, answer, score) VALUES (29, 'so what\'s up?', 'ah nothing much, you say', 0);
INSERT INTO `main_table` (id, question, answer, score) VALUES (30, 'ah nothing much, you say', 'nothing much either', 0);
INSERT INTO `main_table` (id, question, answer, score) VALUES (31, 'nothing much either', 'alright then let\'s talk later', 0);
INSERT INTO `main_table` (id, question, answer, score) VALUES (32, 'alright then let\'s talk later', 'okay, see you then', 0);
INSERT INTO `main_table` (id, question, answer, score) VALUES (33, 'okay, see you then', 'byee', 0);
INSERT INTO `main_table` (id, question, answer, score) VALUES (34, 'byee', 'bye', 0);
INSERT INTO `main_table` (id, question, answer, score) VALUES (35, 'bye', 'bye', 1);
INSERT INTO `main_table` (id, question, answer, score) VALUES (36, 'bye', 'byee', 0);
INSERT INTO `main_table` (id, question, answer, score) VALUES (37, 'how are you?', 'good', 0);
INSERT INTO `main_table` (id, question, answer, score) VALUES (38, 'Hi lakshay how r u', 'Hi lakshay how r u', 0);
INSERT INTO `main_table` (id, question, answer, score) VALUES (39, 'The big bad wicked fox jumped over the lazy dog', 'The big bad wicked fox jumped over the lazy dog', 0);
INSERT INTO `main_table` (id, question, answer, score) VALUES (40, 'Hello', 'Hello', 0);
INSERT INTO `main_table` (id, question, answer, score) VALUES (41, 'hello', 'How are You doing', 0);
INSERT INTO `main_table` (id, question, answer, score) VALUES (42, 'How are You doing', 'I am Fine', 0);
INSERT INTO `main_table` (id, question, answer, score) VALUES (43, 'I am Fine', 'are you busy now', 0);
INSERT INTO `main_table` (id, question, answer, score) VALUES (44, 'are you busy now', 'Yes very busy', 0);
INSERT INTO `main_table` (id, question, answer, score) VALUES (45, 'Yes very busy', 'Tell me how can I help you', 0);
SET FOREIGN_KEY_CHECKS=1

