<!-- PROJECT LOGO -->
<br />
<div align="center">
  <a href="#">
    <img src="PokemonProject/public/assets/images/pokemon/logo-white.png" alt="Logo" >
  </a>

<h3 align="center">PokéGame</h3>

  <p align="center">
    Readme Project !
    <br />
  </p>
</div>

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
## Génération la base de données

* Si la base de données n'est pas encore  créée

  ```sh
  php artisan migrate --seed
  ```
* Si la base de données est déja  créée

  ```sh
  php artisan migrate:refresh --seed
  ```

## Exécution du projet

  ```sh
  php artisan serve
  ```
