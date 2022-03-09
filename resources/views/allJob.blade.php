<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>P T O | All Job</title>
    <link rel="icon" href="Assets/Images/Header/fav.svg" type="image/icon" />

    <!-- bootstrap -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <!-- fontawesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
      integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css" />
    <!-- Animated CSS -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css"
    />
    <!-- Google Font -->
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,600;1,700;1,900&display=swap"
      rel="stylesheet"
    />
    <!-- Jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Animation js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script src="js/animation.js"></script>
    <!-----Bootstrap Bundle-->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
  </head>

  <body>
    <!-- Hero start -->
    <section class="">
      <div class="topHeader bg-white">
        <div class="container">
          <div class="d-flex justify-content-between align-items-center py-3">
            <div class="d-flex flex-wrap align-items-center">
              <div class="mx-2">
                <small class="fw-lighter"
                  ><i class="far fa-envelope me-2"></i
                  >ptoworkers@gmail.com</small
                >
              </div>
              <div
                class="topHeadPhone d-flex align-items-center mx-2 bg-cl-green"
              >
                <small class="fw-lighter"
                  ><i class="fas fa-phone-alt me-2"></i>+091-321654987</small
                >
              </div>
            </div>
            <div class="topSocial d-flex">
              <div
                class="topSocialIcon topSocialIcon2 d-flex justify-content-center align-items-center cursor me-3"
              >
                <i class="fab fa-facebook-f"></i>
              </div>
              <div
                class="topSocialIcon topSocialIcon2 d-flex justify-content-center align-items-center cursor"
              >
                <i class="fab fa-twitter"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Bottom Header-->
      <div class="bottomHeader bg-cl-navy-blue" id="navbar">
        <div class="container">
          <nav class="navbar navbar-expand-xl navbar-light">
            <div class="container-fluid px-0 py-2">
              <div class="bottomHeader-img cursor">
                <img
                  src="assets/image/logo.png"
                  alt=""
                  onclick="window.location.href='index.html'"
                />
              </div>
              <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav"
                aria-controls="navbarNav"
                aria-expanded="false"
                aria-label="Toggle navigation"
              >
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                  <li class="nav-item mx-2">
                    <a class="nav-link text-white" href="index.html"
                      >Home</a
                    >
                  </li>
                  <li class="nav-item mx-2">
                    <a class="nav-link text-white" href="paymentHistory.html"
                      >Payment Proof</a
                    >
                  </li>
                  <li class="nav-item mx-2">
                    <a class="nav-link text-white" href="allJob.html"
                      >Find a Job</a
                    >
                  </li>
                  <li class="nav-item mx-2">
                    <a class="nav-link text-white" href="allGig.html"
                      >Find Gigs</a
                    >
                  </li>
                  <li class="nav-item mx-2">
                    <a class="nav-link text-white" href="employeeWalet.html">Post a Job</a>
                  </li>
                  <li class="nav-item mx-2 me-5">
                    <a class="nav-link text-white" href="support.html">Help</a>
                  </li>
                  <li class="nav-item navSignIn mx-1 px-3 mb-2">
                    <a
                      class="btn bg-cl-green border-0 px-3 text-white"
                      href="signIn.html"
                      role="button"
                      >Sign In</a
                    >
                  </li>
                  <li class="nav-item navSignIn mx-1 px-3 mb-2">
                    <a class="nav-link text-white" href="signUp.html">Sign Up</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </section>
    <!-- Hero end -->

    <!----------Job Start------------->
    <section class="jobs bg-cl-light-pink p-150">
      <div class="container">
        <div class="mb-5">
          <div class="cl-dark-ash2">
            <h4>Finds Jobs</h4>
          </div>
          <div class="cl-mat-black">
            <h2>All Jobs</h2>
          </div>
        </div>
        <div class="table-responsive-md jobTable">
          <table class="table table-borderless px-5">
              <thead>
                <tr>
                  <th scope="col">Job Name</th>
                  <th scope="col">Attachments</th>
                  <th scope="col">Started</th>
                  <th scope="col">Availability</th>
                  <th scope="col">Payment</th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody>
                <tr class="tableRow bg-white rounded-3 cl-grey">
                  <td scope="row">
                    <div class="stickeyImg">
                      <img src="assets/image/stickey2.png" alt="">
                    </div>
                    Fix the Login Error</td>
                  <td><i class="fas fa-link cl-pm me-2"></i>Problems.pdf</td>
                  <td>July 23, 2021</td>
                  <td>
                      <div class="tableAvNumber d-flex justify-content-center align-items-center bg-cl-pm rounded-3">
                          <span class="text-white">15</span>
                      </div>
                  </td>
                  <td>0.5</td>
                  <td>
                      <div class="tableRowBtn text-end">
                          <button class="py-1 px-4 bg-cl-pm border-0 rounded-3 cl-white">Apply Job</button>
                      </div>
                  </td>
                </tr>
                <tr class="tableRow bg-white rounded-3 cl-grey">
                  <td scope="row">
                    <div class="stickeyImg">
                      <img src="assets/image/stickey1.png" alt="">
                    </div>
                    Fix the Login Error</td>
                  <td><i class="fas fa-link cl-pm me-2"></i>Problems.pdf</td>
                  <td>July 23, 2021</td>
                  <td>
                      <div class="tableAvNumber d-flex justify-content-center align-items-center bg-cl-pm rounded-3">
                          <span class="text-white">15</span>
                      </div>
                  </td>
                  <td>0.5</td>
                  <td>
                      <div class="tableRowBtn text-end">
                          <button class="py-1 px-4 bg-cl-pm border-0 rounded-3 cl-white">Apply Job</button>
                      </div>
                  </td>
                </tr>
                <tr class="tableRow bg-white rounded-3 cl-grey">
                  <td scope="row">Fix the Login Error</td>
                  <td><i class="fas fa-link cl-pm me-2"></i>Problems.pdf</td>
                  <td>July 23, 2021</td>
                  <td>
                      <div class="tableAvNumber d-flex justify-content-center align-items-center bg-cl-pm rounded-3">
                          <span class="text-white">15</span>
                      </div>
                  </td>
                  <td>0.5</td>
                  <td>
                      <div class="tableRowBtn text-end">
                          <button class="py-1 px-4 bg-cl-pm border-0 rounded-3 cl-white">Apply Job</button>
                      </div>
                  </td>
                </tr>
                <tr class="tableRow bg-white rounded-3 cl-grey">
                  <td scope="row">Fix the Login Error</td>
                  <td><i class="fas fa-link cl-pm me-2"></i>Problems.pdf</td>
                  <td>July 23, 2021</td>
                  <td>
                      <div class="tableAvNumber d-flex justify-content-center align-items-center bg-cl-pm rounded-3">
                          <span class="text-white">15</span>
                      </div>
                  </td>
                  <td>0.5</td>
                  <td>
                      <div class="tableRowBtn text-end">
                          <button class="py-1 px-4 bg-cl-pm border-0 rounded-3 cl-white">Apply Job</button>
                      </div>
                  </td>
                </tr>
              </tbody>
          </table>
      </div>
      <div class="pagination d-flex justify-content-center align-items-center">
          <div class="d-flex justify-content-center flex-wrap">
              <div class="pageIcon d-flex justify-content-center align-items-center cursor bg-white mx-2">
                  <i class="fas fa-chevron-left"></i>
              </div>
              <div class="pageIcon d-flex justify-content-center align-items-center cursor bg-cl-pm cl-white mx-2">
                  1
              </div>
              <div class="pageIcon d-flex justify-content-center align-items-center cursor bg-white mx-2">
                  2
              </div>
              <div class="pageIcon d-flex justify-content-center align-items-center cursor bg-white mx-2">
                  3
              </div>
              <div class="pageIcon d-flex justify-content-center align-items-center cursor bg-white mx-2">
                  4
              </div>
              <div class="pageIcon d-flex justify-content-center align-items-center cursor bg-white mx-2">
                  5
              </div>
              <div class="pageIcon d-flex justify-content-center align-items-center cursor bg-white mx-2">
                  <i class="fas fa-chevron-right"></i>
              </div>
          </div>
      </div>
      </div>
    </section>
    <!----------Job End------------->

    <!----------Bottom Banner Start------------->
    <section class="bottomBanner">
      <div class="container">
        <div class="bottomBannerContent cl-white fw-bold">
          <h2>The Ultimate Way To <br> Earn money online.</h2>
        </div>
      </div>
    </section>
    <!----------Bottom Banner End------------->

    <!-- Bottom Section -->
    <x-footer/>
  </body>
</html>
