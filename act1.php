<?php
    $bday="12/13/2000";
    echo "Your birthday is: ".$bday;
    $day=intval(substr($bday,4,1));
    $dob=substr($bday,3,2);
    echo "<br>";
    if ($day%2==0) {
        echo "$dob is Even";
    }else{
        echo "$dob is Odd";
    }
?>