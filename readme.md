# Cours php : INSERT and SELECT
Insertion et affichage des données depuis une BDD

```php
 $reponse = $bdd->query('SELECT * FROM content ORDER BY date_modification DESC LIMIT 10');

```
## Base de données posts

```SQL
    -- Base de données : `posts`
    CREATE TABLE `content` (
    `id_post` int(11) NOT NULL,
    `titre` varchar(64) NOT NULL,
    `contenu` longtext NOT NULL,
    `date_creation` datetime NOT NULL,
    `date_modification` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

```
