# Projet MAS-RAD CAS-DAR FRM

Projet Développé avec Laravel sur la base du cours donné par Raphaël Emourgeon.

# Description Laravel-EMS

Cette application CRUD vise à simplifier la gestion des personnes âgées résidant dans différents Établissements Médico-Sociaux (EMS). L’objectif, c’est de réaliser une mini application, qui permetrait à quelqu’un travaillant dans différents établissements de soins de garder une trace de ces patients par établissement.

# Fonctionalité

 L'application permet aux utilisateurs authentifiés de :

 1. Visualiser des retraités et leur Ems affilié, regroupement par EMS.
 2. Visualiser une liste d'EMS, et le nombre de retraités associé.
 3. Visualiser les détails d'un EMS.
 2. Effectuer des actions CRUD sur les Retraités et les EMS. Pour supprimer un EMS celui-ci ne doit plus avoir de retraité attribué.

 # Installation et exécution de l'application

1. Cloner le repository

```
git clone https://github.com/melanieabbet/laravel-ems
```

2. Installer laravel sail :

```
cd laravel-ems
docker run --rm --interactive --tty   --volume $PWD:/app   --user $(id -u):$(id -g)   composer install
```

3. Créer à la racine le fichier .env du projet :

4. Démarrer docker et créer les containers :

```
./vendor/bin/sail up
```
5. Lancer les migrations:

```
./vendor/bin/sail artisant:migrate
```

6. Accéder à la page : http://localhost

