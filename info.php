<?php
if (isset($_POST['username']) && $_POST['username'] === 'abc') {
  echo 'Verified';
} else {
  echo 'Error';
}
?>
