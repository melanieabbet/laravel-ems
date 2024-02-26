# Projet MAS-RAD CAS-DAR FRM

Projet Développé avec Laravel sur la base du cours donné par Raphaël Emourgeon.

# Description Laravel-EMS

Cette application CRUD vise à simplifier la gestion des personnes âgées résidant dans différents Établissements Médico-Sociaux (EMS). L’objectif, c’est de réaliser une mini application, qui permetrait à quelqu’un travaillant dans différents établissements de soins de garder une trace de ces patients par établissement.

# Fonctionalité

 L'application permet aux utilisateurs authentifiés de :

1. Accueil (retraités):
visualisation des retraités et leur Ems affilié, regroupement par EMS. Lien pour l'ajout, la modification ou la suppression d'un retraité ainsi que vers la vue de l'ems affilié.

2. EMS :
visualisation d'une liste d'EMS, et le nombre de retraités associé. Lien vers les pages spécifique aux EMS, lien d'ajout, suppression et édition. Pour supprimer un EMS celui-ci ne doit plus avoir de retraité attribué 

3. Single EMS :
visualisation des détails d'un EMS. Possibilité d'ajout d'un retraité pour l'EMS spécifique (présélection de l'EMS) et suppression de tous les retraités affiliés.

 # Vue

 Aper

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

