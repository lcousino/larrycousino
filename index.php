<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    
    <!-- Bootstrap Core -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <script src="https://kit.fontawesome.com/e776b3ef37.js" crossorigin="anonymous"></script>
    <title>Larry Cousino | Developer</title>




</head>

<body class="d-flex flex-column h-100">
    <header>
        <!-- Fixed navbar -->
        <nav class="navbar navbar-expand-md fixed-top bg-info">
            <a class="navbar-brand" href="#"><img src="./img/LCD_Logo2_32x31.png" alt="Larry Cousino Design"/></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">About <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Skills</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>
            <div>
                <a href="https://github.com/lcousino" target="_blank"><i class="fab fa-github fa-2x"></i></a>
                <a href="https://www.linkedin.com/in/lcousino/" target="_blank"><i class="fab fa-linkedin fa-2x" ></i></a>
            </div>
        </nav>
    </header>

    <!-- Begin page content -->
    <main role="main" class="flex-shrink-0">
        <!-- Jumbo Tron -->
        <div class="jumbotron text-center  text-white">
            <h1 class="display-2">Larry Cousino</h1>
            <p class="lead">Full Stack Web Developer</p>
            <hr class="my-4 jt-hr">
            <p class="jt-p text-justify">I am a creative, engaging and determined, full stack developer with a passion for front-end development and UI Design. My experience has taught me to focus on customer satisfaction through teamwork, while maintaining a commitment to exceed expectations. Actively pursuing opportunities to provide programming skills, leadership, and enthusiasm to a fast-paced environment as a full stack developer. As a 21-year United States Air Force Veteran, I am a proven leader, dedicated team player, confident decision maker who works well under pressure and improvises on the fly!</p>
        </div>

        <!-- Skills -->
        <div class="wrapper">
            <div id="skills">
                <div class="inner">
                    <h2 class="display-4">Skills</h2>
                </div>
                <div class="sk-container">
                    <div class="row justify-content-around">
                      <div class="col-sm text-center">
                        <p><i class="fas fa-file-code fa-3x"></i></p>
                        <h3>FRONT END</h3>
                        <p class="mb-0">Angular8</p>
                        <p class="mb-0">HTML5</p>
                        <p class="mb-0">CSS3</p>
                        <p class="mb-0">JavaScript</p>
                        <p class="mb-0">TypeScript</p>
                        <p>Bootstrap</p>
                      </div>
                      <div class="col-sm text-center">
                        <p><i class="fas fa-server fa-3x"></i></p>
                        <h3>BACK END</h3>
                        <p class="mb-0">Java</p>
                        <p class="mb-0">Spring Boot</p>
                        <p class="mb-0">Thymeleaf</p>
                        <p>NGINX</p>
                      </div>
                      <div class="col-sm text-center">
                        <p><i class="fas fa-database fa-3x"></i></p>
                        <h3>DATABASE</h3>
                        <p class="mb-0">MySQL</p>
                        <p class="mb-0">NoSQL</p>
                        <p>MongoDB</p>
                      </div>
                      <div class="col-sm text-center">
                        <p><i class="fas fa-share-alt fa-3x"></i></p>
                        <h3>DEPLOY</h3>
                        <p class="mb-0">AWS</p>
                        <p>Git</p>
                      </div>
                    </div>
                  </div>
            </div>

            <!-- Projects -->
            <div id="projects">
                <div class="inner">
                    <h2 class="display-4">Projects</h2>
                </div>
            </div>

            <!-- Contact -->
            <div id="contact">
                <div class="inner">
                    <h2 class="display-4">Contact Me</h2>
                </div>
                <div class="form">
                    <form class="contact-form" method="post" action="contact-form-handler.php">
                        <input name="name" type="text" class="form-control" placeholder="Your Name" required>
                        <input name="email" type="email" class="form-control" placeholder="Your e-mail address" required>
                        <input name="subject" type="text" class="form-control" placeholder="Subject">
                        <textarea name="message" class="form-control" placeholder="Message" row="4" required></textarea>
                        <button name="submit" type="submit" class="form-control submit btn-dark">Send Message</button>
                    </form>
                </div>
            </div>
        </div> <!-- end wrapper div -->
    </main>
    <footer class="bg-info">
        <p>&copy; 2020 larrycousino.com</p>
    </footer>

    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    
    <script>window.jQuery || document.write('<script src="/docs/4.4/assets/js/vendor/jquery.slim.min.js"><\/script>')</script>
    
    <script src="/docs/4.4/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm"
        crossorigin="anonymous"></script>
</body>

</html>