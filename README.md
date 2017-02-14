tchat
=====

A Symfony project created on February 14, 2017, 1:38 pm.

Nous avons installé symfony.
Nous avons fait quelques recherche pour pouvoir faire un tchat en ajax
Ensuite nous avons crée un projet tchat puis nous avons crée notre base de donnée "tchat" et nous avons ensuite affiché notre vue index.html grace au controller DefaultController qui se trouve dans AppBundle, nous avons généré des entités via le terminal : php bin/console doctrine:generate:entity
Puis nous avons mis à jour notre base de donnée avec : php bin/console doctrine:schema:update --force
Nous avons crée une fonction traitement qui est censé nous permettre de stocker les messages dans ma base de donnée mais nous avons fait une erreur en utilisant PDO.
Nous avons crée un formulaire avec les champs "pseudo" et "message" dans le fichier index.html qui fait appel à notre fonction traitement.
Nous devons revoir la fonction traitement avec doctrine ce qui nous permettra de stocker les messages et repondre à l'exercice.
Nous avons fait l'erreur de récuperer une fonction sur openclassroom qui n'etait pas cohérente par rapport à l'exercice.
