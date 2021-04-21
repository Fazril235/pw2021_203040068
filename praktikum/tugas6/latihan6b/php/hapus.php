<?php 
require 'functions.php'; 
$id = $_GET["id"];

if (hapus ($id) > 0 ) {
    echo "<script>
    alert('Data Successfully delete!');
    document.location.href = 'admin.php' ;
  </script>";
} else {
echo "<script>
     alert('Data Failed to be delete!');
     document.location.href = 'admin.php' ;
  </script>";
}

?>