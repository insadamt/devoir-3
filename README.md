# Devoir 3 – École La Plume

**Module : M205 – Développement back-end**  
**Filière : Développement digital – option web full stack**

## Description

Application web Laravel pour une école primaire avec les pages suivantes :
- **Accueil** : 3 articles créés avec un composant Blade réutilisable
- **Présentation** : Page de présentation de l'école
- **Résultat** : Liste des notes avec recherche
- **Contact** : Formulaire de contact

## Installation

```bash
git clone https://github.com/insadamt/devoir-3.git
cd devoir-3
composer install
cp .env.example .env
php artisan key:generate
```

Configure your database in `.env`, then:

```bash
php artisan migrate
php artisan db:seed
php artisan serve
```

## Structure des vues

```
resources/views/
├── layouts/
│   └── app.blade.php       # Layout principal (nav, hero, footer)
├── components/
│   └── article.blade.php   # Composant article réutilisable
├── home.blade.php
├── presentation.blade.php
├── resultat.blade.php
└── contact.blade.php
```

## Composant Article

```blade
<x-article
    image="url-de-l-image"
    title="Titre"
    texte="Description..."
    url="/lien"
/>
```
