<?php
include 'dbconnect.php';

echo 
'<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style/gunjan.css">
    <link rel="stylesheet" type="text/css" href="secondpg1.css">
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/applause-button/dist/applause-button.css">
    <title>Our Blogs</title>
</head>

<body>
<section id="nav-bar">
<nav class="navbar fixed-top navbar-expand-lg navbar-light ">
    <a class="navbar-brand" href="#first-page"><img src="img/logo.jpg">Communiqué</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <!--ml-auto for right alignment -->

            <li class="nav-item active mx-auto">
                        <a class="nav-link" href="index.html">HOME</a>
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
                    <li class="nav-item mx-auto">
                        <a class="nav-link" href="blog.php">BLOG</a>
                    </li>
            <li class="nav-item mx-auto">

            </li>

        </ul>
        
    </div>


</nav>


</section>';
$sql = "SELECT * FROM `bloglist`";
$result = mysqli_query($conn, $sql);
while($row =  mysqli_fetch_assoc($result))
{
$idobtained=$_GET['blogid'];
$id = $row['blogid'];
if($id == $idobtained)
    {
        $title = $row['Title'];
        echo '<h1 class=" heading">'.$title.'</h1>';
    }
}
    echo '
    <div class="everything">
        <div class="loq">
            <button id="btton">Questions</button>
            <aside id="mainAside" class="Aside animation">
                <ul class="navbar-nav pl-3">';
                $no = 0;
                $nos=0;
                $idobtained=$_GET['blogid'];
                $sql = "SELECT * FROM `conversation`";
                $result = mysqli_query($conn, $sql);
                while($row =  mysqli_fetch_assoc($result))
                {
                $nos++;
                $id = $row['blogid'];
                if($id == $idobtained)
                    {
                        $SNo = $row['S.No'];
                        $QSummary = $row['QSummary'];
                        $Question = $row['Question'];
                        $Answer = $row['Answer'];
                        echo '<li class="links nav-item"><a class="nav-link"href="#inPageLink'.$nos.'"><span class="py-1" id="nl1"><details><summary class="summ">'.$QSummary.'</summary><p>'.$Question.'</p></details></span></a></li>';
                    }
                }
                echo '
                </ul>
            </aside>
        </div>

                
        <div class="text-center cntnt " id="cntnt">

            <div class="contactinfo">';
            $idobtained=$_GET['blogid'];
            $sql2 = "SELECT * FROM `bloglist`";
            $result2 = mysqli_query($conn, $sql2);
            while($row2 = mysqli_fetch_assoc($result2))
            {
               $id = $row2['blogid'];
               
                if($id == $idobtained)
                {
                    $interviewer = $row2['Interviewer'];
                    $fblink = $row2['FacebookLink'];
                    $instalink = $row2['instaLink'];
                    $linkdenlink = $row2['linkedInLink'];
                    $interviewee = $row2['Interviewee'];
                    $company = $row2['Company'];
                    $placeNintern = $row2['placeNintern'];
                    $series = $row2['Series'];
                    $id = $row2['blogid'];
                    $plink = $row2['photo'];
                    if($placeNintern == "PLACEMENT")
                    {
                        $placeNintern = "Placed";
                    }
                    else
                    {
                        $placeNintern = "Intern";
                    }
                    echo '<div style="width: 33.33%;" id="l1">'.$interviewee.'</div>
                    <div style="width: 33.33%;" id="l2">'.$placeNintern.' at '.$company.'</div>';
                    echo' 
                <div style="width: 33.33%;" class="linked" id="l3"><span><a href='.$fblink.'><i class="fab fa-facebook-square ico" id = "fbLink"></i></a></span>
                    <a href='.$linkdenlink.'><i class="fab fa-linkedin ico"></i></a> <a href='.$instalink.'><i class="fab fa-instagram ico"></i></a>
                </div>
            </div>';
            echo '
            <p class="lead m-0" style="text-align: end;"><i>Interviewed By: '.$interviewer.'</i> </p>
            <img src='.$plink.' class="intervieweeimg">
            <div class="conv">';
                }
               
            }
            $idobtained=$_GET['blogid'];
            $sql = "SELECT * FROM `conversation`";
            
            $result = mysqli_query($conn, $sql);
            
            while($row =  mysqli_fetch_assoc($result))
            {
            $no++;
            $id = $row['blogid'];
            if($id == $idobtained)
            {
                $SNo = $row['S.No'];
                $QSummary = $row['QSummary'];
                $Question = $row['Question'];
            
                $Answer = $row['Answer'];

                echo '<div class="qna allblur">
                <div class="q" id="inPageLink'.$no.'">';
                echo $Question.'
                </div><br>
                <div class="a pb-3" name = "a'.$no.'">';
                echo $Answer.'
                </div>
                <hr class="separator">
                </div>';
            }
            
            }

            
              
    if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
        $link = "https";
    else $link = "http";
        
    // Here append the common URL characters.
    $link .= "://";
        
    // Append the host(domain name, ip) to the URL.
    $link .= $_SERVER['HTTP_HOST'];
        
    // Append the requested resource location to the URL
    $link .= $_SERVER['REQUEST_URI'];
    $eqpos = strpos($link, "=");
    $part_link = substr($link, 0, $eqpos);
        
    echo'
    <div class="container-fluid " id="b1">
        <div class="row d-flex">
            <div class="col-12 c1">
                <a href="index.php"><button type="button" id="btton1" onclick="window.location="#"">
                    <i class="fas fa-arrow-left"></i>
                </button></a>
                <h6 class="btl">Back to list</h6>
            </div>
        </div>
    </div>
    </div>
            </div>
            <div class="rightside"> <button  class="rtbtn" id="btton2">Read Related Blogs</button>
            <div class="rflist slide-in-right" id="rlist" style="display: none;">
            <ul>';
            
    $sql3 = "SELECT Title, blogid FROM `bloglist` WHERE blogid <> '$idobtained' AND Series = '$series' ORDER BY blogid DESC";
    $count = 0;
    $res = mysqli_query($conn, $sql3);
    while($row = mysqli_fetch_assoc($res)){
        $blogid_s = "=".strval($row["blogid"]);
        $link_full = $part_link.$blogid_s;
        echo '<li class="read"><a class="readA" href='.$link_full.'>'.$row["Title"].'</a></li>';
        if ($count >= 8){
            $count = 0;
            break;
        }
        else
            $count = $count + 1;
    }
            
    echo        '</ul></div>
        </div>
    </div>
    <script type="text/javascript" src="https://unpkg.com/applause-button/dist/applause-button.js"></script>
    <script type="text/javascript" src="secondpg.js"></script>
    <script src="https://kit.fontawesome.com/c6d6973d4d.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
              
</body>

</html>'
            ?>
            

                
        
            

            
    






