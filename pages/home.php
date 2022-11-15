<?php include "pages/header.php"?>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <?php foreach($blogs as $blog){?>
                <div class="col-md-3">
                    <div class="card h-100 rounded-0 h-100">
                        <img src="<?php echo $blog['image']?>" alt="" class="card-img rounded-0">
                        <div class="card-body">
                            <p class="fw-semibold">Title: <?php echo $blog['title']?></p>
                            <p class="fw-semibold">Author: <?php echo $blog['author']?></p>
                            <p>Description: <?php echo $blog['description']?></p>
                        </div>
                        <div class="card-footer">
                            <a href="action.php?page=detail&&id=<?php echo $blog['id']?>" class="btn btn-info">Read More..</a>
                        </div>
                    </div>
                </div>
                <?php }?>
            </div>
        </div>
    </section>
<?php include "pages/footer.php"?>


