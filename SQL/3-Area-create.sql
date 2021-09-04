/*Create all area tables*/
CREATE TABLE Country (
	country_id int NOT NULL AUTO_INCREMENT,
	name VARCHAR(100),
	CONSTRAINT Country_PK PRIMARY KEY (country_id)
);

CREATE TABLE Area (
	country_id int NOT NULL,
	area_id int NOT NULL AUTO_INCREMENT,
	name VARCHAR(100),
	longname VARCHAR(200),
	description VARCHAR(500),
	point_1 VARCHAR(500),
	point_2 VARCHAR(500),
	point_3 VARCHAR(500),
	point_4 VARCHAR(500),
	section_2_title VARCHAR(200),
	section_4_title VARCHAR(200),
	CONSTRAINT Area_PK PRIMARY KEY (area_id),
	CONSTRAINT Area_FK FOREIGN KEY (country_id) REFERENCES Country(country_id)
);

CREATE TABLE Area_Cards (
	area_id int NOT NULL,
	card_id int NOT NULL AUTO_INCREMENT,
	card_section int NOT NULL,
	title VARCHAR(200),
	text VARCHAR(1000),
	CONSTRAINT Area_Cards_PK PRIMARY KEY (card_id),
	CONSTRAINT Area_Cards_FK FOREIGN KEY (area_id) REFERENCES Area(area_id)
);