DROP TABLE bank account;

;




DROP TABLE ddd;

CREATE TABLE `ddd` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `ff` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO ddd VALUES("1","gfhghhhh");
INSERT INTO ddd VALUES("2","hgj");



DROP TABLE demo;

CREATE TABLE `demo` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `no` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO demo VALUES("2","ganesh","2");
INSERT INTO demo VALUES("3","rob","3");
INSERT INTO demo VALUES("4","ron","4");
INSERT INTO demo VALUES("5","john","5");



DROP TABLE demo1;

CREATE TABLE `demo1` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name1` varchar(255) DEFAULT NULL,
  `name2` varchar(255) DEFAULT NULL,
  `name3` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO demo1 VALUES("1","aaa1","aaa","aaa1");
INSERT INTO demo1 VALUES("2","bbb1ff","bbb1","bbb1");



DROP TABLE demo4;

CREATE TABLE `demo4` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `code` varchar(255) DEFAULT NULL,
  `product name` varchar(255) DEFAULT NULL,
  `prize` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

INSERT INTO demo4 VALUES("1","101","sunglassesww","20/-");
INSERT INTO demo4 VALUES("4","601","pants","500/-");
INSERT INTO demo4 VALUES("5","122","mobiles","3000/-");
INSERT INTO demo4 VALUES("6","110","lapi","30000/-");



DROP TABLE staff;

CREATE TABLE `staff` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `teacher name` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO staff VALUES("1","john11","math1");
INSERT INTO staff VALUES("2","smith11","english");
INSERT INTO staff VALUES("4","rao11","biology");



