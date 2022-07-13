Leçon 5.5 : Datatables Et Datafixtures


***Act5.5***
# Reprendre l'Act5.2
# Ajouter une liste des utilisateurs via un datatable affichées sur la page de L'admin :
a les fonctionnalités suivantes : recherche dans le datatable, tri des colonnes, recherche dans les colonnes, affichage des lignes par 10

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


***readmeAct5.1***
deux comptes sont predefinis:
'ADMIN','admin@talan.com','123456'
'samar','samar@talan.com','samar123'

Pour exécuter le code voici les différentes routes :
@Route ("/"): Home accessible par tout le monde
@Route ("/Register"): pour créer un compte
@Route ("/login"): pour se connecter:
@Route ("/logout"):pour se déconnecter
@Route ("/index"): accessible à l'utlisateur et l'admin après connexion, l'admin a un élément différent et le reste de la page est identique 
@Route ("/admin"): accessible uniquement à l'admin après connexion 

