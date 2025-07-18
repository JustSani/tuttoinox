CREATE TABLE TUTTOINOX(
	id int NOT NULL AUTO_INCREMENT,
    Categoria VARCHAR(100) NOT NULL,
    Titolo VARCHAR(255) NOT NULL ,
    Descrizione_Breve VARCHAR(500) NOT NULL,
    img_principale VARCHAR(100) NOT NULL,
    img1 VARCHAR(100) NOT NULL,
    img2 VARCHAR(100) NOT NULL,
    Secondo_Titolo VARCHAR(255) NOT NULL,
    Descrizione_Lunga VARCHAR(500) NOT NULL,
	PRIMARY KEY (id)
)



INSERT INTO tuttoinox (Categoria, Titolo, Descrizione_Breve,img_principale, img1,img2, Secondo_Titolo, Descrizione_Lunga)
VALUES ("PER LA CASA", "Tavolo da esterno e sedie","Realizzazione su misura di un tavolo da esterno con sedie", "img/08.jpg", "img/09.jpg", "img/08.jpg", "Tavolo da esterno e sedie", "Tavolo da esterno e sedie Tavolo da esterno e sedieTavolo da esterno e sedie Tavolo da esterno e sedie Tavolo da esterno e sedieTavolo da esterno e sedie")



INSERT INTO tuttoinox (Categoria, Titolo, Descrizione_Breve, Secondo_Titolo, Descrizione_Lunga)
VALUES ("PER LA CASA", "Tavolo da esterno e sedie","Realizzazione su misura di un tavolo da esterno con sedie",  "Tavolo da esterno e sedie", "Tavolo da esterno e sedie Tavolo da esterno e sedieTavolo da esterno e sedie Tavolo da esterno e sedie Tavolo da esterno e sedieTavolo da esterno e sedie"),
("cacca popo", "oidfndifnd"),
("")