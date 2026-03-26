CREATE DATABASE livraison; USE
    livraison;
CREATE TABLE utilisateur(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(34),
    email VARCHAR(45),
    TYPE ENUM('client', 'livreur'),
    created_at DATE
); CREATE TABLE restaurants(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(30),
    ville VARCHAR(34),
    note_moy FLOAT
); CREATE TABLE plats(
    id INT PRIMARY KEY AUTO_INCREMENT,
    restaurant_id INT,
    nom VARCHAR(30),
    prix DECIMAL,
    categorie VARCHAR(34),
    FOREIGN KEY(restaurant_id) REFERENCES restaurants(id)
); CREATE TABLE commandes(
    id INT PRIMARY KEY AUTO_INCREMENT,
    client_id INT,
    livreur_id INT,
    restaurant_id INT,
    statut ENUM ('livré', 'en cours', 'annulé'),
    total DECIMAL,
    created_at DATETIME,
    FOREIGN KEY(client_id) REFERENCES utilisateurs(id),
    FOREIGN KEY(livreur_id) REFERENCES utilisateurs(id),
    FOREIGN KEY(restaurant_id) REFERENCES restaurants(id)
); CREATE TABLE lignes_commande(
    id INT PRIMARY KEY AUTO_INCREMENT,
    commande_id INT,
    plat_id INT,
    quantite INT,
    prix_unit DECIMAL,
    FOREIGN KEY(commande_id) REFERENCES commandes(id),
    FOREIGN KEY(plat_id) REFERENCES plats(id)
); CREATE TABLE notations(
    id INT PRIMARY KEY AUTO_INCREMENT,
    commande_id INT,
    note INT,
    commentaire TEXT,
    FOREIGN KEY(commande_id) REFERENCES commandes(id)
);


Afficher le nom et l'email de tous les utilisateurs de type 'client'
2. Afficher tous les plats dont le prix est inférieur à 15€, triés du moins cher au plus cher
3. Compter le nombre de commandes par statut ('livré', 'en cours', 'annulé')
4. Afficher les 3 restaurants avec la meilleure note moyenne (ORDER BY + LIMIT)
5. Calculer le chiffre d'affaires total et le panier moyen de toutes les commandes livrées
6. Afficher tous les plats dont le nom contient le mot 'poulet' (LIKE)
7. Afficher le nom du client et le total pour chaque commande (INNER JOIN commandes +
utilisateurs)
8. Afficher le nom du restaurant et le nombre de commandes reçues, même pour les
restaurants sans commande (LEFT JOIN)
9. Lister toutes les commandes livrées avec le nom du client, le nom du livreur et le nom du
restaurant
10.Afficher les plats commandés au moins une fois avec leur quantité totale vendue (JOIN +
GROUP BY + SUM)
11. Trouver les clients qui ont commandé plus de 3 fois, avec leur nombre de commandes
(JOIN + GROUP BY + HAVING)
12.BONUS : Afficher le top 3 des livreurs les mieux notés (jointure sur notations +
commandes + utilisateurs)

select nom ,email from utilisateurs where type="client";
select * from plats where prix <15 order by prix asc;
select count(id) ,statut from commandes group by statut;
select restaurantrs.nom,restaurants.note_moy order by note_moy limit 3;
select sum (total) as chiffre , avg(total) as moyen from commandes;
select * from plats where nom like '%poulet%';
SELECT u.nom, c.total
FROM commandes c
INNER JOIN utilisateur u ON c.client_id = u.id;

select restaurants.nom ,count (commandes.id) from restaurants r left join commandes c on c.restaurants_id =r.id;
select plats.nom ,
SELECT 
    c.id,
    client.nom AS client,
    livreur.nom AS livreur,
    r.nom AS restaurant
FROM commandes c
JOIN utilisateur client ON c.client_id = client.id
JOIN utilisateur livreur ON c.livreur_id = livreur.id
JOIN restaurants r ON c.restaurant_id = r.id
WHERE c.statut = 'livré';