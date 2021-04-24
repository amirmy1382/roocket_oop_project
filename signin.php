<?php
require "./templates/header.php";
?>
<!-- Page Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Register</h3>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" action="signin.php" accept-charset="UTF-8" method="post">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input name="name" type="text" class="form-control" id="exampleInputEmail1" placeholder="Your name...">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Email</label>
                            <input name="email" type="email" class="form-control" id="exampleInputEmail11" placeholder="Your email...">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Password</label>
                            <input name="password" type="password" class="form-control" id="exampleInputEmail1" placeholder="Your password...">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Conform your password</label>
                            <input name="password_confirm" type="password" class="form-control" id="exampleInputEmail1" placeholder="Your password again...">
                        </div>
                        <button type="submit" class="btn btn-outline-dark">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->
</div>
<!-- /.container -->

<?php
require "./templates/footer.php";
?>
