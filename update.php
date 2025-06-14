<?php
$keyword  = $_REQUEST['keyword'];
require('connect.php');

// Modify SQL to check both EmployeeID and EmployeeName
$sql = "
  SELECT * 
  FROM volleyball.team 
  WHERE Team_name LIKE '%" . $keyword . "%'
  OR Team_id LIKE '%" . $keyword . "%';
  ";

$objQuery = mysqli_query($conn, $sql) or die("Error Query [" . $sql . "]");
?>
<table border="1">
  <tr>
    <th width="50">
      <div align="center">Team_id</div>
    </th>
    <th width="100">
      <div align="center">Team_name</div>
    </th>
    <th width="100">
      <div align="center">Coach</div>
    </th>
    <th width="100">
      <div align="center">Home_city</div>
    </th>
   
  </tr>
  <?php
  $i = 1;
  while ($objResult = mysqli_fetch_array($objQuery)) {
  ?>
    <tr>
      <td>
        <div align="center"><?php echo $i; ?></div>
      </td>
      <td><?php echo $objResult["Team_id"]; ?></td>
      <td><?php echo $objResult["Team-name"]; ?></td>
      <td><?php echo $objResult["Coach"]; ?></td>
      <td><?php echo $objResult["Home_city"]; ?></td>
      <td align="center"><a href="deletedata.php?Team_id=<?php echo $objResult["Team_id"]; ?>">Delete</a></td>
      <td align="center"><a href="update.php?Team_id=<?php echo $objResult["Team_id"]; ?>">Update</a></td>
    </tr>
  <?php
    $i++;
  }
  ?>
</table>
<?php
mysqli_close($conn); // ปิดฐานข้อมูล
echo "<br><br>";
echo "--- END ---";
?>
