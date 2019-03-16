CREATE SCHEMA IF NOT EXISTS db_warehouse;

CREATE TABLE categories (id int(2) AUTO_INCREAMENT, name varchar(32) NOT NULL, PRIMARY KEY(id) );

CREATE TABLE products (id INT(2) AUTO_INCREMENT, name VARCHAR(32) NOT NULL, category_id INT(2), PRIMARY KEY (id), FOREIGN KEY(category_id) REFERENCES categories(id));

INSERT INTO categories (name) VALUES ("Peralatan Mandi"),("Mie Instan"),("Olahan Daging");
INSERT INTO products (name,category_id) values ("Sampo","1"),("Sikat Gigi","1"),("Indomi","2"),("mie sedap","2"), ("Nuget","3");