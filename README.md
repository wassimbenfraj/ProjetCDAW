readme

ouvrir le terminal

cloner le projet a travers github
git clone https://github.com/wassimbenfraj/ProjetCDAW.git

aller au dossier du projet
cd .\PokemonProject\

générer les fichiers laravel
composer install


générer le fichier .env
cp .env.example .env

créer une base de données appelé

cdaw

modifier .env en changeant le nom de base de données

"DB_DATABASE=cdaw"