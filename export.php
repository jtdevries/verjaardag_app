<?PHP

  require('config/config.php');
  require('config/db.php');
  $setSql = "SELECT username, personalmessage FROM Songs";
  $setRec = mysqli_query($conn, $setSql);

  $columnHeader = '';
  $columnHeader = "username"."\t"."personalmessage";

  $setData = '';

  while ($rec = mysqli_fetch_row($setRec)) {
      $rowData = '';
      foreach ($rec as $value) {
          $value = '"' . $value . '"' . "\t";
          $rowData .= $value;
      }
      $setData .= trim($rowData) . "\n";
  }


  header("Content-type: application/octet-stream");
  //FILE NAME
  header("Content-Disposition: attachment; filename=Personal_messages.xls");
  header("Pragma: no-cache");
  header("Expires: 0");

  echo ucwords($columnHeader) . "\n" . $setData . "\n";
