DROP TABLE admin;

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10002 DEFAULT CHARSET=latin1;

INSERT INTO admin VALUES("10001","vikas patil","admin","admin123");



DROP TABLE attendance;

CREATE TABLE `attendance` (
  `reg_no` int(11) NOT NULL,
  `timing` varchar(30) NOT NULL,
  `date` date NOT NULL,
  KEY `student_id` (`reg_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO attendance VALUES("6544","Morning","0000-00-00");
INSERT INTO attendance VALUES("6544","Morning","0000-00-00");
INSERT INTO attendance VALUES("6544","Morning","2015-08-20");
INSERT INTO attendance VALUES("6544","Morning","2015-08-21");
INSERT INTO attendance VALUES("6544","Morning","0000-00-00");
INSERT INTO attendance VALUES("6544","Morning","0000-00-00");
INSERT INTO attendance VALUES("6544","Morning","0000-00-00");
INSERT INTO attendance VALUES("6544","Morning","0000-00-00");
INSERT INTO attendance VALUES("6544","Morning","0000-00-00");
INSERT INTO attendance VALUES("6544","Morning","0000-00-00");
INSERT INTO attendance VALUES("6544","Morning","2015-08-13");
INSERT INTO attendance VALUES("6544","Afternoon","2015-08-27");
INSERT INTO attendance VALUES("6534","Morning","2015-08-21");
INSERT INTO attendance VALUES("6544","Morning","2015-08-21");
INSERT INTO attendance VALUES("0","Afternoon","2015-08-22");
INSERT INTO attendance VALUES("6528","Afternoon","2015-08-22");
INSERT INTO attendance VALUES("6534","Morning","2015-08-25");
INSERT INTO attendance VALUES("6544","Morning","2015-08-25");
INSERT INTO attendance VALUES("6534","Morning","2015-08-28");
INSERT INTO attendance VALUES("6544","Morning","2015-09-16");



DROP TABLE book;

CREATE TABLE `book` (
  `book_id` int(11) NOT NULL AUTO_INCREMENT,
  `book_title` varchar(100) CHARACTER SET utf8 NOT NULL,
  `category_id` int(50) NOT NULL,
  `author` varchar(50) CHARACTER SET utf8 NOT NULL,
  `book_copies` int(11) NOT NULL,
  `book_pub` varchar(100) CHARACTER SET utf8 NOT NULL,
  `publisher_name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `isbn` varchar(50) CHARACTER SET utf8 NOT NULL,
  `copyright_year` int(11) NOT NULL,
  `status` varchar(30) CHARACTER SET utf8 NOT NULL,
  `date_added` date NOT NULL,
  PRIMARY KEY (`book_id`)
) ENGINE=InnoDB AUTO_INCREMENT=115 DEFAULT CHARSET=latin1;

INSERT INTO book VALUES("101","???? ?????","802","?????","12","???????????","?????? ?????????","878778878","2015","Lost","2015-09-15");
INSERT INTO book VALUES("102","mkl","801","ff","5","gg","fgg","4545","2015","New","2015-09-02");
INSERT INTO book VALUES("103","fghfg","803","fghfgh","44","fgh","fgh","6456546","2014","New","2015-09-03");
INSERT INTO book VALUES("113","ghjh","801","ghj","44","ghj","gh","67657","2222","Archive","2015-09-07");
INSERT INTO book VALUES("114","ghjgh","803","ghj","77","hj","hjk","798989","2015","New","2015-09-07");



DROP TABLE borrow;

CREATE TABLE `borrow` (
  `borrow_id` int(11) NOT NULL AUTO_INCREMENT,
  `member_id` bigint(50) NOT NULL,
  `date_borrow` varchar(100) NOT NULL,
  `due_date` varchar(100) DEFAULT NULL,
  `fine` varchar(255) NOT NULL DEFAULT '0',
  PRIMARY KEY (`borrow_id`),
  KEY `borrowerid` (`member_id`),
  KEY `borrowid` (`borrow_id`)
) ENGINE=MyISAM AUTO_INCREMENT=532 DEFAULT CHARSET=utf8;

INSERT INTO borrow VALUES("529","56","2015-09-07 16:16:33","2015-09-04","0");
INSERT INTO borrow VALUES("530","57","2015-09-07 16:17:59","2015-09-02","50");
INSERT INTO borrow VALUES("531","8080","2015-09-07 18:05:46","2015-09-01","60");



DROP TABLE borrowdetails;

CREATE TABLE `borrowdetails` (
  `borrow_details_id` int(11) NOT NULL AUTO_INCREMENT,
  `book_id` int(11) NOT NULL,
  `borrow_id` int(11) NOT NULL,
  `borrow_status` varchar(50) NOT NULL,
  `date_return` varchar(100) NOT NULL,
  PRIMARY KEY (`borrow_details_id`)
) ENGINE=MyISAM AUTO_INCREMENT=210 DEFAULT CHARSET=latin1;

INSERT INTO borrowdetails VALUES("207","101","529","pending","");
INSERT INTO borrowdetails VALUES("208","102","530","returned","2015-09-07");
INSERT INTO borrowdetails VALUES("209","114","531","returned","2015-09-07");



DROP TABLE bus_system;

CREATE TABLE `bus_system` (
  `bus_id` int(11) NOT NULL AUTO_INCREMENT,
  `bus_name` varchar(255) NOT NULL,
  `driver_name` varchar(255) NOT NULL,
  `pickup_time` varchar(255) NOT NULL,
  `drop_time` varchar(255) NOT NULL,
  `area` varchar(255) NOT NULL,
  PRIMARY KEY (`bus_id`)
) ENGINE=InnoDB AUTO_INCREMENT=1006 DEFAULT CHARSET=latin1;

INSERT INTO bus_system VALUES("1001","ganga","mahesh","9.30am","7pm","Renapur Naka");
INSERT INTO bus_system VALUES("1002","232234","ramesh","9.30am","7pm","Nandi Stop");
INSERT INTO bus_system VALUES("1004","narmada","gopal1","10am","6pm","Shivaji Chowk");
INSERT INTO bus_system VALUES("1005","sant ","tuka","10.30am","6.30pm","Renapur Naka");



DROP TABLE calendar;

CREATE TABLE `calendar` (
  `date` date NOT NULL,
  `timing` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO calendar VALUES("2015-08-08","Morning");
INSERT INTO calendar VALUES("2015-08-09","Morning");
INSERT INTO calendar VALUES("2015-08-06","Morning");
INSERT INTO calendar VALUES("2015-08-07","Morning");
INSERT INTO calendar VALUES("2015-08-05","Morning");
INSERT INTO calendar VALUES("2015-08-05","Afternoon");
INSERT INTO calendar VALUES("2015-08-06","Afternoon");
INSERT INTO calendar VALUES("2015-08-07","Afternoon");
INSERT INTO calendar VALUES("2015-08-08","Afternoon");
INSERT INTO calendar VALUES("2015-08-10","Afternoon");
INSERT INTO calendar VALUES("2015-08-11","Afternoon");
INSERT INTO calendar VALUES("2015-07-01","Morning");
INSERT INTO calendar VALUES("2015-07-01","Afternoon");
INSERT INTO calendar VALUES("2015-07-02","Morning");
INSERT INTO calendar VALUES("2015-07-02","Afternoon");



DROP TABLE category;

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`category_id`),
  UNIQUE KEY `category_id` (`category_id`),
  KEY `classid` (`category_id`)
) ENGINE=MyISAM AUTO_INCREMENT=807 DEFAULT CHARSET=utf8;

INSERT INTO category VALUES("801","?????");
INSERT INTO category VALUES("802","English");
INSERT INTO category VALUES("803","Math");
INSERT INTO category VALUES("804","Science");
INSERT INTO category VALUES("805","General");
INSERT INTO category VALUES("806","References");



DROP TABLE chavli_report;

CREATE TABLE `chavli_report` (
  `date` date NOT NULL,
  `total_student` int(11) NOT NULL,
  `prev_chavli_remain` int(11) NOT NULL,
  `current_month_chavli_got` int(11) NOT NULL,
  `total_chavli` int(11) NOT NULL,
  `total_plates` int(11) NOT NULL,
  `chavli_cooked` int(11) NOT NULL,
  `monthEnd_remaining_chavli` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO chavli_report VALUES("2015-08-01","1","1","1","1","1","1","1");



DROP TABLE halad_report;

CREATE TABLE `halad_report` (
  `date` date NOT NULL,
  `total_student` int(11) NOT NULL,
  `prev_halad_remain` int(11) NOT NULL,
  `current_month_halad_got` int(11) NOT NULL,
  `total_halad` int(11) NOT NULL,
  `total_plates` int(11) NOT NULL,
  `halad_cooked` int(11) NOT NULL,
  `monthEnd_remaining_halad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO halad_report VALUES("2015-08-04","22","22","22","22","22","22","22");



DROP TABLE harbara_report;

CREATE TABLE `harbara_report` (
  `date` date NOT NULL,
  `total_student` int(11) NOT NULL,
  `prev_harbara_remain` int(11) NOT NULL,
  `current_month_harbara_got` int(11) NOT NULL,
  `total_harbara` int(11) NOT NULL,
  `total_plates` int(11) NOT NULL,
  `harbara_cooked` int(11) NOT NULL,
  `monthEnd_remaining_harbara` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO harbara_report VALUES("2015-08-01","44","44","4","4","4","4","4");



DROP TABLE jire_report;

CREATE TABLE `jire_report` (
  `date` date NOT NULL,
  `total_student` int(11) NOT NULL,
  `prev_jire_remain` int(11) NOT NULL,
  `current_month_jire_got` int(11) NOT NULL,
  `total_jire` int(11) NOT NULL,
  `total_plates` int(11) NOT NULL,
  `jire_cooked` int(11) NOT NULL,
  `monthEnd_remaining_jire` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO jire_report VALUES("2015-08-01","99","99","99","99","99","99","99");



DROP TABLE master;

CREATE TABLE `master` (
  `reg_no` int(11) NOT NULL,
  `student_name` varchar(300) CHARACTER SET utf8 DEFAULT NULL,
  `mother_name` varchar(300) CHARACTER SET utf8 DEFAULT NULL,
  `gender` varchar(40) DEFAULT NULL,
  `Mother_tongue` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `birthdate` date NOT NULL,
  `age` int(11) DEFAULT NULL,
  `nationality` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `religion` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `caste` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `sub_caste` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `category` varchar(40) DEFAULT NULL,
  `father_name` varchar(300) CHARACTER SET utf8 DEFAULT NULL,
  `father_occupation` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `annual_income` varchar(100) DEFAULT NULL,
  `birth_place` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `district` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `state` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `prev_class` varchar(100) DEFAULT NULL,
  `prev_school_name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `admission_date` date NOT NULL,
  `admission_class` varchar(100) DEFAULT NULL,
  `prev_mark_sheet` varchar(100) DEFAULT NULL,
  `prev_tc` varchar(100) DEFAULT NULL,
  `nadar_fee` varchar(100) DEFAULT NULL,
  `permanent_address` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `medium` varchar(100) DEFAULT NULL,
  `school_leaving_class` varchar(40) DEFAULT NULL,
  `school_leaving_date` date NOT NULL,
  `student_progress` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `behaviour` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `school_leaving_reason` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `tc_no` varchar(40) DEFAULT NULL,
  `tc_date` date NOT NULL,
  `tc_remark` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `aadhar_no` varchar(255) DEFAULT NULL,
  `bank_account_no` varchar(255) DEFAULT NULL,
  `bank_branch` varchar(255) DEFAULT NULL,
  `bank_branch_code` varchar(255) DEFAULT NULL,
  `lic_id_no` varchar(255) DEFAULT NULL,
  `minority_details` varchar(255) DEFAULT NULL,
  `admitted_division` varchar(100) DEFAULT NULL,
  `student_name1` varchar(100) DEFAULT NULL,
  `current_class` varchar(100) DEFAULT NULL,
  `current_class_entry_date` date NOT NULL,
  `status` varchar(100) DEFAULT NULL,
  `contact_no` varchar(100) DEFAULT NULL,
  `fee_concession` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `admission_month` varchar(100) DEFAULT NULL,
  `admission_year` varchar(100) DEFAULT NULL,
  `handicapped` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `scholarship` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `exam_seat_no` varchar(100) DEFAULT NULL,
  `10_percentage` varchar(100) DEFAULT NULL,
  `9_percentage` varchar(100) DEFAULT NULL,
  `8_grade` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `7_grade` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `6_grade` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `5_grade` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `4_grade` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `3_grade` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `2_grade` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `1_grade` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `student_img_url` varchar(100) DEFAULT NULL,
  `tc_pdf_url` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`reg_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO master VALUES("444","rrr","","M","","2015-09-09","12","","","","","Open","","","","","","","","","0000-00-00","","Yes","Yes","Yes","","","","0000-00-00","","","","","0000-00-00","","","","","","","","","","7","0000-00-00","Present","777768886","","","","","Savitri_Bai","","","","","","","","","","","","","");
INSERT INTO master VALUES("1234","????? ????? ","???? ","M","????? ","2015-08-07","12","?????? ","hindu","maratha","maratha","Open","Gopalrao","Farmar","50000","Latur","Latur","Maharashtra","8","Jilha Parishad,Latur","2015-08-20","9","Yes","Yes","Yes","Shiv Nagar ,Latur","S","6","2015-08-05","good","good","no","123456","2015-08-27","good","","","","","","","","","5","0000-00-00","","5754548548","","","","","","455","as","","as","","a","","a","","a","","","");
INSERT INTO master VALUES("6528","???? ????? ????? ","??? ","M","????? ","2003-08-11","12","??????","????? ","?????","--","OBC"," ????? ??? ????? ","Farmer","40000","????? ??.?????","?????","??????????","6","?????? ????? ,?????","2011-08-16","7","Yes","Yes","Yes","?????? ??? ,?????","S","7","2015-08-05","???","??????","?????? ???????? ??????????","2556","2015-08-20","??????","44552341","2220001233","SBH","SBI4404","233304","49","B","Amit Rahul Patil","7","2014-06-10","Left School","9922330022","?? ????","5","2013","--","Handicapped","66277","66","55","? -?","? -?","? -?","? -?","? -?","? -?","? -?","? -?","","");
INSERT INTO master VALUES("6534","????? ???? ?????","???","M","?????","2015-08-02","13","??????","?????","?????","--","Open","???? ??? ?????","Farmer","600000","??????,??.?????","?????","??????????","6","???? ?????????? ????????,?????","2015-08-07","7","Yes","Yes","Yes","?????? ??? ,?????","S","7","2015-08-12","???","??????","?????? ???????? ??????????","5511","2015-08-12","??????","5676","344444","","4444","","56","","Ram Ganesh Patil","6","0000-00-00","Present","6655544333","","","2015","--","Unclean_business","645656","45","45","? -?","? -?","? -?","? -?","? -?","? -?","? -?","? -?","","");
INSERT INTO master VALUES("6544","?????","???","M","?????","2015-08-12","12","??????","????? ","???????","--","Open","??? ???? ?????","?????","68888","??? ???,?????","?????","??????????","6","???? ?????????? ????????,?????","2015-08-08","7","Yes","Yes","Yes","?????????,?????","S","","0000-00-00","","","","","0000-00-00","","4556","454656","SBI","4455","434232323","33","B","Ram Ganesh Patil","6","2015-08-27","Left School","6655544333","?? ???? ","7","2014","---","Adivasi_Scholarship","","","","","","","","","","","","","");
INSERT INTO master VALUES("6548","????? ??? ????? ","???","M","????? ","2003-07-14","12","?????? ","????? ","????? ","-","Open","????? ????? ?????  ","farmer","70000","????? ??.????? ","?????","?????????? ","6","?????? ????? ,????? ","2015-02-10","7","Yes","Yes","Yes","?????? ??? ,?????","S","7","2015-08-01","??? ","?????? ","?????? ???????? ??????????","2255","2015-08-01","?????? ","4465582471","202288456123","SBI","sbi2205","201111","48","A","Nagme Ram Sunil","5","2014-06-10","Left School","9900337654","?? ???? ","6","2015","--","Minority","68773","77","65","? -?","? -?","? -?","? -?","? -?","? -?","? -?","? -?","","");
INSERT INTO master VALUES("8080","vivek bale-patil","bb","M","bb","2015-09-10","17","indian","hindu","hindu","--","Open","Bandu","farmar","800000","Latur","latur","mh","6","gg","2015-09-16","7","Yes","Yes","Yes","Latur city","m","","0000-00-00","","","","","0000-00-00","","","","","","","","","","7","0000-00-00","Present","99999999","","","","","","","","","","","","","","","","","","");
INSERT INTO master VALUES("777777","j","j","M","j","2015-09-03","78","n","n","nn","n","Open","hh","n","n","n","n","n","n","ghj","2015-09-09","8","Yes","Yes","Yes","Latur City","hgj","","0000-00-00","","","","","0000-00-00","","566","546","fh","fg","56","56","a","xgvc","7","0000-00-00","Present","7878","gf","6","2015","fg","No","","","","","","","","","","","","","");
INSERT INTO master VALUES("1222222","Ganesh More","nn","M","nn","2003-05-06","16","indian","hindu","hindu","--","Open","Bandu","farmar","","Latur","latur","mh","6","gg","2015-09-16","7","Yes","Yes","Yes","Latur city","m","","0000-00-00","","","","","0000-00-00","","","","","","","","","","7","0000-00-00","Present","8888888888","","","","","","","","","","","","","","","","","","");



DROP TABLE masurdal_report;

CREATE TABLE `masurdal_report` (
  `date` date NOT NULL,
  `total_student` int(11) NOT NULL,
  `prev_masurdal_remain` int(11) NOT NULL,
  `current_month_masurdal_got` int(11) NOT NULL,
  `total_masurdal` int(11) NOT NULL,
  `total_plates` int(11) NOT NULL,
  `masurdal_cooked` int(11) NOT NULL,
  `monthEnd_remaining_masurdal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO masurdal_report VALUES("2015-08-01","1","1","1","1","1","1","1");
INSERT INTO masurdal_report VALUES("2015-08-03","3","3","3","3","3","3","3");



DROP TABLE matki_report;

CREATE TABLE `matki_report` (
  `date` date NOT NULL,
  `total_student` int(11) NOT NULL,
  `prev_matki_remain` int(11) NOT NULL,
  `current_month_matki_got` int(11) NOT NULL,
  `total_matki` int(11) NOT NULL,
  `total_plates` int(11) NOT NULL,
  `matki_cooked` int(11) NOT NULL,
  `monthEnd_remaining_matki` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO matki_report VALUES("2015-08-01","1","1","1","1","1","1","1");
INSERT INTO matki_report VALUES("2015-08-05","5","5","5","5","5","5","5");



DROP TABLE member;

CREATE TABLE `member` (
  `member_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `year_level` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`member_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8081 DEFAULT CHARSET=utf8;

INSERT INTO member VALUES("56","?????? ?????","Male","????? ????","99999","Teacher","7","Active");
INSERT INTO member VALUES("57","ram desmukh","Male","Latur City","90902","Student","7","Active");
INSERT INTO member VALUES("58","kavita survse","Female","Latur City","123","Student","5","Active");
INSERT INTO member VALUES("59","sam potil","Male","Latur City","9340","Student","4","Active");
INSERT INTO member VALUES("60","shailesh birajdar","Male","Latur City","898988888","Student","8","Active");
INSERT INTO member VALUES("62","sumit waghmare","Male","Latur City","988998889","Teacher","Faculty","Active");
INSERT INTO member VALUES("65","rajesh bond","Male","Latur City","8889344444","Teacher","Faculty","Active");
INSERT INTO member VALUES("67","Ganesh More","M","Latur city","8888888888","Student","7","Active");
INSERT INTO member VALUES("8080","vivek bale-patil","M","Latur city","99999999","Student","7","Active");



DROP TABLE mirchi_powder_report;

CREATE TABLE `mirchi_powder_report` (
  `date` date NOT NULL,
  `total_student` int(11) NOT NULL,
  `prev_mirchi_powder_remain` int(11) NOT NULL,
  `current_month_mirchi_powder_got` int(11) NOT NULL,
  `total_mirchi_powder` int(11) NOT NULL,
  `total_plates` int(11) NOT NULL,
  `mirchi_powder_cooked` int(11) NOT NULL,
  `monthEnd_remaining_mirchi_powder` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO mirchi_powder_report VALUES("2015-08-03","3","3","3","3","3","3","3");



DROP TABLE mohari_report;

CREATE TABLE `mohari_report` (
  `date` date NOT NULL,
  `total_student` int(11) NOT NULL,
  `prev_mohari_remain` int(11) NOT NULL,
  `current_month_mohari_got` int(11) NOT NULL,
  `total_mohari` int(11) NOT NULL,
  `total_plates` int(11) NOT NULL,
  `mohari_cooked` int(11) NOT NULL,
  `monthEnd_remaining_mohari` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO mohari_report VALUES("2015-08-10","12","12","12","12","12","12","12");



DROP TABLE mug_report;

CREATE TABLE `mug_report` (
  `date` date NOT NULL,
  `total_student` int(11) NOT NULL,
  `prev_mug_remain` int(11) NOT NULL,
  `current_month_mug_got` int(11) NOT NULL,
  `total_mug` int(11) NOT NULL,
  `total_plates` int(11) NOT NULL,
  `mug_cooked` int(11) NOT NULL,
  `monthEnd_remaining_mug` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO mug_report VALUES("2015-08-01","1","1","1","1","1","1","1");
INSERT INTO mug_report VALUES("2015-08-10","11","1","11","11","1","11","1");



DROP TABLE mugdal_report;

CREATE TABLE `mugdal_report` (
  `date` date NOT NULL,
  `total_student` int(11) NOT NULL,
  `prev_mugdal_remain` int(11) NOT NULL,
  `current_month_mugdal_got` int(11) NOT NULL,
  `total_mugdal` int(11) NOT NULL,
  `total_plates` int(11) NOT NULL,
  `mugdal_cooked` int(11) NOT NULL,
  `monthEnd_remaining_mugdal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO mugdal_report VALUES("2015-08-01","1","1","1","1","1","1","1");
INSERT INTO mugdal_report VALUES("2015-07-01","2","2","2","2","2","2","2");



DROP TABLE purak_aahar;

CREATE TABLE `purak_aahar` (
  `date` date NOT NULL,
  `total_student` int(11) NOT NULL,
  `prev_purak_aahar` int(11) NOT NULL,
  `current_month_purak_aahar_got` int(11) NOT NULL,
  `total_purak_aahar` int(11) NOT NULL,
  `total_plates` int(11) NOT NULL,
  `purak_aahar_cooked` int(11) NOT NULL,
  `monthEnd_remaining_purak_aahar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE rice_report;

CREATE TABLE `rice_report` (
  `date` date NOT NULL,
  `total_student` int(11) NOT NULL,
  `prev_rice_remain` int(11) NOT NULL,
  `current_month_rice_got` int(11) NOT NULL,
  `total_rice` int(11) NOT NULL,
  `total_plates` int(11) NOT NULL,
  `cooked_rice` int(11) NOT NULL,
  `monthEnd_remaining_rice` int(11) NOT NULL,
  PRIMARY KEY (`date`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO rice_report VALUES("2015-07-01","23","23","23","23","232","23","232");
INSERT INTO rice_report VALUES("2015-07-02","45","444","44","4","444","4","44");
INSERT INTO rice_report VALUES("2015-08-01","1","1","12","1","1","1","1");
INSERT INTO rice_report VALUES("2015-08-03","3","4","5","6","7","8","9");
INSERT INTO rice_report VALUES("2015-08-04","66","77","8","7","8","8","8");
INSERT INTO rice_report VALUES("2015-08-10","55","5","5","5","5","5","5");
INSERT INTO rice_report VALUES("2015-08-18","4","4","4","4","4","4","4");



DROP TABLE salt_report;

CREATE TABLE `salt_report` (
  `date` date NOT NULL,
  `total_student` int(11) NOT NULL,
  `prev_salt` int(11) NOT NULL,
  `current_month_salt_got` int(11) NOT NULL,
  `total_salt` int(11) NOT NULL,
  `total_plates` int(11) NOT NULL,
  `salt_cooked` int(11) NOT NULL,
  `monthEnd_remaining_salt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO salt_report VALUES("2015-08-01","55","5","5","55","5","5","5");



DROP TABLE soyabin_tel_report;

CREATE TABLE `soyabin_tel_report` (
  `date` date NOT NULL,
  `total_student` int(11) NOT NULL,
  `prev_soyabin_tel_remain` int(11) NOT NULL,
  `current_month_soyabin_tel_got` int(11) NOT NULL,
  `total_soyabin_tel` int(11) NOT NULL,
  `total_plates` int(11) NOT NULL,
  `soyabin_tel_cooked` int(11) NOT NULL,
  `monthEnd_remaining_soyabin_tel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO soyabin_tel_report VALUES("2015-08-01","77","77","77","77","77","77","77");



DROP TABLE student_bus_status;

CREATE TABLE `student_bus_status` (
  `student_id` varchar(255) NOT NULL DEFAULT '',
  `student_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `class` varchar(255) NOT NULL,
  `contact_no` varchar(255) NOT NULL,
  `student_drop_area` varchar(255) CHARACTER SET utf8 NOT NULL,
  `bus_fee` varchar(255) NOT NULL,
  `bus_id1` varchar(255) NOT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO student_bus_status VALUES("6528","&#2309;&#2350;&#2367;&#2340; &#2352;&#2366;&#2361;&#2369;&#2354; &#2346;&#2366;&#2335;&#2368;&#2354; ","7","9922330022","renapur naka","Paid","1005");
INSERT INTO student_bus_status VALUES("6544","????? ?????","6","6655544333","nanadi stop","Paid","1002");
INSERT INTO student_bus_status VALUES("6548","????? ?????","6","6655544333","nanadi stop","Paid","1002");



DROP TABLE sugar_report;

CREATE TABLE `sugar_report` (
  `date` date NOT NULL,
  `total_student` int(11) NOT NULL,
  `prev_sugar_remain` int(11) NOT NULL,
  `current_month_sugar_got` int(11) NOT NULL,
  `total_sugar` int(11) NOT NULL,
  `total_plates` int(11) NOT NULL,
  `sugar_cooked` int(11) NOT NULL,
  `monthEnd_remaining_sugar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO sugar_report VALUES("2015-08-01","1","1","1","1","1","1","1");
INSERT INTO sugar_report VALUES("2015-08-04","4","4","4","4","4","4","4");



DROP TABLE tc;

CREATE TABLE `tc` (
  `reg_no` int(11) NOT NULL,
  `sr_no` int(11) NOT NULL AUTO_INCREMENT,
  `tc_no` int(11) DEFAULT NULL,
  `name` varchar(300) CHARACTER SET utf8 DEFAULT NULL,
  `adm_no` int(11) NOT NULL,
  `class` varchar(100) DEFAULT NULL,
  `reason` varchar(300) CHARACTER SET utf8 DEFAULT NULL,
  `remark` varchar(300) CHARACTER SET utf8 DEFAULT NULL,
  `date_issued` date NOT NULL,
  `date_leaving` date NOT NULL,
  PRIMARY KEY (`sr_no`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO tc VALUES("6527","1","2208","???? ???? ????","6665","10","?????? ???????? ?????????? ","???","2012-05-31","2015-07-31");
INSERT INTO tc VALUES("6529","2","2209","?????? ?????? ?????","6683","7","?????? ???????? ?????????? ","??? ","2014-10-22","2015-05-14");
INSERT INTO tc VALUES("0","3","2211","????? ???? ????? ","6558","6","?????? ???????? ??????????","???","2014-04-09","2015-07-06");



DROP TABLE teacher_profile;

CREATE TABLE `teacher_profile` (
  `teacher_id` varchar(255) CHARACTER SET utf8 NOT NULL,
  `teacher_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `qualification` varchar(255) CHARACTER SET utf8 NOT NULL,
  `designation` varchar(255) CHARACTER SET utf8 NOT NULL,
  `experience` varchar(255) CHARACTER SET utf8 NOT NULL,
  `subjects` varchar(255) CHARACTER SET utf8 NOT NULL,
  `profile_photo_url` varchar(255) CHARACTER SET utf8 NOT NULL,
  `other_info` varchar(255) CHARACTER SET utf8 NOT NULL,
  `training_info` varchar(255) CHARACTER SET utf8 NOT NULL,
  `date_of_appointment` varchar(255) CHARACTER SET utf8 NOT NULL,
  `username` varchar(255) CHARACTER SET utf8 NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO teacher_profile VALUES("501","prof. ??? ????? ","B.Ed","Teacher","5 years","Hindi","profile_images/501/teacher_profile.png","guest lecturer in colleges","2  year training in NIIT","2010-08-20","mahesh501","mahesh501");



DROP TABLE turdal_report;

CREATE TABLE `turdal_report` (
  `date` date NOT NULL,
  `total_student` int(11) NOT NULL,
  `prev_turdal_remain` int(11) NOT NULL,
  `current_month_turdal_got` int(11) NOT NULL,
  `total_turdal` int(11) NOT NULL,
  `total_plates` int(11) NOT NULL,
  `turdal_cooked` int(11) NOT NULL,
  `monthEnd_remaining_turdal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO turdal_report VALUES("2015-08-01","1","1","1","1","1","1","1");
INSERT INTO turdal_report VALUES("2015-08-02","2","2","2","2","2","2","2");



DROP TABLE type;

CREATE TABLE `type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `borrowertype` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `borrowertype` (`borrowertype`),
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=42 DEFAULT CHARSET=utf8;

INSERT INTO type VALUES("20","Teacher");
INSERT INTO type VALUES("21","Staff");
INSERT INTO type VALUES("22","Non-Teaching");
INSERT INTO type VALUES("23","Student");



DROP TABLE vatana_report;

CREATE TABLE `vatana_report` (
  `date` date NOT NULL,
  `total_student` int(11) NOT NULL,
  `prev_vatana_remain` int(11) NOT NULL,
  `current_month_vatana_got` int(11) NOT NULL,
  `total_vatana` int(11) NOT NULL,
  `total_plates` int(11) NOT NULL,
  `vatana_cooked` int(11) NOT NULL,
  `monthEnd_remaining_vatana` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO vatana_report VALUES("2015-08-01","88","88","88","88","88","88","88");



DROP TABLE vegetables_report;

CREATE TABLE `vegetables_report` (
  `date` date NOT NULL,
  `total_student` int(11) NOT NULL,
  `prev_vegetables` int(11) NOT NULL,
  `current_month_vegetables_got` int(11) NOT NULL,
  `total_vegetables` int(11) NOT NULL,
  `total_plates` int(11) NOT NULL,
  `vegetables_cooked` int(11) NOT NULL,
  `monthEnd_remaining_vegetables` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO vegetables_report VALUES("2015-08-01","99","99","99","99","99","99","99");



