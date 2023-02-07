# CONSIGNES : 

Créer un api à l’aide de Symfony et d’Api Platform. 
Vous avez un site de comparateur de plateforme de streaming et vous devez montez l’api qui permet de manipuler les données de ces plateformes.

Pour cela vous créerez les entités suivantes :

Films
Plateformes de streaming
Users (les client de l'api et les admins de la plateforme)

Les plateformes ont le choix de retirer ou non un film de leur catalogue. Mais le film reste tout de même au sein de l’api.
Les films auront plusieurs catégories (à vous de les créer)


Nous aimerons avoir les films filtrés par catégories
Nous aimerons avoir la liste des films présents dans le catalogue pour chaque plateforme
Nous aimerons avoir la liste des films par date de sortie décroissante


Attention à bien protéger l’accès à votre API avec des jeton d’authentification
Attention à qui peut manipuler les données (security)


# Mon travail :

Dans mes commit j'ai un peu montré les étapes de construction de mon projet (j'ai essayé de spécifier les packages que j'ai apporté mais il est possibles que j'ai oublié d'en noter)
Les catégories de mes films (si tu veux aller les chercher avec le filtre que j'ai mis en place) sont :
Comedy, Historical, Documentary, Reality TV, Romance, Tragedy et Cartoon.
Les films sont automatiquement affiché par ordre de date de sortie décroissante (j'ai rajouté l'ordre dans la création de la classe)

Pour la sécurité, normalement j'ai laissé l'accès à l'api que aux admins (si j'ai bien compris ce que j'ai fait ^^) et j'ai aussi créé deux user, un avec le role admin et un avec un role user
Donc si tu veux les utiliser ils s'appellent ValouUser et ValouAdmin (je les ai identifiés avec des pseudos au lieu de le faire avec des emails)
et en password ils ont respectivement password et admin. Voilà, tout ça de toute façon tu pourras le voir dans AppFixtures, et j'espère que c'est assez clair.

Le seul petit truc où je sais pas si c'est bien ce que tu voulais, c'est pour la liste des films par plateforme. En soit quand j'affiche une plateforme il y a la liste des films qui sont dedans, mais représentés par leurs identifiants.
J'espère que c'est ça que tu voulais ? Parce que je sais pas trop comment afficher leur nom, là comme ça, et malheureusement j'ai plus le temps d'aller chercher dans la doc.

Bon voilà, j'espère que c'est clair, si t'as des questions par rapport à un choix que j'ai fait bien sûr n'hésites pas.
