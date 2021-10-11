CREATE TABLE product (
    p_id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    p_name varchar(255),
    pc_id_fk int(11)
);

CREATE TABLE product_category (
    pc_id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    pc_name varchar(255)
);

CREATE TABLE sale (
    s_id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    s_date date,
    s_qty double(10,2),
    s_price double(10,2),
    s_state varchar(6),
    p_id_fk int NOT NULL
);

INSERT INTO product_category (pc_name)
VALUES ('category 1'),
('category 2'),
('category 3'),
('category 4'),
('category 5'),
('category 6');

INSERT INTO product (p_name, pc_id_fk)
VALUES ('Product 1', '6'),
('Product 2', '5'),
('Product 3', '4'),
('Product 4', '3'),
('Product 5', '2'),
('Product 6', '1');

INSERT INTO sale (s_date, s_qty, s_price, s_state, p_id_fk)
VALUES ('2021-01-01', '5', '10000', 'done', '1'),
('2021-02-01', '3', '10000', 'done', '1'),
('2021-02-02', '5', '10000', 'cancel', '1'),
('2021-02-01', '5', '10000', 'done', '2'),
('2021-03-01', '5', '10000', 'done', '3'),
('2021-04-01', '5', '10000', 'done', '4'),
('2021-05-01', '5', '10000', 'done', '5'),
('2021-06-01', '5', '10000', 'done', '6');

-- Query sale data per category where state = done
SELECT SUM(`s`.`s_qty`) as `total_qty_sale`, `s`.`s_price`, `s`.`s_state`, `p`.`p_name`, `pc`.`pc_name`, SUM(`s`.`s_qty`) as `total_qty_sale` FROM `sale` as `s` JOIN `product` as `p` ON `s`.`p_id_fk` = `p`.`p_id` JOIN `product_category` as `pc` ON `p`.`pc_id_fk` = `pc`.`pc_id` WHERE `s`.`s_state` = 'done' GROUP BY `p`.`pc_id_fk`;

-- Query sale data per product
SELECT SUM(`s`.`s_qty`) as `total_qty_sale`, `s`.`s_price`, `s`.`s_state`, `p`.`p_name`, `pc`.`pc_name` FROM `sale` as `s` JOIN `product` as `p` ON `s`.`p_id_fk` = `p`.`p_id` JOIN `product_category` as `pc` ON `p`.`pc_id_fk` = `pc`.`pc_id` WHERE `s`.`s_date` > '2021-01-01' GROUP BY `p`.`p_id`;