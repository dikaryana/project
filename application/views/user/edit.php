<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title?></h1>
    <div class="row">
        <div class="col-lg-8">
            <form method="post" enctype="multipart/form-data" action="<?=  base_url('User/editprofile');?>">
                <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>

                    <div class="col-sm-10">
                        <input type="text" id="email" class="form-control" name="email" value="<?= $user['email'];?>"
                            readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">Full Name</label>

                    <div class="col-sm-8">
                        <input type="text" id="name" class="form-control" name="name" value="<?= $user['name'];?>">
                        <?= form_error ('name','<small class="text-danger pl-3">','</small>');?> <br>
                    </div>
                </div>
                <div class=" form-group row">
                    <div class="col-sm-2">Picture</div>
                    <div class="col-sm-10">
                        <div class="row">
                            <div class="col-sm-3">
                                <img src="<?= base_url('assets/img/profile/').$user['image'];?>" class="img-thumbnail">
                            </div>
                            <div class="col-sm-9">
                                <div class="custom-file">
                                    <?php echo "<input type='file' name='profile_pic' size='20' />"; ?>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="form-group row  justify-content-end">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </div>
                </div>
            </form>
        </div>

    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->