<h2>แก้ไข</h2>
<?php 
    require_once("dbcon.php");
    $sql = "SELECT * FROM movies WHERE movie_id = '{$_GET['id']}'";
    $result = $conn->query($sql);
    if($result->num_rows > 0) {
        $r = $result->fetch_assoc();
    }
?>
 
<form action="edit.php" method="post">
<table cellspacing="0" cellpadding="5" border="1">
 
<label for="movie_id">รหัสภาพยนตร์ : </label>
    <?php echo $r['movie_id']; ?>
    <input type="hidden" name="movie_id" id="movie_id" value="<?php echo $r['movie_id'] ?>">
    <tr>
    <tr>
    <td>ชื่อภาพยนตร์</td>
    <td><input type="text" name="movie_id"id="movie_id" value="<?php echo $r['movie_id']; ?>"> </td>
    </tr>
    <td>เวลาที่ฉาย</td>
    <td><input type="date" name="movie_time"id="movie_time" value="<?php echo $r['movie_time']; ?>"> </td>
    </tr>
    
    <tr>
    <td></td>
    <td><button type="submit">??????</button></td>
    </tr>
</form>
