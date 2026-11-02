# 🏢 PROJET Multiburo

Application web de gestion et de réservation de ressources de travail (bureaux, espaces duo, tables de réunion), développée en PHP natif avec une base de données MySQL.

---

## 🚀 Fonctionnalités

* **Authentification simple** : Connexion rapide par nom et prénom.
* **Catalogue des ressources** : Visualisation des différents types d'espaces disponibles (bureaux seuls, bureaux duo, tables de réunion).
* **Réservation en un clic** : Sélection et réservation d'une ou plusieurs ressources en toute simplicité.
* **Sécurité des données** : Utilisation stricte de **requêtes préparées PDO** pour contrer les injections SQL.

---

## 📁 Structure du projet

Voici la description des principaux fichiers présents dans le dépôt :

* `database.inc.php` : Gestion de la connexion à la base de données MySQL via PDO.
* `model.inc.php` : Fichier contenant les requêtes et interactions avec la base de données.
* `functionMultiburo.php` : Fonctions utilitaires et logique métier du projet.
* `multi_calvin.php` : Page principale / interface utilisateur (connexion et affichage des ressources).
* `style.css` : Feuille de style personnalisée pour l'interface.

---

## 🛠️ Pré-requis techniques

Le projet nécessite un serveur local (ex: **XAMPP**, **WampServer** ou **MAMP**) comprenant :
* Un serveur web **Apache**
* Un serveur de base de données **MySQL**
* **PHP**

---

## ⚙️ Installation et Lancement

1. **Cloner le projet** dans le dossier de votre serveur local :
   ```bash
   git clone https://github.com/cal006699/PROJET_Multiburo.git
