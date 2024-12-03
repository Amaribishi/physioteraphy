<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHYSIOFORZ - Rezervimet</title>
    <link rel="shortcut icon" href="assets/img/logo/LOGO BIO.jpg" type="image/x-icon">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="index.php">Service</a></li>
                <li><a href="rrethnesh.php">Rreth Nesh</a></li>
            </ul>
        </nav>
    </header>

    <!-- Forma e Rezervimit -->
    <section class="appointment">
    <div class="appointment-content">
        <h2>Rezervimi</h2>
        <p>Plotësoni formularin e mëposhtëm për të lënë një takim me ne.</p>
        <form action="sendemail.php" method="post" class="appointment-form">
            <label for="name">Emri</label>
            <input type="text" id="name" name="name" placeholder="Emri" required>

            <label for="email">Emaili</label>
            <input type="email" id="email" name="email" placeholder=" E-Maili" required>

            <label for="phone">Numri Telefonit</label>
            <input type="tel" id="phone" name="phone" placeholder="Numri Telefonit" required>

            <label for="date">Data Rezevimit</label>
            <input type="date" id="date" name="date" required>

            <label for="message">Shkruaj nje tekst</label>
            <textarea id="message" name="message" placeholder="Shkruaj nje tekst" required></textarea>

            <!-- Butoni duhet të ketë tipin "submit" -->
            <button type="submit" class="submit-btn">Dërgo</button>
        </form>
    </div>
</section>





    

    <style>
        /* Styling për Formularin e Rezervimit */
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
    color: #fff; /* Ndryshon ngjyrën në blu kur kalon miu mbi lidhje */
}


        .appointment {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 50px;
            background-image: url(img/bg/contact.jpg);
            
            
        }

        .appointment-content {
    max-width: 500px;
    background: linear-gradient(135deg, #16be91, #0e9923); /* Gradient nga ngjyra #16be91 në #0e9923 */
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
    color: #fff; /* Opsionale, për tekstin që të ketë kontrast më të mirë */
}


        .appointment-content h2 {
            color: #ffffff;
            text-align: center;
            margin-bottom: 20px;
        }

        .appointment-content p {
            text-align: center;
            color: #ffffff;
            margin-bottom: 20px;
        }

        .appointment-form label {
            display: block;
            color: #333;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .appointment-form input,
        .appointment-form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .appointment-form input:focus,
        .appointment-form textarea:focus {
            border-color: #28a745;
            outline: none;
        }

        .submit-btn {
            background-color: #28a745;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
            font-weight: bold;
            transition: background-color 0.3s;
        }

        .submit-btn:hover {
            background-color: #218838;
        }

        /* Stilizimi për footer */

/* footer section  */

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


<!-- footer section  -->

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
