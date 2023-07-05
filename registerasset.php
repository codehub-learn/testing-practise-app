<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Asset Registration Form</title>
</head>
<body>
  <h2>Asset Registration Form</h2>

<?php
  $assetname = $_POST['name'];
  $assettype = $_POST['assetype'];
  $assetdescription = $_POST['description'];

  $dbc = mysqli_connect('localhost', 'root', '', 'qa_db')
    or die('Error connecting to MySQL server.');

  $query = "INSERT INTO assets (assetname, assettype, assetdescription) " .
    "VALUES ('$assetname', '$assettype', '$assetdescription')";

  $result = mysqli_query($dbc, $query)
    or die('Error querying database.');

  mysqli_close($dbc);

 
  echo 'Asset Name : ' . $assetname;
  echo ' Asset Type :  ' . $assettype . '<br />';
  echo 'Asset Description : ' . $assetdescription . '<br />';
  echo 'Your Asset is registered.<br />';
?>

</body>
</html>
