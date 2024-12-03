<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PhysioPforz</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

    <link rel="stylesheet" href="css/index.css">
</head>

<body>

    <!-- navbar section   -->

    <header class="navbar-section">
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <div class="container-fluid">
            <img src="img/logo/finalogo.png" alt="Logo" class="navbar-brand" style="width: 150px;">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#about">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="rezervimet.php">Rezervimet</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#contact">Contact</a>
                    </li>
                    <li class="nav-item">
                            <div class="dropdown">
                                <a class="nav-link dropdown-toggle" href="edit.php?id=$res_id" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi bi-person"></i>
                                </a>


                                <ul class="dropdown-menu mt-2 mr-0" aria-labelledby="dropdownMenuLink">

                                    <li>
                                        <a class="dropdown-item" href="edit.php?id=8">Change Profile</a>
                                    </li>
                                    <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<!-- Hero Section -->
<section id="home" class="hero-section" style="background: linear-gradient(to bottom, )), url('images/hero-bg.jpg') no-repeat center center; background-size: cover; padding: 80px 0;">
    <div class="container text-white">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12 col-sm-12 text-content">
                <h1 class="display-4 mb-4">PhysioPforz</h1>
                <p class="lead mb-4">Klinika jonë ofron kujdes të nivelit më të lartë të terapisë fizike. Me një ekip të trajnuar dhe me përvojë, ne fokusohemi në rehabilitimin dhe përmirësimin e shëndetit tuaj fizik. Me metoda të avancuara dhe trajtime individuale, ne ju ndihmojmë të arrini qëllimet dhe shëndetin tuaj optimal.</p>
                <a href="rezervimet.php" class="btn btn-primary btn-lg">Rezervo një Takim</a>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
                <img src="img/logo/finalogo.png" alt="PhysioPforz Logo" class="img-fluid mt-4 mt-lg-0">
            </div>
        </div>
    </div>
</section>

    <section class="about-section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <img src="img/person/2.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 text-content">
                    <h3>Ekipi Ynë</h3>
                    <h1>Ekipi ynë i Rehabilitimit të PhysioTeraphy</h1>

                    <p>Në PhysioPforz, ne jemi të specializuar në ofrimin e trajtimeve të personalizuara të fizioterapisë që përqendrohen në rehabilitim, lehtësim dhimbjesh dhe përmirësimin e shëndetit fizik të përgjithshëm. Me ekipin tonë të profesionistëve të trajnuar, ne përdorim teknika të avancuara për t'ju ndihmuar të rikuperoheni nga lëndimet, të menaxhoni kushte kronike dhe të përmirësoni lëvizshmërinë tuaj.</p>
                    <button class="rrethneshbutoni" onclick="location.href='rrethnesh.php';">Shko te Rreth Nesh</button>
                </div>
            </div>
        </div>
    </section>
    

    <!-- project section  -->

    <section class="project-section" id="projects">
        <div class="container">
            <div class="row text">
                <div class="col-lg-6 col-md-12">
                    <h3>Puna Jonë</h3>
                    <h1>Shërbimet tona</h1>
                    <hr>
                </div>
                <div class="col-lg-6 col-md-12">
                    <p>Kjo është eksperienca jonë qe ua ofrojm pacientave tanë!</p>
                </div>
            </div>

            <div class="row project">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card">
                        <img src="img/fotot/foto02.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="text">
                                <h4 class="card-title">Fizioterapia pas Traumës</h4>
                                <p class="card-text">Rehabilitimi pas lëndimeve sportive dhe aksidenteve.</p>
                                <a href="https://www.youtube.com/watch?v=a_SROgPA2GM" class="btn btn-primary" target="_blank">Shiko videon</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card">
                        <img src="img/fotot/foto01.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="text">
                                <h4 class="card-title">Masazh terapeutik</h4>
                                <p class="card-text">Masazhe relaksuese dhe terapeutike për relaksim të muskujve.</p>
                                <a href="https://www.youtube.com/watch?v=2Mc-U8R168U&pp=ygUTVGhlcmFwZXV0aWMgbWFzc2FnZQ%3D%3D" class="btn btn-primary" target="_blank">Shiko videon</a>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card">
                        <img src="img/fotot/3.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="text">
                                <h4 class="card-title">Fizioterapi ortopedike</h4>
                                <p class="card-text">Terapia fizike ortopedike ka të bëjë me ndihmën e pacientëve që të shërohen nga operacioni ose lëndimet</p>
                                <a href="https://www.youtube.com/watch?v=a_SROgPA2GM" class="btn btn-primary" target="_blank">Shiko videon</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card">
                <img src="img/fotot/3.jpg" class="card-img-top" alt="Fizioterapi ortopedike">
                <div class="card-body">
                 <div class="text">
                <h4 class="card-title">Fizioterapi ortopedike</h4>
                <p class="card-text">Terapia fizike ortopedike ka të bëjë me ndihmën e pacientëve</p>
                <a href="https://www.youtube.com/watch?v=a_SROgPA2GM" class="btn btn-primary" target="_blank">Shiko videon</a>
                </div>
            </div>
        </div>
    </div>
</div>


        </div>
    </section>

    <!-- contact section  -->

    <section class="contact-section" id="contact">
        <div class="container">

            <div class="row gy-4">

                <h1>contact us</h1>
                <div class="col-lg-6">

                    <div class="row gy-4">
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bi bi-geo-alt"></i>
                                <h3>Address</h3>
                                <p>A108 Adam Street,<br>New Delhi, 535022</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bi bi-telephone"></i>
                                <h3>Call Us</h3>
                                <p>+91 9876545672<br>+91 8763456243</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bi bi-envelope"></i>
                                <h3>Email Us</h3>
                                <p>PhysioPforz@gmail.com</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bi bi-clock"></i>
                                <h3>Open Hours</h3>
                                <p>Monday - Friday<br>9:00AM - 05:00PM</p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-6 form">
                    <form action="contact.php" method="POST" class="php-email-form">
                        <div class="row gy-4">

                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control" placeholder="Emri Juaj" required>
                            </div>

                            <div class="col-md-6 ">
                                <input type="email" class="form-control" name="email" placeholder="Emaili Juaj" required>
                            </div>

                            <div class="col-md-12">
                                <input type="text" class="form-control" name="subject" placeholder="Subjekti" required>
                            </div>

                            <div class="col-md-12">
                                <textarea class="form-control" name="message" rows="5" placeholder="Mesazhi"
                                    required></textarea>
                            </div>

                            <div class="col-md-12 text-center">
                                <button type="submit" name="submit">Dërgo Tdhanat</button>
                            </div>

                        </div>
                    </form>

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



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</body>

</html>