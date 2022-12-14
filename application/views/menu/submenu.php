<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title?></h1>

    <div class="row">
        <div class="col-lg">
            <?php if (validation_errors());?>
            <div class="alert alert-danger" role="alert">
                <?= validation_errors()?>

            </div>
            <?= $this -> session->flashdata('message')?>
            <a href="" class="btn btn-info mb-2" data-toggle="modal" data-target="#newSubModal"> Add new sub
                Menu</a>

            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Title</th>
                        <th scope="col">Menu</th>
                        <th scope="col">Url</th>
                        <th scope="col">Icon</th>
                        <th scope="col">Active</th>
                        <th scope="col">Action</th>


                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($subMenu as $sm):?>
                    <tr>
                        <th scope="row"><?= $i; ?></th>
                        <td><?= $sm ['title']; ?> </td>
                        <td><?= $sm ['menu']; ?> </td>
                        <td><?= $sm ['url']; ?> </td>
                        <td><?= $sm ['icon']; ?> </td>
                        <td><?= $sm ['is_active']; ?> </td>
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
<div class="modal fade" id="newSubModal" tabindex="-1" aria-labelledby="newSubModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newSubModalLabel">Add new submenu</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= base_url('menu/submenu ');?>" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="title" name="title" placeholder="sub menu title">
                    </div>

                    <div class="form-group">
                        <select name="menu_id" class="form-control" id="menu_id">
                            <option value="">Select menu</option>
                            <?php foreach($menu as $m):?>
                            <option value="<?= $m['id'];?>"><?=$m['menu'];?></option>

                            <?php endforeach;?>

                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="url" name="url" placeholder="sub menu url">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="icon" name="icon" placeholder="sub menu icon">
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <div class="input-group-text">
                                <input class="form-check-input" name="is_active" type="checkbox" value="1"
                                    id="is_active" checked>
                                <label class="from-check-label" for="is_active">
                                    Active?
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Add sub menu</button>
                    </div>
            </form>
        </div>
    </div>
</div>