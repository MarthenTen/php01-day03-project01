<?php
include('index-02-variabels.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title><?php echo $title; ?></title>
</head>

<body>
    <p> <?php echo $tag_line; ?></p>

    <!--data gunakan paragraf-->
    <p><?php echo $siswa1;?><p>
    <p><?php echo $siswa2;?></p>
    <p><?php echo $siswa2;?></p>

<!--data gunakan list-->
    <ul>
      <li><?php echo $siswa1;?></li>
      <li><?php echo $siswa2;?></li>
      <li><?php echo $siswa2;?></li>
    </ul>

    <!--data gunakan Table-->
    <table>
      <thead>

        <tr>
          <th>NO</th>
          <th>Nama</th>
        </tr>

      </thead>
      <tbody>

        <tr>
          <td>1</td>
          <td><?php echo $siswa1;?></td>
        </tr>

        <tr>
          <td>2</td>
          <td><?php echo $siswa2;?></td>
        </tr>

        <tr>
          <td>3</td>
          <td><?php echo $siswa3;?></td>
        </tr>

      </tbody>
    </table>
</body>

</html>
