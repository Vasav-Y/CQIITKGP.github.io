<?php
function emptyInputSignup($interviewer,$interviewee,$title,$dept,$series,$placenintern,$desc,$company,$fb,$linkedin,$ig,$pic) {
    $results;
    if (empty($interviewer)||empty($interviewee)||empty($title)||empty($dept)||empty($series)||empty($placenintern)||empty($desc)||empty($company)||empty($pic)||empty($fb)||empty($ig)||empty($linkedin)) {
        $results=true;
    }
    else {
        $results=false;
    }
    return $results;
}

function emptyInputConvo($qsummary,$ques,$ans) {
    $results;
    if (empty($qsummary)||empty($ques)||empty($ans)) {
        $results=true;
    }
    else {
        $results=false;
    }
    return $results;
}

