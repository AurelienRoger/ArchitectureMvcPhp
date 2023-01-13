# ArchitectureMvcPhp
Architecture de base d'exemple pour un modèle MVC en php
Cet exemple n'est pas une norme, mais juste une façon d'avoir un modèle de structure en MVC


## Une fois la copie effectuée :

### 1 - Installer les bibliothèques

composer install dans le terminal

### 2 - Mettre ses identifiants de db

Copier le fichier config.ini.dist, le renommer config.ini et rentrer ses infos de db.
Attention, mettre dans .gitignore app/config.ini pour pas qu'ils soit up sur le repo github

### 3 - Autoload

Dans le fichier composer.json, modifier "app" si souhaiter 
(Si nom modifié, penser à modifier les namespaces.)
Puis lancer dans le terminal composer dump-autoload

### 4 - symfony/var_dumper

Pour installer Symfony var_dumper lancer la commande
composer require symfony/var-dumper v6.0 si php >8


