# Evento - Gestion et Réservation d'Événements

## Contexte du Projet
La société **Evento** ambitionne de développer une plateforme novatrice dédiée à la gestion et à la réservation des places d'événements. L'objectif est de fournir une expérience utilisateur optimale aux participants, organisateurs et administrateurs. Cette plateforme permettra aux utilisateurs de découvrir, réserver et générer des tickets pour une variété d'événements, tandis que les organisateurs auront la possibilité de créer et de gérer leurs propres événements.

---

## Fonctionnalités Requises

### Utilisateur
- **Inscription :** Les utilisateurs peuvent s'inscrire en fournissant leur nom, adresse e-mail et mot de passe.
- **Connexion :** Les utilisateurs peuvent se connecter à leur compte en utilisant leurs identifiants.
- **Réinitialisation de mot de passe :** Les utilisateurs peuvent recevoir un e-mail pour réinitialiser leur mot de passe.
- **Consultation des événements :** Les utilisateurs peuvent consulter la liste des événements disponibles avec pagination.
- **Filtrage par catégorie :** Les utilisateurs peuvent filtrer les événements par catégorie.
- **Recherche :** Les utilisateurs peuvent rechercher des événements par titre.
- **Détails d'un événement :** Les utilisateurs peuvent visualiser la description, la date, le lieu et les places disponibles d'un événement.
- **Réservation :** Les utilisateurs peuvent réserver une place pour un événement.
- **Génération de ticket :** Les utilisateurs peuvent générer un ticket une fois leur réservation confirmée.

### Organisateur
- **Création d'événements :** Les organisateurs peuvent créer de nouveaux événements en spécifiant le titre, la description, la date, le lieu, la catégorie et le nombre de places disponibles.
- **Gestion des événements :** Les organisateurs peuvent gérer leurs événements.
- **Statistiques :** Les organisateurs ont accès à des statistiques sur les réservations de leurs événements.
- **Validation des réservations :** Les organisateurs peuvent choisir entre une acceptation automatique des réservations ou une validation manuelle.

### Administrateur
- **Gestion des utilisateurs :** Les administrateurs peuvent gérer les utilisateurs en restreignant leur accès.
- **Gestion des catégories :** Les administrateurs peuvent ajouter, modifier ou supprimer des catégories d'événements.
- **Validation des événements :** Les administrateurs peuvent valider les événements créés par les organisateurs avant leur publication.
- **Statistiques :** Les administrateurs ont accès à des statistiques détaillées.

---
- **Filtrage avancé :** Les utilisateurs peuvent filtrer les événements par date ou lieu.
- **Connexion sociale :** Les utilisateurs peuvent se connecter via leur compte Google ou Facebook.
- **Notification par e-mail :** Les utilisateurs reçoivent un e-mail contenant leur ticket une fois leur réservation confirmée.
- **Export PDF :** Les utilisateurs peuvent générer leur ticket au format PDF.
- **Système de paiement :** Les développeurs peuvent intégrer un système de paiement pour les réservations d'événements.

---

## Technologies Utilisées
- **Framework :** Laravel
- **Frontend :** Blade Templates 
- **Base de données :** MySQL
---

## Installation et Déploiement
### Prérequis
- PHP (v8.0 ou plus récent)
- Composer
- MySQL


### Étapes
1. Clonez ce dépôt :
   ```bash
   git clone https://github.com/e-lglioui/event.git
   ```
2. Accédez au répertoire du projet :
   ```bash
   cd event
   ```
3. Installez les dépendances avec Composer :
   ```bash
   composer install
   ```
4. Configurez le fichier `.env` :
   ```env
   APP_NAME=Evento
   APP_ENV=local
   APP_KEY=base64:generated_app_key
   APP_DEBUG=true
   APP_URL=http://localhost

   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=evento
   DB_USERNAME=root
   DB_PASSWORD=your_password
   ```
5. Générez la clé de l'application :
   ```bash
   php artisan key:generate
   ```
6. Exécutez les migrations pour configurer la base de données :
   ```bash
   php artisan migrate
   ```
7. Lancez le serveur de développement :
   ```bash
   php artisan serve
   ```
8. Accédez à l'application via [http://localhost:8000](http://localhost:8000).

---

## Contribution
Les contributions sont les bienvenues ! Veuillez suivre les étapes suivantes :
1. Forkez ce dépôt.
2. Créez une branche pour votre fonctionnalité :
   ```bash
   git checkout -b feature/your-feature-name
   ```
3. Commitez vos modifications :
   ```bash
   git commit -m "Ajout de votre fonctionnalité"
   ```
4. Poussez vos modifications :
   ```bash
   git push origin feature/your-feature-name
   ```
5. Ouvrez une Pull Request.

---

## Licence
Ce projet est sous licence MIT. Voir le fichier [LICENSE](LICENSE) pour plus de détails.
