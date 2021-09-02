/*Create all services tables*/

 CREATE TABLE Services (
 service_id int NOT NULL AUTO_INCREMENT,
 name VARCHAR(100),
 longname VARCHAR(200),
 tagline VARCHAR(250),
 description VARCHAR(500),
 point_1 VARCHAR(500),
 point_2 VARCHAR(500),
 point_3 VARCHAR(500),
 section_2_title VARCHAR(200),
 section_3_title VARCHAR(200),
 section_3_text_top VARCHAR(1000),
 section_3_text_bottom VARCHAR(1000),
 Constraint Services_PK PRIMARY KEY (service_id)
 );

CREATE TABLE Services_Cards (
	service_id int NOT NULL,
	card_id int NOT NULL AUTO_INCREMENT,
	title VARCHAR(200),
	text VARCHAR(1000),
	CONSTRAINT Services_Cards_PK PRIMARY KEY (card_id),
	CONSTRAINT Services_Cards_FK FOREIGN KEY (service_id) REFERENCES Services(service_id)
);

CREATE TABLE Services_Section_Bullets (
	service_id int NOT NULL,
	bullet_id int NOT NULL AUTO_INCREMENT,
	bullet_text VARCHAR(500),
	CONSTRAINT Services_Bullet_PK PRIMARY KEY (bullet_id),
	CONSTRAINT Services_Bullet_FK FOREIGN KEY (service_id) REFERENCES Services(service_id)
);

CREATE TABLE Services_FAQ (
	service_id int NOT NULL,
	faq_id int NOT NULL AUTO_INCREMENT,
	question VARCHAR(200),
	answer VARCHAR(2000),
	CONSTRAINT Services_FAQ_PK PRIMARY KEY (faq_id),
	CONSTRAINT Services_FQA_FK FOREIGN KEY (service_id) REFERENCES Services(service_id)
);