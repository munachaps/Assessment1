# Assessment1
My assesssment task


## **Prerequisites**

Ensure you have the following installed on your system:
- [PHP 8.1 or higher](https://www.php.net/downloads.php)
- [Composer](https://getcomposer.org/download/)
- [Node.js and NPM](https://nodejs.org/en/download/)
- [Database (MySQL/PostgreSQL)](https://www.mysql.com/downloads/)

---

## **Clone the Repository**

git clone <repository-url>
cd <project-folder>

1. Generate project key by running php artisan key:generate after cloning the repo
2. Theres and admin user account I have added through admin seeders
3. You can view the seeder from database/seeders/AdminSeeder.
4. Run php artisan migrate:fresh --seed , to insert the admin user into the database
5. Run php artisan serve to access the project from your local server
6. go to localhost/login to access the backend and add site menus
