## Model Vue Controleur MVC

Le Modèle-Vue-Controleur (EN: Model-View-Controller) est un modèle de conception (design pattern) couramment utilisé dans le développement web pour aider à organiser le code séparer différents composants d'une application. Il favorise l'idée de diviser une application en trois composants principaux: le Modèle, la Vue et le Controlleur. 

Chaque composant a un rôle et des responsabilités spécifiques, ce qui rend la base de code plus organisées, plus facile à entretenir et plus évolutive.

Voici donc une explication de chacun:
1. Le Modèle : 
Le Modèle représente les données et la logique de votre application. 
Il est responsable de la gestion des données telles que 
- la récupération des données d'une base de donnée,
- l'exécution des calculs,
- l'application des règles métiers,
C'est la partie du code qui se charge de prendre les informations et les stocker dans la base de donnée.

2. La Vue :
Elle est responsable de l'affichage des données à l'utilisateur. C'est ce que l'utilisateur voit et avec quoi il interagit. 
La Vue prend les données du Modèle et les présente sous une forme conviviale pour l'utilisateur, généralement sous une forme de HTML, CSS, et parfois Javascript.

Les Vues sont principalement concernées par la présentation et ne contiennent généralement pas de logique complexe.
Ex: des (require)...

3. Le Contrôleur :
Il agit comme un intermédiaire entre le Modèle et la Vue.
Il reçoit les entrées de l'utilisateur depuis la Vue, les traite, interagit avec le Modèle pour récupérer ou mettre à jour les données, puis décide quelle Vue présenter à l'utilisateur.
Le Contrôleur contient la logique de l'application qui coordonne le flux de données entre le Modèle et la Vue. 