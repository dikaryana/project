<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

  <div class="row mb-4">
    <div class="col-lg-12">
      <?= $this->session->flashdata('message'); ?>

      <form method="POST" action="<?= base_url('User/simpan_article') ?>" enctype="multipart/form-data">

        <div class="form-group">
          <label>Judul Artikel :</label>
          <input name="title" type="text" class="form-control" placeholder="Masukan nama artikel" required>
        </div>

        <div class="form-group">
          <label>Pilih Pulau :</label>
          <select class="form-control" name="kategori" required>
            <option value="" selected disabled>Select our choice</option>
            <option value="Jawa">JAWA</option>
            <option value="sumatra">Sumatera</option>
            <option value="kalimantan">Kalimantan</option>
            <option value="bali">Bali</option>
            <option value="nusa">Nusa Tenggara Barat/Timur</option>
            <option value="Sulawesi">Sulawesi</option>
            <option value="maluku">Maluku</option>
            <option value="Papua">Papua</option>
          </select>
        </div>


        <div class="form-group">
          <label>Isi Artikel :</label>
          <textarea name="content" class="form-control" rows="5" required></textarea>
        </div>

        <div class="form-group">
          <div id="image"></div>
          <label>Gambar :</label>
          <div class="custom-file">
            <input type="file" class="custom-file-input" id="image" name="image" required>
            <label class="custom-file-label" for="image">Choose file..</label>
          </div>
        </div>

        <div class="form-group">
          <label>Autor</label>
          <input name="author" type="text" class="form-control" required></input>
        </div>

        <button type="submit" name="draft" class="btn btn-secondary" value="true">Save to Draft</button>
        <button type="submit" name="draft" class="btn btn-primary" value="false">Publish</button>
        <a href="<?= base_url('User/articles/list_article') ?>" class="btn btn-danger mr-2" role="button">back to list</a>


      </form>
    </div>
  </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->