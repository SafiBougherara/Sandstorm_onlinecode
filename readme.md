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


SCREENSHOTS/

![image](https://github.com/user-attachments/assets/a94d56ce-268a-4958-be3b-ff52a36579a5)
![image](https://github.com/user-attachments/assets/0a2077ba-54e2-4b4c-8324-5131bb0f8b67)

![{FBC35A55-39A5-4217-9889-3F184285DC11}](https://github.com/user-attachments/assets/e4fef15a-42f8-4098-a5b9-754af7911ff5)

![{09B5CB76-B431-4126-9EBD-0B416F1481CC}](https://github.com/user-attachments/assets/16bf4c73-f852-42ae-872f-d7317c527860)

![{077CF8BD-D9E7-42A8-9637-ECB4FC750EF2}](https://github.com/user-attachments/assets/b9a3fd57-b70f-44fa-8e0f-339f9ab069d8)

![{48EF18DC-0C0A-477A-BFE1-5BE5F3251D6D}](https://github.com/user-attachments/assets/dd97c078-51a6-4435-b98e-933cfdca109f)

![{2B67CB3E-858A-4B43-B904-6EA938FBEA3E}](https://github.com/user-attachments/assets/fb46e244-ef45-4fa8-89cf-1c45b2d6fbb0)

![{653E9147-41D1-41EC-B130-9DAB78F19382}](https://github.com/user-attachments/assets/6b063a77-7adf-48b2-a6fd-b57746e3f6b6)

![{A8A88167-4632-4893-9E60-D96ED8429265}](https://github.com/user-attachments/assets/b09e1a26-ce3a-45ab-8f88-88ff1ba18c74)


## 🤝 Contributions

Les contributions sont les bienvenues ! Veuillez lire notre [Guide de Contribution](CONTRIBUTING.md) pour plus de détails.

## 📄 Licence

Ce projet est sous licence MIT – voir le fichier [LICENSE](LICENSE) pour plus de détails.

