<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>P T O - Job Details</title>
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
    <section class="hero SingleJobHero">
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
      <div class="container">
        <div class="d-flex justify-content-center">
          <div class="singleJobHeroContent">
            <div class="text-center">
              <h3 class="cl-white">JOB DETAIL</h3>
            </div>
            <div class="breadcrumb">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li
                    class="breadcrumb-item cl-white cursor"
                    onclick="location.href='index.html'"
                  >
                    Home
                  </li>
                  <li
                    class="breadcrumb-item cursor cl-white"
                    onclick="location.href='allJob.html'"
                  >
                    Job
                  </li>
                  <li class="breadcrumb-item cl-white">Job Details</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Hero end -->

    <!----------Job Details Start------------->
    <section class="jobDetails py-5">
      <div class="container">
        <div class="row">
          <div class="col-xl-9 col-lg-8 mb-3">
            <div class="singleJobMidLeft p-4 rounded-3">
              <div class="d-flex align-items-center mb-4">
                <div
                  class="sJMLIcon d-flex justify-content-center align-items-center bg-cl-light-pink2 rounded-3 me-3"
                >
                  <i class="fas fa-clipboard-check cl-pm fs20"></i>
                </div>
                <div class="">
                  <div class="">
                    <h3 class="cl-mat-black fw-bold">
                      PSD To HTML
                    </h3>
                  </div>
                  <div class="jobFlexTopDiv d-flex">
                    <div class="d-flex cl-grey me-3">
                      <div class="me-2">
                        <i class="fas fa-th-large"></i>
                      </div>
                      <div class="text-center">
                        <p class="cl-pm fw-bold">
                          Web Design
                        </p>
                      </div>
                    </div>
                    <div class="d-flex cl-grey">
                      <div class="me-2">
                        <i class="fas fa-award"></i>
                      </div>
                      <div class="text-center">
                        <p class="cl-pm fw-bold">International</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="mb-4">
                <div class="mb-4">
                  <h4 class="cl-deep-blue">Job Description:</h4>
                </div>
                <div class="cl-grey">
                  <small>
                    <p>
                      1-Enter to the following link:
                      https://cdnflair.com/srv.html?id=5499675&pub=1393530
                      2-Download and install the application. 3-Sign in.
                      4-Complete the show. Basic conditions:
                    </p>
                    <p>
                      2-Do not use a VPN service. 2-If you are outside Spain, do
                      not take this job. **Important note: This function is only
                      available for Android devices in Spain** 3-I keep the app
                      registered for 10 days. 4-Open the application daily for
                      10 minutes. ***Important: When you complete the task, the
                      amount will be transferred to your account***
                    </p>
                  </small>
                </div>
              </div>
              <div class="mb-4">
                <div class="mb-4">
                  <h4 class="cl-deep-blue">Completion Requirement</h4>
                </div>
                <div class="cl-grey">
                  <small>
                    <p>
                      1-The account used for the registration process 2-Screen
                      shots show days of use 3-The phone's IP address
                    </p>
                    <p>
                        2-The account used for the registration process 2-Screen
                        shots show days of use 3-The phone's IP address
                      </p>
                      <p>
                        3-The account used for the registration process 2-Screen
                        shots show days of use 3-The phone's IP address
                      </p>
                  </small>
                </div>
              </div>
              <div class="jobFlexDiv d-flex justify-content-between">
                <div>
                    <div class="mb-2">
                        <h4 class="cl-deep-blue">Job Seats</h4>
                      </div>
                      <div class="cl-grey">
                        <small>
                          <p>10</p>
                        </small>
                      </div>
                </div>
                <div>
                    <div class="mb-2">
                        <h4 class="cl-deep-blue">Deadline</h4>
                      </div>
                      <div class="cl-grey">
                        <small>
                          <p>30 January 22, 03:00.00 pm</p>
                        </small>
                      </div>
                </div>
                <div>
                    <div class="mb-2">
                        <h4 class="cl-deep-blue">Price</h4>
                      </div>
                      <div class="cl-grey">
                        <small>
                          <p>$ 100.00</p>
                        </small>
                      </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-4">
            <div class="singleJobMidRight p-4 rounded-3">
              <div class="mb-3 text-center">
                <h4 class="cl-mat-black fw-bold">Great!</h4>
              </div>
                <div class="mb-3 text-center">
                  <small class="fs16">You’ve Already Submit your Proof</small>
                </div>
                <div class="bg-cl-ash p-3 rounded-3 mb-3">
                  <small class="cl-pm fs16"
                    >Waiting for Buyer’s Approval</small
                  >
                </div>
                <div>
                  <button
                    class="w-100 py-2 bg-cl-pm cl-white border-0 rounded-3"
                  >
                    Find More Jobs
                  </button>
                </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!----------Job Details End------------->

    <!-- Bottom Section -->
    <x-footer/>

    <script src="js/main.js"></script>
  </body>
</html>
