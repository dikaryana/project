<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title?></h1>

    <div class="row">
        <div class="col-lg-6">
            <?= form_error ('menu','<div class="alert alert-danger" role="alert">','</div>' );?>
            <?= $this -> session->flashdata('message')?>
            <a href="" class="btn btn-info mb-2" data-toggle="modal" data-target="#newModal"> Add new Menu</a>

            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Menu</th>
                        <th scope="col">Action</th>

                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($menu as $m):?>
                    <tr>
                        <th scope="row"><?= $i; ?></th>
                        <td><?= $m ['menu']; ?> </td>
                        <td>
                            <a href="" class="badge badge-success">edit</a>
                            <a href="" class="badge badge-danger">delete</a>
                        </td>

                    </tr>
                    <?php $i++;?>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>


</div>



</div>
<!-- End of Main Content -->

<!--modal-->


<!-- Modal -->
<div class="modal fade" id="newModal" tabindex="-1" aria-labelledby="newModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newModalLabel">Add menu</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= base_url('menu/index');?>" method="POST">
                <div class="modal-body">
                    <div class="mb-3">
                        <input type="text" class="form-control" id="menu" name="menu" placeholder="input menu name">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add menu</button>
                </div>
            </form>
        </div>
    </div>
</div>