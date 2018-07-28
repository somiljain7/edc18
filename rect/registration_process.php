<?php


@$name = $_POST['name'];
@$branch = $_POST['branch'];
@$c_no = $_POST['c_no'];
@$w_no = $_POST['w_no'];
@$email = $_POST['email'];
@$domain = $_POST['domain'];
@$events = $_POST['domain1']." ".$_POST['domain2']." ".$_POST['domain3']." ".$_POST['domain4']." ".$_POST['domain5']." ".$_POST['domain5'];
@$ques1 = $_POST['ques1'];
@$ques2 = $_POST['ques2'];
@$ques3 = $_POST['ques3'];
@$ques4 = $_POST['ques4'];
date_default_timezone_set('Asia/Kolkata');
$date=date("Y-m-d");
$time=date("H:i:sa");

if(isset($_POST['submit'])){
    $query = "INSERT INTO recruit( name, branch, c_no, w_no, email, domain, ques1,  ques2, ques3, ques4) VALUES ('$name', '$branch', '$c_no', '$w_no', '$email', '$domain','$events', '$ques1','$ques2', '$ques3', '$ques4')";
    // echo $query;
    if ($conn->query($query) === TRUE)
    {
        echo "New record created successfully";
        header("Location: registration_successful.html");
    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
    }
}


$conn->close();
?>
