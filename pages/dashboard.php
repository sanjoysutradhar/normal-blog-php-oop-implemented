<?php
if (!isset($_SESSION['id'])){
    header('Location: action.php?page=login');
}
?>

<?php include 'header.php'?>
<section class="py-5">
    <dv class="container">
        <div class="rwo">
            <div class="col-md-12">
                <h1 class="text-center">Welcome to Dashboard</h1>
            </div>
        </div>
    </dv>
</section>

<?php include 'footer.php'?>
