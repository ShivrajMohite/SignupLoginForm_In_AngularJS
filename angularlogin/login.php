<div class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="http://localhost/my_website/index.php"><img src="img/raj.jpg"></a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#/signup">Sign Up</a></li>
            </ul>
        </div>
        <!--/.nav-collapse -->
    </div>
</div>
<h1 align="center">Welcome to My Page</h1>
<div class="container">
    <div class="row" style="margin-top:20px">
        <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
            <form role="form">
                <fieldset>
                    <h2 align="center">Log In</h2>
                    <br/>
                    <div class="form-group">
                        <input type="text" class="form-control input-lg" placeholder="Your Email or Phone" name="user_email" ng-model="login.user_email" required focus>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control input-lg" placeholder="Password" ng-model="login.user_password" required>
                    </div>
                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <a href="#/signup" class="btn btn-lg btn-primary btn-block">Sign Up</a>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <button type="submit" class="btn btn-lg btn-success btn-block" ng-click="sa_login(login)" data-ng-disabled="login_app.$invalid">Log In</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>
