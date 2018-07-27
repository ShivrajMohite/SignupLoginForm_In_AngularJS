<div class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="http://localhost/my_website/index.php"><img src="img/raj.jpg"></a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="" ng-click="logout();" target="_blank">Logout</a></li>
            </ul>
        </div>
        <!--/.nav-collapse -->
    </div>
</div>
 <h1>Welcome, <span style="color:#f5a521;">{{user_name}}.</span></h1>
 <br/>
 <div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="well well-sm">
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <img src="img/user.png" alt="" class="img-rounded img-responsive" />
                    </div>
                    <div class="col-sm-6 col-md-8">
                        <h5><span class="glyphicon glyphicon-user"></span>&nbsp;User Name: {{user_name}}</h5>
                        <h5><span class="glyphicon glyphicon-user"></span>&nbsp;User ID: {{user_id}}</h5>
                        <h5><span class="glyphicon glyphicon-envelope"></span>&nbsp;Email ID: {{user_email}}</h5>
                        <!-- Split button -->
                        <div class="btn-group">
                            <button type="button" ng-click="logout();" class="btn btn-primary">Logout
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
