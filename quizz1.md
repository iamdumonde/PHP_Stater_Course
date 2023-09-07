
logo high five
Quiz
Quiz_PHP1

1. Quel est le principal rôle du PHP ?

Créer de l'interactivité sur le navigateur de l'utilisateur
Générer la réponse correspondant à une requête HTTP /*********/Bonne
Envoyer les images, CSS, polices et autres assets
Créer des logiciels de communication en temps réel


2. Comment déclare t-on une variable en PHP ?

$x = 6220; /***Bonne */
int $x = 6220;
let x = 6220;
let $x = 6220;


3. Considérons le code suivant:
$x = "Salut";
$y = (bool)$x;
Que contient la variable "$y" ?

L
null
false
true `Bonne`

4. De quel type est la variable "$y" dans le code suivant:

$x = [
 "numbers" => [0, 1, 2, 3, 4, 5, 6, 7, 8, 9],
 "letters" => [
   'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm',
   'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'
  ]
];

$y = $x['letters'][0];

int
float
string `Bonne`
array

5. Qu'affiche ce code PHP ?

$values = ['msg' => 'Salut'; 'question' => 'ça va ?'];
foreach($values as $k => $v) {
 echo $k;
}

msgquestion `Bonne`
Salut ça va ?
msg => Salut, question => ça va ?
01  

6. Qu'affiche le code suivant ?

$x = [ '9', '8', '7' ];
switch ($x[2]) {
 case '9':
  echo 'Blé';
  break;

 case '8':
  echo 'Seigle';
  break;

 default:
  echo 'Sarrasin';
  break;
}

Rien
Blé
Seigle
Sarrasin `Bonne`

7. Qu'affiche le code suivant ?

$values = [ 'Salut', 'ça va ?' ];
foreach($values as $k => $v) {
 echo $k;
}

Une chaîne de caractères vide
Salutça va ?
undefinedundefined
01 `Bonne`

8. Qu'affiche le code suivant ?

function add(int $x, int $y): float {
 return (float) ($x + $y);
}
echo add(15, 15);

Rien
30 `Bonne`
Ce code lève une erreur
15.15

9. Qu'affiche ce code ?

function appendQuestionMark(?string $str = 'Salut'): void {
 if ($str !== null) {
  echo $str . '?';
 }
}
appendQuestionMark("");

Rien
Salut ?
? `Bonne`
null
10. Comment s'appelle le principal standard de style du code en PHP ?

PEP 8
PSR-12 `Bonne`
ES 2015+
UTF-8

11. Selon les conventions, quelle forme doit adopter l'indentation en PHP ?

1 tabulation
4 tabulation
2 espaces
4 espaces `Bonne`

12. Selon les conventions, quel style doit suivre le nommage des variables en PHP ?

PascalCase
camelCase `Bonne`
snake_case
kebab-case

13. Laquelle de ces propositions affichera "Salut" dans du HTML ?

<p><?= "Salut" ?></p> `Bonne`
<p><!= "Salut" ?></p>
<p><?: "Salut" ?></p>
<p><?php "Salut" ?></p>

14. Qu'affiche le code suivant ?

$array = ["Salut"];
echo array_rand($array);

Salut
0 `Bonne`
1
Un nombre aléatoire compris entre 0 et 1

15. Considérons l'adresse suivante: <strong>https://www.qwant.com?q=melon</strong>. De quelle méthode HTTP cette adresse est-elle le fruit ?
 
GET `Bonne`
POST
PATCH
DELETE

16. Quelle méthode HTTP sera la plus appropriée pour un formulaire de publication de commentaire sur un blog ?

GET
POST `Bonne`
PATCH
DELETE
17. Considérons le code suivant:

<form method="post">
 <input type="text" name="msg" placeholder="Message" />
 <button type="submit">Valider</button>
</form>

Après avoir entré "Jambon" dans le champ de texte et avoir validé ce formulaire, que contient la variable superglobale "$_POST" ?

Elle n'existera pas
Un tableau vide "[]"
Un tableau associatif ["msg" => "Jambon"] `Bonne`
Un tableau associatif ["Message" => "Jambon"]

18. Que signifie le sigle "MVC" ?

Modified Version of a Cheatsheet
Model View Controller `Bonne`
Massively Visible Controller
Modelization Visualization Control

19. Laquelle de ces fonctions PHP sert à afficher le contenu d'une variable et des informations la concernant ?

include
isset
empty
var_dump `Bonne`

20. Une classe A hérite d'une classe B si

A inclut B
B est dans A
A est un B `Bonne`
A contient B
