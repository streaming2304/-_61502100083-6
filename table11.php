<?php require_once("dbcon.php");?>
<table style="width:100%" border="1">
  <tr>
    <th>รหัสภาพยนตร์</th>
    <th>ชื่อภาพยนตร์</th>
    <th>เวลาที่ฉาย</th>
    <th>ชื่อผู้ใช้งาน</th>
    <th>pin</th>
  </tr>
  <?php
$sql = "SELECT * FROM movies";

$result = $conn ->query($sql);

while($row = $result->fetch_assoc()) {
 ?>
<tr>
  <td><?php echo $row['movie_id'];?></td>
  <td><?php echo $row['movie_name'];?></td>
  <td><?php echo $row['movie_time'];?></td>
  <td><?php echo $row['movie_user'];?></td>
  <td><?php echo $row['pin'];?></td>
  <td>
  

</tr>

<?php } ?>
</table>