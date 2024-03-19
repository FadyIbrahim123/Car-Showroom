<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>Real Racing Exotics</title>
    <link rel="icon" href="{{ asset('images/logo-no-background.png') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <!--css-->
    <link rel="stylesheet" href="{{ asset('css/cars.css') }}">
</head>
@include('header')
<body>
  
    <div class="container mt-4">
        <!-- Section: Selected Manufacturer's Cars -->
        <section id="a">
            <div class="Intro">
             <h2><img src="{{ asset('images/PorscheLogo.png') }}" class="card-img-top" alt="PorscheLogo">Porsche cars<img src="{{ asset('images/PorscheLogo.png') }}" class="card-img-top" alt="PorscheLogo"></h2>
             <p>Explore our collection of Porsche cars.</p>
          </div>
            <!-- Add content related to Porsche cars here -->
            <div class="row">
                <!-- Car 1 -->
                <!--carousel-->
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner">
                      <div class="carousel-item active">
                          <img class="d-block w-100" src="{{ asset('images/Porsche911Gt3Rs-1.jpg') }}" alt="First slide">
                          <div class="carousel-caption d-none d-md-block">
                              <p>Tcarpe secundum – get the most out of every second</p>
                          </div>
                      </div>
                      <div class="carousel-item">
                          <img class="d-block w-100" src="{{ asset('images/Porsche911Gt3Rs-2.jpg') }}" alt="Second slide">
                      </div>
                      <div class="carousel-item">
                          <img class="d-block w-100" src="{{ asset('images/Porsche911Gt3Rs-3.jpg') }}" alt="Third slide">
                      </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                  </a>
              </div>
              <!--end carousel-->

              <div class="card-body">
                <h5 class="card-title">911 GT3 RS</h5>
                <table>
                  <tr>
                    <th>Parameter</th>
                    <th>Value</th>
                  </tr>
                  <tr>
                    <td>
                      <img src="{{ asset('images/Enginecapacity.png') }}" alt="Capacity Icon"> Engine Capacity
                    </td>
                    <td>4000</td>
                  </tr>
                  <tr>
                    <td>
                      <img src="{{ asset('images/Acceleration.jpeg') }}" alt="Acceleration Icon"> Acceleration From 0-100 (Km/hr.)
                    </td>
                    <td>3.2 s</td>
                  </tr>
                  <tr>
                    <td>
                      <img src="{{ asset('images/Torque.png') }}" alt="Torque Icon"> Maximum torque (N.m&#64;RPM)
                    </td>
                    <td>465 Nm</td>
                  </tr>
                  <tr>
                    <td>
                      <img src="{{ asset('images/Horsepower.png') }}" alt="Horsepower Icon"> Maximum power (HP &#64; RPM)
                    </td>
                    <td>518 hp</td>
                  </tr>
                  <tr>
                    <td>
                      <img src="{{ asset('images/Transmission.png') }}" alt="Transmission Icon"> Transmission
                    </td>
                    <td>PDK</td>
                  </tr>
                </table>
                <p class="Price">Price: 7,000,000 EGP</p>
                        </div>
                    </div>
                <!-- Car 2 -->  
                <!--carousel-->
                <div id="carouselExampleIndicators1" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                      <li data-target="#carouselExampleIndicators1" data-slide-to="0" class="active"></li>
                      <li data-target="#carouselExampleIndicators1" data-slide-to="1"></li>
                      <li data-target="#carouselExampleIndicators1" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner">
                      <div class="carousel-item active">
                          <img class="d-block w-100" src="{{ asset('images/Porsche911CarerraS_1.jpg') }}" alt="First slide">
                          <div class="carousel-caption d-none d-md-block">
                           
                              <p>Tcarpe secundum – get the most out of every second</p>
                          </div>
                      </div>
                      <div class="carousel-item">
                          <img class="d-block w-100" src="{{ asset('images/Porsche911CarerraS_2.jpg') }}" alt="Second slide">
                      </div>
                      <div class="carousel-item">
                          <img class="d-block w-100" src="{{ asset('images/Porsche911CarerraS_3.jpg') }}" alt="Third slide">
                      </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleIndicators1" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleIndicators1" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                  </a>
              </div>
              <!--end carousel-->
                      <div class="card-body">
                          <h5 class="card-title">911 Carerra s</h5>
                          <table >
                            <tr>
                                <th>Parameter</th>
                                <th>Value</th>
                            </tr>
                            <tr>
                                <td>
            <img src="{{ asset('images/Enginecapacity.png') }}" alt="Capacity Icon"> Engine Capacity
        </td>
                                <td>3000 cc</td>
                            </tr>
                            <tr>
                                  <td>
        <img src="{{ asset('images/Acceleration.jpeg') }}" alt="Acceleration Icon"> Acceleration From 0-100 (Km/hr.)
     </td>
                                <td>3.7 s</td>
                            </tr>
                            <tr>
                                <td>
     <img src="{{ asset('images/Torque.png') }}" alt="Torque Icon"> Maximum torque (N.m&#64;RPM)
     </td>
                                <td>2300–5000/500</td>
                            </tr>
                            <tr>
                                 <td>
     <img src="{{ asset('images/Horsepower.png') }}" alt="Horsepower Icon"> Maximum power (HP &#64; RPM)
     </td>
                                <td>2300 -450/5500</td>
                            </tr>
                            <tr>
                                <td>
        <img src="{{ asset('images/Transmission.png') }}" alt="Transmission Icon"> Transmission
         </td>
                                <td>Automatic</td>
                            </tr>
                        </table>
                          <p class="Price">Price: 5,914,750 EGP</p>
                      </div>
                <!-- Add more cars as needed -->
                <!-- Car 3 -->
                <!--carousel-->
                <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                      <li data-target="#carouselExampleIndicators2" data-slide-to="0" class="active"></li>
                      <li data-target="#carouselExampleIndicators2" data-slide-to="1"></li>
                      <li data-target="#carouselExampleIndicators2" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner">
                      <div class="carousel-item active">
                          <img class="d-block w-100" src="{{ asset('images/PorschePanameraTurboS-1.jpg') }}" alt="First slide">
                          <div class="carousel-caption d-none d-md-block">
                           
                              <p>Tcarpe secundum – get the most out of every second</p>
                          </div>
                      </div>
                      <div class="carousel-item">
                          <img class="d-block w-100" src="{{ asset('images/PorschePanameraTurboS-2.jpg') }}" alt="Second slide">
                      </div>
                      <div class="carousel-item">
                          <img class="d-block w-100" src="{{ asset('images/PorschePanameraTurboS-3.jpg') }}" alt="Third slide">
                      </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#carouselExampleIndicators2" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
</a>
</div>
<!--end carousel-->
<div class="card-body">
    <h5 class="card-title">Panamera Turbo S</h5>
    <table >
        <tr>
            <th>Parameter</th>
            <th>Value</th>
        </tr>
        <tr>
            <td>
                <img src="{{ asset('images/Enginecapacity.png') }}" alt="Capacity Icon"> Engine Capacity
            </td>
            <td>4000 cc</td>
        </tr>
        <tr>
            <td>
                <img src="{{ asset('images/Acceleration.jpeg') }}" alt="Acceleration Icon"> Acceleration From 0-100 (Km/hr.)
            </td>
            <td>2.9 s</td>
        </tr>
        <tr>
            <td>
                <img src="{{ asset('images/Torque.png') }}" alt="Torque Icon"> Maximum torque (N.m&#64;RPM)
            </td>
            <td>820/4500-1950</td>
        </tr>
        <tr>
            <td>
                <img src="{{ asset('images/Horsepower.png') }}" alt="Horsepower Icon"> Maximum power (HP &#64; RPM)
            </td>
            <td>630/6500</td>
        </tr>
        <tr>
            <td>
                <img src="{{ asset('images/Transmission.png') }}" alt="Transmission Icon"> Transmission
            </td>
            <td>Dual Clutch</td>
        </tr>
    </table>
    <p class="Price">Price: 10,428,250 EGP</p>
</div>
<!-- Car 4 -->
<!--carousel-->
<div id="carouselExampleIndicators3" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators3" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators3" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators3" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="{{ asset('images/PorscheCayenneTurboS-1.jpg') }}" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
                <p>Tcarpe secundum – get the most out of every second</p>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('images/PorscheCayenneTurboS-2.jpg') }}" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('images/PorscheCayenneTurboS-3.jpg') }}" alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators3" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators3" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<!--end carousel-->
<div class="card-body">
    <h5 class="card-title">Cayenne Turbo S</h5>
    <table >
        <tr>
            <th>Parameter</th>
            <th>Value</th>
        </tr>
        <tr>
            <td>
                <img src="{{ asset('images/Enginecapacity.png') }}" alt="Capacity Icon"> Engine Capacity
            </td>
            <td>4000 cc</td>
        </tr>
        <tr>
            <td>
                <img src="{{ asset('images/Acceleration.jpeg') }}" alt="Acceleration Icon"> Acceleration From 0-100 (Km/hr.)
            </td>

        <td>3.3 s</td>
</tr>
<tr>
    <td>
        <img src="{{ asset('images/Torque.png') }}" alt="Torque Icon"> Maximum torque (N.m&#64;RPM)
    </td>
    <td>850/1800-4500</td>
</tr>
<tr>
    <td>
        <img src="{{ asset('images/Horsepower.png') }}" alt="Horsepower Icon"> Maximum power (HP &#64; RPM)
    </td>
    <td>640/6000-6500</td>
</tr>
<tr>
    <td>
        <img src="{{ asset('images/Transmission.png') }}" alt="Transmission Icon"> Transmission
    </td>
    <td>Automatic</td>
</tr>
</table>
<p class="Price">Price: 5,091,611 EGP</p>
</div>
<!-- Car 5 -->
<!--carousel-->
<div id="carouselExampleIndicators4" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators4" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators4" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators4" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="{{ asset('images/PorscheMacanGTS-1.jpg') }}" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
                <p>Tcarpe secundum – get the most out of every second</p>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('images/PorscheMacanGTS-2.jpg') }}" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('images/PorscheMacanGTS-3.jpg') }}" alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators4" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators4" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<!--end carousel-->
<div class="card-body">
    <h5 class="card-title">Macan GTS</h5>
    <table>
        <tr>
            <th>Parameter</th>
            <th>Value</th>
        </tr>
        <tr>
            <td>
                <img src="{{ asset('images/Enginecapacity.png') }}" alt="Capacity Icon"> Engine Capacity
            </td>
            <td>3000 cc</td>
        </tr>
        <tr>
            <td>
                <img src="{{ asset('images/Acceleration.jpeg') }}" alt="Acceleration Icon"> Acceleration From 0-100 (Km/hr.)
            </td>
            <td>5.4 s</td>
        </tr>
        <tr>
            <td>
                <img src="{{ asset('images/Torque.png') }}" alt="Torque Icon"> Maximum torque (N.m&#64;RPM)
            </td>
            <td>460/1400-4800</td>
        </tr>
        <tr>
            <td>
                <img src="{{ asset('images/Horsepower.png') }}" alt="Horsepower Icon"> Maximum power (HP &#64; RPM)
            </td>
            <td>354/5400-6400</td>
        </tr>
        <tr>
            <td>
                <img src="{{ asset('images/Transmission.png') }}" alt="Transmission Icon"> Transmission
            </td>
            <td>Automatic</td>
        </tr>
    </table>
    <p class="Price">Price: 2,976,550 EGP</p>
</div>
<!-- Car 6 -->
<!--carousel-->
<div id="carouselExampleIndicators5" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators5" data-slide-to="0" class="active"></li>
<li data-target="#carouselExampleIndicators5" data-slide-to="1"></li>
<li data-target="#carouselExampleIndicators5" data-slide-to="2"></li>
</ol>
<div class="carousel-inner">
    <div class="carousel-item active">
        <img class="d-block w-100" src="{{ asset('images/Porsche718CaymanGTS-1.jpg') }}" alt="First slide">
        <div class="carousel-caption d-none d-md-block">
            <p>Tcarpe secundum – get the most out of every second</p>
        </div>
    </div>
    <div class="carousel-item">
        <img class="d-block w-100" src="{{ asset('images/Porsche718CaymanGTS-2.jpg') }}" alt="Second slide">
    </div>
    <div class="carousel-item">
        <img class="d-block w-100" src="{{ asset('images/Porsche718CaymanGTS-3.jpg') }}" alt="Third slide">
    </div>
</div>
<a class="carousel-control-prev" href="#carouselExampleIndicators5" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#carouselExampleIndicators5" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
</a>
</div>
<!--end carousel-->
<div class="card-body">
    <h5 class="card-title">718 Cayman GTS</h5>
    <table>
        <tr>
            <th>Parameter</th>
            <th>Value</th>
        </tr>
        <tr>
            <td>
                <img src="{{ asset('images/Enginecapacity.png') }}" alt="Capacity Icon"> Engine Capacity
            </td>
            <td>4000</td>
        </tr>
        <tr>
            <td>
                <img src="{{ asset('images/Acceleration.jpeg') }}" alt="Acceleration Icon"> Acceleration From 0-100 (Km/hr.)
            </td>
            <td>4.1 s</td>
        </tr>
        <tr>
            <td>
                <img src="{{ asset('images/Torque.png') }}" alt="Torque Icon"> Maximum torque (N.m&#64;RPM)
            </td>
            <td>430/4500-1800</td>
        </tr>
        <tr>
            <td>
                <img src="{{ asset('images/Horsepower.png') }}" alt="Horsepower Icon"> Maximum power (HP &#64; RPM)
            </td>
            <td>365/6500</td>
        </tr>
        <tr>
            <td>
                <img src="{{ asset('images/Transmission.png') }}" alt="Transmission Icon"> Transmission
            </td>
            <td>Manual</td>
        </tr>
    </table>
    <p class="Price">Price: 4,053,300 EGP</p>
</div>
</div>
<footer>
@include('footer')

</footer>

<!--Scripts-->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js&#64;1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap&#64;4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>