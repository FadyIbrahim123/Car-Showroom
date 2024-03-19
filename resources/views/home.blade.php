<link rel="stylesheet" href="{{ asset('resources/css/home.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    @include('header')
    <body>
    <div class="container mt-4">
        <div class="row">

        <div class="col-md-4" id="SignUpSection">
            <h2>Sign Up</h2>
            <form action="/register" method="post">
                @csrf
                <div class="form-group">
                    <label for="SignUpFirstName">First Name</label>
                    <input type="text" class="form-control" id="SignUpFirstName" name="first_name" placeholder="Enter your first name">
                </div>
                <div class="form-group">
                    <label for="SignUpLastName">Last Name</label>
                    <input type="text" class="form-control" id="SignUpLastName" name="last_name" placeholder="Enter your last name">
                </div>
                <div class="form-group">
                    <label for="SignUpEmail">Email</label>
                    <input type="email" class="form-control" id="SignUpEmail" name="email" placeholder="Enter your email">
                </div>
                <div class="form-group">
                    <label for="SignUpPassword">Password</label>
                    <input type="password" class="form-control" id="SignUpPassword" name="password" placeholder="Enter your password">
                </div>
                <button type="submit" class="btn btn-primary">Sign Up</button>
            </form>
        </div>

            <div class="col-md-4" id="loginSection">
                <h2>Login</h2>
                <form action="/login" method="post"> <!-- Corrected action attribute -->
                    @csrf
                    <div class="form-group">
                        <label for="LoginEmail">Email</label>
                        <input type="email" class="form-control" id="LoginEmail" name="email" placeholder="Enter your email">
                    </div>
                    <div class="form-group">
                        <label for="LoginPassword">Password</label>
                        <input type="password" class="form-control" id="LoginPassword" name="password" placeholder="Enter your password">
                    </div>
                    <button type="submit" class="btn btn-success">Login</button>
                </form>
            </div>



            <div class="col-md-4" id="logoutSection">
                <h2>Logout</h2>
                <form action="/logout" method="post">
                    @csrf
                    <button type="submit" class="btn btn-danger">Logout</button>
                </form>
            </div>





            <div class="error-popup">
            @if($errors->has('email_register'))
                <div class="alert alert-danger">
                    {{ $errors->first('email_register') }}
                </div>
            @endif

            @if($errors->has('email_login'))
                <div class="alert alert-danger">
                    {{ $errors->first('email_login') }}
                </div>
            @endif

            @if($errors->any() && !$errors->has('email_login') && !$errors->has('email_register'))
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>

        </div>
    </div>

    <!-- Buttons to Toggle Sections -->
   
    <!-- Description Section -->
    <div class="container description-container">
        <h2>Description</h2>
        <p class="description-text">
           
Welcome to Real Racing Exotics, where luxury meets adrenaline! Explore an exquisite collection of high-performance exotic cars, meticulously curated for automotive enthusiasts. Our showroom redefines excellence, showcasing sleek supercars and opulent luxury vehicles. Each vehicle is a masterpiece, combining power with sophistication. Join a community of enthusiasts, experience exclusive events, and connect with fellow car aficionados. Whether you seek speed, luxury, or style, Real Racing Exotics offers a diverse range to satisfy your automotive desires. Indulge your passion, take the driver's seat, and embark on an unforgettable journey. Welcome to automotive excellence at Real Racing Exotics.
        </p>
    </div>

    <!--Scripts-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- <script>
        document.getElementById('loginSection').style.display = 'none';
        document.getElementById('signupSection').style.display = 'none';
        document.getElementById('logoutSection').style.display = 'none';

        function showLogin() {
            document.getElementById('loginSection').style.display = 'block';
            document.getElementById('signupSection').style.display = 'none';
            document.getElementById('logoutSection').style.display = 'none';
        }

        function showSignup() {
            document.getElementById('loginSection').style.display = 'none';
            document.getElementById('signupSection').style.display = 'block';
            document.getElementById('logoutSection').style.display = 'none';
        }

        function showLogout() {
            document.getElementById('loginSection').style.display = 'none';
            document.getElementById('signupSection').style.display = 'none';
            document.getElementById('logoutSection').style.display = 'block';
        }
    </script> -->
</body>
@include('footer')


