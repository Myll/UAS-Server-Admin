
CREATE DATABASE trucorp;

USE trucorp;

CREATE TABLE user(
    id int NOT NULL PRIMARY KEY,
    nama varchar(50) NOT NULL,
    kantor varchar(10) NOT NULL
);
INSERT INTO user (id,name,kantor) VALUES(14,'herman','Cabang');
