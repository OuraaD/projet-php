create table car
(
id INT PRIMARY KEY AUTO_INCREMENT,
model VARCHAR (255),
description TEXT,
prix INT,
image_pass VARCHAR(255)
)

INSERT INTO car (model, description, prix, image_pass) VALUES
('Renault Clio', 'Une petite voiture citadine avec une bonne économie de carburant.', 35.90, 'images/renault_clio.jpg'),
('Peugeot 208', 'Compacte, stylée et pleine de technologie.', 45.90, 'peugeot_208.jpg'),
('Citroën C3', 'Confort et personnalisation à petit prix.', 25.90, 'citroen_c3.jpg'),
('Volkswagen Golf', 'La référence des compactes avec une tenue de route exemplaire.', 70.90, 'vw_golf.jpg'),
('Toyota Yaris', 'Fiabilité japonaise et faible consommation.', 50.90, 'toyota_yaris.jpg'),
('Ford Fiesta', 'Une voiture dynamique et plaisante à conduire.', 35.90, 'ford_fiesta.jpg'),
('Opel Corsa', 'Moderne, pratique et économique.', 25.90, 'opel_corsa.jpg'),
('Honda Civic', 'Compacte sportive avec un design audacieux.',70.90, 'honda_civic.jpg'),
('BMW Série 1', 'Luxe et performance à l\’état pur.', 80.90, 'bmw_serie1.jpg'),
('Mercedes Classe A', 'Compacte premium avec un intérieur sophistiqué.', 95.90, 'mercedes_classe_a.jpg');