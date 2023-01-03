<!-- PROJECT LOGO -->
<br />
<div align="center">
  <a href="#">
    <img src="PokemonProject/public/assets/images/pokemon/logo-white.png" alt="Logo" >
  </a>

<h3 align="center">PokéGame</h3>

  <p align="center">
    Wassim Ben Fraj & Laila Allam
    <br />
  </p>
</div>

## A propos ce projet

ce projet est un jeu pokemon, où vous pouvez trouver toutes ces fonctionnalités:
- naviguer la collection de pokémons à l'aide de plusieurs filtres (requêtes ajax / Javascript)
- Inscrivez-vous en utilisant Image Upload pour les utilisateurs
- Authentification
- Validation des erreurs
- Profil personnel pour l'utilisateur et consultation de l'historique des combats
- Rejouer des les combats
- Changement de mot de passe pour l'utilisateur
- Modes combats en plus

  - Mode aléatoire + choix automatique
  - Mode Manuel + Tour + tour
  - Mode aléatoire + Tour + tour
- minuterie à chaque tour pour des modes spécifiques
- Description textuelle animée pour chaque attaque
- régénèration automatique des points de vie
- Requêtes (Ajax) pour sauvgarde de données aprés la fin du combat 
- Interface pour les statistiques
- Pagination
- Appliquer un système pour assurer d'avoir assez de pokémons pour chaque utilisateur pour réaliser son premier combat
en respectant les régles d'énergies et niveaux.


<!-- GETTING STARTED -->

## Getting Started

* Cloner le projet à travers github
  ```sh
  git clone https://github.com/wassimbenfraj/ProjetCDAW.git
  ```
* aller au dossier du projet
  ```sh
  cd .\ProjetCDAW\
  ```
  
* aller au dossier 
  ```sh
  cd .\PokemonProject\
  ```
## Installation

* générer les fichiers laravel

  ```sh
  composer install
  ```

## Préparation d'environement

* générer le fichier .env
  ```sh
  cp .env.example .env
  ```

* créer une base de données appelé
  ```sh
  cdaw
  ```

* modifier le fichier <strong>.env </strong> en changeant le nom de base de données
  ```sh
  "DB_DATABASE=cdaw"
  ```
### Prérequis

* Les images téléchargées dans ce projet sont sauvegardées dans le dossier storage, laravel n'a pas accès par défaut à ce dossier, et pour pouvoir afficher les images, il faut exécuter cetter commande.
  ```sh
  php artisan storage:link
  ```

* exécuter la commande qui définit la valeur APP_KEY dans votre fichier .env 
  ```sh
  php artisan key:generate
  ```
## Génération de la base de données

* Si la base de données n'est pas encore  créée

  ```sh
  php artisan migrate --seed
  ```
* Si la base de données est déja  créée

  ```sh
  php artisan migrate:refresh --seed
  ```
  ### * les utilisateurs doivent êtres crées manuellment pour que chaque utilisateur puisse voir son avatar car nous travaillons sur le localhost.
## Exécution du projet

  ```sh
  php artisan serve
  ```
