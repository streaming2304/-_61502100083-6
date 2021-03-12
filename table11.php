<?php require_once("dbcon.php");
if(isset($_GET['id'])){
    $result = $conn-> query("DELETE FROM movies WHERE movie_id=".$_GET['id']);
    if($result){
        header("Location table11.php");
    }else{
        echo"?????????????????";
    }
  }

?>
<form action="." method="get">
<input type="text" name="search" id="search" placehotlder="ค้นหา">
<button type="submit" name="click">ค้นหา</button>
</form>
<button onclick="window.location='form_add.php';">เพิ่มข้อมูล</button>
<table style="width:100%" border="1">
  <tr>
    <th>รหัสภาพยนตร์</th>
    <th>ชื่อภาพยนตร์</th>
    <th>เวลาที่ฉาย</th>
    <th>ชื่อผู้ใช้งาน</th>
    <th>pin</th>
    <th>จัดการ</th>
  </tr>
  <?php
$sql = "SELECT * FROM movies";
if(isset($_GET['click'])){
    $sql="SELECT * FROM movies WHERE movie_name LIKE'%{$_GET['search']}%' ";
}

$result = $conn ->query($sql);

 while($row = $result->fetch_assoc()) {
  ?>
<tr>
  <td><?php echo $row['movie_id'];?></td>
  <td><?php echo $row['movie_name'];?></td>
  <td><?php echo $row['movie_time'];?></td>
  <td><?php echo $row['movie_user'];?></td>
  <td><?php echo $row['pin'];?></td>
  <td><a href="form_edit.php?id=<?php echo $row['movie_id'];?>">แก้ไข</a></td>
  <td><a href="?delete=1&id=<?php echo $row['movie_id'];?>">ลบ</a></td>
  

</tr>

<?php } ?>
</table>