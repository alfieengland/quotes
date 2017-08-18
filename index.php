<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>The Quotes</title>
    <link rel="shortcut icon" href = "http://i.imgur.com/dJrYdE4.png">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" type="text/css" href="eric-meyer-reset.css">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web:300,400" rel="stylesheet">
  </head>
  <body>
    <div class="nav">
      <a href="index.php" style="background-color: #6A637F;">Quotes</a>
      <a href="dunhim.php">Dun Him of the Week</a>
    </div>
    <table class="quotes">
      <tr class="heading">
        <th class="columnId">ID</th>
        <th class="columnName">Name</th>
        <th class="columnQuote">Quote</th>
      </tr>
    <?php
      include('credentials.php');
      $query = mysqli_query($con, "SELECT * FROM tb_quotes");

      while ($row = mysqli_fetch_array($query)) {
        $id = $row['id'];
        $name = $row['name'];
        $quote = $row['quote'];

        echo "<tr class='quote'><td class='rowId'>" . $id . "</td><td class='rowName'>" . $name . "</td><td class='rowQuote'>" . $quote . '</td></tr>';
      }
    ?>
    </table>
  </body>
</html>
