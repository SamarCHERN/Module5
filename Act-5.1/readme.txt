Leçon 5.1 : Security Components
deux comptes sont predefinis:
'ADMIN','admin@talan.com','123456'
'samar','samar@talan.com','samar123'

# On clone le dépot 
git clone https://github.com/SamarCHERN/Module5.git

# On installe les dépendances:
composer install

# on créé la base de données :
symfony console doctrine:database:create

# on éxucute les migrations:
symfony console make:migration
symfony console doctrine:migrations:migrate

# On lance le serveur
php bin/console server:run

Pour exécuter le code voici les différentes routes :
@Route ("/"): Home
@Route ("/Register"): pour créer un compte
@Route ("/login"): pour se connecter:
@Route ("/logout"):pour se déconnecter
@Route ("/index"): accessible uniquement après connexion
@Route ("/admin"): accessible uniquement après connexion pour voir la liste des users
@Route ("/useronly"): accessible uniquement après connexion affiche un élément différent selon si l’utilisateur possède le rôle ROLE_ADMIN ou non.


