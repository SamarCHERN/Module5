Leçon 5.4 : Tests Unitaires
Les tests unitaires vérifient que chaque méthode et fonction fonctionne correctement.
Dans ce cadre on teste chacune des méthodes State, createFile ,deleteFile, writeFile et readFile en utlisant PHPUnit.

Pour installer le projet on suit les étapes suivants:
# On clone le dépot 
git clone https://github.com/SamarCHERN/Module5.git

# On installe les dépendances:
composer install

# Lancer la cammande de testing :
vendor/bin/phpunit

Pour tester les méthodes mentionnés on a exécuté les méthodes suivants(on peut tester tous ou bien une par une):
***State***
Method testState: $this->assertSame(["File.txt"], $file->state());
***createFile***
Method testCreate: $this->assertSame(["File.txt","File2.txt"], $file->createFile("File2"));
***readFile***
Method testRead: $this->assertSame("CherniSamar", $file->readFile("File"));
***readFile***
Method testWrite: $this->assertSame(true, $file->writeInFile("File", "Testing"));
***deleteFile***
Method testDelete: $this->assertSame(true, $file->deleteFile("File2"));


