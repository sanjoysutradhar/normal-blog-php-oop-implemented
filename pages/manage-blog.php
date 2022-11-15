<?php include "pages/header.php"?>
<section class="py-5 bg-info">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-gradient">
                        <h4 class="text-center text-uppercase">All blog info</h4>
                    </div>
                    <div class="card-body">
                        <h4 class="text-center text-success"><?php echo $result; ?></h4>
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Blog title</th>
                                <th>Author Name</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($blogs as $blog){?>
                                <tr>
                                    <td><?php echo $blog['title'];?></td>
                                    <td><?php echo $blog['author'];?></td>
                                    <td><?php echo $blog['description'];?></td>
                                    <td>
                                        <img src="<?php echo $blog['image'];?>" alt="" height="100" width="80">
                                    </td>
                                    <td>
                                        <a href="action.php?page=edit&&edit_id=<?php echo $blog['id']?>" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>
                                        <a href="action.php?page=delete&&delete_id=<?php echo $blog['id']?>" onclick="return confirm('Are you Sure to Delete this..')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                            <?php }?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include "pages/footer.php"?>



