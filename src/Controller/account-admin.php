<?php
try{
    $connection = Service\DBConnector::getConnection();
} catch (\PDOException $exception) {
    http_response_code(500);
    echo 'Impossible to connect to the DB, contact the support';
    exit(10);
}
if(!isset($_SESSION['email']) || empty($_SESSION['email'])){
  header("location: /index.php/login");
  exit;
}
?>
  <div class="page-header">
      <h4>Hi, <b><?php echo htmlspecialchars($_SESSION['email']); ?></b></br>. Welcome to the admin account page</h4>
  </div>
 	<p><a href="/index.php/logout" class="btn btn-danger">Logout</a>

 	<hr/>

  <div>
  <?php
  $sql = 'SELECT * FROM user order by modified_time asc';

  $statement = $connection->prepare($sql);
  $statement->execute();
  $resultall = $statement->fetchall();
  foreach ($resultall as $row){
    $userid=$row['id'];
    ?>
    <div class="usercontainer">
      <p class="control-label">First Name:
      <?php echo $row['firstname']; ?>
      </p>
      <p class="control-label">Last Name:
      <?php echo $row['lastname']; ?>
      </p>
      <p class="control-label">E-Mail Address:
      <?php echo $row['email']; ?>
      </p>
      <p class="control-label">Modifed Date:
      <?php echo $row['modified_time']; ?>
      </p>
      <div class="moviebuttons">
        <?php
        echo '<a class="btn btn-info" href="/index.php/read?id='.$userid.'">Read more...</a>';
        echo '<a class="btn btn-success" href="/index.php/update?id='.$userid.'">Add points...</a>';
          ?>
      </div>
    </div>
  <?php
  }
  ?>
  </div>
