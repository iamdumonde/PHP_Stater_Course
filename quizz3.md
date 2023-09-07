
logo high five
Quiz
Quiz_PHP3

1. Considérons le code suivant:

class User {
 private string $name; 
 private bool $banned = false;

 public function __constructor(string $name) {
  $this->name = $name;
 }

 public function setName(): void {
  $this->name = $name;
 }

 public function getName(): string {
   return $this->name;
 }

 public function setBanned(bool $banned): void {
  $this->banned = $banned;
 }

 public function isBanned(): bool {
 return $this->banned;
 }
}

$user1 = new User("Joe la Magouille");
$user->isBanned();

L'ulisateur Joe la Magouille est banni.

Vrai
Faux `Bonne`

2. Laquelle des opérations suivantes est évaluée à "true" si les deux opérandes ne sont pas du même type de données ou n'ont pas la même valeur ?

!== `Bonne`
===
!=
==

3. Considérons le code suivant:

$userSessionState = $suer->isConnected() ? "user" : "anonymous";

Comment qualifier cette syntaxe

null coalescing operator
ternary operator `Bonne`
concatenation operator
decrementing operator

4. Qu'affiche le code suivant ?

function sayHello(): void {
 echo("Salut");
}

function sayGoodBye(): void {
 echo("Au revoir");
}

$func = "sayHello";
$func();

Salut `Bonne`
Au revoir
Ce code lève une erreur
Rien

5. Contrairement aux arguments de fonctions, les arguments de méthodes ne peuvent pas définir de valeurs par défaut.

Vrai
Faux `Bonne`

6. Qu'affiche le code suivant ?

declare(strict_types = 1);

function square(int $x): int {
 return $x ** 2;
}

$result = square(1.62);
echo $result;

2.6244
3
Rien
Ce code lève une erreur `Bonne`

7. Qu'affiche le code suivant ?

"Badaboom !"
"Pouf !" `Bonne`
Rien
Ce code lève une erreur

8. En cas d'exception lors de la tentative de connexion, qu'affiche le code suivant ?

try {
 $conn = new PDO("mysql:host = localhost; dbname = cats; charset = utf8;", "catmaster", "azerty123456");
} catch(\Exception $e) {
 echo "Pouf !";
 die;
} finally {
 echo "Boom !";
}

"Pouf !" `Bonne`
"Boom !"
"Pouf !Boom !"
Rien

9. En PHP, quel mot-clé permet de lever une exception ?

raise
die
exit
throw `Bonne`

10. À quoi servent les namespaces

Structurer son architecture par ordre alphabétique
Envoyer des plats dans l'espace
Éviter des conflits de nommage `Bonne`
Constituer une forme d'héritage multiple

11. Qu'affiche le suivant:

interface WellMannered {
 public function sayHello(): string;
}

abstract class Model implements WellMannered {
 protected ?string $uuid = null;

 public function setUuid(?string $uuid): void {
  $this->uuid = $uuid;
 }
 public function getUuid(): ?string {
  return $this->uuid;
 }
}

final class User extends Model {
 private ?string $name = null;

 public function setName(?string $name): void {
  $this->name = $name;
 }
 public function getName(): ?string {
  return $this->name;
 }
}

null
undefined
Rien
Ce code lève une erreur `Bonne`

12. Comment qualifier une interface en PHP ?

C'est un contrat signé par une classe obligeant celle-ci à implémenter certaines propriétés
C'est un contrat signé par une classe obligeant celle-ci à implémenter certaines méthodes `Bonne`
C'est un contrat signé par un photographe l'obligeant à céder les droits patrimoniaux sur les souvenirs de son propre mariage
La notion d'interface n'existe pas en PHP

13. Comment qualifier un trait en PHP ?

Réutilisation de code
Héritage multiple `Bonne`
Instanciation
La notion de trait n'existe pas en PHP

14. Une classe peut utiliser plusieurs traits

Vrai `Bonne`
Faux

15. Une classe peut implémenter plusieurs interfaces

Vrai `Bonne`
Faux

16. Une classe peut hériter de plusieurs classes.

Vrai
Faux `Bonne`

17. On ne peut pas instancier une classe abstraite.

Vrai `Bonne`
Faux

18. Une interface peut définir des propriétés.

Vrai 
Faux `Bonne`

19. Un trait peut définir des propriétés

Vrai   
Faux 

20. Une interface peut instancier une classe abstraite si elle partagent un trait commun.

Vrai
Faux `Bonne`
