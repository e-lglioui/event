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

## Bonus
- **Filtrage avancé :** Les utilisateurs peuvent filtrer les événements par date ou lieu.
- **Connexion sociale :** Les utilisateurs peuvent se connecter via leur compte Google ou Facebook.
- **Notification par e-mail :** Les utilisateurs reçoivent un e-mail contenant leur ticket une fois leur réservation confirmée.
- **Export PDF :** Les utilisateurs peuvent générer leur ticket au format PDF.
- **Système de paiement :** Les développeurs peuvent intégrer un système de paiement pour les réservations d'événements.

---

## Technologies Utilisées
- **Frontend :** React.js / Vue.js
- **Backend :** Node.js avec Express.js
- **Base de données :** MongoDB / MySQL
- **Authentification :** JWT avec options d'intégration OAuth (Google, Facebook)
- **Autres outils :** Docker pour la conteneurisation, CI/CD pour le déploiement

---

## Installation et Déploiement
### Prérequis
- Node.js (v14 ou plus récent)
- MongoDB ou MySQL
- Docker (optionnel pour le déploiement conteneurisé)

### Étapes
1. Clonez ce dépôt :
   ```bash
   git clone https://github.com/votre-repo/evento.git
   ```
2. Accédez au répertoire du projet :
   ```bash
   cd evento
   ```
3. Installez les dépendances :
   ```bash
   npm install
   ```
4. Configurez les variables d'environnement dans un fichier `.env` :
   ```env
   PORT=5000
   DATABASE_URL=your_database_url
   JWT_SECRET=your_jwt_secret
   ```
5. Démarrez le serveur :
   ```bash
   npm start
   ```
6. Accédez à l'application via [http://localhost:5000](http://localhost:5000).

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
