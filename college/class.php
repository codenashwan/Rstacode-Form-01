<?php require_once('includes/nav.php');?>
  <div class="row justify-content-center">
    <?php
$class = x($_GET['id']);
if(empty($class)){
    header("Location:index.php");
}else{
$query = mysqli_query($db , "SELECT * FROM `user` WHERE `class` = '$class' ORDER BY `id` DESC ");
while($row = mysqli_fetch_assoc($query)){?>
    <div class="card bg-white m-2 radius-20 p-1 text-center" style="width: 18rem;">
      <img src="assets/img/card.svg" width="150" class="m-auto">
      <div class="card-body">
        <h5 class="card-title"><?php echo x($row['nameku']);?></h5>
        <h5 class="card-title"><?php echo x($row['nameen']);?></h5>
      </div>
    </div>
    <?php } } ?>
  </div>
<a href="view.php" class="btn btn-white btn-lg w-100 mt-2">بگەڕێوە</a>
</div>



<?php require_once('includes/footer.php');?>