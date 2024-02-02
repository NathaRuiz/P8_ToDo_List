# P8_ToDo_List

## PEDAGOGICAL OBJECTIVE  
To be introduced to full stack web development using
PHP and MySQL. The project allows the application of concepts such as handling of forms, database queries, data validation and data manipulation. data validation and information manipulation.

## CONTEXT / NEED
This application, intended for individual users and teams, is work teams, its main objective is to facilitate the organisation, monitoring and completion of tasks and projects in a digital environment.It is a CRUD of a To Do List. 

## Process 
### Tecnologies
For this project I have used the :
 <img src="https://skillicons.dev/icons?i=html,css,php,bootstrap,)](https://skillicons.dev"/>

### Mockups 
The project is responsive and has the following views:
![Index view](/public/assets/images/index.JPG)
![Create view](/public/assets/images/create.JPG)
![Edit view](/public/assets/images/edit.JPG)
![Show view](/public/assets/images/show.JPG)

### Page Display
[URL-Demo]()

## Installations Steps

1. Download and Install XAMPP: Visit the official XAMPP [website](https://www.apachefriends.org/index.html) and download the version compatible with your operating system (Windows, macOS or Linux). Follow the installation instructions provided on the website.

2. Download and Install Composer: Visit the official [web](https://getcomposer.org/) and download the version compatible with your operating system. Follow the installation instructions provided on the website.

2. Start XAMPP and Apache: After installing XAMPP, start the application. Start the Apache server from the XAMPP control panel.

3. Open PHPMyAdmin in your web browser:
- Click on "SQL" in the top navigation bar.
- In the SQL query window, paste the provided SQL code:

```sql
CREATE DATABASE p8_todo_list;

USE p8_todo_list;

CREATE TABLE tasks (
id_task INT(11) PRIMARY KEY,
title VARCHAR(100) NOT NULL,
task_description VARCHAR(255) DEFAULT NULL,
task_state VARCHAR(50) DEFAULT NULL
);
```
- Click "Run" (this may vary depending on the version of PHPMyAdmin, but there is usually a similar button). This should create the p8_todo_list database and the tasks table on your MySQL server through PHPMyAdmin.

4. [Clone](https://docs.github.com/es/repositories/creating-and-managing-repositories/cloning-a-repository) the repository.

5. Place the project in the htdocs folder: 
- In XAMPP, the home directory of the web server is htdocs. Place the project in this directory. 

6. Open the project in Visual Studio Code (a source code editor developed by Microsoft for Windows, Linux, macOS and Web).

7. Open the project terminal in Visual Studio Code and run `composer install`.

8. Create a config.php file at the same level as the README.md document where you define the data to connect to the database, e.g.: 
```php
<?php
define('DB_HOST', '127.0.0.1');
define('DB_USER', 'root');
define('DB_PASS', 'here you put the password of your database, if you do not have it you leave it empty just the simple quotes');
define('DB_NAME', 'p8_all_list');
?>
```

9. Access your project in the browser: Open your web browser and visit the project path with localhost first, e.g.: http://localhost/P8_ToDo_List/

7. Enjoy it.


## Author
created with 💜 by [NathaRuiz](https://github.com/NathaRuiz)
