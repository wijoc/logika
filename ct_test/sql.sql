CREATE TABLE Project (
    p_id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    p_name varchar(255),
    p_date date,
    p_biaya int,
    p_category varchar(255)
);

CREATE TABLE ProjectCategory (
    pc_id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    pc_name varchar(255)
);

INSERT INTO ProjectCategory (pc_name)
VALUES ('Website'),
('Android'),
('Internet Marketing'),
('Redesign'),
('Iklan'),
('IOS');

INSERT INTO Project (p_name,p_date,p_biaya,p_category)
VALUES ('Project 1', '2021-07-19', '100000', '1,2,3,4'),
('Project 2', '2021-07-19', '100000', '5'),
('Project 3', '2021-07-19', '100000', '4,6'),
('Project 4', '2021-07-19', '100000', '1,2'),
('Project A', '2021-07-19', '100000', '3,4'),
('Project A', '2021-07-19', '100000', '1,2,3,4,5,6');

-- tampikan seluruh Project yang termasuk dalam category Redesign
SELECT `p`.* FROM `Project` AS `p` WHERE EXISTS (SELECT `pc`.`pc_id` FROM `ProjectCategory` AS `pc` WHERE `pc`.`pc_name` = 'Redesign'); 

--ampikan seluruh Project dan Total Category masing-masing Project
SELECT *, LENGTH(REPLACE(`p_category`, ',', '')) as jumlah_category FROM `Project`;