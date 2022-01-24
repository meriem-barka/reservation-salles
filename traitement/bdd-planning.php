<?php
  $req = mysqli_query($bdd,"SELECT * FROM reservations WHERE WEEK(debut) = WEEK(NOW())");
  $res = mysqli_fetch_all($req, MYSQLI_ASSOC);
?>