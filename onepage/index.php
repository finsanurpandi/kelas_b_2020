<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        .navbar-nav {
            padding-right: 50px;
        }

        .btn-primary-custom:hover {
            background: yellow;
        }

        .nav-item {
            padding-right: 20px;
        }

        .navbar-white {
            background-color: rgba(255,255,255,1) !important;
        }

        .carousel-item img {
            height:100vh;
        }

        section#info, section#about {
            padding:50px 0px;
        }

        section#contact {
            height: 500px;
            background:#0d6efd;
        }
    </style>
  </head>
  <body>
  <!-- NAVBAR -->
    <nav id="navbar-custom" class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav nav-pills ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#home">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#info">Info</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#location">Location</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#contact">Contact</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>  

    <div data-bs-spy="scroll" data-bs-target="#navbar-custom">
    <!-- Carousel -->
    <section id="home">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="images/img-1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Some representative placeholder content for the first slide.</p>
            </div>
            </div>
            <div class="carousel-item">
            <img src="images/img-2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
            <img src="images/img-3.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        </div>
    </div>

    <!-- Section Information -->
    <section id="info">
    <div class="container" data-aos="fade-up">
        <h1 class="text-center" style="padding-bottom:50px;">Information</h1>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Pertama</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary btn-primary-custom">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Kedua</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Ketiga</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>

    <!-- Section About -->
    <section id="about">
    <div class="container">
        <h1 class="text-center" style="padding-bottom:50px;">About</h1>
        <div class="row" style="padding-bottom: 50px;">
            <div class="col-md-6" data-aos="fade-right">
                <h3>Subtitle</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dicta, voluptate rerum necessitatibus nostrum porro beatae ex vero error voluptatibus dolore odit eveniet eius ab provident adipisci nisi delectus iusto doloremque! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati debitis ipsam rerum aspernatur quaerat! Harum, quasi sint tempore laudantium enim tempora rerum? Omnis aperiam pariatur molestiae magni voluptate illum quos.</p>
            </div>
            <div class="col-md-6" data-aos="fade-left">
                <img src="images/img-4.jpg" class="img-rounded" width="90%"/>
            </div>
        </div>
        <div class="row" style="padding-bottom: 50px;">
            <div class="col-md-6" data-aos="fade-right">
                <img src="images/img-5.jpg" class="img-rounded" width="90%"/>
            </div>
            <div class="col-md-6" data-aos="fade-left">
                <h3>Subtitle</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dicta, voluptate rerum necessitatibus nostrum porro beatae ex vero error voluptatibus dolore odit eveniet eius ab provident adipisci nisi delectus iusto doloremque! Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga, molestiae nobis, ipsum dicta nesciunt eaque aut, ex corporis iusto in vitae ratione expedita dolorum dignissimos facilis est quidem. Tempore, reprehenderit?</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6" data-aos="fade-right">
                <h3>Subtitle</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dicta, voluptate rerum necessitatibus nostrum porro beatae ex vero error voluptatibus dolore odit eveniet eius ab provident adipisci nisi delectus iusto doloremque! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste sed temporibus qui unde libero quos minima iure rerum minus doloremque perferendis ipsa mollitia, error id expedita, rem officiis tempora eius!</p>
            </div>
            <div class="col-md-6" data-aos="fade-left">
                <img src="images/img-6.jpg" class="img-rounded" width="90%"/>
            </div>
        </div>
    </div>
    </section>

    <!-- Section Locatiom -->
    <section id="location">
        <div class="container-fluid">
            <h1 class="text-center" style="padding-bottom:50px;">Location</h1>
            <div class="row">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10674.763549968011!2d107.13669360128542!3d-6.802148287832404!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6852e697990cef%3A0x2ddbb36bc8af404e!2sUniversitas%20Suryakancana!5e0!3m2!1sid!2sid!4v1664872760717!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" width="100%"></iframe>
            </div>
        </div>
    </section>

    <!-- Section Contact -->
    <section id="contact">
        <div class="container">
            <div class="row" style="padding-top:50px">
                <div class="col-md-6 text-white">
                    <h1 style="padding-bottom:50px;">Contact</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia et incidunt earum doloremque libero ad perferendis iusto, totam aperiam optio, sint sunt, quas omnis vitae! Vero perferendis quasi velit possimus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos magnam eaque architecto praesentium magni velit quo quos fuga, iure culpa? Rem, nesciunt incidunt! Animi eius hic repellendus aliquam quaerat mollitia! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat porro facere corporis obcaecati deserunt nulla nihil officia reiciendis asperiores. Officia alias reiciendis harum totam porro cumque dicta sunt in eum?</p>
                </div>
                <div class="col-md-6">

                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <div class="container-fluid" style="height:50px">
        <div class="row" style="padding-top:15px">
                <p class="text-center">Copyright@2022</p>
        </div>
    </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
        let navbar = document.getElementById('navbar-custom');

        window.addEventListener('scroll', function(){
            let scroll = window.scrollY;

            if(scroll > 50){
                navbar.classList.add('navbar-white');
                navbar.classList.remove('navbar-dark');
            } else {
                navbar.classList.remove('navbar-white');
                navbar.classList.add('navbar-dark');
            }
        });
    </script>
  </body>
</html>