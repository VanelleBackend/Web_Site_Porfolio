    <header class="bg-dark pb-5">
        <!-- NavBar -->
        <div class="container-lg">
            <nav class="navbar navbar-expand-lg navbar-dark container">
                <a class="navbar-brand text-capitalize fw-bold ms-1" href="#">mr.  backend</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse text-light ms-2 ms-lg-5" id="navbarNav">
                    <ul class="navbar-nav mx-2 ms-2 ms-lg-auto">
                        <li class="nav-item mx-0">
                            <a class="nav-link active text-light fw-light fs-5" aria-current="page" href="index.html">Home</a>
                        </li>
                        <li class="nav-item mx-0">
                            <a class="nav-link text-light fw-light fs-5" href="#section-about">About</a>
                        </li>
                        <li class="nav-item mx-0">
                            <a class="nav-link text-light fw-light fs-5" href="#section-skills">Skills</a>
                        </li>
                        <li class="nav-item mx-0">
                            <a class="nav-link text-light fw-light fs-5" href="#section-projects">Projects</a>
                        </li>
                        <li class="nav-item mx-0">
                            <a class="nav-link text-light fw-light fs-5" href="#section-contact">Contact</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>

        <!-- Fin NavBar -->
        <!-- Présentation -->
        <div class="mt-2 container-lg text-light d-lg-flex flex-lg-row gap-lg-5 py-2 justify-content-lg-around d-flex flex-column align-items-center pb-md-5 pb-4">
            <div class="mt-1 mt-lg-3 d-flex flex-column gap-0 justify-content-center">
                <p class="fw-lighter" style="font-size: 1.3rem;">
                    Hello, I'm <span class="fw-bold text-warning h4">Pouakam Vanelle</span>
                </p>
                <p class="mt-0 fw-bolder text-warning fs-3" style="text-indent: 18px; text-align: justify;">
                    Digital Engineering Student
                </p>
                <p class="fw-lighter" style="font-size: 1.3rem;">
                    Trained at ESIGN/UIECC and YETI, 
                    <br>I transform your ideas into relevant 
                    <br>digital solutions.
                </p>
                <div class="mt-2 mt-lg-3 d-flex gap-4 justify-content-lg-start justify-content-center">
                    <a href="#section-projects" class="btn btn-outline-warning btn-lg btn-1">Portfolio</a>
                    <a href="#section-contact" class="btn btn-outline-light btn-lg btn-1">Contact</a>
                </div>
            </div>

            <!-- my picture -->
            <!-- Button trigger modal -->
            <div class="mt-lg-4 mt-5 ">
                <img src="assets/img/my-picture.png" alt="my-picture" class="rounded-circle img-fluid border border-0 effet-img" width="450" height="450" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
            </div>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content bg-dark text-light">
                            <div class="modal-header">
                                <img src="assets/img/my-picture.png" alt="my-picture" class="rounded-circle img-fluid border border-0 effet-img" width="50" height="50">
                                <span class="fw-lighter fs-4 ms-3">Mr. Backend</span>
                                <button type="button" class="btn btn-light btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body fw-lighter">
                                I'm <span class="fw-bolder text-warning">Pouakam Vanelle</span>, Digital Engineering Student.
                                <br>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod voluptas ad possimus magnam, blanditiis odio tempore inventore sapiente praesentium! Repellat quis sequi veniam in. Qui vel mollitia expedita. Beatae, laborum?
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores suscipit odio ipsam vero itaque accusantium, temporibus, commodi inventore incidunt officia sunt eius sit libero quo, earum pariatur quibusdam quis vel.
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- My statistiques -->
            <div class="container mt-2 rounded-5 text-light d-flex gap-5 justify-content-center shadow">
                <div class="d-flex flex-column gap-3 text-center">
                    <span class="display-6 poppins-black text-warning">20<i class="fa-solid fa-plus display-5 poppins-black"></i></span>
                    <p class="fs-4 text-withe fw-lighter">Completed projects</p>
                </div>
                <div class="d-flex flex-column gap-3 text-center">
                    <span class="display-6 poppins-black text-warning">3<i class="fa-solid fa-plus display-5 poppins-black"></i></span>
                    <p class="fs-4 text-withe fw-lighter">Years of experience</p>
                </div>
                <div class="d-flex flex-column gap-3 text-center">
                    <span class="display-6 poppins-black text-warning">70<i class="fa-solid fa-percent display-5 poppins-black"></i></span>
                    <p class="fs-4 text-withe fw-lighter">Client satisfaction</p>
                </div>
            </div>
    </header>