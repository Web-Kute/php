<?php include 'inc/header.php'; ?>

<?php
$sql = 'SELECT * FROM users';
$result = mysqli_query($mysqli, $sql);
$feedback = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

  <?php if (empty($feedback)): ?>
    <p class="lead mt-3">Aucun feedback</p>
  <?php endif; ?>
<div class="container">
  <?php foreach ($feedback as $item): ?>
    <div class="card my-3 w-75">
     <div class="card-body text-center">
       <?php echo $item['body']; ?>
       <div class="text-secondary mt-2">Par <?php echo $item[
         'name' ]; ?> le <?php echo date_format(
   date_create($item['date']),
   'g:ia \o\n l jS F Y'
 ); ?></div>
     </div>
   </div>
  <?php endforeach; ?>
</div>
<?php include 'inc/footer.php'; ?>