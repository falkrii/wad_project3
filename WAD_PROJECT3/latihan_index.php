<?php
$conn = mysqli_connect("localhost","root","","WAD_PROJECT3");
$result = mysqli_query($conn," SELECT * FROM students");


?>

<!DOCTYPE html>
<body>  
    <table>
    <tr>
        <th>Id</th>
      <th>Name</th>
      <th>NIM</th>
      <th>Alamat</th>
    </tr>

    <?php while( $data = mysqli_fetch_object($result)) { ?>
    <tr>
        <td><?php echo $data->id?></td>
      <td><?php echo $data->name?></td>
      <td><?php echo $data->nim?></td>
      <td><?php echo $data->address?></td>
    </tr>
    <?php 
    }
    ?>
    </table>
</body>
<style>
    table, th, td {
      border: 1px solid black;
      border-collapse: collapse;
    }
</style>

