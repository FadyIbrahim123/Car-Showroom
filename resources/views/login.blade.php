            @include('header')
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
            @include('footer')
