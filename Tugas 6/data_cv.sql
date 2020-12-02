CREATE TABLE education (
  id int NOT NULL AUTO_INCREMENT,
  sekolah varchar(50),
  tahun varchar(12),
  PRIMARY KEY(id)
);

CREATE TABLE organization (
  org int NOT NULL,
  nama_org varchar(35) DEFAULT NULL,
  th_org varchar(5) DEFAULT NULL
); 

CREATE TABLE skills (
  id_skill int NOT NULL,
  skill varchar(15) DEFAULT NULL,
  persentase int(11) DEFAULT NULL
);

CREATE TABLE profil (
    id_prof int NOT NULL,
    ttl varchar(30),
    gender varchar(10),
    alamat varchar(50),
    religion varchar(10),
    citizen varchar(10)
);

=====================================================

INSERT INTO organization (org, nama_org, th_org) VALUES
(1, 'UKM FOTOGRAFI \"Akriwahatra\"', '2019'),
(2, 'UKM BADMINTON', '2019'),
(3, 'INFORMATICS LEARNING COMMUNITY', '2020'),
(4, 'MOBILE DEVELOPMENT', '2020');

INSERT INTO skills (id_skill, skill, persentase) VALUES
(1, 'Web Design', 80),
(2, 'Mechanic', 85),
(3, 'English Speak', 75);

INSERT INTO profil VALUES (1,'SURABAYA, 07 OKTOBER 1999','LAKI-LAKI','JL. JAMBANGAN IA NO.15 SURABAYA','ISLAM','INDONESIAN');
