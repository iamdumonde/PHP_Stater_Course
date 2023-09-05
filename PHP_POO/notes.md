## Opérateur de Résolution de Porté

Le Scope Resolution Opérateur aussi connu sous le nom (Paamayin Nekudotayim) ou en terme simple les 2 points, est un opérateur permettant d'accéder aux constantes, aux propriétés et méthodes statiques d'une classe.

## Propriétés et Méthodes statiques

En PHP, une propriété ou méthode statique est associée à la classe , est même plutôt qu'à une instance particulière de cette classe. Cela signifie que vous pouvez accéder à des propriétés et des méthodes statiques sans créer une instance de la classe. Les propriétés et méthodes statiques sont déclarés en utilisant le mot-clé `static`.

```PHP
class MaClass {
    public static int $proprieteStatiqe = 0;

    public static function increment(){
        self::$proprieteStatique;
    }
}

// MaClass::increment();
// mecho MaClass::$proprieteStatique;


## Notion de trait en PHP
