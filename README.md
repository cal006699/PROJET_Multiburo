# PROJET_Multiburo

Multiburo est une plateforme de gestion et de réservation d'espaces de travail (bureaux simples, duo, salles de projet). Le projet repose sur une architecture hybride séparant l'interface utilisateur web de l'outil de gestion administrative.

## 🏗️ Architecture du Projet

Le système est conçu autour de deux composants principaux connectés à une base de données SQL centralisée :

### 1. Interface Client (Front-end)
Développée en **PHP** et hébergée sous **Apache**.
Cette interface permet aux utilisateurs finaux de :
* Consulter la disponibilité des bureaux.
* Effectuer, modifier ou annuler des réservations.
* Visualiser les différents types d'espaces (Simple, Duo, Salles de projet).

### 2. Application de Gestion (Back-end / Admin)
Développée en **C#**.
Cette application desktop est dédiée aux administrateurs (chefs de projet) pour piloter l'infrastructure :
* Gestion complète du parc de bureaux (ajout, modification, suppression).
* Mise à jour des capacités et caractéristiques des espaces en temps réel.
* Supervision globale des utilisateurs et des réservations.

## 🛠 Stack Technique

* **Web (Client)** : PHP, HTML, CSS. / Serveur Apache.
* **Gestion (Admin)** : C# (.NET).
* **Base de Données** : SQL (MySQL).

## 🗄 Structure de la Base de Données

Le système synchronise les données entre le Front et le Back via quatre entités principales :
* **user** : Gestion des comptes et droits d'accès.
* **ressource** : Inventaire des bureaux et caractéristiques techniques.
* **reservations** : Historique et planning des occupations.
* **type_ressource** : Catégorisation des espaces (simple, duo, salle, etc.).

## 🚧 État d'avancement
- [x] Interface de réservation web (PHP/Apache)
- [x] Configuration de la base de données SQL
- [ ] Application de gestion C# (En cours de développement)

---
*Projet conçu pour une gestion agile et centralisée des espaces de travail.*
