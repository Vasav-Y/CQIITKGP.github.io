<?php
    session_start();
    $_SESSION['loggedin'] = true;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="admin.css">
    <title>Add/Edit a blog</title>
</head>

<body>
    <div class="d-flex">
    <button class = "mx-5 my-5 addbtn" >Add A blog</button>
    <button class = "mx-5 my-5 editbtn" >Edit a blog</button>
    <button class = "mx-5 my-5 deletebtn" >Delete a blog</button>
    <button class = "mx-5 my-5" ><a href="index.php">Go Back</a></button>

    </div>
    <div class="container d-none add">
        <h1 class="my-5">Add a Blog</h1>
        <form action="includes/admin.inc.php" method="POST">
        <div class="mb-3 mt-5 ml-5">
                <label for="title" class="form-label">blogid</label>
                <input type="text" class="form-control" id="blogid" name="blogid" aria-describedby="emailHelp" />
                <div id="titlee" class="form-text">
                    Write down the blogid as written in the text file 
                </div>
            </div>
            <div class="mb-3 mt-5 ml-5">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp" />
                <div id="titlee" class="form-text">
                    Add a suitable title
                </div>
            </div>
            <div class="mb-3 mt-5 ml-5">
                <label for="Desc" class="form-label">Description</label>
                <input type="text" class="form-control" name="Desc" id="form" aria-describedby="emailHelp" />
                <div id="Desc" class="form-text">
                    Add a short description of the interview
                </div>
            </div>
            <div class="mb-3 mt-5 ml-5">
                <label for="Interviewer" class="form-label">Interviewer</label>
                <input type="text" class="form-control" name="Interviewer" id="form" aria-describedby="emailHelp" />
                <div id="Interviewerr" class="form-text">Name of the interviewer</div>
            </div>
            <div class="mb-3 mt-5 ml-5">
                <label for="Interviewee" class="form-label">Interviewee</label>
                <input type="text" class="form-control" name="Interviewee" id="form" aria-describedby="emailHelp" />
                <div id="Intervieweee" class="form-text">Name of the interviewee</div>
            </div>
            <div class="mb-3 mt-5 ml-5">
                <label for="placeNintern" class="form-label">Placement/Internship</label
          >
          <input
            type="text"
            class="form-control"
            name="placeNintern"
            id="form"
            aria-describedby="emailHelp"
          />
          <div id="placeNinternn" class="form-text">
            Write either PLACEMENT or INTERNSHIP
          </div>
        </div>
        <div class="mb-3 mt-5 ml-5">
          <label for="company" class="form-label"
            >Company</label
          >
          <input
            type="text"
            class="form-control"
            name="company"
            id="company"
            aria-describedby="emailHelp"
          />
          <div id="companyy" class="form-text">
            Write the name of the firm or the company.
          </div>
        </div>
        <div class="mb-3 mt-5 ml-5">
          <label for="Department" class="form-label">Department</label>
                <input type="text" class="form-control" name="Department" id="form" aria-describedby="emailHelp" />
                <div id="Departmentt" class="form-text">
                    Write the Department as it would appear in one's Roll No. (Ex AE,BT,GG,EX etc.)
                </div>
            </div>

            <div class="mb-3 mt-5 ml-5">
                <label for="Series" class="form-label">Series</label>
                <input type="text" class="form-control" name="Series" id="form" aria-describedby="emailHelp" />
                <div id="Series" class="form-text">
                    Choose one from CORE_COMBAT, PRODUCT, FMCG_LUMINARIES, FINFORTE, CONSULTALKS, ML
                </div>
            </div>
            <div class="mb-3 mt-5 ml-5">
                <label for="pic" class="form-label">Photo</label>
                <input type="text" class="form-control" name="pic" id="pic" aria-describedby="emailHelp" />
                <div id="picc" class="form-text">Post the link to the photo as desired</div>
            </div>
            <div class="mb-3 mt-5 ml-5">
                <label for="linkedin" class="form-label">LinkedIn</label>
                <input type="text" class="form-control" name="linkedin" id="linkedin" aria-describedby="emailHelp" />
                <div id="linkedinn" class="form-text">Post the Link to the LinkedIn Profile</div>
            </div>
            <div class="mb-3 mt-5 ml-5">
                <label for="fb" class="form-label">Facebook</label>
                <input type="text" class="form-control" name="fb" id="fb" aria-describedby="emailHelp" />
                <div id="fbb" class="form-text">Post the Link to the Facebook Profile</div>
            </div>
            <div class="mb-3 mt-5 ml-5">
                <label for="ig" class="form-label">Instagram</label>
                <input type="text" class="form-control" name="ig" id="ig" aria-describedby="emailHelp" />
                <div id="igg" class="form-text">Post the Link to the Instagram Profile</div>
            </div>
            <div class="mb-3 mt-5 ml-5">
                <label for="QuestionNo" class="form-label">No. Of Questions asked</label
          >
          <input
            type="Number"
            class="form-control"
            name="QuestionNo"
            id="QuestionNo"
            aria-describedby="emailHelp"
          />
          <div id="QuestionNoo." class="form-text">
            Write the number of total Questions 
          </div>
          <button class="btn btn-primary my-5 QAdd">Add Questions</button>
        </div>
        
    <div class="container my-5 p-5" id="question-list"></div>
    <button class="btn btn-primary" type="submit" name="submit" >Submit to Database</button>
</div>

</form>

<div class="container d-none edit">
        
        <form action="edit.php" method="POST">
        <div class="mb-3 mt-5 ml-5">
                <label for="title" class="form-label">blogid</label>
                <input type="text" class="form-control" id="blogid" name="blogid" aria-describedby="emailHelp" />
                <div id="titlee" class="form-text">
                    Write down the blogid of the blog you want to edit. 
                </div>
            </div>
            <button>Get the blog</button>
        </form>   
</div> 

<div class="container d-none delete">
        
        <form action="delete.php" method="POST">
        <div class="mb-3 mt-5 ml-5">
                <label for="title" class="form-label">blogid</label>
                <input type="text" class="form-control" id="blogid" name="blogid" aria-describedby="emailHelp" />
                <div id="titlee" class="form-text">
                    Write down the blogid of the blog you want to delete. 
                </div>
            </div>
            <button>Delete the blog</button>
        </form>   
</div> 
        

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script type="text/javascript" src="admin.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->

    <?php
            if ( isset($_GET["error"]) ) 
            {
                if ( $_GET["error"]=="emptyinput" ) {
                    echo "<p>You forgot to fill all fields</p>";
                }
                elseif ($_GET["error"]=="none") {
                  echo "<p>Please 'sign in' to visit the profile page</p>";
              }

            }
    ?>
  </body>
</html>