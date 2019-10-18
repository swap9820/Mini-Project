<?php
$conn= mysqli_connect("localhost","root","");
$db = mysqli_select_db($conn,'loginsystem');
$sql = "SELECT `name`,`email`,`event`,`category`,`desc`,`date`,`from`,`to`,`venue`,`price`,`image` FROM organise";
$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));

while( $record = mysqli_fetch_assoc($resultset) ) {
?>
<section>
<div class="container pt-5">
<div class="row card-deck">
    <div class="col-lg-4 col-md-4 col-12">
        <div class="card text-center" >
        <img class="card-img-top" src="uploads/'.$row['image'].'"  alt="Card image cap" style="height:12rem;">
        <div class="card-body">
          <h3 class="card-title"><?php echo $record['event']; ?></h3>
          
          <p class="card-text"><?php echo $record['desc']; ?></p><hr>
          <div class="desc">DATE:<?php echo $record['date']; ?></div><hr>
          <div class="desc">VENUE:<?php echo $record['venue']; ?></div><hr>
          <div class="desc">FROM:<?php echo $record['from']; ?></div>
          <div class="desc">TO:<?php echo $record['to']; ?></div><hr>
          <div class="desc">PRICE:<?php echo $record['price']; ?></div><hr>
          <div class="desc">For Further Details Contact:<?php echo $record['email']; ?></div>
          <a href="workshop.php" class="btn btn-primary stretched-link">BUY TICKETS</a>
        </div>
      </div>
    </div>
</div>
</section>
<?php }
?>