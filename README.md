# Portfolio Interactif

Portfolio interactif développé pour permettre aux artistes et graphistes de présenter leurs créations de manière professionnelle et engageante.

## À propos

Ce projet est un portfolio web interactif conçu dans le cadre d'un projet étudiant. Il permet aux artistes et graphistes de partager leurs œuvres, d'interagir avec leur audience et de gérer leur présence en ligne de manière simple et intuitive.

## Fonctionnalités

### Pour les visiteurs
- **Galerie de créations** : Parcourir l'ensemble des créations publiées
- **Système de likes** : Aimer les créations favorites
- **Commentaires** : Commenter et échanger sur les créations
- **Filtrage par catégories** : Explorer les créations par type (design, illustration, photo, etc.)
- **Détails des créations** : Voir les outils utilisés et les descriptions complètes

### Pour les utilisateurs connectés
- **Compte utilisateur** : Inscription et connexion sécurisées
- **Profil personnalisable** : Gérer son pseudo et ses informations
- **Historique des pseudos** : Suivi des changements de pseudo
- **Interaction sociale** : Liker et commenter les créations
- **Formulaire de contact** : Contacter directement l'artiste

### Pour les administrateurs
- **Dashboard administrateur** (EasyAdmin) : Interface d'administration complète
- **Gestion des créations** : Créer, modifier, supprimer des créations
- **Gestion des catégories** : Organiser les créations par catégories
- **Gestion des outils** : Répertorier les logiciels et outils utilisés
- **Modération** : Gérer les commentaires et les utilisateurs
- **Visibilité** : Contrôler quelles créations sont publiques
- **Statistiques** : Suivre les interactions et l'engagement

## Technologies utilisées

### Backend
- **PHP 8.1+** : Langage de programmation
- **Symfony 6.1** : Framework PHP moderne
- **Doctrine ORM** : Gestion de la base de données
- **EasyAdmin 4** : Interface d'administration
- **KnpPaginatorBundle** : Pagination des résultats

### Base de données
- **MySQL** : Base de données relationnelle

### Frontend
- **Twig** : Moteur de templates
- **CKEditor** : Éditeur de texte riche
- **Symfony UX** : Composants frontend interactifs

### Sécurité
- **Symfony Security** : Authentification et autorisation
- **KarserRecaptcha3Bundle** : Protection contre les bots

### Développement
- **Docker** : Conteneurisation de la base de données
- **Faker** : Génération de données de test
- **Doctrine Fixtures** : Chargement de données de test

## Prérequis

- PHP 8.1 ou supérieur
- Composer
- Git

### ReCAPTCHA (optionnel)

Pour activer la protection reCAPTCHA sur le formulaire de contact, ajoutez vos clés dans `.env.local` :

```env
RECAPTCHA3_KEY=your-site-key
RECAPTCHA3_SECRET=your-secret-key
```

## Utilisation

### Accès public
- Page d'accueil : `/`
- Galerie des créations : `/creation`
- Détails d'une création : `/creation/{id}`
- Formulaire de contact : `/contact`
- Connexion : `/login`
- Inscription : `/register`

### Espace administrateur
- Dashboard : `/admin`
- Accès réservé aux utilisateurs avec le rôle `ROLE_ADMIN`

## Base de données

### Entités principales

- **User** : Utilisateurs du site (visiteurs et admins)
- **Creation** : Créations artistiques
- **Category** : Catégories de créations
- **Tool** : Outils utilisés pour les créations
- **Comment** : Commentaires sur les créations
- **Like** : Likes sur les créations
- **Contact** : Messages de contact
- **UsernameHistory** : Historique des changements de pseudo

## Contributeurs

Ce projet a été développé par une équipe de 4 étudiants.
