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
    $date = $_POST['Date'];
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

    // $sql = "DELETE FROM `bloglist` WHERE blogid =".$id;
    // mysqli_query($conn,$sql);
    $sql2="UPDATE `bloglist` SET `Interviewer` = '".$Interviewer."', `Interviewee` = '".$Interviewee."', `Title` = '".$title."', `Department` = '".$Department."', `Series` = '".$Series."', `placeNintern` = '".$placeNintern."', `Date` = '".$date."', `Descript` = '".$Desc."', `Company` = '".$company."', `FacebookLink` = '".$fb."', `linkedInLink` = '".$linkedIn."', `photo` = '".$pic."' WHERE `blogid` = '".$id."';";
    mysqli_query($conn,$sql2);
    
    $sql3 = "DELETE FROM `conversation` WHERE blogid =".$id.";";
    mysqli_query($conn,$sql3);
    for(;$k<=$noquesiton;$k++)
    {
        
        $sql4 = "INSERT INTO `conversation` (`blogid`, `QSummary`, `Question`, `Answer`) VALUES ('$id', '$QS[$k]', '$Q[$k]', '$A[$k]');";
        mysqli_query($conn,$sql4);
    }
    echo '<a href="admin.php">Go Back</a>';
    // echo $id;

}

?>