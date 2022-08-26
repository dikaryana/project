<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>

  <div class="row">
    <div class="col-lg-8">
      <?= $this->session->flashdata('message'); ?>
    </div>
  </div>
  <div class="card mb-3" style="max-width: 540px;">
    <div class="card-body">
      <div class="row">
        <div class="col-md-4 px-3">
          <img src="<?= base_url('assets/img/profile/') . $user['image'] ?>" class="img-fluid rounded-start" alt="Profile">
        </div>
        <div class="col-md-8">
          <h5 class="card-title"><?= $user['name'] ?>
            <p class="card-text"><?= $user['email'] ?></p>
            <p class="card-text"><small class="text-muted">Member Since <?= date(' d F Y', $user['date_created']) ?></p>
          </h5>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->