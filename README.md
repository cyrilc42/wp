# Projet WordPress vierge (install custom)

- Pour éviter d'avoir des bugs, assurez-vous de suivre les instructions ci-dessous.
- Le mode **DEBUG** est activé par défaut. Pensez à le désactiver lors de la mise en production de votre projet.

## Configurer le projet vierge :
1. **Créez** une base de données pour votre projet.

2. **Dupliquez** le fichier `wp-config-sample.php` et **renommez-le** en `wp-config.php`, ensuite :
    - **Complétez** les informations liées à votre base de données *(lignes 24 à 33)*.
    - **Salez les clés** *(lignes 53 à 60)* en faisant un copié/collé de la portion de code affichée sur ce [site](https://api.wordpress.org/secret-key/1.1/salt/).
    - **Renseignez** l'URL complète de votre projet et **ajoutez** `content/` à la fin de celle-ci *(ligne 79)*.
        - Exemple : `http://localhost/mon_projet/content/`

3. **Exécutez** un `composer install` dans le dossier de votre projet pour installer les dépendances nécessaires.

4. **Modifiez** les droits du dossier `/content` en saisissant dans votre terminal les commandes suivantes :
    - `sudo chown -R <user>:www-data content`
    - `sudo find . -type f -exec chmod 664 {} +`
    - `sudo find . -type d -exec chmod 775 {} +`

5. **Ouvrez** le dossier de votre projet depuis un navigateur pour finaliser l'installation et suivez les étapes indiquées.

6. **Allez** dans le menu "*Réglages*", puis "*Général*" et **modifiez** la langue du site via l'option `Site Language` (si nécessaire).

    Ensuite, **renseignez** les champs suivants :
    - Adresse web de WordPress (URL) : `http://localhost/mon_projet/wp` (l'URL du projet avec `/wp` à la fin).
    - Adresse web du site (URL) : `http://localhost/mon_projet` (l'URL du projet sans le `/wp` à la fin).

7. **Rendez-vous** dans le menu "*Permaliens*" et **cochez** la "*Structure personnalisée*".
    - À cette étape, vous ne devriez plus voir apparaître `/wp` dans l'url.
    - **Définissez** la structure désirée (exemple : `/%postname%/`).

8. **C'est fini !** Il ne vous reste plus qu'à vous hâter à la création de votre site.

## À propos
- Version de WordPress utilisée : 4.9.* *(package : johnpbloch)*
# wp
