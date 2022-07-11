Leçon 5.1 : Security Components
deux comptes sont predefinis:
'ADMIN','admin@talan.com','123456'
'samar','samar@talan.com','samar123'

Pour installer le projet:
-composer install
-symfony console doctrine:database:create
-symfony console make:migration
-symfony console doctrine:migrations:migrate
-php bin/console server:run

Pour exécuter le code voici les différentes routes :
@Route ("/"): Home
@Route ("/Register"): pour créer un compte
@Route ("/login"): pour se connecter:
@Route ("/logout"):pour se déconnecter
@Route ("/index"): accessible uniquement après connexion
@Route ("/admin"): accessible uniquement après connexion pour voir la liste des users
@Route ("/user"): accessible uniquement après connexion affiche un élément différent selon si l’utilisateur possède le rôle ROLE_ADMIN ou non.


