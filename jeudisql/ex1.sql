-- utilisateurs(id, nom, email, type) — type: 'client' | 'livreur'
-- • restaurants(id, nom, ville, note_moy)
-- • plats(id, restaurant_id, nom, prix, categorie)
-- • commandes(id, client_id, livreur_id, restaurant_id, statut, total,
-- created_at)
-- • lignes_commande(id, commande_id, plat_id, quantite, prix_unit)
-- notations(id, commande_id, note, commentaire)
2. LEFT JOIN + GROUP BY — Pour chaque livreur, afficher son nom et le nombre de
livraisons effectuées (statut = 'livré'), même s'il n'en a aucune
3. Sous-requête IN — Afficher les clients qui ont passé au moins une commande dont le
total dépasse 30€
4. Sous-requête NOT IN — Afficher les restaurants qui n'ont reçu AUCUNE commande
5. GROUP BY + HAVING — Restaurants ayant reçu plus de 3 commandes ET un chiffre
d'affaires total > 80€
6. JOIN 3 tables + GROUP BY — Pour chaque client, son nom et la somme totale
dépensée, triée du plus gros au plus petit
7. Sous-requête EXISTS — Livreurs ayant au moins une notation > 4 (via la table notations
et commandes)
8. EXPLAIN — Lancez EXPLAIN sur la requête n°6 et identifiez si un index manque.
Créez-le si nécessaire.
select restaurants.nom,count(commandes.id) as nombre from restaurants left join commandes in commandes.restaurant_id=restaurants.id;
select utilisateurs.nom ,count(commandes.id) as nombre from  utilisateurs left join commandes  in utilisateurs.id=commandes.livreur_id where 
statut='livré' and type='livreur' group by utilisateurs.nom;
select count(ulilisateurs.id) from utilisateurs where type='client' and id in (select distinct client_id from commandes where total>80);
select restaurants.nom from restaurants where id not in (select distinct restaurant_id from commandes  );
select restaurants.nom,count(id) ,sum(total) from restaurants  group by restaurants.nom having sum(total)>80 and count(id)>3;
select utilisateurs.id ,utilisateurs.nom,
