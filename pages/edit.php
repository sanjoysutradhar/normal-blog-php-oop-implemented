<?php include "pages/header.php"?>
<section class="py-5 bg-info">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center text-uppercase">Edit blog form</h3>
                    </div>
                    <div class="card-body">
                        <h4 class="text-center text-success"><?php echo $result; ?></h4>
                        <form action="action.php" method="POST" enctype="multipart/form-data">
                            <div class="row mb-3">
                                <label for="" class="col-md-3">blog title</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="title" value="<?php echo $singleBlog['title'] ?>" required>
                                    <input type="text" class="form-control" name="id" value="<?php echo $singleBlog['id'] ?>" hidden>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-md-3">author info</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="author" value="<?php echo $singleBlog['author'] ?>" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-md-3">blog description</label>
                                <div class="col-md-9">
                                    <textarea name="description" id="" class="form-control"  cols="30" rows="5" required><?php echo $singleBlog['description'] ?></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-md-3">Image:</label>
                                <div class="col-md-9">
                                    <input type="file" class="form-control" name="image">
                                    <img src="<?php echo $singleBlog['image'] ?>" alt="" height="120" width="100">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-outline-success px-5" name="btnUpdate" value="Update blog">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
