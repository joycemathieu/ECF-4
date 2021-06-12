# ECF-C4
Ce README sert dans le cas où vous souhaiteriez installer ce thème.
Ce thème WP s'inspire du site https://www.lemonde.fr/

Demo du thème
http://joyce.devweb.cfa.nc/lepays/


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

Nom des catégorie utilisé :

Sports&culture
    catégorie enfant : sport / culture
Autres
    catégorie enfant : Fait divers / Economie / Non classé

Réglages dans le tableau de bord:

Réglages de lecture 
1. La page d'accueil affiche "les derniers articles".
2. Les pages du site doivent afficher au plus 10 articles.
3. Les flux de syndication affichent les derniers 10 éléments.
4. Dans chaque publication du flux, inclure l'extrait.


### Mesure de sécurité
***
Voici les mesures de sécurité que j'ai prise pour mon site :

Supprimer le compte admin.

Utiliser des identifiants de connexion complexes.

Utiliser le plugin WPS Hide Login qui permet de remplacer le wp-admin pour la connexion sur le tableau de bord.

Limiter le nombre de tentatives de connexion.


Restreindre l’accès à mon site en modifiant le htaccess.

### Le pas à pas de l'installation
