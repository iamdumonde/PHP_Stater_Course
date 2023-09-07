
logo high five
Quiz
Quiz_PHP2

1. Comment spécifier le type de la valeur de retour d'une fonction ?

function getName()->string
function string getName()
function string: getName()
function getName(): string `Bonne`

2. Comment spécifier un type nullable pour la valeur d'un paramètre de fonction ?

function setName(string|null $name)
function setName(?string $name) `Bonne` 
function setName($name: ?string)
function setName($name ?: string)

3. Qu'affiche ce code ?

function getLetters(): string {
 return [
  'A', 'B', 'C', 'D', 'E', 'F', 'G,' 'H', 'I', 'J', 'K', 'L', 'M',

  'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'
 ];
}
echo getLetters();

ABCDEFGHIJKLMNOPQRSTUVWXYZ
['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z']
Rien, ce code lève une erreur `Bonne`
array(26)

4. Deux table SQL sont en relation si

L'une conserve la clé primaire de l'autre en tant que clé étrangère `Bonne`
Elles se sont rencontrées sur Meetic
Les deux ont une colonne de même nom
L'une stocke toutes les données dans une colonne JSON

5. Dans une base de données relationnelle, l'unique raison de créer des relations entre les tables est d'éviter la redondance des données

Vrai 
Faux `Bonne`

6. Que fait cette requête SQL ?

SELECT * FROM users WHERE age < 18;

Elle sélectionne tous les utilisateurs mineurs `Bonne`
Elle sélectionne tous les utilisateurs majeurs
Elle sélectionne tous les utilisateurs dans une limite de 17 résultats
Elle sélectionne tous les utilisateurs dont l'ID est inférieur à 18

7. Que sont les cookies ?

Un mécanisme d'enregistrement de données sur le serveur
Un mécanisme d'enrégistrement de données sur le navigateur `Bonne`
Des fichiers de moins de 8ko permettant d'enrégistrer des informations redondantes

8. Soit le code suivant:

setcookie('username', 'Magali', time() + 60 * 60 * 24 * 10);
Ce code permet de:

Supprimer le cookie nommé "username" dans 60 jours
Créer un cookie qui expirera dans 60 jours
Créer un cookie qui expirera dans 24 jours
Créer un cookie qui expirera dans 10 jours `Bonne`

9. Un cookie ne peut être lu que par un logiciel de traitement photo tel que Darktable ou Lightroom

Vrai
Faux `Bonne`

10. La variable "$_SESSION" peut être qualifiée de

Compteur de visiteurs
Variable d'ajustement
Variable superglobale `Bonne`
Constante Compilée à la volée 

11. La variable "$_FILES" contient:

Des dossiers sensibles du FBI liés aux enquêtes paranomales
Les fichiers transférés par l'utilisateur via un formulaire `Bonne`
Les fichiers transférés par l'utilisateur par la Poste
Les fichiers transférés par l'utilisateur via les paramètres "GET"

12. Quel effet produit le code suivant ?

if (true === true && 0 === 0) {
 header("Location: index.php");
 die;
}

Il supprime "index.php" de l'historique de navigation de l'uitlisateur
Il connecte l'utilisateur à sa session et le redirige vers "index.php"
Il redirige l'utilisateur vers "index.php" `Bonne`
Ce code ne produit aucun effet

13. L'architecture MVC permet de:

séparer la logique métier des templates HTML `Bonne`
rendre un site capable de s'adapter à la taille de l'écran d'affichage
rendre un site capable de s'adapter à la bande passante
séparer la mer en deux tout comme Moïse à l'époque

14. Qu'est-ce qu'un objet A par rapport à une classe X ?

Un enfant de la classe X
Une instance de la classe X `Bonne`
Un module optionnel de la classe X
Un constructeur de la classe X

15. Le mot-clé "new" sert à instancier une classe

Vrai `Bonne`
Faux 

16. Comment qualifier "eat" dans le code suivant ?

class User {
 public function eat(): void {
  echo "Miam";
 }
}

c'est une propriété
c'est une fonction
c'est une méthode `Bonne`
c'est une interface

17. Comment définit-on un constructeur en PHP ?

constructor()
construct()
_construct()
_ _construct() `Bonne`

18. Comment qualifier "$date" dans le code suivant ?

$date = new \DateTime();

C'est une propriété
C'est une constante
C'est une classe
C'est un objet `Bonne`

19. Considérons le code suivant:

class Rabbit {
 protected function jump(): void {
  echo "Boing !";
 }
}
Quelle assertion est axacte concernant "jump" ?

Cette méthode ne peut être exécutée qu'à l'intérieur d'une instance de "Rabbit" et de ses enfants `Bonne`
Cette méthode ne peut être exécutée qu'à l'intérieur d'une instance de "Rabbit"
Cette méthode peut être exécutée de n'importe où dans le code
Cette méthode s'exécute automatiquement à l'instanciation de "Rabbit"

20. Considérons le code suivant:

class Witch {
 private $hitPoints = 25.0;
 private float $manaPoints = 75.0

 public function castFireBall(): void {
  echo "Badaboom !";
  $this->manaPoints -= 25.0;
 }
 public function castLightHalo(): void {
  echo "Pfiou !";
  $this->hitPoints += 10.0;
 }
}

Laquelle des assertions suivantes est vraie à propos de $hitPoints

C'est un nombre entier
C'est un nombre flottant `Bonne`
