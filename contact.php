<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>RK Briješće</title>
  <!-- MDB icon -->
  <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="mdb/css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="mdb/css/mdb.min.css">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="css/main.css">
  <link rel="icon" href="img/logo.png">
</head>

<body>

    <div class="contact-container">

        <div class="contact-header">
            <nav class="navbar navbar-expand-lg navbar-dark blue">
            <a class="navbar-brand" href="index.html">
                <img src="img/logo.png" height="50" alt="mdb logo">
            </a>
            <a class="navbar-brand" href="index.html"></a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.html">Naslovna</a> 
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="news.html">Vijesti</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="results.html">Rezultati </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="about.html">O nama </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="gallery.html">Galerija </a>
                </li>
                <li class="nav-item active">
                <a class="nav-link" href="contact.php">Kontakt <span class="sr-only">(current)</span></a>
                </li>
                </ul>
            </div>
            </nav>
        </div>

        <div class="contact-form">
            
            <!--Section: Contact v.2-->
            <section class="section">

            <!--Section heading-->
            <h2 class="section-heading h1 pt-4" class = "contact-form-title">Kontaktirajte nas</h2>
            <!--Section description-->
            <p class="section-description"></p>

            <div class="row">

                <!--Grid column-->
                <div class="col-md-8 col-xl-9">
                    <form id ="contact-form" name="contact-form" action="mail.php" method="POST"  onsubmit="return validateForm()" >

                        <!--Grid row-->
                        <div class="row">

                            <!--Grid column-->
                            <div class="col-md-6">
                                <div class="md-form">
                                    <div class="md-form">
                                        <input type="text" id="name" name="name" class="form-control">
                                        <label for="name" class="">Vaše ime  <i class="fas fa-user"></i></label>
                                    </div>
                                </div>
                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class="col-md-6">
                                <div class="md-form">
                                    <div class="md-form">
                                        <input type="text" id="email" name="email" class="form-control">
                                        <label for="email" class="">Vaša email adresa  <i class="fas fa-at"></i></label>
                                    </div>
                                </div>
                            </div>
                            <!--Grid column-->

                        </div>
                        <!--Grid row-->

                        <!--Grid row-->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="md-form">
                                    <input type="text" id="subject" name="subject" class="form-control">
                                    <label for="subject" class="">Predmet  <i class="fas fa-tags"></i></label>
                                </div>
                            </div>
                        </div>
                        <!--Grid row-->

                        <!--Grid row-->
                        <div class="row">

                            <!--Grid column-->
                            <div class="col-md-12">

                                <div class="md-form">
                                    <textarea type="text" id="message" name="message" class="md-textarea"></textarea>
                                    <label for="message">Vaša poruka  <i class="fas fa-envelope"></i></label>
                                </div>

                            </div>
                        </div>
                        <!--Grid row-->

                    </form>

                    <div class="contact-form-submit">
                        <a class="btn btn-primary" onclick="validateForm()">Send</a>
                    </div> 
                    <div class="status" id="status"></div>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-4 col-xl-3" class = "contact-form-info">
                        
                    <div class = "contact-adress" class = "contact-icon">
                        <i class="fa fa-map-marker fa-2x"></i>
                        <p>Viteška 2, Sarajevo 71000, BIH</p>
                    </div>

                    <div class = "contact-phone" class = "contact-icon">
                        <i class="fa fa-phone fa-2x"></i>
                        <p>+387 60 332 7095</p>
                    </div>

                    <div class = "contact-email" class = "contact-icon">
                        <i class="fa fa-envelope fa-2x"></i>
                        <p>info@rkbrijesce.com</p>
                    </div>
                
                </div>
                <!--Grid column-->

            </div>

            </section>
            <!--Section: Contact v.2-->

        </div>


        <div class="contact-sponsors">
            <img src="img/bhtelecom (1).png" alt="">
        </div>

        <div class="contact-footer">
            <!-- Footer -->
            <footer class="page-footer font-small blue">

            <!-- Footer Elements -->
            <div class="container">

                <!-- Grid row-->
                <div class="row">

                <!-- Grid column -->
                <div class="col-md-12 py-1">
                    <div class="mb-5 flex-center">
                    <!-- Facebook -->
                    <a class="fb-ic">
                        <i class="fab fa-facebook-f fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                    </a>
                    <!--Instagram-->
                    <a class="ins-ic">
                        <i class="fab fa-instagram fa-lg white-text mr-md-6 mr-3 fa-2x"> </i>
                    </a>
                    </div>
                </div>
                <!-- Grid column -->

                </div>
                <!-- Grid row-->

            </div>
            <!-- Footer Elements -->

            <!-- Copyright -->
            <div class="footer-copyright text-center py-3">© 2020 Copyright:
                <a href="https://rkbrijesce.com/"> rkbrijesce.com</a>
            </div>
            <!-- Copyright -->

            </footer>
            <!-- Footer -->
        </div>

    </div>

    <!-- jQuery -->
    <script type="text/javascript" src="mdb/js/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="mdb/js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="mdb/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="mdb/js/mdb.min.js"></script>
    <!-- Your custom scripts (optional) -->

    <script>
        function validateForm() {
            var x =  document.getElementById('name').value;
            if (x == "") {
                document.getElementById('status').innerHTML = "";
                alert("Ime ne može biti prazno.");
                return false;
            }
            x =  document.getElementById('email').value;
            if (x == "") {
                document.getElementById('status').innerHTML = "";
                alert("Email ne može biti prazan.");
                return false;
            } else {
                var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                if(!re.test(x)){
                    document.getElementById('status').innerHTML = "";
                    alert("Format vaše email adrese nije validan.");
                    return false;
                }
            }
            x =  document.getElementById('subject').value;
            if (x == "") {
                document.getElementById('status').innerHTML = "";
                alert("Predmet ne može biti prazan.");
                return false;
            }
            x =  document.getElementById('message').value;
            if (x == "") {
                document.getElementById('status').innerHTML = "";
                alert("Poruka ne može biti prazna.");
                return false;
            }
            document.getElementById('contact-form').submit();

            }
    </script>

</body>
</html>