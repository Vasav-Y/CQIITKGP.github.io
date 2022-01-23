<?php 
#table-blog
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id=$_POST["blogid"];
    $conn = mysqli_connect('localhost', 'root', '', 'blog');
    $interviewer=$_POST["Interviewer"];
    $interviewee=$_POST["Interviewee"];
    $title=$_POST["title"];
    $dept=$_POST["Department"];
    $series=$_POST["Series"];
    $placenintern=$_POST["placeNintern"];
    $desc=$_POST["Desc"];
    $company=$_POST["company"];
    $noquesiton = $_POST['QuestionNo'];
    echo $noquesiton;
    //var_dump($_POST['QS']);
    $QSummary = $_POST['QS'];
    $ques = $_POST['Q'];
    $ans = $_POST['A'];
    /*$qsummary=$_POST["QSummary"];
    $ques=$_POST["Ques"];
    $ans=$_POST["Answer"];*/
    $pic=$_POST["pic"];
    $linkedin=$_POST["linkedin"];
    $fb=$_POST["fb"];
    $ig=$_POST["ig"];

    $k=0;

    $sql="INSERT INTO `bloglist` (`blogid`, `Interviewer`, `Interviewee`, `Title`, `Department`, `Series`, `placeNintern`, `Descript`, `Company`, `FacebookLink`, `linkedInLink`, `instaLink`, `photo`) VALUES ('$id', '$interviewer', '$interviewee', '$title', '$dept', '$series', '$placenintern', '$desc', '$company', '$fb', '$linkedin', '$ig', '$pic');";
    for(;$k<$noquesiton;$k++)
    {
        $sql2="INSERT INTO `conversation` (`blogid`, `QSummary`, `Question`, `Answer`) VALUES ('$id', '$QSummary[$k]', '$ques[$k]', '$ans[$k]');";
        mysqli_query($conn,$sql2);
    }
    
mysqli_query($conn,$sql);
    
header("location: ../admin.php?error=none");
    
require_once 'functions.inc.php';

if (emptyInputSignup($interviewer,$interviewee,$title,$dept,$series,$placenintern,$desc,$company,$fb,$linkedin,$ig,$pic) !== false) {
        header("location: ../admin.php?error=emptyinput");
        exit();
}  
    if (emptyInputConvo($qsummary,$ques,$ans) !== false) {
        header("location: ../admin.php?error=emptyconvo");
        exit();
    }
    
    
}

else {
    header("location: ../admin.php");
}
?>