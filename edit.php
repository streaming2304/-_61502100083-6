<h1>  <a href="table11.php">Home</a> </h1>
<?php 
    require_once("dbcon.php");
    $sql = "UPDATE movies SET
    movie_name = '{$_POST['movie_name']}',
    movie_time = '{$_POST['movie_time']}',
    WHERE movie_id = '{$_POST['movie_id']}' ";
 
    if ($conn->query($sql) === TRUE) {
        sleep(1);
        header("location:index.php");

    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
 
    $conn->close();
?>