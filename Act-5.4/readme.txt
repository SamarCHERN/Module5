Leçon 5.4 : Tests Unitaires
Les tests unitaires vérifient que chaque méthode et fonction fonctionne correctement.
Dans ce cadre on teste chacune des méthodes State, createFile ,deleteFile, writeFile et readFile en utlisant PHPUnit.

Pour installer le projet on suit les étapes suivants:
# On clone le dépot 
git clone https://github.com/SamarCHERN/Module5.git

# On installe les dépendances:
composer install

# Lancer la cammande de testing(Pour tester tous les méthodes à la fois)  :
vendor/bin/phpunit

Pour tester les méthodes mentionnés(une par une) on exécute les commandes suivants:
***State***
vendor/bin/phpunit --filter testState tests/Service/FileSystemImprovedTest.php
***createFile***
vendor/bin/phpunit --filter testCreate tests/Service/FileSystemImprovedTest.php
***readFile***
vendor/bin/phpunit --filter testRead tests/Service/FileSystemImprovedTest.php
***writeInFile***
vendor/bin/phpunit --filter testWrite tests/Service/FileSystemImprovedTest.php
***deleteFile***
vendor/bin/phpunit --filter testDelete tests/Service/FileSystemImprovedTest.php


