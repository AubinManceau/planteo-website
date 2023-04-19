<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Plantéo - Agriculture urbaine</title>
    <link rel="shortcut icon" href="../img/favicon.png" type="image/x-icon">
    <script src="main.js" defer></script>
    <link rel="stylesheet" href="./style.css">
    <script src="https://kit.fontawesome.com/a560869912.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <div class="logo">
            <a href="../index.html"><img src="../img/logo.png" alt="logo Plantéo"></a>
        </div>
        <nav>
            <ul>
                <li><a href="../index.php">Accueil</a></li>
                <li><a href="#">Boutique</a></li>
                <li><a href="#">A propos</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
        <div class="icon">
            <i class="fa-sharp fa-solid fa-bag-shopping fa-2xl"></i>            
            <i class="fa-sharp fa-solid fa-user fa-2xl"></i>        
        </div>
    </header>

    <main>
        <div class="fiche-contact">
            <div class="contact-gauche">
                <div class="coordonnees">
                    <h2>Coordonées</h2>
                    <ul>
                        <li>Plantéo</li>
                        <li>56 rue Savary</li>
                        <li>49100 Angers</li>
                    </ul>
                </div>
                <div class="contact">
                    <h2>Contact</h2>
                    <ul>
                        <li>Plantéo</li>
                        <li>02 45 96 85 26</li>
                        <li>contact@planteo.fr</li>
                    </ul>
                </div>
            </div>
            <div class="contact-droite">
                <div class="formulaire-contact">
                    <div class="titre-formulaire">
                        <h2>Nous contacter :</h2>
                    </div>
                    <form action="contact.php" method="post">
                        <label for="Name">Nom :</label>
                        <div class ="name-input">
                            <input type="text" id="Name" name="FirstName" placeholder="Prénom">
                            <input type="text" id="Name" name="LastName" placeholder="Nom">
                        </div>
                        <label for="Email">Email :</label>
                        <input type="email" name="Email" id="Email" placeholder="Adresse e-mail">
                        <label for="Message">Message :</label>
                        <textarea name="Message" id="Message" name="Message" placeholder="Votre message ..."></textarea>
                        <div class="bouton">
                            <button>Envoyer</button>
                        </div>
                    </form>
                </div>
            </div>   
        </div>

        <?php

        // Vérification de la soumission du formulaire
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            // Récupération de données
            $firstName = $_REQUEST['FirstName'];
            $lastName = $_REQUEST['LastName'];
            $email = $_REQUEST['Email'];
            $message = $_REQUEST['Message'];

            // Gestion d'erreurs
            $hasErrors = false;

            // Vérification des données
            if (strlen($firstName) < 2) {
                $hasErrors = true;
                echo '<div class="alert1">Le prénom doit faire au minimum 2 caractères !</div>';
            }

            if (strlen($lastName) < 2) {
                $hasErrors = true;
                echo '<div class="alert2">Le nom doit faire au minimum 2 caractères !</div>';
            }

            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $hasErrors = true;
                echo '<div class="alert3">L\'adresse email est invalide !</div>';
            }

            if (strlen($message) < 10) {
                $hasErrors = true;
                echo '<div class="alert4">Le message doit faire au minimum 10 caractères !</div>';
            }

            // Envoyer le mail
            if (!$hasErrors) {

                echo '<div class="alert5">Le message a été envoyé avec succès !</div>';

                //mail('contact@mds.fr', 'Formulaire de contact', $message);

                // Supprime les variables
                unset($firstName);
                unset($lastName);
                unset($email);
                unset($message);
            }
        }

        ?>

        <div class="element-aide">
            <h2>Aide / FAQ</h2>
            <div class="all-aide">
                <div class="accordeon-item" id="aide-1">
                    <div class="accordeon-header">
                        <p>Comment fonctionnent les jardins Plantéo ?</p>
                        <i class="fa-sharp fa-solid fa-angle-down fa-2xl" id="angle-1"></i>
                    </div>
                    <div class="accordeon-content hidden" id="accordeon1">
                        <p>Les jardins Plantéo sont des jardins d'intérieur automatisés qui fournissent aux plantes les conditions idéales pour leur croissance. Ils utilisent un système d'irrigation et d'éclairage LED pour assurer une croissance optimale des plantes. Les utilisateurs peuvent contrôler les paramètres via une application mobile.</p>
                    </div>
                </div>
                <div class="accordeon-item" id="aide-2">
                    <div class="accordeon-header">
                        <p>Comment puis-je ajouter des nutriments à la terre de mon jardin d'intérieur ?</p>
                        <i class="fa-sharp fa-solid fa-angle-down fa-2xl" id="angle-2"></i>
                    </div>
                    <div class="accordeon-content hidden" id="accordeon2">
                        <p>Pour ajouter des nutriments à la terre de votre jardin d'intérieur Plantéo, vous pouvez commander des sachets de nutriments sur notre site. Il suffit de dissoudre un sachet dans le réservoir d'eau pour enrichir le sol. Nos nutriments sont spécialement conçus pour répondre aux besoins des plantes cultivées en intérieur.</p>
                    </div>
                </div>
                <div class="accordeon-item" id="aide-3">
                    <div class="accordeon-header">
                        <p>Comment savoir quand mes plantes sont prêtes à être récoltées ?</p>
                        <i class="fa-sharp fa-solid fa-angle-down fa-2xl" id="angle-3"></i>
                    </div>
                    <div class="accordeon-content hidden" id="accordeon3">
                        <p>Pour savoir quand vos plantes sont prêtes à être récoltées, vous pouvez utiliser l'application mobile ou l'écran tactile de votre jardin Plantéo. Lorsque vos plantes ont atteint leur maturité, vous recevrez une notification vous informant qu'il est temps de récolter vos fruits et légumes.</p>
                    </div>
                </div>
                <div class="accordeon-item" id="aide-4">
                    <div class="accordeon-header">
                        <p>Comment nettoyer mon jardin d'intérieur Plantéo ?</p>
                        <i class="fa-sharp fa-solid fa-angle-down fa-2xl" id="angle-4"></i>
                    </div>
                    <div class="accordeon-content hidden" id="accordeon4">
                        <p>Il est important de nettoyer régulièrement votre jardin d'intérieur Plantéo pour maintenir un environnement sain pour vos plantes. Utilisez un chiffon doux pour essuyer la surface extérieure et nettoyer le réservoir d'eau avec de l'eau tiède et du savon doux. N'utilisez pas de nettoyants abrasifs ou corrosifs qui pourraient endommager l'appareil.</p>
                    </div>
                </div>
                <div class="accordeon-item" id="aide-5">
                    <div class="accordeon-header">
                        <p>Puis-je planter mes propres graines dans le jardin d'intérieur Plantéo ?</p>
                        <i class="fa-sharp fa-solid fa-angle-down fa-2xl" id="angle-5"></i>
                    </div>
                    <div class="accordeon-content hidden" id="accordeon5">
                        <p>Oui, vous pouvez planter vos propres graines dans le jardin d'intérieur Plantéo. Cependant, pour de meilleurs résultats, nous recommandons d'utiliser les sachets de graines de haute qualité de Plantéo, spécialement conçus pour le jardinage en intérieur. Les sachets de graines garantissent des taux de germination élevés et des plantes saines.</p>
                    </div>
                </div>
                <div class="accordeon-item" id="aide-6">
                    <div class="accordeon-header">
                        <p>Comment joindre le service client de Plantéo en cas de question ou de problème avec mon produit ?</p>
                        <i class="fa-sharp fa-solid fa-angle-down fa-2xl" id="angle-6"></i>
                    </div>
                    <div class="accordeon-content hidden" id="accordeon6">
                        <p>Vous pouvez joindre le service client de Plantéo en utilisant le formulaire de contact sur notre site web, en nous envoyant un e-mail à l'adresse indiquée sur la page de contact, ou en appelant notre numéro de téléphone. Nous sommes à votre disposition pour répondre à toutes vos questions et résoudre tous les problèmes que vous pourriez rencontrer avec votre produit Plantéo.</p>
                    </div>
                </div>
                
            </div>
        </div>

    </main>

    <footer>
        <div class="elements-footer">
            <div class="logo-footer">
                <img src="../img/logo_blanc.png" alt="">
                <div class="rs-footer">
                    <a href=""><img src="../img/instagram.png" alt=""></a>
                    <a href=""><img src="../img/facebook.png" alt=""></a>
                    <a href=""><img src="../img/youtube.png" alt=""></a>
                </div>
            </div>
            <div class="liens-footer">
                <h2>Liens utiles</h2>
                <ul>
                    <li><a href="../index.html">Accueil</a></li>
                    <li><a href="#">Boutique</a></li>
                    <li><a href="#">A propos</a></li>
                </ul>
            </div>
    
            <div class="contact-footer">
                <h2>Assistance</h2>
                <ul>
                    <li><a href="#">Aide / FAQ</a></li>
                    <li><a href="contact.php">Nous contacter</a></li>
                </ul>
            </div>
        </div>
        <p>© 2023 Plantéo - Tous droits réservés</p>
    </footer>
    
</body>
</html>