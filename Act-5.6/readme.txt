Leçon 5.6 : Commandes Dans Symfony

Envoyer un email aux utilisateurs (et non administrateurs)

***Pour installer le projet***:
# On clone le dépot 
git clone https://github.com/SamarCHERN/Module5.git

# On installe les dépendances:
composer install

# on crée la base de données :
symfony console doctrine:database:create

# on éxucute les migrations:
symfony console make:migration
symfony console doctrine:migrations:migrate

# On lance le serveur
php bin/console server:run

***Pour tester le code d'email:***
# lancer la commande suivant :php bin/console app:SendEmail
Le résultat sera affiché sur mailtrap