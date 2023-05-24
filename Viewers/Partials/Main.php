<?php
include_once __DIR__ . '/../../db/products.php';
?>

<main>

  <h1 class="text-center mb-5">Products</h1>

  <div class="container">
    <div class="row">

      <?php  foreach ($products as $product): ?>
      <div class="col mb-4">
        <div class="card" style="width: 18rem;">
        <div class="pm-card-img">
          <img src="<?php echo 'images/' . $product->getImg() ?>" class="card-img-top" alt="<?php echo  $product->getName() ?>">
        </div>
          <div class="card-body">
            <h4 class="card-title"><?php echo  $product->getName() ?></h4>
            <p class="card-text"> <?php echo  $product->species->getSpecies() ?></p>
            <h3 class="card-text"><?php echo  $product->getPrice() ?></h3>

            <?php if(get_class($product) == 'Food'): ?>
              <p class="card-text"><?php echo  $product?->getWeight() ?></p>
              <p class="card-text"><?php echo  $product?->getIngredients() ?></p>
            <?php elseif(get_class($product) == 'Accessory'): ?>
              <p class="card-text"><?php echo  $product?->getMaterial() ?></p>
              <p class="card-text"><?php echo  $product?->getDimensions() ?></p>
            <?php elseif(get_class($product) == 'Toy'): ?>
              <p class="card-text"><?php echo  $product?->getDescription() ?></p>
              <p class="card-text"><?php echo  $product?->getDimensions() ?></p>
            <?php endif;?>

                


            <a href="#" class="btn btn-dark">Add to cart</a>
          </div>
        </div>
      </div>
      <?php  endforeach; ?>

    </div>
  </div>

</main>