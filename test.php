<?php
function exception_error_handler($errno, $errstr, $errfile, $errline ) {
  throw new ErrorException($errstr, $errno, 0, $errfile, $errline);
}
set_error_handler("exception_error_handler");


header('Content-type: text/html; charset=utf-8');


  try {
    include 'includes/db.php';
    $query = $srbn_con->query("SELECT * FROM users WHERE 1 ORDER BY b_date");
    $query->setFetchMode(PDO::FETCH_ASSOC);
    $blacklist = array(55);
    echo "<table border='1' width='100%'><tr><td>id</td><td>email</td><td>city</td><td>flogin</td><td>llogin</td><td>level</td><td>b_total</td><td>e_total</td></tr>";
    while ($row = $query->fetch()){
      $id = $row['id'];
      // if (in_array($id, $blacklist)) {
        // $del = $srbn_con->query("UPDATE users SET b_date=NULL WHERE id='$id'");
      // }
      echo "<tr><td>".$row['id']."</td><td>".$row['email']."</td><td>".$row['b_date']."</td><td>".$row['first_login']."</td><td>".$row['last_login']."</td><td>".$row['level']."</td><td>".$row['b_total']."</td><td>".$row['e_total']."</td></tr>";
    }
    echo "</table>";
  } catch (Exception $e) {
    echo $e-getMessage();
  }


?>
