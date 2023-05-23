<?php
include_once __DIR__ . '/../../db/products.php';
?>

<main>


  <div class="container">
    <div class="row">

      <?php  foreach ($products as $product): ?>
      <div class="col mb-4">
        <div class="card" style="width: 18rem;">
        <div class="pm-card-img">
          <img src="<?php echo 'images/' . $product->getImg() ?>" class="card-img-top" alt="<?php echo  $product->getName() ?>">
        </div>
          <div class="card-body">
            <h5 class="card-title"><?php echo  $product->getName() ?></h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
      <?php  endforeach; ?>

    </div>
  </div>

</main>