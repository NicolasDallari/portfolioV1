
    <link rel="stylesheet" href="css/style.css" >
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/competences.css">
    
    <title>Contact</title>
</head>
<body>
    <div class="container-competence">
        <nav>
            <label class="logo">DN</label>
                <ul class="nav-links">
                    <img src="/docs/images/icons8-croix-64.png" class="image-croix-menu" alt="image fermer le menu">
                    <li class="li-nav"><a href="/">Accueil</a></li>
                    <li class="li-nav"><a href="/apropos">A propos</a></li>
                    <li class="li-nav"><a href="/projets">Projets</a></li>
                    <li class="li-nav"><a href="/competences">Compétences</a></li>
                    <li class="li-nav"><a href="">Contact</a></li>
                </ul>
            <img src="docs/images/icons8-hamburger-50.png" class="image-menu-burger" alt="image de menu">
        </nav>
        <main class="contact">
            <section class="page-en-cour">
                <h1 class="contact-h1">Contact</h1>
            </section>
            <section class="formulaire">
                    <h2 class="contactez-moi">N'hésitez pas à me contacter, je vous répondrai dans les plus brefs délais.</h2>
                    <form action="" method="POST" id="contact-form">
                        <input type="text" id="name" name="name" placeholder="Votre nom" required>
                        <input type="email" id="email" name="email" placeholder="Votre email" required>
                        <textarea id="message" name="message" rows="12" placeholder="Votre message" required></textarea>
                        <button type="submit">Envoyer le message</button>
                    </form>
            </section>
            <section class="lien-contact">
                <div class="contact-item">
                    <img src="docs/images/github-colore-copie.png" class="imggithub" alt="image logo github">
                    <h3 class="github"><a href="https://github.com/NicolasDallari" class="agithub" target="_blank">https://github.com/NicolasDallari</a></h3>
                </div>
                <div class="contact-item">
                    <img src="docs/images/imagelinkedin.png" class="imglinkedin" alt="image logo linkedin">
                    <h3 class="linkedin"><a href="https://www.linkedin.com/in/dallari-nicolas-6556382a9/" class="alinkedin" target="_blank">https://www.linkedin.com/feed/</a></h3>
                </div>
                <div class="contact-item">
                    <img src="docs/images/image-maps-maison.png" class="imgmaps" alt="image position maps">
                    <h3 class="region">Puy-de-Dôme / Moureuille</h3>
                </div>
                <div class="contact-item">
                    <img src="docs/images/telephone.png" class="imgtelephone" alt="image telephone">
                    <h3 class="numero">06.01.34.17.82</h3>
                </div>
                <img src="docs/images/lettrerectifier.png" width="" height="" class="image-de-lettre" alt="image de lettre">
            </section>
        </main>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
<script src="js/animationContact.js"></script>
<script src="js/app.js"></script>