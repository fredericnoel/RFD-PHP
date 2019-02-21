<?php
$_SESSION['login'] = 0;
session_destroy();
echo "<script>document.location.href='http://localhost/RFD-PHP1/'</script>";
