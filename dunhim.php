<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Dun Him of the Week</title>
    <link rel="shortcut icon" href = "http://i.imgur.com/dJrYdE4.png">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" type="text/css" href="eric-meyer-reset.css">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web:300,400" rel="stylesheet">
  </head>
  <body>
    <div class="nav">
      <a href="index.php">Quotes</a>
      <a href="dunhim.php" style="background-color: #6A637F;">Dun Him of the Week</a>
    </div>
    <table class="quotes">
      <tr class="heading">
        <th class="columnId">ID</th>
        <th class="columnName">Date</th>
        <th class="columnQuote">Dun Him</th>
      </tr>
    <?php
      include('credentials.php');
      $query = mysqli_query($con, "SELECT * FROM tb_dunhim");

      while ($row = mysqli_fetch_array($query)) {
        $id = $row['id'];
        $name = $row['date'];
        $quote = $row['dunhim'];

        echo "<tr class='quote'><td class='rowId'>" . $id . "</td><td class='rowName'style='text-align: center';>" . $name . "</td><td class='rowQuote'>" . $quote . '</td></tr>';
      }
    ?>
    </table>
  </body>
</html>
