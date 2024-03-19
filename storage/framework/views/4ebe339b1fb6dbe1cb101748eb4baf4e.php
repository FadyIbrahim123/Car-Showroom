<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="UTF-8">
  <title>Real Racing Exotics</title>
  <link rel="icon" href="Icon.png">
  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <!-- Custom CSS -->
  <link href="<?php echo e(asset('css/purchase.css')); ?>" rel="stylesheet">
</head>
<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<body>
  <div class="testbox">

    <form action="/purchase" method="post">
      <?php echo csrf_field(); ?>
      <div class="banner">
        <img src="<?php echo e(asset('images/porsche-model.png')); ?>" alt="Banner Image" class="banner-img">
      </div>

      <!-- Display validation errors -->
      <?php if($errors->any()): ?>
                <div class="alert alert-danger">
                    <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            <?php endif; ?>

      <!-- Car Model and Color Selection -->
      <div class="item">
        <p>Car Model</p>
        <select name="car_model" id="car_model" onchange="updatePrice()" required>
          <option value="">Select Car Model</option>
          <option value="911_GT3_RS">Porsche 911 GT3 RS</option>
          <option value="911_Carerra_S">Porsche 911 Carerra S</option>
          <option value="Panamera_Turbo_S">Porsche Panamera Turbo S</option>
          <option value="Cayenne_Turbo_S">Porsche Cayenne Turbo S</option>
          <option value="Macan_GTS">Porsche Macan GTS</option>
          <option value="718_Cayman_GTS">Porsche 718 Cayman GTS</option>
        </select>
      </div>
      <div class="item">
        <p>Car Color</p>
        <select name="car_color" id="car_color" required>
          <option value="">Select Car Color</option>
          <option value="white">White</option>
          <option value="black">Black</option>
          <option value="silver">Silver</option>
          <option value="red">Red</option>
          <option value="blue">Blue</option>
          <option value="green">Green</option>
        </select>
      </div>
      <div class="item">
        <p>Car Price</p>
        <input type="text" name="car_price" id="car_price" readonly>
      </div>

      <!-- Buyer Information -->
      <div class="item">
        <p>Full Name</p>
        <div class="name-item">
          <input type="text" name="first_name" id="first_name" placeholder="First" required />
          <input type="text" name="last_name" id="last_name" placeholder="Last" required />
        </div>
      </div>
      <div class="item">
        <p>Email</p>
        <input type="email" name="email" id="email" required />
      </div>
      <div class="item">
        <p>Contact Number</p>
        <input type="tel" name="contact_number" id="contact_number" required />
      </div>

      <!-- Address Information -->
      <div class="item">
        <p>Address</p>
        <input type="text" name="streetAddress" placeholder="Street address" required />
        <input type="text" name="streetAddress2" placeholder="Street address line 2" />
        <div class="city-item">
          <input type="text" name="city" placeholder="City" required />
          <input type="text" name="region" placeholder="Region" required />
          <input type="text" name="postalCode" placeholder="Postal / Zip code" required />
        </div>
      </div>

      <!-- Payment Method -->
      <div class="item">
        <p>Payment Method</p>
        <select id="paymentMethod" onchange="toggleCreditCardFields()">
          <option value="creditCard">Credit Card</option>
          <option value="cash">Cash</option>
        </select>
      </div>

      <!-- Credit Card Fields -->
      <div id="creditCardFields">
        <div class="item">
          <p>Card Number</p>
          <input type="text" name="cardNumber" />
        </div>
        <div class="item">
          <p>Expiry Date</p>
          <input type="text" name="expiryDate" />
        </div>
        <div class="item">
          <p>CVV</p>
          <input type="text" name="cvv" />
        </div>
      </div>

      <!-- Submit Button -->
      <div class="btn-block">
        <button type="submit">PURCHASE</button>
      </div>
    </form>
  </div>

  <?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <!-- Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <script>
    function toggleCreditCardFields() {
      var paymentMethod = document.getElementById("paymentMethod");
      var creditCardFields = document.getElementById("creditCardFields");

      if (paymentMethod.value === "creditCard") {
        creditCardFields.style.display = "block";
      } else {
        creditCardFields.style.display = "none";
      }
    }

    function updatePrice() {
      var car_model = document.getElementById("car_model").value;
      var carPriceField = document.getElementById("car_price");

      // Set prices based on the selected car model
      switch (car_model) {
        case "911_GT3_RS":
          carPriceField.value = "7,000,000 EGP";
          break;
        case "911_Carerra_S":
          carPriceField.value = "5,914,750 EGP";
          break;
        case "Panamera_Turbo_S":
          carPriceField.value = "10,428,250 EGP";
          break;
        case "Cayenne_Turbo_S":
          carPriceField.value = "5,091,611 EGP";
          break;
        case "Macan_GTS":
          carPriceField.value = "2,976,550 EGP";
          break;
        case "718_Cayman_GTS":
          carPriceField.value = "4,053,300 EGP";
          break;
        default:
          carPriceField.value = "";
          break;
      }
    }
  </script>
</body>

</html><?php /**PATH C:\xampp\htdocs\webProj\resources\views/purchase.blade.php ENDPATH**/ ?>