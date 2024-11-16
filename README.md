# Symfony-TODO

# What is Symfony?
Symfony is a popular PHP framework used for building web applications. It provides a set of reusable PHP components and a structure that helps you organize your code efficiently. With Symfony, you can create scalable and maintainable applications quickly and with less effort.

------------------------------------------------------------------------------------------------------------------------

# Symfony and MVC Pattern
Symfony encourages the use of the MVC (Model-View-Controller) pattern, separating the application into three components:

- Model: Manages the data and business logic.
- View: Handles the presentation using Twig templates.
- Controller: Processes requests and returns responses.

---------------------------------------------------------------------------------------------------------------------


# Understanding The Project Structure

- config/: This directory contains configuration files that define how the application behaves, such as database connections and service configurations.

- src/: This directory is where the PHP code resides. Controllers, entities, and other PHP classes are placed here, making it the core part of the application's code.

- templates/: This directory holds Twig templates, which structure how the website looks. HTML skeletons for rendering the web pages are managed here.

- public/: This is the web root directory. The index.php file inside it is the entry point for the application, directing web traffic to the appropriate controllers.


---------------------------------------------------------------------------------------------------------------------


# Running Your Symfony App

**php -S localhost:3000 -t public**


php starts the PHP interpreter.
-S tells PHP to start its built-in web server.
localhost:3000 specifies that the server should run on your local machine (localhost) at port 3000.
-t public sets the document root to the public directory of your Symfony project. This means the server will serve files from the public folder. The index.php file inside this folder handles all incoming requests.
