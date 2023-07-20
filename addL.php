<?php 
$conn = mysqli_connect ("localhost", "root","","nouratask1");



if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


echo"TURN LEFT";
$sql = 'CREATE.NEW.RECORED';
if (mysqli_query($conn, $sql)) {
  echo "Recored created successfully";
} else {
  echo "Error creating recored: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
