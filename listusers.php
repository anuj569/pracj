<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>HTML Table</h2>

<table>
  <tr>
    <th>Company</th>
    <th>Contact</th>
    <th>Country</th>
  </tr>
  <?php
    for($i=1;$i<=100000;$i++) {
        $i2 = $i * 10;
        $i3 = $i * 100;
  ?>
  <tr>
    <td><?php echo $i;?></td>
    <td><?php echo $i2;?></td>
    <td><?php echo $i3;?></td>
  </tr>
  <?php } ?>
</table>

</body>
</html>

