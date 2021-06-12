# ECF-C4
Ce README sert dans le cas où vous souhaiteriez installer ce thème.
Ce thème WP s'inspire du site https://www.lemonde.fr/

Demo du thème
http://joyce.devweb.cfa.nc/lepays/


Outils(plugin) utiliser :

Wordpress
    - FakerPress : FakerPress est un moyen propre de générer de fausses données sur votre installation 

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


## Table des matières
1. [Réalisations du cahier des charges et du maquettage](#realisation-du-cahier-des-charges-et-du-maquettage)
2. [Fabrication du thème](#fabrication-du-theme)
3. [Mesure de sécurité](#mesure-de-securite)
4. [Réalisation du fichier README](#realisation-du-fichier-readme)

### Réalisations du cahier des charges et du maquettage
***
Le cahier des charges se trouve dans un fichier md nommé CDC.md.

Le maquettage se trouve dans le dossier Maquettes.

Supprimer le compte admin
Utiliser des identifiants de connexion complexes
Avoir un identifiant par défaut (admin) et un mot de passe sans complexité (pas de chiffres, pas de majuscules, pas de caractères spéciaux) est le meilleur moyen pour se faire pirater. Créer un nouvel utilisateur administrateur étant donné que l’on ne peut pas modifier l’identifiant d’un utilisateur sur WordPress.

Changer l’url de connexion à l’administration
Par défaut l’adresse pour vous connecter à votre panel d’administration sera mondomaine.fr/wp-admin. Le problème avec cette url est qu’elle est commune à tous les sites WordPress lors de leur création ce qui en fait qu’elle est connue de tous les hackers. ICI le plus simple est d’utiliser une extension, telle que WPS Hide login, qui va vous permettre en quelques réglages seulement de modifier votre url de connexion.

Limiter le nombre de tentatives de connexion
Étant donné que l’attaque de force brute consiste en la répétition de plusieurs essais de connexion, l’un des moyens les plus efficace et simple à mettre en place est la limitation du nombre de tentatives de connexion. Nous utilissont donc l'extension Limit Login Attempts Reloaded.

Utiliser le .htaccess pour restreindre l’accès à votre site
La navigation à travers votre site par les liens s’y trouvant serait catastrophique si vous n’avez pas de règles correctes dans un fichier nommé .htaccess. Ce même fichier qui permet à vos liens de fonctionner correctement peut aussi être utilisé pour améliorer la sécurité de votre WordPress.

J'ai donc modifier mon .htaccess :

<files wp-config.php>
order allow,deny
deny from all
</files>

<Files .htaccess>
order allow,deny
deny from all
</Files>
Modifier le préfixe par défaut de la base de données de WordPress
Par défaut, lorsque la base de données de WordPress est créer elle aura pour préfixe « wp_ ». Comme pour toutes les configurations par défaut de WordPress ceci est un avantage pour les pirates qui sauront quoi attaquer. Des préfixes adaptés seront donc implantés .

3/ INSTALATION DU PROJET
1 / Copier le dossier theme-fabrice-ecf et coller le dans wordpress :

wp-content
themes
2 / En deuxiéme lieu créer les catatégorie :

Sportives
Culturelles
3 / Troisièmement Créer les pages :

Accueil
Culturelles
Sportives
4 / Ensuite Installer le plugin The Post Grid : Choisisez un layout et instaler le soie avec la function php à imbriqué dans le code soie par un shortcode que tu intégre dans les sidebar prévue pour les accueillir .

5 / Puis Créer des jeux de données avec le plugin FakerPress : Une fois installer choisisez l'onglet article et rajouter le nombre de fake article que vous voulez .

6 / Paramétrer correctement les différent post pour que l'affichage visé soie en concordance à la page ou la catégorie et bien sûre la ou le short code à était déposer .