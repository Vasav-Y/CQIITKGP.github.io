<?php

include 'dbconnect.php';

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
<div class="container">
            <?php
                
 
                $sql = "SELECT * FROM `bloglist`";
                $result = mysqli_query($conn,$sql);
                $id;
                if($_SERVER['REQUEST_METHOD'] == "POST")
                {

                    global $id;
                    $id=$_POST['blogid'];
                }
                while($row = mysqli_fetch_assoc($result))
                {

                    if($row['blogid'] == $id)
                    {
                        $id = $_POST['blogid'];
                        $title = $row['Title'];
                        $description = $row['Descript'];
                        $interviewer = $row['Interviewer'];
                        $interviewee = $row['Interviewee'];
                        $placeNintern = $row['placeNintern'];
                        $company = $row['Company'];
                        $department = $row['Department'];
                        $series = $row['Series'];
                        $fblink = $row['FacebookLink'];
                        $linkedinlink = $row['linkedInLink'];
                        $iglink = $row['instaLink'];
                        $plink = $row['photo'];

                        echo '<form action = "handleEdit.php?blogid='.$id.'" method = "POST">
                        <div class="mb-3 mt-5 ml-5 ">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" id="title" name="title" value = "'.$title.'" />

                        </div>
                        <div class="mb-3 mt-5 ml-5">
                            <label for="Desc" class="form-label">Description</label>
                            <input type="text" class="form-control" name="Desc" value = "'.$description.'" id="form" aria-describedby="emailHelp" />

                        </div>
                        <div class="mb-3 mt-5 ml-5">
                            <label for="Interviewer" class="form-label">Interviewer</label>
                            <input type="text" class="form-control" name="Interviewer" value = "'.$interviewer.'" id="form" aria-describedby="emailHelp" />
                        </div>
                        <div class="mb-3 mt-5 ml-5">
                            <label for="Interviewee" class="form-label">Interviewee</label>
                            <input type="text" class="form-control" name="Interviewee" value = "'.$interviewee.'" id="form" aria-describedby="emailHelp" />
                        </div>
                        <div class="mb-3 mt-5 ml-5">
                            <label for="placeNintern" class="form-label">Placement/Internship</label>
                            <input
                                type="text"
                                class="form-control"
                                name="placeNintern"
                                value = "'.$placeNintern.'"
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
                            value = "'.$company.'"
                            id="company"
                            aria-describedby="emailHelp"
                            />
                        </div>
                        <div class="mb-3 mt-5 ml-5">
                            <label for="Department" class="form-label">Department</label>
                            <input type="text" class="form-control" name="Department" value = "'.$department.'"  id="form" aria-describedby="emailHelp" />
                            <div id="Departmentt" class="form-text">
                                Write it as it would appear in the roll no. of the interviewer Ex: EC EE CS MA
                            </div>
                        </div>
            
                        <div class="mb-3 mt-5 ml-5">
                            <label for="Series" class="form-label">Series</label>
                            <input type="text" class="form-control" name="Series" value = "'.$series.'" id="form" aria-describedby="emailHelp" />
                            <div id="Series" class="form-text">
                                Choose one from CORE_COMBAT, PRODUCT, FMCG_LUMINARIES, FINFORTE, CONSULTALKS, ML
                            </div>
                        </div>
                        <div class="mb-3 mt-5 ml-5">
                            <label for="pic" class="form-label">Photo</label>
                            <input type="text" class="form-control" name="pic" value = "'.$plink.'" id="pic" aria-describedby="emailHelp" />
                            <div id="picc" class="form-text">Post the link to the photo as desired</div>
                        </div>
                        <div class="mb-3 mt-5 ml-5">
                            <label for="linkedin" class="form-label">LinkedIn</label>
                            <input type="text" class="form-control" name="linkedin" value = "'.$linkedinlink.'" id="linkedin" aria-describedby="emailHelp" />
                            <div id="linkedinn" class="form-text">Post the Link to the LinkedIn Profile</div>
                        </div>
                        <div class="mb-3 mt-5 ml-5">
                            <label for="fb" class="form-label">Facebook</label>
                            <input type="text" class="form-control" name="fb" value = "'.$fblink.'" id="fb" aria-describedby="emailHelp" />
                            <div id="fbb" class="form-text">Post the Link to the Facebook Profile</div>
                        </div>
                        <div class="mb-3 mt-5 ml-5">
                            <label for="ig" class="form-label">Instagram</label>
                            <input type="text" class="form-control" name="ig" value = "'.$iglink.'" id="ig" aria-describedby="emailHelp" />
                            <div id="igg" class="form-text">Post the Link to the Instagram Profile</div>
                        </div>        
                        <div class="container my-5 p-5" id="question-list">';
                        $sql2 = "SELECT * FROM `conversation`";
                        $result2 = mysqli_query($conn,$sql2);
                        $id;
                        $i = 0;
                        if($_SERVER['REQUEST_METHOD'] == "POST")
                        {
                            global $id;
                            $id=$_POST['blogid'];
                        }
                        while($row2 = mysqli_fetch_assoc($result2))
                        {
                           
                            
                            if($row2['blogid'] == $id)
                            {
                                global $i;
                                $i=$i+1;
                                $Qs = $row2['QSummary'];
                                $Q = $row2['Question'];
                                $A = $row2['Answer']; 
                                
                                echo '<div class="mb-3">
                                <label for="cat_title" class="form-label">Question Summary</label>
                                <input type="text" class="form-control" id="cat_title" name ="QS['.$i.']" value = "'.$Qs.'" aria-describedby="emailHelp">
                                <div id="emailHelp" class="form-text">Should be of atmost 5-6 words</div>
                            </div>
                            <div class="mb-3">
                              <label for="cat_title" class="form-label">Question</label>
                              <input type="text" class="form-control" id="cat_title" name ="Q['.$i.']" value = "'.$Q.'" aria-describedby="emailHelp">
                              <div id="emailHelp" class="form-text">Write the Question</div>
                            </div>
                            <div class="mb-3">
                                <label for="cat_desc" class="form-label">Answer</label>
                                <input type="text" class="form-control" id="cat_desc" name = "A['.$i.']" value = "'.$A.'" aria-describedby="emailHelp">
                                <div id="emailHelp" class="form-text">The answer given</div>
                            </div>';
                            }
                        }
                        
                        echo '</div>
                        
                        <div class="my-5"><button class="btn btn-primary" type="submit" name="submit" >Confirm Edit</button></div>
            
                </form>';  
                    }

                   
                }
                

            ?>
  
</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>