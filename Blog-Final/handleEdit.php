<?php
include 'dbconnect.php';
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $id = $_GET['blogid'];
    $title = $_POST['title'];
    $Desc = $_POST['Desc'];
    $Interviewer = $_POST['Interviewer'];
    $Interviewee = $_POST['Interviewee'];
    $placeNintern = $_POST['placeNintern'];
    $company = $_POST['company'];
    $Department = $_POST['Department'];
    $Series = $_POST['Series'];
    $pic = $_POST['pic'];
    $linkedIn = $_POST['linkedin'];
    $fb = $_POST['fb'];
    $ig= $_POST['ig'];
    $QS = $_POST['QS'];
    $Q = $_POST['Q'];
    $A = $_POST['A'];
    $k=1;

    $noquesiton = count($QS);

    $sql = "DELETE FROM `bloglist` WHERE blogid =".$id;
    mysqli_query($conn,$sql);
    $sql2="INSERT INTO `bloglist` (`blogid`, `Interviewer`, `Interviewee`, `Title`, `Department`, `Series`, `placeNintern`, `Descript`, `Company`, `FacebookLink`, `linkedInLink`, `instaLink`, `photo`) VALUES ('$id', '$Interviewer', '$Interviewee', '$title', '$Department', '$Series', '$placeNintern', '$Desc', '$company', '$fb', '$linkedIn', '$ig', '$pic');";
    mysqli_query($conn,$sql2);
    $sql3 = "DELETE FROM `conversation` WHERE blogid =".$id;
    mysqli_query($conn,$sql3);
    for(;$k<=$noquesiton;$k++)
    {
        
        $sql4="INSERT INTO `conversation` (`blogid`, `QSummary`, `Question`, `Answer`) VALUES ('$id', '$QS[$k]', '$Q[$k]', '$A[$k]');";
        mysqli_query($conn,$sql4);
    }
    echo '<a href="admin.php">Go Back</a>';


}

?>