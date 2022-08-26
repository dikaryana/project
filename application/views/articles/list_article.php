<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

  <div class="row mb-4">
    <div class="col-12">
      <?= $this->session->flashdata('message'); ?>

      <a href="<?= base_url('user/list') ?>" class="btn btn-primary mr-2 mb-3" role="button">Add Artikel</a>

      <table class="table table-hover">
        <thead>
          <tr>
            <th>Title</th>
            <th>Author</th>
            <th>Pulau</th>
            <th style="width: 15%;" class="text-center">Status</th>
            <th style="width: 25%;" class="text-center">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($article as $a) : ?>
            <tr>
              <td>
                <div><?= $a->title ?></div>
                <div class="text-gray"><small><?= $a->created_at ?><small>
                </div>
              </td>
              <td>
                <div class="text-gray"><small><?= $a->author ?><small>
                </div>
              </td>
              <td>
                <div><?= $a->kategori ?></div>
                <div class="text-gray"><small><?= $a->kategori ?><small>
                </div>
              </td>
              <?php if ($a->draft) : ?>
                <td class="text-center text-gray">Draft</td>
              <?php else : ?>
                <td class="text-center text-green">Published</td>
              <?php endif ?>
              <td class="text-center">
                <div class="action">
                  <a href="<?= site_url('User/edit/' . $a->id) ?>" class="btn btn-small btn-info" role="button">Edit</a>
                  <a href="<?= site_url('User/hapus/' . $a->id) ?>" class="btn btn-small btn-danger" role="button">Delete</a>
                </div>
              </td>
            </tr>
          <?php endforeach ?>
        </tbody>
      </table>
    </div>
  </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->