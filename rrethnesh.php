<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rreth Nesh - Klinika e Fizioterapisë</title>
    <link rel="stylesheet" >
    <link rel="shortcut icon" href="assets/img/logo/LOGO BIO.jpg" type="image/x-icon">
    <link rel="stylesheet" href="send_email.php">
</head>

<body>
    <!-- Header me navigacionin kryesor -->
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="index.php">Service</a></li>
                <li><a href="index.php">Contact</a></li>
            </ul>
        </nav>
    </header>
<style>
    /* Stilet për Rreth Nesh */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #178319;
}

nav ul {
    list-style: none; /* Heq bullet points nga lista */
    padding: 0; /* Heq hapësirën e paracaktuar rreth elementeve të listës */
    display: flex; /* Përdor flexbox për të shfaqur elementët horizontalisht */
    justify-content: center; /* Vendos elementet në qendër */
}

nav ul li {
    margin: 0 20px; /* Përhap elementët me distancë nga 20px majtas dhe djathtas */
}

nav ul li a {
    text-decoration: none; /* Heq nënvizimin nga lidhjet */
    color: #000; /* Përdor ngjyrë të errët për tekstin */
    font-weight: 600; /* E bën tekstin më të theksuar */
    font-size: 1.1rem; /* Rregullon madhësinë e fontit */
    transition: color 0.3s ease; /* Shton animacion për ndryshimin e ngjyrës */
}

nav ul li a:hover {
    color: #fff;; /* Ndryshon ngjyrën në blu kur kalon miu mbi lidhje */
}


.about-section {
    background-color: #ffffff;
    padding: 50px 20px;
    display: flex;
    justify-content: center;
}

.about-container {
    max-width: 1200px;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 40px;
}

.about-text h2,
.about-text h3 {
    color: #28a745;
    margin-bottom: 15px;
}

.about-text p {
    color: #555;
    line-height: 1.8;
    margin-bottom: 20px;
}

.about-image h3 {
    color: #28a745;
    margin-bottom: 15px;
}

.team-members {
    display: flex;
    gap: 20px;
    flex-wrap: wrap;
}

.team-member {
    background-color: #f9f9f9;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    text-align: center;
    flex: 1 1 30%;
    transition: transform 0.3s;
}

.team-member img {
    max-width: 100%;
    border-radius: 5px;
    margin-bottom: 15px;
}

.team-member h3 {
    color: #333;
    font-size: 18px;
    margin-top: 0;
}

.team-member:hover {
    transform: translateY(-5px);
}

/* Stilet për seksionin e Kontaktit */
.contact {
  background-image: url(assets/img/bg/rezervimet.jpg);
    padding: 40px 20px;
    color: #000000;
    text-align: center;
}

.contact h2 {
    margin-bottom: 20px;
}

.contact form {
    max-width: 600px;
    margin: 0 auto;
    display: grid;
    gap: 15px;
}

.contact label {
    font-weight: bold;
}

.contact input,
.contact textarea {
    width: 100%;
    padding: 10px;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    margin-top: 5px;
}

.contact .form-button button {
    background-color: #fff;
    color: #28a745;
    padding: 12px 20px;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    font-weight: bold;
    cursor: pointer;
    transition: background-color 0.3s;
}

.contact .form-button button:hover {
    background-color: #e9efeb;
}

footer {
    padding: 30px 20px; /* Reduced padding for a smaller footer */
    background: #2B547E; /* Softer background color */
    color: #f1f1f1; /* Changed font color for better contrast */
    text-align: center; /* Center-align content */
}

footer .logo {
    font-size: 30px; /* Adjusted font size for the logo */
    font-weight: 700; /* Make the logo bolder */
    margin-bottom: 15px; /* Adjusted margin for spacing */
}

footer .logo i {
    font-size: 25px; /* Adjusted icon size */
    background: #088F8F; /* Icon background */
    border-radius: 50%;
    padding: 8px 12px; /* Adjusted padding */
}

footer ul {
    list-style: none; /* Remove bullet points */
    padding: 0; /* Remove default padding */
    margin: 15px 0; /* Margin for spacing */
}

footer ul li {
    margin: 8px 0; /* Adjusted margin for spacing between items */
}

footer ul li a {
    text-decoration: none;
    color: #d1d1d1; /* Lighter color for links */
    font-size: 16px; /* Slightly reduced font size for better balance */
    text-transform: capitalize;
    font-weight: 500;
    transition: color 0.3s; /* Smooth transition for hover effect */
}

footer ul li a:hover {
    color: #FFA500; /* Hover color */
}

footer p {
    color: #f1f1f1; /* Consistent font color */
    margin-top: 10px; /* Adjusted margin */
    font-size: 14px; /* Slightly smaller font size */
}


</style>


    <!-- Seksioni Rreth Nesh -->
    <section class="about-section">
        <div class="about-container">
            <!-- Përshkrimi i klinikës -->
            <div class="about-text">
                <h2>Kush jemi ne?</h2>
                <p>Ne jemi një klinikë profesionale që ofrojmë shërbime fizioterapie me një ekip të trajnuar dhe të përkushtuar.
                   Ne fokusohemi në rehabilitimin e pacientëve tanë dhe përmirësimin e shëndetit të tyre fizik nëpërmjet trajtimeve të
                   avancuara dhe një qasjeje të individualizuar.</p>

                <h3>Misioni ynë</h3>
                <p>Misioni ynë është të ndihmojmë pacientët të arrijnë shëndetin dhe mirëqenien optimale fizike
                   duke ofruar trajtime të personalizuara të bazuara në provat klinike. Shëndeti juaj është prioriteti ynë kryesor
                   dhe ne përpiqemi t'i japim çdo pacienti kujdesin më të mirë të mundshëm për të ofruar kujdes.</p>

                   <h3>Vizioni Ynë</h3>
                   <p>Vizioni ynë është që të jemi lider në kujdesin për shëndetin fizik të pacientëve nëpërmjet metodave moderne dhe inovative.
                      Synojmë që çdo pacient të përjetojë një përmirësim të dukshëm në cilësinë e jetës së tij, duke e kthyer çdo trajtim në një përvojë të personalizuar.</p>
                   
                   <h3>Vlerat Tona</h3>
                   <p>Ne besojmë në përkushtimin, profesionalizmin, dhe respektin për secilin pacient. Vlerat tona bazohen në etikë dhe integritet, 
                      duke ofruar kujdes cilësor për të gjithë pacientët tanë. Ne kujdesemi që çdo trajtim të përmbushë nevojat unike të secilit.</p>
                   
                   <h3>Pse të Zgjidhni Ne</h3>
                   <p>Me një ekip të kualifikuar dhe një qasje gjithëpërfshirëse, ne sigurojmë trajtimin më të mirë për secilin pacient. 
                      Nëse kërkoni kujdes të personalizuar, metodologji të bazuara në prova klinike dhe përkushtim për përmirësimin tuaj fizik, atëherë jemi zgjedhja e duhur.</p>      
            </div>
            

            <!-- Seksioni Ekipi -->
            <div class="about-image">
                <h3>Ekipi ynë</h3>
                <p>Ekipi ynë përbëhet nga fizioterapistë të kualifikuar dhe me përvojë. Qëllimi ynë është të ndihmojmë pacientët
                   në rikuperimin nga lëndimet dhe përmirësimin e cilësisë së jetës së tyre përmes trajtimeve inovative dhe kujdesit
                   gjithëpërfshirës.</p>

                <div class="team-members">
                    <div class="team-member">
                        <img src="img/person/2.jpg" alt="Ekipa e Fizioterapisë">
                        <h3>Ekipa e Fizioterapisë</h3>
                    </div>

                    <div class="team-member">
                        <img src="img/person/3.jpg" alt="Ekipi i Ushtrimeve">
                        <h3>Ekipa e Ushtrimeve</h3>
                    </div>

                    <div class="team-member">
                        <img src="img/person/4.jpg" alt="Ekipi i Kontrollimit">
                        <h3>Ekipa e Kontrollimit</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

   

    <!-- footer section  -->

    <footer class="footer">
        <div class="footer-container">
            <div class="footer-row">
                <!-- Seksioni për logon dhe përshkrimin -->
                <div class="footer-col">
                    <h4>PhysioPforz</h4>
                    <p>Ndihmojmë pacientët të përmirësojnë mirëqenien e tyre fizike me fizioterapi profesionale.</p>
                </div>
    
                <!-- Seksioni për lidhjet e shpejta -->
                <div class="footer-col">
                    <h4>Lidhje të Shpejta</h4>
                    <ul>
                        <li><a href="index.php">Kreu</a></li>
                        <li><a href="rrethnesh.php">Rreth Nesh</a></li>
                        <li><a href="rrethnesh.php">Shërbimet</a></li>
                        <li><a href="rezervimet.php">Kontakt</a></li>
                    </ul>
                </div>
    
                <!-- Seksioni për informacionin e kontaktit -->
                <div class="footer-col">
                    <h4>Detajet e Kontaktit</h4>
                    <ul>
                        <li><a href="#">Adresa: Rruga Kryesore, Prishtinë</a></li>
                        <li><a href="#">Telefon: +383 44 123 456</a></li>
                        <li><a href="mailto:info@fizioterapia-juaj.com">Email: info@fizioterapia-juaj.com</a></li>
                    </ul>
                </div>
    
                <!-- Seksioni për rrjetet sociale -->
                <div class="footer-col">
                    <h4>Ndiqni Ne</h4>
                    <div class="social-links">
                        <a href="https://www.facebook.com/login/?next=https%3A%2F%2Fwww.facebook.com%2F"><img src="img/icon/facebook_6422199.png" width="30"></a>
                        <a href="https://www.instagram.com/"><img src="img/icon/instagram_1400829.png" width="30"></a>
                        <a href="https://x.com/?lang=en&amp;mx=2"><img src="img/icon/twitter_5968830.png" width="30"></a>
                      
                    </div>
                </div>
            </div>
    
            <!-- Pjesa e fundit e footer-it -->
            <div class="footer-bottom">
                <p>© 2024 PhysioPforz. Të gjitha të drejtat e rezervuara.</p>
            </div>
        </div>
    </footer>


</body>

</html>
