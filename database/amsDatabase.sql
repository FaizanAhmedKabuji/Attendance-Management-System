CREATE TABLE admin
(
    userName    varchar(20) NOT NULL,
    password    varchar(20) NOT NULL,
    fName       varchar(20) NOT NULL,
    type        varchar(20) NOT NULL,
    PRIMARY KEY(userName)
);
CREATE TABLE attendance
(
    courseID    varchar(20) NOT NULL,
    course      varchar(20) NOT NULL,
    status      bit NOT NULL,
    rDate        date NOT NULL
);
CREATE TABLE report
(
    stuID       varchar(20) NOT NULL,
    _date       varchar(20) NOT NULL,
    course      varchar(20) NOT NULL,
    status      bit NOT NULL,
    stuName     varchar(20) NOT NULL,
    stuBatch     varchar(20) NOT NULL,
    PRIMARY KEY(stuID)
);
CREATE TABLE students
(
    stuID       varchar(20) NOT NULL,
    stuName     varchar(20) NOT NULL,
    stuBatch    varchar(20) NOT NULL,
    PRIMARY KEY(stuID)
);
CREATE TABLE teachers
(
    teaID       varchar(20) NOT NULL,
    teaName     varchar(20) NOT NULL,
    teaDept     varchar(20) NOT NULL,
    PRIMARY KEY(teaID)
);
INSERT INTO admin (userName,password,fName,type) VALUES
('admin','admin','admin','admin');

INSERT INTO attendance (courseID,course,status,rDate) VALUES
('1','course1',0,'2020-07-10'),
('2','course2',1,'2020-07-10'),
('1','course1',1,'2020-07-11');

INSERT INTO students (stuID,stuName,stuBatch) VALUES
('1','faizan','2018'),
('2','kabuji','2018'),
('3','hikaru','2018');

INSERT INTO teachers(teaID,teaName,teaDept) VALUES
('1','magnus','cse'),
('2','carlsen','cse');

ALTER TABLE attendance
  ADD CONSTRAINT attendance_ibfk_1 FOREIGN KEY (courseID) REFERENCES students (stuID);
COMMIT;