Leçon 5.4 : Tests Unitaires
Les tests unitaires vérifient que chaque méthode et fonction fonctionne correctement.

# En utilisant PHPUnit, on teste chacune des méthodes getState, createFile ,deleteFile, writeFile et readFile.

Pour installer le projet on suit les étapes suivants:
# On clone le dépot 
git clone https://github.com/SamarCHERN/Module5.git

# On installe les dépendances:
composer install

Pour tester les méthodes mentionnés ci-dessus on excute les codes suivants::
    $this->assertSame(["File.txt","File2.txt"], $file->state());
    $this->assertSame(["File.txt","File2.txt"], $file->createFile("File2"));
    $this->assertSame("CherniSamar", $file->readFile("File"));
    $this->assertSame(true, $file->deleteFile("File2"));
    $this->assertSame(true, $file->writeInFile("File", "Testing"));
