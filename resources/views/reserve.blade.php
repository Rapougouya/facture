<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de réservation</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/reserve.css">

</head>
<body>
    <!-- L'entete  -->
    <header>
        <div class="logo">
            <a href="accueil.html"><img src="images/logo.png" alt="logo"></a>
        </div>
        <ul class="menu">
            <li><a href="accueil.html">Accueil</a></li>
            <li><a href="tarif.html">Tarif</a></li>
        </ul>
        <a href="index.html" class="btn-reservation">Se deconnecter</a>

        <div class="responsive-menu"></div>
    </header>
    <section class="sect">
        <!-- Formulaire de reservation  -->
        <form action="" method="post">
            <fieldset class="field">
            <legend>Réservation</legend>
            <div class="gauche">
                <div class="maville">
                    <label for="ville" class="label">Ville actuelle</label>
                    <select id="ville" name="ville_depart">
                    <option value="koudougou">Koudougou</option>
                    <option value="ouagadougou">Ouagadougou</option>
                    <option value="bobo">Bobo-Dioulasso</option>
                    <option value="banfora">Banfora</option>
                    <option value="dedougou">Dedougou</option>
                    <option value="ouahigouya">Ouahigouya</option>
                    </select>
                </div>
                <div class="destination">
                    <label for="ville">Votre destination</label>
                    <select id="ville" name="ville_destination">
                    <option value="ouagadougou">Ouagadougou</option>
                    <option value="koudougou">Koudougou</option>
                    <option value="bobo">Bobo-Dioulasso</option>
                    <option value="banfora">Banfora</option>
                    <option value="dedougou">Dedougou</option>
                    <option value="ouahigouya">Ouahigouya</option>
                    </select>
                </div> 
                <div>
                    <label for="type">Type de reservation </label>
                    <select id="type" name="type_reservation">
                        <option value="aller">Aller</option>
                        <option value="ar">aller-retour</option>                 
                    </select>
                </div>

                <div class="date">
                    <label>Jour de départ</label>
                    <input type="date" name="jour_depart" id="jour">    
                </div>
                <div class="heure">
                    <label for="heure">Heure de départ</label>
                    <select id="heure" name="heure_depart">
                    <option value="">06h00</option>
                    <option value="">08h00</option>
                    <option value="10">10h00</option>
                    <option value="12">12h00</option>
                    <option value="14">14h00</option>
                    <option value="16">16h00</option>
                    <option value="18">18h00</option>
                    <option value="20">20h00</option>
                    <option value="22">22h00</option>
                </select>  
                </div>

            </div>
            <!-- Elements a droite -->
            <div class="droit">
                
                 <!-- Nombre de  place -->
                 <div class="place">  
                    <label for="place">Nombre de place </label>
                    <select id="place" name="place">
                        <option value="1">1</option>
                        <option value="2">2</option> 
                        <option value="3">3</option> 
                    </select>
                </div>
            </div>
        </fieldset>
        
        <button >Envoyer</button>
        </form>
    </section>
    <footer>
        <div class="footer-container">
            <div class="footer-info">
                <p>&copy; 2023 VoyaPlace. Tous droits réservés.</p>
            </div>
            <div class="footer-contact">
                <ul>
                    <li><a href="#reserve">Nous contacter</a></li>
                    <li><a href="#popular-destination">Info sur les villes</a></li>
                    <li><a href="#a-propos">A propos</a></li>
                </ul>
            </div>
        </div>
    </footer>
   
    <script src="js/script.js">
        const forms = document.querySelector(".forms"),
  pwShowHide = document.querySelectorAll(".eye-icon"),
  links = document.querySelectorAll(".link");

pwShowHide.forEach(eyeIcon => {
eyeIcon.addEventListener("click", () => {
    let pwFields = eyeIcon.parentElement.parentElement.querySelectorAll(".password");
    
    pwFields.forEach(password => {
        if(password.type === "password"){
            password.type = "text";
            eyeIcon.classList.replace("bx-hide", "bx-show");
            return;
        }
        password.type = "password";
        eyeIcon.classList.replace("bx-show", "bx-hide");
    })
    
})
})      

links.forEach(link => {
link.addEventListener("click", e => {
   e.preventDefault(); //preventing form submit
   forms.classList.toggle("show-signup");
})
})
    </script>
</body>
</html>