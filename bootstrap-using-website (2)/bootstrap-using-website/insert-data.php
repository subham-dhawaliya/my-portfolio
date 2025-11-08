<?php

include("config.php");
if(isset($_POST['submit'])){

    $name = $_POST["name"];
    $email = $_POST["email"];
    $course = $_POST["course"];
    $batch = $_POST["batch"];
    $phone_no = $_POST["phone_no"];

    $sql = "INSERT INTO employees (name,email,course,batch,phone_no) VALUES ('$name','$email','$course','$batch',$phone_no)";
    $results = mysqli_query($conn,$sql);
   if ($results) {
    echo "<script>
        alert('Data Insert Successfully');
        window.location.href = 'home.html';
    </script>";
} else {
    echo "User data not inserted";
}

}
?>