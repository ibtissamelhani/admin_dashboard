<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assets/css/signup.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

   
</head>
<body>

    <nav>
        <div class="container d-flex justify-content-between gap-md-3 gap-lg-5 align-items-center">
            <div class="d-flex w-sm-100 align-items-center justify-content-between gap-3">
                <div class="logo"><img class="img-fluid" src="../../assets/img/logo.png" alt="logo"></div>
                <div class="menu"><i class="fa-solid fa-bars fs-3 text-white"></i></div>
            </div>
            <div class="search-wrapper flex-grow-1">
                <input class="py-2 px-3 rounded-2 w-100 border-0 d-none d-md-block" type="text" placeholder="Search">
            </div>
            <div class="sign-in-wrapper d-flex align-items-center gap-3">
                <a href="#" class="fw-semibold text-white d-none d-md-block"> Watchlist</a>
                <a href="./sign-in.html" class="fw-bold text-white d-none d-md-block">signIn</a>
                <select class="form-select d-none d-md-block" aria-label="Default select example">
                    <option selected>En</option>
                    <option value="2">Fr</option>
                    <option value="3">Sp</option>
                </select>
            </div>
        </div>
    </nav>

    <section class="sign-up">
        <div class="sign-up-container">
            <h1>Create account</h1>
            <form id="form">
                <label for="form-username">Your Name</label>
                <div class="form-controls">
                    <input type="text" name="username" id="form-username" placeholder="Your First and last name" class="input-pd">
                    <small>Error message</small>
                </div>

                <label for="form-email">Email</label>
                <div class="form-controls">
                    <input type="text" name="email" id="form-email" placeholder="Your Email" class="input-pd">
                    <small>Error message</small>
                </div>

                <label for="form-password">Password</label>
                <div class="form-controls">
                    <input type="password" name="password" id="form-password" placeholder="at least 8 characters" class="input-pd">
                    <p class="form-control-caracter">Passwords must be at least 8 characters</p>
                    <small>Error message</small>
                </div>

                <label for="form-confirmed-password">Re-enter password</label>
                <div class="form-controls">
                    <input type="password" name="username" id="form-confirmed-password" class="input-pd">
                    <small>Error message</small>
                </div>
                <button id="submit">Create your MovieMingle account</button>
            </form>
            <p class="signin-link">Already have an account? <a href="./sign-in.html">Sign in</a></p>
        </div>
    </section>

    <footer class="py-5 mt-5">
        <div class="container">
            <div class="social-media text-white fs-1 d-flex justify-content-center gap-4 mb-5">
                <i class="fa-brands fa-tiktok"></i>
                <i class="fa-brands fa-facebook"></i>
                <i class="fa-brands fa-instagram"></i>
                <i class="fa-brands fa-youtube"></i>
            </div>
            <div class="mt-5 row">
                <div class="col-sm-12 col-lg-3 d-flex d-lg-block flex-column align-items-center">
                    <div>
                        <img src="../../assets/img/logo.png" alt="logo" style="min-width: 100px;">
                    </div>
                    <p class="opacity-75 fs-7">Terms of use | Privacy</p>
                    <p class="opacity-75 fs-7">Copyright by 2019 MovieMingle, Inc</p>
                </div>
                <div class="col-md-6 col-lg-3 mt-4 text-center text-lg-start">
                    <ul class="text-white p-0">
                        <li class="fw-bold mb-2">About Us</li>
                        <li><a href="#" class="text-white">Support Center</a></li>
                        <li><a href="#" class="text-white">Customer Support</a></li>
                        <li><a href="#" class="text-white">About Us</a></li>
                        <li><a href="#" class="text-white">Copyright</a></li>
                    </ul>
                </div>
                <div class="col-md-6 col-lg-3 mt-4 text-center text-lg-start">
                    <ul class="text-white p-0">
                        <li class="fw-bold mb-2">Our Information</li>
                        <li><a href="#" class="text-white">Return Policy</a></li>
                        <li><a href="#" class="text-white">Privacy Policy</a></li>
                        <li><a href="#" class="text-white">Terms & Conditions</a></li>
                        <li><a href="#" class="text-white">Site Map</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 mt-3 d-none d-lg-block">
                    <ul class="text-white">
                        <li class="fw-bold mb-2">Our Information</li>
                        <li><a href="#" class="text-white">Return Policy</a></li>
                        <li><a href="#" class="text-white">Privacy Policy</a></li>
                        <li><a href="#" class="text-white">Terms & Conditions</a></li>
                        <li><a href="#" class="text-white">Site Map</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous" ></script>
    <script src="../../assets/js/sign-up.js" ></script>
</body>
</html>