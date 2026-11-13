# Kape Lokal

**IT 110 – AIGO1 Group Project**

**Project:** Multi-Page Laravel Web Application

## Project Concept

Kape Lokal is a student-made guide to coffee shops around Ampayon, Butuan City, near Caraga State University (CSU). There are many coffee places in the area, and students may not know which one fits their plans, taste, or budget.

The project aims to help CSU students discover local cafés and choose where to spend their next coffee break. It also gives café owners a way to introduce their shop to students. As the team gathers information, the guide can include useful details such as location, menu and prices, atmosphere, and whether a café is a good place to study or meet friends.

The visual direction is minimalist and welcoming, using warm coffee browns, cream, and muted natural colors. “Kape Lokal” is the project’s working brand name.

## Pages and Features

| Page | Route | Planned content and feature |
|---|---|---|
| Home | `/` | Introduces the guide and Ampayon coffee scene; includes a photo carousel |
| About | `/about` | Shares the project story, mission, vision, and team; includes a Read More / Read Less feature |
| Contact | `/contact` | Provides contact details and a form with client-side validation |

The Contact form is a front-end class-project feature; it does not send messages unless a backend is added.

## Team and Branches

| Member | Responsibility | Branch |
|---|---|---|
| Kirstein Genzen Nojapa (Member 1 / Group Leader) | Project setup, shared layout, and Home page | `dev-member1-Nojapa` |
| Mark Salva (Member 2) | About page | `dev-member2-Salva` |
| Dianah Pauline L. Sajulga (Member 3) | Contact page | `dev-member3-Sajulga` |

If a branch does not exist on GitHub yet, create it from `main` before starting work. Each member should commit to their own branch and open a pull request to `main`; do not push directly to `main`.

## Technology

- Laravel and PHP
- Blade templates
- HTML, CSS, and JavaScript
- Git and GitHub

Page-specific styles and scripts are stored in `public\css\` and `public\js\`. The shared Blade layout is in `resources\views\layouts\app.blade.php`.

## Setup on Windows

From Command Prompt, clone the repository and enter its folder:

```cmd
git clone <repository-url>
cd Lara-Proj-AIGO1-Nojapa-Sajulga-Salva
composer install
copy .env.example .env
if not exist database\database.sqlite type nul > database\database.sqlite
php artisan key:generate
php artisan migrate
```

Start the app:

```cmd
php artisan serve
```

Open the address printed by Laravel, usually `http://127.0.0.1:8000`. Keep `.env` and other local secrets out of Git.

To run the tests:

```cmd
php artisan test
```

## Git Workflow

Replace `<your-branch>` with your assigned branch name:

```cmd
git switch <your-branch>
git pull origin <your-branch>
git status
git add <files-you-changed>
git commit -m "Describe your change"
git push -u origin <your-branch>
```

After pushing, open GitHub and create a pull request from your branch to `main`.

## Screenshots

Add screenshots of the Home, About, and Contact pages here after the pages are ready.
