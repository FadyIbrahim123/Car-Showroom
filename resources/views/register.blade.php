<link rel="stylesheet" href="{{ asset('resources/css/home.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    @include('header')
<body>
    <style>
        body {
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            background-color: #f7f7f7;
        }

        #SignUpSection {
            display: flex;
            flex-direction: column;
            background-color: #f4f4f4;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 80%;
            max-width: 400px;
        }

        #SignUpSection h2 {
            color: #333;
            text-align: center;
        }

        .form-group {
            margin-bottom: 15px; /* Add spacing between form elements */
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #555;
        }

        .form-control {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px; 
            font-size: 14px;
        }

        .btn-primary {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }
    </style>
        

<div class="col-md-4" id="SignUpSection">
    <h2>Sign Up</h2>
    <form action="/register" method="post" style="text-align: center;">
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
            <label for="SignUpNationalID">National ID</label>
            <input type="text" class="form-control" id="SignUpNationalID" name="national_id" placeholder="Enter your national ID">
        </div>
        <div class="form-group">
            <label for="SignUpContactNumber">Contact Number</label>
            <input type="text" class="form-control" id="SignUpContactNumber" name="contact_number" placeholder="Enter your contact number">
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
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</body>
@include('footer')
