# Ce fichier concerne l'installation depuis un projet vierge.
# Si vous faites un clone du projet, il n'y aura pas besoin de ces commandes.

## Pour adapter ce projet à vos projets en partant de ce repo

- Pour la base de données, vous pourrez modifier le fichier /src/settings.php .
- Pour la gestion de la récupération des données (PDO,MySql...) vous pouvez adapter les dépendances du projet depuis /src/dependencies.php . A savoir que l'utf8 n'était pas présent sur le projet par défaut.
- Pour gérer les routes, ça se passe dans le fichier /src/routes.php .
- Le fichier /src/middleware.php permet de mettre en place une sécurisation par API key par exemple. 

# Slim Framework 3 Skeleton Application

Use this skeleton application to quickly setup and start working on a new Slim Framework 3 application. This application uses the latest Slim 3 with the PHP-View template renderer. It also uses the Monolog logger.

This skeleton application was built for Composer. This makes setting up a new Slim Framework application quick and easy.

## Install the Application

Run this command from the directory in which you want to install your new Slim Framework application.

    php composer.phar create-project slim/slim-skeleton [my-app-name]

Replace `[my-app-name]` with the desired directory name for your new application. You'll want to:

* Point your virtual host document root to your new application's `public/` directory.
* Ensure `logs/` is web writeable.

To run the application in development, you can also run this command. 

	php composer.phar start

Run this command to run the test suite

	php composer.phar test

That's it! Now go build something cool.
