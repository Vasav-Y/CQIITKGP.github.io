<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="styles/blogstyle.css" />
    <link rel="stylesheet" href="styles/gunjan.css" />
    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Lora:wght@500&display=swap"
      rel="stylesheet"
    />
    <script
      src="https://kit.fontawesome.com/08f5394404.js"
      crossorigin="anonymous"
    ></script>

    <title>Our Blogs</title>
  </head>

  <body>
    <section id="nav-bar">
      <nav class="navbar fixed-top navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#first-page"
          ><img src="images/logo.jpg" />Communiqué</a
        >
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <!--ml-auto for right alignment -->

            <li class="nav-item active mx-auto">
              <a class="nav-link" href="#first-page">HOME</a>
            </li>
            <li class="nav-item mx-auto">
              <a class="nav-link" href="#practicearea">CORE COMPETENCIES</a>
            </li>
            <li class="nav-item mx-auto">
              <a class="nav-link" href="#our-vision">OUR VISION</a>
            </li>
            <li class="nav-item mx-auto">
              <a class="nav-link" href="#our-attorneys"> EXECUTIVE TEAM</a>
            </li>
            <li class="nav-item mx-auto">
              <a class="nav-link" href="#form">CONTACT US</a>
            </li>

            <li class="nav-item mx-auto">
              <a class="nav-link" href="gallery.html">GALLERY</a>
            </li>
            <li class="nav-item mx-auto">
              <a class="nav-link" href="FAQs2.html">FAQs</a>
            </li>
            <li class="nav-item mx-auto">
              <a class="nav-link" href="Events.html">EVENTS</a>
            </li>
            <li class="nav-item mx-auto">
              <a class="nav-link" href="alumni.html">ALUMNI</a>
            </li>
            <li class="nav-item mx-auto"></li>
          </ul>
          <button
            class="btn btn-outline-success mx-1"
            data-bs-toggle="modal"
            data-bs-target="#loginModal"
          >
            Login
          </button>
        </div>
      </nav>
    </section>

    <div
      class="modal fade"
      id="loginModal"
      tabindex="-1"
      aria-labelledby="loginModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="loginModalLabel">Login</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <form>
              <div class="mb-3">
                <label for="admin-name" class="col-form-label">Name:</label>
                <input type="text" class="form-control" id="admin-name" />
              </div>
              <div class="mb-3">
                <label for="password" class="col-form-label">Password</label>
                <input type="password" class="form-control" id="password" />
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button
              type="button"
              class="btn btn-secondary"
              data-bs-dismiss="modal"
            >
              Close
            </button>
            <button
              type="button"
              name="login_button"
              id="login_button"
              class="btn btn-warning"
            >
              Login
            </button>
          </div>
        </div>
      </div>
    </div>
    <br />
    <div class="bloghead"></div>
    <div class="latest-blogs">
      <h1>Latest Blogs</h1>
    </div>
    <div class="coloumn left" id="btnContainer">
      <h5 class="filteropt filtericon"><i class="fas fa-filter ficon2"></i></h5>
      <button class="btnf activef" onclick="filterSelection('all')">
        Show all</button
      ><br />
      <div class="accordion" id="accordionExample">
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingOne">
            <button
              class="accordion-button"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#collapseOne"
              aria-expanded="true"
              aria-controls="collapseOne"
            >
              <h5 class="filteropt">Department</h5>
            </button>
          </h2>
          <div
            id="collapseOne"
            class="accordion-collapse collapse show"
            aria-labelledby="headingOne"
            data-bs-parent="#accordionExample"
          >
            <div class="accordion-body" style="overflow: scroll; height:400px">
              <button class="btnf" onclick="filterSelection('IM')">IM</button>
              <button class="btnf" onclick="filterSelection('NA')">NA</button>
              <button class="btnf" onclick="filterSelection('EE')">EE</button>
              <button class="btnf" onclick="filterSelection('CS')">CS</button>
              <button class="btnf" onclick="filterSelection('CS')">CE</button>
              <button class="btnf" onclick="filterSelection('CS')">CH</button>
              <button class="btnf" onclick="filterSelection('CS')">EC</button>
              <button class="btnf" onclick="filterSelection('CS')">AE</button>
              <button class="btnf" onclick="filterSelection('CS')">AG</button>
              <button class="btnf" onclick="filterSelection('CS')">AR</button>
              <button class="btnf" onclick="filterSelection('CS')">BT</button>
              <button class="btnf" onclick="filterSelection('CS')">CY</button>
              <button class="btnf" onclick="filterSelection('CS')">EX</button>
              <button class="btnf" onclick="filterSelection('CS')">GG</button>
              <button class="btnf" onclick="filterSelection('CS')">HS</button>
              <button class="btnf" onclick="filterSelection('CS')">IE</button>
              <button class="btnf" onclick="filterSelection('CS')">MA</button>
              <button class="btnf" onclick="filterSelection('CS')">ME</button>
              <button class="btnf" onclick="filterSelection('CS')">MF</button>
              <button class="btnf" onclick="filterSelection('CS')">MI</button>
              <button class="btnf" onclick="filterSelection('CS')">MT</button>
              <button class="btnf" onclick="filterSelection('CS')">NA</button>
              <button class="btnf" onclick="filterSelection('CS')">PH</button>
              <button class="btnf" onclick="filterSelection('CS')">QE</button>
              <button class="btnf" onclick="filterSelection('CS')">QM</button>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingTwo">
            <button
              class="accordion-button collapsed"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#collapseTwo"
              aria-expanded="false"
              aria-controls="collapseTwo"
            >
              <h5 class="filteropt">Series</h5>
            </button>
          </h2>
          <div
            id="collapseTwo"
            class="accordion-collapse collapse"
            aria-labelledby="headingTwo"
            data-bs-parent="#accordionExample"
          >
            <div class="accordion-body">
              <button class="btnf" onclick="filterSelection('CORE_COMBAT')">
                Core Combat
              </button>
              <button class="btnf" onclick="filterSelection('CONSULTALKS')">
                Consultalks
              </button>
              <button class="btnf" onclick="filterSelection('PRODUCT')">
                Product
              </button>
              <button class="btnf" onclick="filterSelection('FMCG_LUMINARIES')">
                FMCG Luminaries
              </button>
              <button class="btnf" onclick="filterSelection('FINFORTE')">
                Finforte
              </button>
              <button class="btnf" onclick="filterSelection('ML')">ML</button>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingThree">
            <button
              class="accordion-button collapsed"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#collapseThree"
              aria-expanded="false"
              aria-controls="collapseThree"
            >
              <h5 class="filteropt">Type</h5>
            </button>
          </h2>
          <div
            id="collapseThree"
            class="accordion-collapse collapse"
            aria-labelledby="headingThree"
            data-bs-parent="#accordionExample"
          >
            <div class="accordion-body">
              <button class="btnf" onclick="filterSelection('INTERNSHIP')">
                Internships
              </button>
              <button class="btnf" onclick="filterSelection('PLACEMENT')">
                Placement
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="filter_mob">
      <!-- Default dropup button -->
      <div class="ficonsur">
        <div class="btn-group dropup">
          <button
            type="button"
            class="btn btn-secondary dropdown-toggle"
            data-bs-toggle="dropdown"
            aria-expanded="false"
          >
            <i class="fas fa-filter ficon"></i>
          </button>
          <ul class="dropdown-menu fildrop">
            <!-- Dropdown menu links -->
            <button class="btnf activef" onclick="filterSelection('all')">
              Show all</button
            ><br />
            <div class="accordion" id="accordionExample">
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                  <button
                    class="accordion-button"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseOne"
                    aria-expanded="true"
                    aria-controls="collapseOne"
                  >
                    <h5 class="filteropt">Department</h5>
                  </button>
                </h2>
                <div
                  id="collapseOne"
                  class="accordion-collapse collapse show"
                  aria-labelledby="headingOne"
                  data-bs-parent="#accordionExample"
                >
                  <div class="accordion-body" style="overflow-y: scroll; height:40px">
                    <button class="btnf" onclick="filterSelection('IM')">
                      IM</button
                    ><br />
                    <button class="btnf" onclick="filterSelection('NA')">
                      NA</button
                    ><br />
                    <button class="btnf" onclick="filterSelection('EE')">
                      EE</button
                    ><br />
                    <button class="btnf" onclick="filterSelection('CS')">
                      CS</button
                    ><br />
                    <button class="btnf" onclick="filterSelection('CS')">CE</button>
                    <button class="btnf" onclick="filterSelection('CS')">CH</button>
                    <button class="btnf" onclick="filterSelection('CS')">EC</button>
                    <button class="btnf" onclick="filterSelection('CS')">AE</button>
                    <button class="btnf" onclick="filterSelection('CS')">AG</button>
                    <button class="btnf" onclick="filterSelection('CS')">AR</button>
                    <button class="btnf" onclick="filterSelection('CS')">BT</button>
                    <button class="btnf" onclick="filterSelection('CS')">CY</button>
                    <button class="btnf" onclick="filterSelection('CS')">EX</button>
                    <button class="btnf" onclick="filterSelection('CS')">GG</button>
                    <button class="btnf" onclick="filterSelection('CS')">HS</button>
                    <button class="btnf" onclick="filterSelection('CS')">IE</button>
                    <button class="btnf" onclick="filterSelection('CS')">MA</button>
                    <button class="btnf" onclick="filterSelection('CS')">ME</button>
                    <button class="btnf" onclick="filterSelection('CS')">MF</button>
                    <button class="btnf" onclick="filterSelection('CS')">MI</button>
                    <button class="btnf" onclick="filterSelection('CS')">MT</button>
                    <button class="btnf" onclick="filterSelection('CS')">NA</button>
                    <button class="btnf" onclick="filterSelection('CS')">PH</button>
                    <button class="btnf" onclick="filterSelection('CS')">QE</button>
                    <button class="btnf" onclick="filterSelection('CS')">QM</button>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseTwo"
                    aria-expanded="false"
                    aria-controls="collapseTwo"
                  >
                    <h5 class="filteropt">Series</h5>
                  </button>
                </h2>
                <div
                  id="collapseTwo"
                  class="accordion-collapse collapse"
                  aria-labelledby="headingTwo"
                  data-bs-parent="#accordionExample"
                >
                  <div class="accordion-body">
                    <button class="btnf" onclick="filterSelection('core')">
                      Core Combat</button
                    ><br />
                    <button class="btnf" onclick="filterSelection('consul')">
                      Consultalks</button
                    ><br />
                    <button class="btnf" onclick="filterSelection('product')">
                      Product</button
                    ><br />
                    <button class="btnf" onclick="filterSelection('FMCG')">
                      FMCG Luminaries</button
                    ><br />
                    <button class="btnf" onclick="filterSelection('finforte')">
                      Finforte</button
                    ><br />
                    <button class="btnf" onclick="filterSelection('ml')">
                      ML</button
                    ><br />
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseThree"
                    aria-expanded="false"
                    aria-controls="collapseThree"
                  >
                    <h5 class="filteropt">Type</h5>
                  </button>
                </h2>
                <div
                  id="collapseThree"
                  class="accordion-collapse collapse"
                  aria-labelledby="headingThree"
                  data-bs-parent="#accordionExample"
                >
                  <div class="accordion-body">
                    <button class="btnf" onclick="filterSelection('intern')">
                      Internships</button
                    ><br />
                    <button class="btnf" onclick="filterSelection('placed')">
                      Placement</button
                    ><br />
                  </div>
                </div>
              </div>
            </div>
          </ul>
        </div>
      </div>
    </div>
    <div class="coloumn right">
      <div class="latestlist">
        <div class="blogc card mb-3 EE CORE_COMBAT PLACEMENT" style="max-width: 840px">
          <div class="row g-0">
            <div class="col-md-4">
              <img
                src="images/banner2.jpg"
                class="img-fluid rounded-start"
                alt="..."
              />
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <button
                  type="button"
                  class="btn btn-outline-primary btn-sm tag"
                >
                  EE
                </button>
                <button
                  type="button"
                  class="btn btn-outline-primary btn-sm tag"
                >
                  CORE
                </button>
                <button
                  type="button"
                  class="btn btn-outline-primary btn-sm tag"
                >
                  Placement
                </button>
                <p class="card-text">
                  This is a wider card with supporting text below as a natural
                  lead-in to additional content. This content is a little bit
                  longer.
                </p>
                <p class="card-text">
                  <a
                    href="secondpg.php?blogid=1"
                    class="btn btn-outline-success"
                    >Read More</a
                  >
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="blogc card mb-3 IM ML INTERNSHIP" style="max-width: 840px">
          <div class="row g-0">
            <div class="col-md-4">
              <img
                src="images/banner2.jpg"
                class="img-fluid rounded-start"
                alt="..."
              />
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <button
                  type="button"
                  class="btn btn-outline-primary btn-sm tag"
                >
                  IM
                </button>
                <button
                  type="button"
                  class="btn btn-outline-primary btn-sm tag"
                >
                  ML
                </button>
                <button
                  type="button"
                  class="btn btn-outline-primary btn-sm tag"
                >
                  Internship
                </button>
                <p class="card-text">
                  This is a wider card with supporting text below as a natural
                  lead-in to additional content. This content is a little bit
                  longer.
                </p>
                <p class="card-text">
                  <a
                    href="secondpg.php?blogid=1"
                    class="btn btn-outline-success"
                    >Read More</a
                  >
                </p>
              </div>
            </div>
          </div>
        </div>
        <div
          class="blogc card mb-3 NA FINFORTE PLACEMENT"
          style="max-width: 840px"
        >
          <div class="row g-0">
            <div class="col-md-4">
              <img
                src="images/banner2.jpg"
                class="img-fluid rounded-start"
                alt="..."
              />
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <button
                  type="button"
                  class="btn btn-outline-primary btn-sm tag"
                >
                  NA
                </button>
                <button
                  type="button"
                  class="btn btn-outline-primary btn-sm tag"
                >
                  FINANCE
                </button>
                <button
                  type="button"
                  class="btn btn-outline-primary btn-sm tag"
                >
                  Placement
                </button>
                <p class="card-text">
                  This is a wider card with supporting text below as a natural
                  lead-in to additional content. This content is a little bit
                  longer.
                </p>
                <p class="card-text">
                  <a
                    href="secondpg.php?blogid=1"
                    class="btn btn-outline-success"
                    >Read More</a
                  >
                </p>
              </div>
            </div>
          </div>
        </div>
        <div
          class="blogc card cardr mb-3 CS CONSULTALKS INTERNSHIP"
          style="max-width: 840px"
        >
          <div class="row g-0">
            <div class="col-md-4">
              <img
                src="images/banner2.jpg"
                class="img-fluid rounded-start"
                alt="..."
              />
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <button
                  type="button"
                  class="btn btn-outline-primary btn-sm tag"
                >
                  CS
                </button>
                <button
                  type="button"
                  class="btn btn-outline-primary btn-sm tag"
                >
                  CONSULTING
                </button>
                <button
                  type="button"
                  class="btn btn-outline-primary btn-sm tag"
                >
                  Internship
                </button>
                <p class="card-text">
                  This is a wider card with supporting text below as a natural
                  lead-in to additional content. This content is a little bit
                  longer.
                </p>
                <p class="card-text">
                  <a
                    href="secondpg.php?blogid=1"
                    class="btn btn-outline-success"
                    >Read More</a
                  >
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>

    <!--<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>-->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->
    <script src="filter.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="fixdiv.js"></script>
  </body>
</html>
