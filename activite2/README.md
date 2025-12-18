<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel
# 🧪 Tests Unitaires dans Laravel – OrderService

## 📌 Description

Ce projet est un **mini-projet pédagogique Laravel** qui illustre la mise en place et l’exécution de **tests unitaires** .  
Il se concentre sur une fonctionnalité simple : **le calcul du montant total d’une commande** à partir d’une liste de produits.

L’objectif est de comprendre :
- l’intérêt des tests unitaires,
- la séparation entre logique métier et contrôleur,
- la création et l’exécution de tests Unit dans Laravel.

---

## 🎯 Objectifs pédagogiques

À la fin de cette activité, l’étudiant sera capable de :

- Comprendre l’importance des tests unitaires dans Laravel
- Créer un test unitaire simple
- Tester une logique métier isolée
- Exécuter et interpréter les résultats des tests

---

## 🛠 Prérequis

- PHP **8.x**
- Composer installé
- Connaissances de base en Laravel (routes, contrôleurs, services)
- Notions de PHP orienté objet

---

## 📁 Structure du projet

app/
└── Services/
└── OrderService.php

app/
└── Http/
└── Controllers/
└── OrderController.php (optionnel)

tests/
└── Unit/
└── OrderServiceTest.php

----

### Service métier

📄 `app/Services/OrderService.php`

```php
public function calculateTotal(array $items): float

▶️ Exécution des tests

Lancer la commande suivante :

php artisan test

👨‍🏫 Concepteur

Said GAHI
M202 – Approche Agile
DEVOWFS201

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
