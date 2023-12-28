# mvc-celian-philibert-ESGI

je n'ai pas réussi a faire l'authentification mais voici les chemin de pensé que j'ai utilisé et appliqué si cela peut vous aider a vous aider

1. Authentification via un formulaire de login :
   Créez une route pour le contrôleur de login.
   Dans le fichier login.html.twig, créez un formulaire de login.
   Dans le contrôleur, ajoutez une méthode POST pour gérer le formulaire et vérifier les informations d'authentification.

2. Gestion de la session après une authentification réussie :
   Écrivez un service de gestion de session. Vous pouvez créer une classe SessionManager avec des méthodes pour stocker, récupérer et supprimer des données de session.
   Utilisez ce service dans votre contrôleur de login pour enregistrer les informations de l'utilisateur après une authentification réussie.

3. Attribut d'autorisation :
   Créez un nouvel attribut, par exemple Authenticated, qui peut être appliqué au-dessus d'un contrôleur.
   Dans le Router, avant d'exécuter le contrôleur, vérifiez si l'utilisateur est authentifié en utilisant le service de gestion de session. Si l'utilisateur n'est pas authentifié et que l'attribut Authenticated est présent, redirigez-le vers la page de login.
   Créez un middleware pour vérifier l'authentification avant d'exécuter un contrôleur.
   Ajoutez l'exécution du middleware avant de lancer le contrôleur dans Router.php
