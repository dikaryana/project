<!-- Begin Page Content -->
<div content>
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800"><?= $title?></h1>


        <form method="POST" action="<?= base_url('User/simpan_article')?>" enctype="multipart/form-data">
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Judul Artikel:</label>
                        <input name="title" type="text" class="form-control" placeholder="Masukan nama artikel"
                            required>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label>Pilih Pulau:</label>
                <select class="form-control" name="kategori" required>
                    <option value="">Select our choice</option>
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
            <!-- rows -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Isi Artikel:</label>
                        <textarea name="content" class="form-control" rows="5" required></textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group" required>
                        <div id="image"></div>
                        <label>Gambar:</label>
                        <input type="file" name="image" size="20" required /> <br>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Autor</label>
                        <input name="author" type="text" class="form-control"></input>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <button type="submit" name="draft" class="btn btn-secondary" value="true">Save to
                        Draft</button>
                    <button type="submit" name="draft" class="btn btn-primary" value="false">Publish</button>
                </div>
            </div>
            <div class="toolbar  col-md-6 mr-10 mb-3">
                <a href="<?= base_url('User/articles/list_article')?>" class="btn btn-danger mr-2" role="button">back to
                    list </a>


            </div>
    </div>

    </form>
    <div>
    </div>
    <div>
    </div>
</div>




<!-- End of Main Content -->

<!--modal-->


<!-- Modal 
<form action=?= base_url('articles/list_article');?> method="POST">
    <div class="modal-body">
        <div class="form-group">
            <input type="text" class="form-control" id="title" name="title" placeholder="sub menu title">
        </div>

        <div class="form-group">
            <select name="menu_id" class="form-control" id="menu_id">
                <option value="">Select menu</option>
                

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
                    <input class="form-check-input" name="is_active" type="checkbox" value="1" id="is_active" checked>
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
</div>-->