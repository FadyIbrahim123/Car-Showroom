<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>Real Racing Exotics</title>
    <link rel="icon" href="Icon.png">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/6b0af4bcb3.js" crossorigin="anonymous"></script>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Custom CSS -->
    <link href="{{ asset('css/contact.css') }}" rel="stylesheet">

</head>
@include('header')
<body>
  
  <!-- Contact Us -->
  <form>
    <section class="ftco-section map-container">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="Title">
                    <h2 class="mb-4">Visit Us</h2>
                    <p>Drive your passion with our elite collection of luxury cars.</p>
                </div>
                <div class="col-md-12 d-flex align-items-stretch">
                    <!-- Google Maps Embed -->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3449.848694212213!2d31.6325157!3d30.1557416!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1457f7de3cff4631%3A0x441dd84a55c6fe4c!2sEl%20Shorouk%20City%2C%20El%20Shorouk%2C%20Cairo%20Governorate%204932121!5e0!3m2!1sen!2seg!4v1699632192839!5m2!1sen!2seg" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <!-- Additional Contact Information -->
                <div class="row mt-5">
                    <div class="col-md-3">
                        <div class="dbox w-100 text-center">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="text">
                                <p><span>Address:</span> 81 Gamal kamel Street,Elsherouk.Cairo,Egypt.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="dbox w-100 text-center">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div class="text">
                                <p><span>Phone:</span> <a href="tel://+201226597552">+ 20 1226597552</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="dbox w-100 text-center">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <i class="fas fa-paper-plane"></i>
                            </div>
                            <div class="text">
                                <p><span>Email:</span> <a href="mailto:realracingexotics&#64;gmail.com">realracingexotics&#64;gmail.com</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="dbox w-100 text-center">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <i class="fas fa-globe"></i>
                            </div>
                            <div class="text">
                                <p><span>Website:</span> <a href="/home">realracingexotics.com</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</form>
<!--Scripts-->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js&#64;1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap&#64;4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
@include('footer')
</html>