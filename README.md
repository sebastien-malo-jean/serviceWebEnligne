# création d'un site web statique avec Laravel

Par : Sébastien Malo Jean

## Projet - Servicewebenligne.ca

### Documentation

Je dois créer un site web statique avec Laravel. J'ai choisi comme thème les services web en ligne.

[Lien vers le code Github](https://github.com/sebastien-malo-jean/serviceWebEnligne)

### Routes

- '/' : l'index du site web.
- '/about' : La page À propos de l'entreprise.
- '/services' : la page des services de l'entreprise.
- '/contact' : la page pour contacter l'entreprise.
  - '/contact' : avec la method POST, pour envoyer le formulaire.

### Lignes de commandes utilisées

#### Création du projet Laravel

- composer create-project --prefer-dist laravel/laravel serviceWebEnligne "10.\*"

#### Création du fichier CSS

- Theme Bootstrap choisi : [Business Casual](https://startbootstrap.com/theme/business-casual)
- Background : [wallpaperaccess.com](https://wallpaperaccess.com/download/high-tech-1271992)
-images : [freepik](https://www.freepik.com/)

#### Création du contrôleur

- php artisan make:controller SWELController
