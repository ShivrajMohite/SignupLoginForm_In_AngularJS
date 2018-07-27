<div class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="http://localhost/my_website/index.php"><img src="img/raj.jpg"></a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#/login">Log In</a></li>
            </ul>
        </div>
        <!--/.nav-collapse -->
    </div>
</div>
<h1 align="center">Welcome to My Page</h1>
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
            <form name="signupForm" class="form-horizontal" role="form">
                <h2 align="center">Sign Up <small>It's free and always will be.</small></h2>
                <br/>
                <div class="form-group">
                    <input type="text" id="display_name" class="form-control input-lg" placeholder="Name" ng-model="signup.user_name">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control input-lg" placeholder="Phone" name="user_phone" ng-model="signup.user_phone">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control input-lg" placeholder="Address" ng-model="signup.user_address">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control input-lg" placeholder="Email" name="user_email" ng-model="signup.user_email" focus>
                    <span ng-show="signupForm.user_email.$error.user_email" class="help-inline">Invalid email address</span>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="form-group">
                            <input type="password" class="form-control input-lg" name="user_password" placeholder="Password" ng-model="signup.user_password" required>
                            <span class="errorMessage" data-ng-show="signupForm.user_password.$dirty && signupForm.user_password.$invalid"> Enter Password.</span>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="form-group">
                            <input type="password" class="form-control input-lg" name="confPassword" placeholder="Password Again" ng-model="signup.confPassword" password-match="signup.user_password" required>
                            <span class="errorMessage" data-ng-show="signupForm.confPassword.$dirty && signupForm.confPassword.$error.required">Enter confirm password</span>

                            <span style="color:#F00" class="errorMessage" data-ng-show="signupForm.confPassword.$dirty && signupForm.confPassword.$error.passwordNoMatch && !signupForm.confPassword.$error.required">Passwords do not match, please retype..</span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12 col-md-6"><a href="#/login" class="btn btn-success btn-block btn-lg">Log In</a></div>
                		<div class="col-xs-12 col-md-6">
                        <button type="submit" class="btn btn-primary btn-block btn-lg" ng-click="signUp(signup)" data-ng-disabled="signupForm.$invalid">Sign Up
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
