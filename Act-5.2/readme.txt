Leçon 5.3 : AJAX Et Symfony

les objectifs de cette leçon:

# Utiliser Ajax pour afficher les informations de l'utilisateur connecté en cliquant sur un bouton
# Utiliser Ajax avec le formulaire.


Pour installer le projet on suit les étapes suivants:
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

Pour exécuter on suit routes suivants :
/login :Aprés la connexion une page s'affiche contient un bouton qui affiche les informations de l'utilisateur connecté


