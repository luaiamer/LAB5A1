<!DOCTYPE html>
<html lang="en">
<head>
  <title>Lab 6 Q1</title>
</head>
<body>
  <?php
  $name = "LUAI ABDULLAH AHMED ALEZZI AMER";
  $matricNumber = "AI230203";
  $course = "Web Development";
  $yearOfStudy = "2ed";
  $address = "Taman U, Parit raje , Next to Bander Hadramut Restorant ";
  ?>
  <table>
    <tr>
      <td>Name: </td>
      <td><?php echo $name; ?></td>
    </tr>
    <tr>
      <td>Matric Number :</td>
      <td><?php echo $matricNumber; ?></td>
    </tr>
    <tr>
      <td>Course :</td>
      <td><?php echo $course; ?></td>
    </tr>
    <tr>
      <td>Year of Study :</td>
      <td><?php echo $yearOfStudy; ?></td>
    </tr>
    <tr>
      <td>Address :</td>
      <td><?php echo $address; ?></td>
    </tr>
  </table>
</body>
</html>