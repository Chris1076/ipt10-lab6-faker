<?php
require 'FileUtility.php';

$file = fopen("persons.csv","r");
$data = [];
    while (!feof($file)) {

        $row = fgetcsv($file, 1024);
        if (!empty($row)) {
                array_push($data, $row);
            }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IPT10 Lab 6 Faker</title>
</head>
<body>
    <h3>IPT10 Lab 6 faker</h3>
    <table>
    <thead>
        <tr>
            <th><?php echo $data[0][0];?></th>
            <th><?php echo $data[0][1];?></th>
            <th><?php echo $data[0][2];?></th>
            <th><?php echo $data[0][3];?></th>
            <th><?php echo $data[0][4];?></th>
            <th><?php echo $data[0][5];?></th>
            <th><?php echo $data[0][6];?></th>
            <th><?php echo $data[0][7];?></th>
            <th><?php echo $data[0][8];?></th>
            <th><?php echo $data[0][9];?></th>
            <th><?php echo $data[0][10];?></th>
            <th><?php echo $data[0][11];?></th>
            <th><?php echo $data[0][12];?></th>
            <th><?php echo $data[0][13];?></th>
            <th><?php echo $data[0][14];?></th>
            <th><?php echo $data[0][15];?></th>
            <th><?php echo $data[0][16];?></th>
            <th><?php echo $data[0][17];?></th>
        </tr>
    </thead>
    <tbody>
        <?php
        for($i = 1;$i<count($data);$i++): ?>
         <tr>
            <td><?php echo $data[$i][0];?></td>
            <td><?php echo $data[$i][1];?></td>
            <td><?php echo $data[$i][2];?></td>
            <td><?php echo $data[$i][3];?></td>
            <td><?php echo $data[$i][4];?></td>
            <td><?php echo $data[$i][5];?></td>
            <td><?php echo $data[$i][6];?></td>
            <td><?php echo $data[$i][7];?></td>
            <td><?php echo $data[$i][8];?></td>
            <td><?php echo $data[$i][9];?></td>
            <td><?php echo $data[$i][10];?></td>
            <td><?php echo $data[$i][11];?></td>
            <td><?php echo $data[$i][12];?></td>
            <td><?php echo $data[$i][13];?></td>
            <td><?php echo $data[$i][14];?></td>
            <td><?php echo $data[$i][15];?></td>
            <td><?php echo $data[$i][16];?></td>
            <td><?php echo $data[$i][17];?></td>
            </tr>;
        <?php endfor;
        ?>
    </tbody>
    </table>
</body>
</html>