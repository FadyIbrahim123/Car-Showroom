<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="UTF-8">
  <title>Real Racing Exotics</title>
  <link rel="icon" href="<?php echo e(asset('images/Icon.png')); ?>">
  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <!-- Custom CSS -->
  <link href="<?php echo e(asset('css/manufacturers.css')); ?>" rel="stylesheet">
  <!-- Link to your custom styles -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Car Logos</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Pupils" rel="stylesheet">

</head>
<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<body>

  <header class="text-center">
    <h1>Mercedes Cars</h1>
  </header>

  
  <div class="container mt-4">
    <section id="manufacturers">
      <div class="manufacturer">
        <h3>Mercedes C180</h3>
        <img src="<?php echo e(asset('images/c180.jpeg')); ?>" class="d-block w-100" alt="Mercedes C180">
        <p>
          The Mercedes C180 is a part of the C-Class, a series of compact executive cars by Mercedes-Benz. Boasting a four-cylinder engine, the C180 offers a balance of performance and comfort, typical of the luxury compact sedan segment. Known for its sleek design, both inside and out, this model incorporates advanced features, including a high-quality interior, sophisticated infotainment system, and various driver assistance technologies.        </p>
      </div>

      <div class="manufacturer">
        <h3>Mercedes C200</h3>
        <img src="<?php echo e(asset('images/c200.jpg')); ?>" class="d-block w-100" alt="Mercedes C200">
        <p>
The Mercedes C200, a member of the esteemed C-Class family, embodies a harmonious blend of performance and luxury. Powered by a four-cylinder engine, the C200 delivers a sophisticated driving experience with a focus on both comfort and dynamic capabilities. Its design exudes elegance, both in its exterior aesthetics and meticulously crafted interior.        </p>
      </div>

      <div class="manufacturer">
        <h3>Mercedes C300</h3>
        <img src="<?php echo e(asset('images/c300.jpg')); ?>" class="d-block w-100" alt="Mercedes C300">
        <p>
The Mercedes C300, a distinguished member of the C-Class lineup, epitomizes a luxurious and performance-oriented driving experience. Powered by a potent engine, likely a robust four-cylinder variant, the C300 strikes a balance between power and refinement. Its design is a testament to sophistication, showcasing a sleek exterior and an opulent interior crafted with meticulous attention to detail.        </p>
      </div>

      <div class="manufacturer">
        <h3>Mercedes CLA200</h3>
        <img src="<?php echo e(asset('images/cla200.png')); ?>" class="d-block w-100" alt="Mercedes CLA200">
        <p>
The Mercedes-Benz CLA 200 represents a dynamic and stylish entry into the luxury compact car segment. Fueled by a likely spirited four-cylinder engine, the CLA 200 combines performance with a focus on modern aesthetics. Its sleek and sporty exterior design is complemented by a thoughtfully crafted interior, emphasizing both comfort and cutting-edge technology.        </p>
      </div>

      <div class="manufacturer">
        <h3>Mercedes gls</h3>
        <img src="<?php echo e(asset('images/MGLC.webp')); ?>" class="d-block w-100" alt="Mercedes glc">
        <p>

          The Mercedes GLC, a standout in the luxury midsize SUV category, delivers a harmonious fusion of performance, comfort, and cutting-edge features. Powered by a robust engine, likely a V6 or an advanced four-cylinder variant, the GLC ensures a dynamic driving experience.         </p>
      </div>

      <div class="manufacturer">
        <h3>Mercedes c43</h3>
        <img src="<?php echo e(asset('images/c43.jpg')); ?>" class="d-block w-100" alt="Mercedes c43">
        <p>
          The Mercedes-AMG C43, a thrilling member of the C-Class family, embodies a perfect amalgamation of performance and luxury. Beneath its hood resides a potent engine, often a handcrafted AMG V6 or V8, providing exhilarating power and responsiveness. The exterior design is dynamic, reflecting the high-performance capabilities within, while the interior is crafted with meticulous attention to detail, featuring sporty accents and advanced technology.        </p>
      </div>
    </section>
  </div>
</body>
<?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!--Scripts-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<?php /**PATH E:\New folder (4)\htdocs\webProj\resources\views/manufacturers.blade.php ENDPATH**/ ?>