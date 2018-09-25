# Support module L3
La première étape a éffectué consiste à installer votre environnement de développement.
Il y a plusieurs façon de le faire, les critères principaux à retenir sont :
- Isolation les actions et développement que vous faites ne doivent pas perturber (poluer) le reste de votre système
- Evolution/Regression, vous devez pouvoir changer de version de librairie de langage en gardant la même architecture.
- Partage/Colaboration, un projet important ne se développement jamais seul et sera repris par d'autre, 
le temps que vous avez passé à configurer ne doit pas être perdu, il faut capitaliser
- Sauvegarde, on est jamais à l'abris d'une panne, votre environnement doit pourvoir se redéployer à partir d'un backup
- Historisation, les choix que vous faites à un moment dans vos développements peut être remis en cause, 
versionnez votre code pour pouvoir revenir en arrière 
## Exemple déploiement docker
Le Dockerfile fournit permet de construire une image prête pour installer le framework Symfony. La première étape sera 
de créer un projet et ses dépendances. On choisira par exemple un squelette minimum pour commencer, une approche pédagogique.

    $ docker build -t php:7.2-cli-symfony .
    
De cette image vous lancerez la création d'un projet en utilisant un script de composer officiel. En partant d'un projet
vide vous n'auriez rencontrer qucun problème. Mais en partant d'un clone de ce dépôt votre dossier versionné n'est pas 
vide il contient le Dockerfile, le README et le .git, nous allons donc créer le projet dans un nouveau dossier vide 
"project-tmp" par exemple

    $ docker run --rm -ti --name symfony -v `pwd`/project-tmp:/opt/project php:7.2-cli-symfony composer create-project symfony/skeleton /opt/project
    
Remarque: pour Windows remplacer `pwd` par C:\votre_repertoire_de_projet

Déplacer l'ensemble du squelette de votre nouveau projet dans le répertoire parent. Vous pouvez maintenant vérifier 
que tout est fonctionnel. Remarquer le chemin choisit pour la localisation du projet dans le contenair docker, "/opt/project"
ce choix n'est pas arbitraire, il reprend le chemin par défault donner dans l'interface de PhpStorm.  
Dernière action lancez votre serveur de dev. Pour quitter un simple ^ctrl c suffit. Pour vérifier connectez vous à 
l'url http://localhost avec votre navigateur.

    $ mv project-tmp/* .; mv project-tmp/.* .;rm -r project-tmp
    $ docker run --rm -p 80:80 -ti --name symfony -v `pwd`:/opt/project -w /opt/project php:7.2-cli-symfony
    
Optionnellement vous pouvez installer les des outils complémentaires

    $ docker run --rm -p 80:80 -ti --name symfony -v `pwd`:/opt/project -w /opt/project php:7.2-cli-symfony composer require server --dev