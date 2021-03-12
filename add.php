<?php require_once("dbcon.php");
$sql ="INSERT INTO movies (movie_id, movie_time, movie_name) 
VALUES('{$_POST['movie_id']}','{$_POST['movie_time']}','{$_POST['movie_name']}')";
if ($conn->query($sql) === TRUE) {
        sleep(1);
        header("location:index.php");

    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
 
    $conn->close();

?>