<?php
    //Connect db
    $server = "localhost";
    $user = "root";
    $password = "";
    $database = "blog";
    $conn = mysqli_connect($server, $user, $password, $database);

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles/blogstyle.css">
    <link rel="stylesheet" href="styles/gunjan.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@500&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/08f5394404.js" crossorigin="anonymous"></script>

    <title>Blogs</title>
</head>

<body>


    <section id="nav-bar">
        <nav class="navbar fixed-top navbar-expand-lg navbar-light ">
            <a class="navbar-brand" href="#first-page"><img src="images/logo.jpg">Communiqué</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <!--ml-auto for right alignment -->

                    <li class="nav-item active mx-auto">
                        <a class="nav-link" href="../index.html">HOME</a>
                    </li>
                    </li>
                    <li class="nav-item mx-auto">
                        <a class="nav-link" href="../gallery.html">GALLERY</a>
                    </li>
                    <li class="nav-item mx-auto">
                        <a class="nav-link" href="../FAQs2.html">FAQs</a>
                    </li>
                    <li class="nav-item mx-auto">
                        <a class="nav-link" href="../Events.html">EVENTS</a>
                    </li>
                    <li class="nav-item mx-auto">
                        <a class="nav-link" href="../alumni.html">ALUMNI</a>
                    </li>
                    <li class="nav-item mx-auto">
                        <a class="nav-link" href="index.php">BLOG</a>
                    </li>
                    <li class="nav-item mx-auto">

                    </li>

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
    <div class="alert alert-danger fade show" role="alert" id="alrt">
  <strong>Login Failed!</strong> Wrong username or password!
  <button type="button" class="btn-close" aria-label="Close" id="close"></button>
</div>

<!-- <script>  
 $(document).ready(function(){  
      $('#login_button').click(function(){  
           var username = $('#admin-name').val();  
           var password = $('#password').val();  
           if(username != '' && password != '')  
           {  
                $.ajax({  
                     url:"admin.php",  
                     method:"POST",  
                     data: {username:username, password:password},  
                     success:function(data)  
                     {  
                          //alert(data);  
                          if(data == 'No')  
                          {  
                               alert("Wrong Data");  
                          }  
                          else  
                          {  
                               $('#loginModal').hide();  
                               location.reload();  
                          }  
                     }  
                });  
           }  
           else  
           {  
                alert("Both Fields are required");  
           }  
      });
  </script> -->
    <br />
    <div class="bloghead">

    </div>
    <div class="latest-blogs">
        <h1>Blogs</h1>

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
              <h5 class="filteropt">Profile</h5>
            </button>
          </h2>
          <div
            id="collapseOne"
            class="accordion-collapse collapse show"
            aria-labelledby="headingOne"
            data-bs-parent="#accordionExample"
          >
            <div class="accordion-body" style="overflow: scroll; height:400px">
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

          <h2 class="accordion-header" id="headingTwo">
            <button
              class="accordion-button collapsed"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#collapseTwo"
              aria-expanded="false"
              aria-controls="collapseTwo"
            >

              <h5 class="filteropt">Profiles</h5>

            </button>
          </h2>
          <div
            id="collapseTwo"
            class="accordion-collapse collapse"
            aria-labelledby="headingTwo"
            data-bs-parent="#accordionExample"
          >
            <div class="accordion-body">
              <button class="btnf" onclick="filterSelection('2022')">
                2022
              </button>
              <button class="btnf" onclick="filterSelection('2021')">
                2021
              </button>
              <button class="btnf" onclick="filterSelection('2020')">
                2020
              </button>
              <button class="btnf" onclick="filterSelection('2019')">
                2019
              </button>
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
              <h5 class="filteropt">Department</h5>
            </button>
          </h2>
          <div
            id="collapseThree"
            class="accordion-collapse collapse"
            aria-labelledby="headingThree"
            data-bs-parent="#accordionExample"
          >
            <div class="accordion-body">
                <button class="btnf" onclick="filterSelection(' IM ')">IM</button>
                <button class="btnf" onclick="filterSelection(' NA ')">NA</button>
                <button class="btnf" onclick="filterSelection(' EE ')">EE</button>
                <button class="btnf" onclick="filterSelection(' CS ')">CS</button>
                <button class="btnf" onclick="filterSelection(' CE ')">CE</button>
                <button class="btnf" onclick="filterSelection(' CH ')">CH</button>
                <button class="btnf" onclick="filterSelection(' EC ')">EC</button>
                <button class="btnf" onclick="filterSelection(' AE ')">AE</button>
                <button class="btnf" onclick="filterSelection(' AG ')">AG</button>
                <button class="btnf" onclick="filterSelection(' AR ')">AR</button>
                <button class="btnf" onclick="filterSelection(' BT ')">BT</button>
                <button class="btnf" onclick="filterSelection(' CY ')">CY</button>
                <button class="btnf" onclick="filterSelection(' EX ')">EX</button>
                <button class="btnf" onclick="filterSelection(' GG ')">GG</button>
                <button class="btnf" onclick="filterSelection(' HS ')">HS</button>
                <button class="btnf" onclick="filterSelection(' IE ')">IE</button>
                <button class="btnf" onclick="filterSelection(' MA ')">MA</button>
                <button class="btnf" onclick="filterSelection(' ME ')">ME</button>
                <button class="btnf" onclick="filterSelection(' MF ')">MF</button>
                <button class="btnf" onclick="filterSelection(' MI ')">MI</button>
                <button class="btnf" onclick="filterSelection(' MT ')">MT</button>
                <button class="btnf" onclick="filterSelection(' NA ')">NA</button>
                <button class="btnf" onclick="filterSelection(' PH ')">PH</button>
                <button class="btnf" onclick="filterSelection(' QE ')">QE</button>
                <button class="btnf" onclick="filterSelection(' QM ')">QM</button>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingFour">
            <button
              class="accordion-button collapsed"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#collapseFour"
              aria-expanded="false"
              aria-controls="collapseFour"
            >
              <h5 class="filteropt">Type</h5>
            </button>
          </h2>
          <div
            id="collapseFour"
            class="accordion-collapse collapse"
            aria-labelledby="headingFour"
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
              <button class="btnf" onclick="filterSelection(' IM ')">IM</button>
              <button class="btnf" onclick="filterSelection(' NA ')">NA</button>
              <button class="btnf" onclick="filterSelection(' EE ')">EE</button>
              <button class="btnf" onclick="filterSelection(' CS ')">CS</button>
              <button class="btnf" onclick="filterSelection(' CE ')">CE</button>
              <button class="btnf" onclick="filterSelection(' CH ')">CH</button>
              <button class="btnf" onclick="filterSelection(' EC ')">EC</button>
              <button class="btnf" onclick="filterSelection(' AE ')">AE</button>
              <button class="btnf" onclick="filterSelection(' AG ')">AG</button>
              <button class="btnf" onclick="filterSelection(' AR ')">AR</button>
              <button class="btnf" onclick="filterSelection(' BT ')">BT</button>
              <button class="btnf" onclick="filterSelection(' CY ')">CY</button>
              <button class="btnf" onclick="filterSelection(' EX ')">EX</button>
              <button class="btnf" onclick="filterSelection(' GG ')">GG</button>
              <button class="btnf" onclick="filterSelection(' HS ')">HS</button>
              <button class="btnf" onclick="filterSelection(' IE ')">IE</button>
              <button class="btnf" onclick="filterSelection(' MA ')">MA</button>
              <button class="btnf" onclick="filterSelection(' ME ')">ME</button>
              <button class="btnf" onclick="filterSelection(' MF ')">MF</button>
              <button class="btnf" onclick="filterSelection(' MI ')">MI</button>
              <button class="btnf" onclick="filterSelection(' MT ')">MT</button>
              <button class="btnf" onclick="filterSelection(' NA ')">NA</button>
              <button class="btnf" onclick="filterSelection(' PH ')">PH</button>
              <button class="btnf" onclick="filterSelection(' QE ')">QE</button>
              <button class="btnf" onclick="filterSelection(' QM ')">QM</button>
            </div>
          </div>
        </div>
        
      </div>
    </div>

    
    
    
        <div class="filter_mob">
                    <!-- Default dropup button -->
            <div class="ficonsur">
                <div class="btn-group dropup">
                    <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-filter ficon"></i>
                    </button>
                    <ul class="dropdown-menu fildrop">
                    <!-- Dropdown menu links -->
                    <button class="btnf activef" onclick="filterSelection('all')"> Show all</button><br>
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <h5 class="filteropt">Department</h5>
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body" style="overflow: scroll; height: 80px">
                                <button class="btnf" onclick="filterSelection(' IM ')"> IM</button><br>
                                <button class="btnf" onclick="filterSelection(' NA ')"> NA</button><br>
                                <button class="btnf" onclick="filterSelection(' EE ')"> EE</button><br>
                                <button class="btnf" onclick="filterSelection(' CS ')"> CS</button><br>
                                <button class="btnf" onclick="filterSelection(' CE ')">CE</button>
                                <button class="btnf" onclick="filterSelection(' CH ')">CH</button>
                                <button class="btnf" onclick="filterSelection(' EC ')">EC</button>
                                <button class="btnf" onclick="filterSelection(' AE ')">AE</button>
                                <button class="btnf" onclick="filterSelection( 'AG ')">AG</button>
                                <button class="btnf" onclick="filterSelection(' AR ')">AR</button>
                                <button class="btnf" onclick="filterSelection(' BT ')">BT</button>
                                <button class="btnf" onclick="filterSelection(' CY ')">CY</button>
                                <button class="btnf" onclick="filterSelection(' EX ')">EX</button>
                                <button class="btnf" onclick="filterSelection(' GG ')">GG</button>
                                <button class="btnf" onclick="filterSelection(' HS ')">HS</button>
                                <button class="btnf" onclick="filterSelection(' IE ')">IE</button>
                                <button class="btnf" onclick="filterSelection(' MA ')">MA</button>
                                <button class="btnf" onclick="filterSelection(' ME ')">ME</button>
                                <button class="btnf" onclick="filterSelection(' MF ')">MF</button>
                                <button class="btnf" onclick="filterSelection(' MI ')">MI</button>
                                <button class="btnf" onclick="filterSelection(' MT ')">MT</button>
                                <button class="btnf" onclick="filterSelection(' NA ')">NA</button>
                                <button class="btnf" onclick="filterSelection(' PH ')">PH</button>
                                <button class="btnf" onclick="filterSelection(' QE ')">QE</button>
                                <button class="btnf" onclick="filterSelection(' QM ')">QM</button>
                            </div>
                        </div>
                        </div>
                        <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <h5 class="filteropt">Series</h5>
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <button class="btnf" onclick="filterSelection('CORE_COMBAT')"> Core Combat</button><br>
                                <button class="btnf" onclick="filterSelection('CONSULTALKS')"> Consultalks</button><br>
                                <button class="btnf" onclick="filterSelection('PRODUCT')"> Product</button><br>
                                <button class="btnf" onclick="filterSelection('FMCG_LUMINARIES')"> FMCG Luminaries</button><br>
                                <button class="btnf" onclick="filterSelection('FINFORTE')"> Finforte</button><br>
                                <button class="btnf" onclick="filterSelection('data')"> Data Crux</button><br>
                                <button class="btnf" onclick="filterSelection('ML')"> ML</button><br>
                            </div>
                        </div>
                        </div>
                        <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <h5 class="filteropt">Type</h5>
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <button class="btnf" onclick="filterSelection('INTERNSHIP')"> Internships</button><br>
                                <button class="btnf" onclick="filterSelection('PLACEMENT')"> Placement</button><br>
                            </div>
                        </div>
                        </div>
                    </div>
                        
                    </ul>
                </div>
                
            </div>
        </div>
        <?php
            $type = gettype($conn);
            // echo $type;
            $query = "SELECT * FROM bloglist ORDER BY Date DESC";
            $cur = mysqli_query($conn, $query);
            $type=gettype($cur);
            // echo $type;
            // var_dump($cur);
            echo '<div class="coloumn right">
                    <div class="latestlist">';
            while($row = mysqli_fetch_assoc($cur))
            {
                $dept = $row['Department'];
                $ser = $row['Series'];
                $date = $row['Date'];
                $plin = $row['placeNintern'];
                $des =  $row['Descript'];
                $plin2 = "";
                $plink = $row['photo'];
                $title = $row['Title'];
                $ser2 = strtoupper($ser);
                // if($plin == "Placement"){
                //     $plin2 = "PLACEMENT";
                // }
                $comp = $row['Company'];
                $year = substr($date, 0, 4);
                $id = $row['blogid'];
                echo '

                        <div data-id="'.$id.'"class="blogc card mb-3 '.$dept.' '.$ser.' '.$plin.' '.$year.'" style="width: 840px;">
                            <div class="row g-0">
                            <div class="col-md-4" style="width: fit-content;height: fit-content;">
                                <img src="'.$plink.'" class="img-fluid rounded-start" alt="..." style=" width: 180px; height: 200px;">
                                </div>
                                <div class="col-md-8 cardsmScreen">
                                    <div class="card-body">

                                        <h5 class="card-title">'.$title.'</h5>';
                                        if($dept != "DEP" && $dept != ""){
                                            echo '<button type="button" class="btn btn-outline-primary btn-sm tag">'.$dept.'</button>';
                                        }
                                        
                                        echo '<button type="button" class="btn btn-outline-primary btn-sm tag">'.$ser2.'</button>
                                        <button type="button" class="btn btn-outline-primary btn-sm tag">'.$plin.'</button>
                                        
                                        <p class="card-text">'.$des.'</p>
                                        <p class="card-text"><a href="secondpg.php?blogid='.$id.'" class="btn btn-outline-success btn-sm">Read More</a></p> 
                                    </div>
                                </div>
                            </div>
                        </div>
                        '
                        
                    ;    
            }
            echo '</div>
                </div>';
            
        ?>
        







    <!-- Optional JavaScript; choose one of the two! -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

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
