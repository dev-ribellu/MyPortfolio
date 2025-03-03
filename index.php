<?php

    $pdo = require 'include/connect.php';
    $sql = 'SELECT * FROM utilisateur';
    $statement = $pdo->query($sql);
    $user_data = $statement->fetch(PDO::FETCH_ASSOC);
    
?>




<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyPortfolio by dev-ribellu</title>
    <link rel="icon" href="images/dev-logo.png" type="image/png">
    <link rel="stylesheet" href="style/header.css">
    <link rel="stylesheet" href="style/body.css">
    <link rel="stylesheet" href="style/section/section.css">
    <link rel="stylesheet" href="style/section/acceuil.css">
    <link rel="stylesheet" href="style/section/about.css">
    <link rel="stylesheet" href="style/section/skills.css">
    <link rel="stylesheet" href="style/section/projects.css">
    <link rel="stylesheet" href="style/section/contact.css">
 

</head>

<body>
    <div id="particles-js"></div> <!-- Conteneur pour les particules -->
    <header>
        <img src="images/dev-logo.png" alt="Logo" class="logo">
        <button class="menu-toggle" aria-label="Toggle navigation">
            <span class="menu-icon"></span>
        </button>
        <nav>
            <ul>
                <li><a href="#accueil" id="nav-accueil">Accueil</a></li>
                <li><a href="#aboutme" id="nav-aboutme">A propos</a></li>
                <li><a href="#competences" id="nav-competences">Compétences</a></li>
                <li><a href="#Projets" id="nav-Projets">Réalisations</a></li>
                <li><a href="#contact" id="nav-contact">Contact</a></li>
            </ul>
        </nav>
    </header>
    <main>
       
       



    <!--
        Section: Accueil
        Description: Cette section représente la page d'accueil du site web. 
        Elle contient les éléments principaux qui accueillent les utilisateurs 
        et leur donnent un aperçu des fonctionnalités et informations disponibles.
    -->


        <section id="accueil">
            <div class="container-acceuil">
                <div class="image-cercle">
                    <img src="images/Robin_edit.jpg" alt="Image de profil" id="profile-image">
                </div>
                <div class="texte">
                    <p class="ligne1">Je suis</p>
                    <p class="ligne2"><?=$user_data['nom']?></p>
                    <p class="ligne3" id="ligne3">Front-end développeur</p>
                </div>
            </div>
        </section>

        <!--
            Section: À propos de moi
            Description: Cette section fournit des informations personnelles sur l'auteur du portfolio.
            Elle peut inclure une brève biographie, des intérêts personnels, et des informations de contact.
        -->

        <section id="aboutme">
            <div class="titre">
                <p class="sous-titre">A Propos</p>
                <p class="grand-titre">A Propos</p>
            </div>
            <div class="contenu">
                <div class="image-carre">
                    <img src="images/About.jpg" alt="Image de profil">
                </div>
                <div class="texte">
                    <p class="nom">Robin Fligitter</p>
                    <p class="description">Je suis un développeur front-end passionné avec une expérience en community management et en graphisme.</p>
                    <div class="infos">
                        <p><strong>Nom :</strong> Robin Fligitter</p>
                        <p><strong>Diplôme :</strong> Licence en Informatique</p>
                        <p><strong>Téléphone :</strong> 0123456789</p>
                        <p><strong>Adresse :</strong> 123 Rue Exemple, Ville, Pays</p>
                        <p><strong>Date de naissance :</strong> 01/01/1990</p>
                        <p><strong>Expérience :</strong> 5 ans</p>
                        <p><strong>Email :</strong> robin@example.com</p>
                        <p><strong>Statut :</strong> Freelance</p>
                    </div>
                    <div class="boutons">
                        <button class="btn">CV</button>
                    </div>    
                </div>
            </div>
        </section>
            

    <!--
        Section: Compétences

        Description:
        Cette section met en avant les compétences et les aptitudes professionnelles. 
        Elle peut inclure des compétences techniques, des compétences interpersonnelles, 
        des certifications, des langues parlées, et d'autres qualifications pertinentes.

        Utilisation:
        Utilisez cette section pour lister et décrire les compétences clés qui sont 
        pertinentes pour le poste ou le domaine d'activité. Assurez-vous de mettre en 
        avant les compétences les plus importantes et les plus recherchées par les employeurs.

        Exemple:
        - Compétences techniques: Programmation en Python, Développement web, Gestion de bases de données
        - Compétences interpersonnelles: Communication, Travail en équipe, Leadership
        - Certifications: Certifié PMP, Certifié AWS Solutions Architect
        - Langues: Français (natif), Anglais (courant), Espagnol (intermédiaire)
    -->



    <section id="competences">
        <div class="content-wrapper">
            <div class="titre">
                <p class="sous-titre">Compétences</p>
                <p class="grand-titre">Skills</p>
            </div>
            <div class="center">
                <h1>Software skills</h1>
                <div class="skillbox">
                    <p>HTML5</p>
                    <p>90%</p>
                    <div class="skill">
                        <div class="skill_level" data-skill="90"></div>
                    </div>
                </div>
                <div class="skillbox">
                    <p>CSS3</p>
                    <p>70%</p>
                    <div class="skill">
                        <div class="skill_level" data-skill="70"></div>
                    </div>
                </div>
                <div class="skillbox">
                    <p>JavaScript</p>
                    <p>50%</p>
                    <div class="skill">
                        <div class="skill_level" data-skill="50"></div>
                    </div>
                </div>
                <div class="skillbox">
                    <p>SQL</p>
                    <p>80%</p>
                    <div class="skill">
                        <div class="skill_level" data-skill="80"></div>
                    </div>
                </div>
                <div class="skillbox">
                    <p>Python</p>
                    <p>85%</p>
                    <div class="skill">
                        <div class="skill_level" data-skill="85"></div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

    <!--
        Section: Projet

        Description:
        Cette section du code est dédiée à la gestion des projets. Elle inclut les fonctionnalités
        nécessaires pour créer, lire, mettre à jour et supprimer des projets. Les projets peuvent
        contenir diverses informations telles que le nom, la description, les dates de début et de fin,
        ainsi que les membres de l'équipe associés.

        Fonctionnalités:
        - Création de nouveaux projets
        - Lecture des détails des projets existants
        - Mise à jour des informations des projets
        - Suppression des projets

        Utilisation:
        Utilisez cette section pour gérer les projets dans l'application. Assurez-vous de valider les
        données avant de les enregistrer ou de les mettre à jour pour garantir l'intégrité des informations.
    -->

        
    <section id="Projets">
        <div class="content-wrapper">
            <div class="titre">
                <p class="sous-titre">Projets</p>
                <p class="grand-titre">Projets</p>
            </div>
            <div class="cards">
                <div class="card">
                    <p class="card-text">Site Web</p>
                    <p class="card-plus">+</p>
                    <img src="images/informatique.jpg" alt="Site Web" class="card-image">
                </div>
                <div class="card">
                    <p class="card-text">Stage/Alternance</p>
                    <p class="card-plus">+</p>
                    <img src="images/reunion.jpg" alt="Stage/Alternance" class="card-image">
                </div>
                <div class="card">
                    <p class="card-text">Graphisme</p>
                    <p class="card-plus">+</p>
                    <img src="images/graphisme.jpg" alt="Graphisme" class="card-image">
                </div>
                <div class="card">
                    <p class="card-text">Communication</p>
                    <p class="card-plus">+</p>
                    <img src="images/communication.jpg" alt="Communication" class="card-image">
                </div>
                <div class="card">
                    <p class="card-text">Base de données</p>
                    <p class="card-plus">+</p>
                    <img src="images/bd.jpg" alt="Base de données" class="card-image">
                </div>
                <div class="card">
                    <p class="card-text">Autres</p>
                    <p class="card-plus">+</p>
                    <img src="images/autre.jpg" alt="Autres" class="card-image">
                </div>
            </div>
        </div>
    </section>

    <!--
        Section: Contactez-moi
        Description: Cette section permet aux utilisateurs de contacter l'auteur du portfolio.
        Elle peut inclure un formulaire de contact avec des champs pour le nom, l'email, le sujet et le message.
    -->

        <section id="contact">
        <div class="content-wrapper">
            <div class="titre">
                <p class="sous-titre">Contactez-moi</p>
                <p class="grand-titre">Contact</p>
            </div>
            <div class="formulaire-contact">
                <form action="submit_form.php" method="post">
                    <div class="form-group">
                        <label for="nom">Nom</label>
                        <input type="text" id="nom" name="nom" placeholder="John Doe" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="votre.email@example.com" required>
                    </div>
                    <div class="form-group">
                        <label for="sujet">Sujet</label>
                        <input type="text" id="sujet" name="sujet" placeholder="Sujet de votre message" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" rows="5" placeholder="Lorem Ipsum" required></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn" style="display: block; margin: 0 auto;">Envoyer message</button>
                    </div>
                </form>
            </div>
        </div>
    </section>


    </main>  
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script src="script/scriptAccueil.js"></script>
    <script src="script/skills.js"></script>
    <script src="script/particles.js"></script>
    <script src="script/header.js"></script>
    <script src="script/contact.js"></script>
    
</body>
</html>