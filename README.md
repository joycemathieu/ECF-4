# ECF-C4
Ce README sert dans le cas où vous souhaiteriez installer ce thème.
Ce thème WP s'inspire du site https://www.lemonde.fr/

Demo du thème
http://joyce.devweb.cfa.nc/wordpress/


## Table des matières
1. Réalisations du cahier des charges et du maquettage
2. Fabrication du thème
3. Mesure de sécurité
4. Le pas à pas de l'installation


### Réalisations du cahier des charges et du maquettage
***
Le cahier des charges se trouve dans un fichier md nommé CDC.md.
Il reprend les besoins fonctionnels : 

Le maquettage se trouve dans le dossier Maquettes.


### Fabrication du thème
***

Outils(plugin) utiliser :

Wordpress
    - FakerPress : FakerPress est un moyen propre de générer de fausses données sur votre installation.
    - WPS Hide Login : permet de remplacer le wp-admin pour la connexion sur le tableau de bord.
    - The Events Calendar : permet de générer les évènements.


### Mesure de sécurité
***
Voici les mesures de sécurité que j'ai prise pour mon site :

Supprimer le compte admin.

Utiliser des identifiants de connexion complexes.

Utiliser le plugin WPS Hide Login qui permet de remplacer le wp-admin pour la connexion sur le tableau de bord.

Limiter le nombre de tentatives de connexion.


Restreindre l’accès à mon site en modifiant le htaccess.

### Le pas à pas de l'installation

*Nom des catégories utilisées :*

Sports&culture
    catégorie enfant : sport / culture
Autres
    catégorie enfant : Fait divers / Economie / Non classé

*Réglages de lecture :*
1. La page d'accueil affiche "les derniers articles".
2. Les pages du site doivent afficher au plus 10 articles.
3. Les flux de syndication affichent les derniers 10 éléments.
4. Dans chaque publication du flux, inclure l'extrait.

*Réglages des évènements :*
1. Télécharger le plugin The Events Calendar.
2. Créer les catégories d'évènements : Sports, Culture.
3. Aller dans les widgets pour placer vos évènements dans la sidebar :
    - le réglage de la sidebar se fait en choisissant la liste des évènements;
    - le titre sera : Évènements à venir;
    - affichage limité à 3;
    - laisser la case "Générer les données JSON-LD" cochée.

*Réglages du menu :*
1. Allez dans la gestion des menus.
2. Selectionnez toutes les catégories.
3. Mettre les catégories Sports, Culture en sous élément de la catégorie Sports&Culture.
4. Mettre les catégories Faits Divers, Economie, Non Classé en sous élément de la catégorie Autres.
5. Selectionnez dans les catégories évènements l'onglet "Evenements" (Attention bien choisir l'Archive du type de publication).