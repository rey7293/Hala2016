<?php
include "config.php";
if(isset($_GET['id'])){
$stmt = $conn->prepare("update vote set nm=?, gd=? where id=?");
$stmt->bind_param('sss', $nm, $gd, $id);

$nm = $_POST['nm'];
$gd = $_POST['gd'];
$id = $_GET['id'];

if($stmt->execute()){
?>
<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Success!</strong> Updated database.
</div>
<?php
} else{
?>
<div class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Error!</strong> Something went wrong!.
</div>
<?php
}
} else{
?> 
<div class="alert alert-warning alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Warning!</strong> Look for the error!
</div>
<?php
}
?>