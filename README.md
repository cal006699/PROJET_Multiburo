# PROJET_Multiburo

Multiburo est une plateforme de gestion et de réservation d'espaces de travail conçue pour optimiser l'occupation des bureaux au sein d'une entreprise ou d'un espace de coworking.

## 📋 Description du Projet

L'application permet aux collaborateurs de réserver facilement différents types d'espaces de travail selon leurs besoins :
- **Bureaux simples**
- **Bureaux duo**
- **Salles de projet**
- Et d'autres configurations disponibles.

Le système s'appuie sur une base de données **SQL** robuste pour assurer la cohérence et la persistance des données relatives aux réservations, aux utilisateurs, aux types de bureaux et à la disponibilité des équipements.

## 🚀 En Développement : Interface d'Administration (C#)

Une application complémentaire est actuellement en cours de développement en **C#**. 

Son objectif principal est de fournir aux administrateurs (chefs de projet/gestionnaires) un outil puissant pour :
- **Gérer le parc de bureaux** : Ajouter de nouveaux bureaux ou modifier les capacités existantes.
- **Maintenance** : Garder un inventaire à jour en temps réel.
- **Gestion simplifiée** : Une interface dédiée pour éviter toute manipulation directe complexe en base de données.

## 🛠 Stack Technique

* **Web** : [À compléter : ex. PHP/JS, React, HTML/CSS...]
* **Base de Données** : SQL (MySQL / PostgreSQL / SQL Server)
* **Gestion Administrative** : C# (.NET)

## 📁 Structure de la Base de Données

Le système gère principalement quatre entités :
1.  **Users** : Gestion des comptes et droits d'accès.
2.  **Desks** : Liste complète des bureaux et leurs caractéristiques.
3.  **Reservations** : Historique et planning des occupations.
4.  **Types** : Catégorisation des espaces (simple, duo, salle, etc.).

## 🚧 État d'avancement
- [x] Interface de réservation web
- [x] Configuration de la base de données SQL
- [ ] Application de gestion C# (En cours de développement)

---
*Projet créé pour faciliter la gestion agile des espaces de travail.*
