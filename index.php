<!DOCTYPE html>
<html lang="en">
    <!-- section head -->
    <?php include ("includes/head.php"); ?>
    <body>
        <!-- header content -->
        <?php include ("includes/header.php"); ?>

        <!-- main content -->
        <main>

            <!-- section About -->
            <section class="container mt-0 bg-white p-md-5 p-4">
                <h2 class="pt-md-5 pb-3 pb-md-5 text-center mx-auto fw-bolder fs-2" id="section-about">About Me</h2>
                <p class="container mt-3 fw-light" style="font-size: 1.3rem; text-align: justify; line-height: 34px;">
                    <span class="fs-2 fw-bold">I'</span>m <span class="fw-bolder text-opacity-100 text-primary fs-4">Pouakam Vanelle</span>, a Computer Engineering student at the International School of Digital Engineering (ESIGN). Since the beginning of my studies, I have developed a strong passion for computer science and digital innovation, with a clear vision: to use technology as a tool to solve real-world problems and provide valuable solutions for both businesses and individuals.
                    My academic journey has equipped me with solid foundations in programming, software design, digital systems, and digital entrepreneurship. I have learned to approach projects with a structured mindset: from analyzing needs to implementing technical solutions, while emphasizing creativity and optimization.
                    Beyond theory, I enjoy putting my skills into practice through academic and personal projects. These experiences have strengthened my ability to work in teams, tackle technical challenges, and develop innovative solutions in areas such as web development, digital applications, and digital transformation.
                </p>
            </section>

            <!-- section Skills -->
            <section class="mt-0 mb-5 pb-5 bg-white"><br>
                <h2 class=" mt-5 mb-4 text-center text-dark fw-bolder fs-2 p-5" id="section-skills">My Skills</h2>
                <div id="carouselExampleDark" class="container carousel carousel-dark slide shadow-lg rounded-3 bg-dark mb-5">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active p-3" data-bs-interval="10000">
                            <div class="m-5 p-5 pt-2 d-flex flex-column gap-3 align-items-center">
                                <div class="mb-4">
                                    <i class="fa-solid fa-server text-warning fs-3"></i> <span class="text-warning fw-bolder h3 poppins-black ms-2 text-uppercase">backend:</span>
                                </div>
                                <ul class="list-unstyled">
                                    <li class="text-light mb-3">
                                        <div class="d-flex gap-3">
                                            <i class="fa-brands fa-php text-secondary mt-1"></i>
                                            <span class="mt-1 text-uppercase h4">php</span>
                                        </div>
                                    </li>
                                    <li class="text-light mb-3">
                                        <div class="d-flex gap-3">
                                            <i class="fa-brands fa-laravel text-secondary mt-1"></i>
                                            <span class="mt-1 text-uppercase h4">laravel</span>
                                        </div>
                                    </li>
                                    <li class="text-light">
                                        <div class="d-flex gap-3">
                                            <i class="fa-solid fa-database text-secondary mt-1"></i>
                                            <span class="mt-1 text-uppercase h4">mysql</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="carousel-item p-3" data-bs-interval="2000">
                            <div class="m-5 p-5 pt-2 d-flex flex-column gap-3 align-items-center">
                                <div class="mb-4">
                                    <i class="fa-solid fa-laptop-code text-warning fs-3"></i> <span class="text-warning fw-bolder h3 poppins-black ms-2 text-uppercase">frontend:</span>
                                </div>
                                <ul class="list-unstyled">
                                    <li class="text-light mb-3">
                                        <div class="d-flex gap-3">
                                            <i class="fa-brands fa-html5 text-secondary mt-1 mt-1"></i>
                                            <span class="mt-1 text-uppercase h4">html</span>
                                        </div>
                                    </li>
                                    <li class="text-light mb-3">
                                        <div class="d-flex gap-3">
                                            <i class="fa-brands fa-css3-alt text-secondary mt-1 mt-1"></i>
                                            <span class="mt-1 text-uppercase h4">css</span>
                                        </div>
                                    </li>
                                    <li class="text-light">
                                        <div class="d-flex gap-3">
                                            <i class="fa-brands fa-bootstrap text-secondary mt-1 mt-1"></i>
                                            <span class="mt-1 text-uppercase h4">bootstrap</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="carousel-item p-3">
                            <div class="m-5 p-5 pt-2 d-flex flex-column gap-3 align-items-center">
                                <div class="mb-4">
                                    <i class="fa-solid fa-paintbrush text-warning fs-3"></i> <span class="text-warning fw-bolder h3 poppins-black ms-2 text-uppercase">design ui:</span>
                                </div>
                                <ul class="list-unstyled">
                                    <li class="text-light mb-3">
                                        <div class="d-flex gap-3">
                                            <i class="fa-brands fa-figma text-secondary mt-1 mt-1"></i>
                                            <span class="mt-1 text-uppercase h4">figma</span>
                                        </div>
                                    </li>
                                    <li class="text-light mb-3">
                                        <div class="d-flex gap-3">
                                            <i class="fa-solid fa-palette text-secondary mt-1 mt-1"></i>
                                            <span class="mt-1 text-uppercase h4">canva</span>
                                        </div>
                                    </li>
                                    <li class="text-light">
                                        <div class="d-flex gap-3">
                                            <i class="fa-brands fa-sketch text-secondary mt-1 mt-1"></i>
                                            <span class="mt-1 text-uppercase h4">sketch</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="carousel-item p-3">
                            <div class="m-5 p-5 pt-2 d-flex flex-column gap-3 align-items-center">
                                <div class="mb-4">
                                    <i class="fa-solid fa-code-branch text-warning fs-3"></i> <span class="text-warning fw-bolder h3 poppins-black ms-2 text-uppercase">versionning:</span>
                                </div>
                                <ul class="list-unstyled">
                                    <li class="text-light mb-3">
                                        <div class="d-flex gap-3">
                                            <i class="fa-brands fa-git-alt text-secondary mt-1"></i>
                                            <span class="mt-1 text-uppercase h4">git</span>
                                        </div>
                                    </li>
                                    <li class="text-light mb-3">
                                        <div class="d-flex gap-3">
                                            <i class="fa-brands fa-github text-secondary mt-1"></i>
                                            <span class="mt-1 text-uppercase h4">github</span>
                                        </div>
                                    </li>
                                    <li class="text-light">
                                        <div class="d-flex gap-3">
                                            <i class="fa-brands fa-gitlab text-secondary mt-1"></i>
                                            <span class="mt-1 text-uppercase h4">gitlab</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                        <i class="fa-solid fa-angle-left fw-bolder display-4 text-success" aria-hidden="true"></i>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                        <i class="fa-solid fa-angle-right fw-bolder display-4 text-success" aria-hidden="true"></i>
                    </button>
                </div>
            </section>

            <!-- section My Projects -->
            <section class="mt-0 bg-light text-dark p-md-5 p-4">
                <h2 class="pb-3 pt-md-5 pb-md-5  text-center fw-bolder fs-2" id="section-projects">My Projects</h2>
                <div class="container pb-md-5 pb-4">
                    <div class="row row-cols-1 row-cols-lg-3 g-5">
                        <div class="col"> 
                            <div class="card- shadow-sm container-project-one">
                                <div class="card-header">
                                    <img src="assets/img/Project_1.png" alt="" class="img-fluid w-100 rounded-top shadow-sm">
                                </div>
                                <div class="card-body bg-white shadow-lg p-3 rounded-bottom">
                                    <h6 class="my-2 text-primary fw-bolder fs-4">BooMind</h6>
                                    <p class="card-text fw-light">
                                        Web application for managing the tasks of the different members of an A-Tech company in the city of Douala.
                                    </p> 
                                    <div class="container d-flex justify-content-between align-items-center">
                                        <div class=""></div> 
                                        <small class="text-body-secondary">A-Tech.</small> 
                                    </div> 
                                </div> 
                            </div> 
                        </div>
                        <div class="col"> 
                            <div class="card- shadow-sm container-project-one">
                                <div class="card-header">
                                    <img src="assets/img/Project_2.png" alt="" class="img-fluid w-100 rounded-top shadow-sm">
                                </div>
                                <div class="card-body bg-white shadow-lg p-3 rounded-bottom">
                                    <h6 class="my-2 text-success fw-bolder fs-4">ChatTech</h6>
                                    <p class="card-text fw-light">
                                        Web forum allowing members of an A-Tech company to develop the Hard and Soft skills of their interns.
                                    </p> 
                                    <div class="container d-flex justify-content-between align-items-center">
                                        <div class=""></div> 
                                        <small class="text-body-secondary">A-Tech.</small> 
                                    </div> 
                                </div> 
                            </div> 
                        </div>
                        <div class="col"> 
                            <div class="card- shadow-sm container-project-one">
                                <div class="card-header">
                                    <img src="assets/img/Project_3.png" alt="" class="img-fluid w-100 rounded-top shadow-sm">
                                </div>
                                <div class="card-body bg-white shadow-lg p-3 rounded-bottom">
                                    <h6 class="my-2 text-dark fw-bolder fs-4">MyPortfolio</h6>
                                    <p class="card-text fw-light">
                                        Portfolio in which I present my skills, my education and my projects for my professional career.
                                    </p> 
                                    <div class="container d-flex justify-content-between align-items-center">
                                        <div class=""></div> 
                                        <small class="text-body-secondary">A-Tech.</small> 
                                    </div> 
                                </div> 
                            </div> 
                        </div> 
                    </div>
                </div>
            </section>

            <!-- section Contact -->
            <section class="mt-0 mb-5 bg-white text-dark p-md-5 p-4">
                <h2 class="pt-md-5 pb-3 pb-md-3 text-center text-dark fw-bolder fs-2" id="section-contact" >Contact-us</h2>
                <h6 class="text-center fw-light fs-5 mb-4">Do not hesitate to contact me to discuss your projects.</h6>
                <div class="container p-5 bg-light rounded">
                    <form class="row g-3">
                        <div class="col-md-6 form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInputName" placeholder="Enter your name">
                            <label for="floatingInputName" class="ms-2">Enter your name *</label>
                        </div>
                        <div class="col-md-6 form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInputSurname" placeholder="Enter your name">
                            <label for="floatingInputSurname" class="ms-2">Enter your surname *</label>
                        </div>
                        <div class="col-md-6 form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInputEmail" placeholder="Enter your email">
                            <label for="floatingInputEmail" class="ms-2">Enter your email *</label>
                        </div>
                        <div class="col-md-6 form-floating mb-3">
                            <input type="tel" class="form-control" id="floatingInputPhone" placeholder="Enter your phone">
                            <label for="floatingInputPhone" class="ms-2">Enter your phone *</label>
                        </div>
                        <div class="col-12 form-floating mb-3">
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingMessage" style="height: 250px; resize: none;"></textarea>
                            <label for="floatingMessage" class="ms-2">Enter your messsage *</label>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-lg btn-contact">Send message</button>
                        </div>
                    </form>
                </div>
            </section>
        </main>
        
        <!-- footer content -->
        <?php include ("includes/footer.php"); ?>

        <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    </body>
</html>

