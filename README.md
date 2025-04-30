# gestion_voiture
# 🚗 Gestion de Vente et Location de Voitures

Une application web développée avec **Laravel** permettant de gérer la vente et la location de voitures. Ce projet facilite la gestion des véhicules, des clients, des réservations, ainsi que le suivi des ventes et locations.

---

## 📌 Fonctionnalités

- 🔍 Affichage des voitures disponibles
- ➕ Ajout, modification et suppression de voitures (CRUD)
- 🧾 Gestion des réservations de location
- 🛒 Suivi des ventes de véhicules
- 👤 Gestion des clients
- 📊 Tableau de bord récapitulatif
- 🔐 Authentification des utilisateurs (admin, agents, etc.)

---

## 🛠️ Technologies utilisées

- **Laravel** (Back-end PHP Framework)
- **Blade** (Moteur de template)
- **MySQL** (Base de données)
- **Bootstrap / AdminLTE / autre** (Interface utilisateur)

---

## 🚀 Installation

### Prérequis
- PHP >= 8.0
- Composer
- MySQL
- Node.js et NPM (si vous utilisez Laravel Mix)

### Étapes

```bash
git clone https://github.com/odjidev/gestion_voiture.git
cd nom-du-projet
composer install
cp .env.example .env
php artisan key:generate


🔧 Configurez votre base de données dans le fichier .env

env
Copier
Modifier
DB_DATABASE=gestion_voiture
DB_USERNAME=root
DB_PASSWORD=secret
Puis lancez les migrations :



php artisan migrate
Et servez le projet :


php artisan serve
📁 Structure du projet au debut du projet

├── app/
│   └── Http/
│       └── Controllers/
│           └── VoitureController.php
│
├── resources/
│   └── views/
│       └── voitures/
│           ├── index.blade.php
│           ├── create.blade.php
│           ├── edit.blade.php
│           └── show.blade.php
│
├── routes/
│   └── web.php
├── public/
├── database/
│   └── migrations/
├── .env
└── README.md

ENTREPRISE 
👤 Auteur
Nom : odjidev

GitHub : @odjidev

Email : ouzairoudjire67@.com


