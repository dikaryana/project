<div class="content col-xl-6 col-md-12 mb-4">
    <h1>Write new Article</h1>

    <form action="" method="post">
        <!-- rows -->
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label>Kode:</label>
                    <h3><?php echo $kode_artikel; ?></h3>
                    <input name="kode_artikel" value="<?php echo $kode_artikel; ?>" type="hidden" class="form-control">
                </div>
            </div>
        </div>
        <!-- rows -->
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label>Judul Artikel:</label>
                    <input name="judul_artikel" type="text" class="form-control" placeholder="Masukan nama artikel"
                        required>
                </div>
            </div>
        </div>
        <!-- rows -->
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label>Isi Artikel:</label>
                    <textarea name="isi_artikel" class="form-control" rows="5"></textarea>
                </div>
            </div>
        </div>
        <!-- rows -->
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <div id="msg"></div>
                    <label>Gambar:</label>
                    <input type="file" name="gambar" class="file">
                    <div class="input-group my-3">
                        <input type="text" class="form-control" disabled placeholder="Upload Gambar" id="file">
                        <div class="input-group-append">
                            <button type="button" id="pilih_gambar" class="browse btn btn-dark">Pilih Gambar</button>
                        </div>
                    </div>
                    <img src="gambar_default.png" id="preview" class="img-thumbnail">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Kategori:</label>

                </div>
            </div>
        </div>

        <!-- rows -->
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <button type="submit" name="publish" class="btn btn-success">Publish</button>
                    <button type="submit" name="simpan_konsep" class="btn btn-warning">Simpan Konsep</button>
                </div>

            </div>

        </div>
    </form>