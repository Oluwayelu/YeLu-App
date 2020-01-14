<div class="row justify-content-center">
    <div class="col-md-6">
<h2 class="page-header">Sign Up</h2>
<form class="form-signin" method="post" action="/users/register">
    <div class="form-group">
        <input type="text" class="form-control" placeholder="Full name" name="name">
    </div>
    <div class="form-group">       
        <input type="text" class="form-control" placeholder="Username" name="username">
    </div>
    <div class="form-group">
        <input type="email" class="form-control" placeholder="Email" name="email">
    </div>
    <div class="form-group">
        <input type="password" class="form-control" placeholder="Password" name="password">
    </div>
    <div class="form-group">
        <input type="password" class="form-control" placeholder="Confirm Password" name="password2">
    </div>
    <button type="submit" class="btn btn-lg btn-primary">Sign Up</button>
</form></br>
<label>Sign In if you already have an Account <a href="/login">Sign In</a> </label>
</div>
</div>