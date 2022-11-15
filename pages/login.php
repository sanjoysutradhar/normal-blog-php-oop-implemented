<?php
if (isset($_SESSION['id'])){
    header('Location: action.php?page=dashboard');
}
?>

<?php include 'header.php'?>
<section class="py-5 bg-info">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center text-uppercase">Loginform</h3>
                    </div>
                    <div class="card-body">
                        <h4 class="text-center text-danger"><?php echo $result; ?></h4>
                        <form action="action.php" method="POST" enctype="multipart/form-data">

                            <div class="row mb-3">
                                <label for="" class="col-md-3">Email address</label>
                                <div class="col-md-9">
                                    <input type="email" class="form-control" name="email" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-md-3">Password</label>
                                <div class="col-md-9">
                                    <input type="password" class="form-control" name="password" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-outline-success px-5" name="loginBtn" value="Login">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'?>
