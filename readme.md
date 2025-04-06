# 🌪️ Sandstorm Marketplace

Une plateforme de marketplace moderne, riche en fonctionnalités, construite avec PHP 8.2+ et MySQL. Sandstorm permet aux utilisateurs d’acheter et de vendre des articles dans diverses catégories via une interface belle et **responsive**.

## ✨ Fonctionnalités

- 🍭️ **Fonctionnalités complètes de marketplace**

  - Navigation par catégorie
  - Recherche avancée avec filtres
  - Messagerie en temps réel entre utilisateurs
  - Intégration de paiements sécurisés
  - Système de notation et d’avis

- 👤 **Gestion des utilisateurs**

  - Authentification sécurisée
  - Profils utilisateurs
  - Tableau de bord pour les vendeurs
  - Liste de favoris / watchlist

- 📱 **Interface moderne**

  - Design **responsive** avec Bootstrap 5
  - Interface claire et intuitive
  - Approche *mobile-first*
  - Intégration de Bootstrap Icons

## 🚀 Démarrage rapide

1. **Prérequis**

   ```bash
   PHP 8.2+
   MySQL 8.0+
   Composer
   ```

2. **Clonage & installation**

   ```bash
   git clone https://github.com/yourusername/Sandstorm.git
   cd Sandstorm
   composer install
   ```

3. **Configuration de la base de données**

   ```bash
   # Importer le schéma de base de données
   mysql -u root < database/base.sql
   ```

4. **Configuration**

   ```php
   // Mettre à jour les identifiants dans database/Database.php
   'host' => 'localhost',
   'dbname' => 'sandstorm',
   'user' => 'root',
   'pass' => ''
   ```

5. **Lancer l'application**

   ```bash
   # Avec le serveur PHP intégré
   php -S localhost:8000

   # Ou configurer avec Apache/Nginx
   # Pointer vers le répertoire racine du projet
   ```

## 🏗️ Architecture

Sandstorm suit le modèle MVC avec une architecture propre et modulaire :

```
Sandstorm/
├── controllers/    # Logique métier
├── models/         # Opérations base de données
├── views/          # Templates Twig
├── database/       # Schéma & migrations
└── public/         # Fichiers statiques
```

Pour une documentation détaillée de l’architecture, voir le [Guide d'Architecture](docs/architecture.md)

## 💡 Technologies clés

- **Backend** : PHP 8.2+
- **Base de données** : MySQL 8.0+
- **Routage** : AltoRouter
- **Templates** : Twig
- **Frontend** : Bootstrap 5
- **Icônes** : Bootstrap Icons
- **Dépendances** : Composer

## 🛠️ Développement

### Lancer les tests

```bash
composer test
```

### Style de code

```bash
composer cs-fix
```

### Ajouter une fonctionnalité

1. Créer un modèle dans `models/`
2. Ajouter un contrôleur dans `controllers/`
3. Créer les templates Twig dans `views/`
4. Définir les routes dans `index.php`

## 📝 Documentation

- [Guide d'Architecture](docs/architecture.md)
- [Documentation API](docs/api.md)
- [Guide de Contribution](CONTRIBUTING.md)
- [Politique de Sécurité](SECURITY.md)

## 🤝 Contributions

Les contributions sont les bienvenues ! Veuillez lire notre [Guide de Contribution](CONTRIBUTING.md) pour plus de détails.

## 📄 Licence

Ce projet est sous licence MIT – voir le fichier [LICENSE](LICENSE) pour plus de détails.

