![HelpDesk](http://angular.kobject.net/git/phalconist/helpdesk.png "HelpDesk")
# helpdesk

A Helpdesk Application for educational purposes using a micro-framework

# Comment accéder au site ?

Il faut éxécuter xampp-control, et lancer les modules Apache et MySQL. 
On ouvre un navigateur internet et on tape l'adresse : http://127.0.0.1 
Il faut créer la Base de Données, puis on l'importe sur PHPMyAdmin.
Et pour accéder au projet helpdesk, il faut aller à l'adresse  http://127.0.0.1/helpdesk

# Objectif du projet :

Vous travaillez au sein d'une PME en tant que Responsable du support aux utilisateurs. Dans le cadre de votre travail, vous gérez aussi bien les incidents que les demandes d'assistance technique ou fonctionnelle sollicitées par les utilisateurs. 

Les demandes d'assistance ou remontées d'incidents ne sont pour l'instant pas informatisées, et les utilisateurs doivent vous contacter directement, par mail ou par téléphone, pour vous communiquer ces informations. 

Ce procédé est coûteux en temps, insatisfaisant pour les utilisateurs dont les demandes sont parfois oubliées. Il ne permet pas d'obtenir une traçabilité des actions d'exploitation menées. 

Vous avez un temps envisagé la mise en place de solutions existantes (GLPI + OCS), mais ces solutions sont trop complètes, parfois trop complexes pour le SI de votre entreprise. 

Vous avez donc décidé de réaliser une application Web permettant de gérer les demandes d'assistance, et dont les fonctionnalités sont adaptées à vos besoins.


Ce projet à été réalisé par William ANGLES et Quentin LEMOUTON.

# Répartition des tâches :

Comme nous avons tout deux des difficultés en PHP, nous avons décidé de travailler en "pair-programming" à l'IUT à chaque fois que cela était possible, et le week-end via des applications de partage d'écran.


# Éléments implémentés :

=> Ajout et suppression d'un ticket (auteur de l'article (Utilisateur), date de création (Date), statut du ticket (Nouveau) -> http://127.0.0.1/helpdesk/tickets

=> Ajout et suppression d'un article de la FAQ -> http://127.0.0.1/helpdesk/Faqs

=> Implémentation d'une page de test  -> http://127.0.0.1/helpdesk/test 

# Éléments non implémentés (par manque de compétences et de temps) :

=> Échange sur tickets
 
=> Modification du statut d'un ticket 

=> Consultation de tous les articles de la FAQ (et triée par catégorie, les 10 plus populaires et les 10 plus récents)

=> L'écran d'accueil des utilisateurs