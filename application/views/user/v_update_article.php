<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->

    <form action="" class="col mr-2" method="POST">

        <!-- <?= var_dump($article) ?> -->
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label>Judul Artikel:</label>

                    <input name="title" type="text" class="form-control" value="<?= $article['title'] ?>">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label>Author</label>
                    <input name="author" type="text" class="form-control" value="<?= $article['author'] ?>">

                </div>
            </div>
        </div>
        <div class="form-group">

            <?php
                $jw="jawa";
                $Str="Sumatra";
                $kl="Kalimantan";
                $bali="bali";
                $nusa="Nusa tenggara";
                $sl="Sulawesi";
                $mlk="maluku";
                $Papua="Papua";
            if ($article['kategori']=='jawa'){
                $jw="selected";
            }else if ($article['kategori']=='Sumatra'){
                $Str="selected";
            }else if ($article['kategori']=='Kalimantan'){
                $kl="selected";
            }else if ($article['kategori']=='bali'){
                $bali="selected";
            }else if ($article['kategori']=='Nusa tenggara'){
                $nusa="selected";
            }else if ($article['kategori']=='Sulawesi'){
                $sl="selected";
            }else if ($article['kategori']=='maluku'){
                $mlk="selected";
            }else if ($article['kategori']=='Papua'){
                $Papua="selected";
            }
            ?>
            <label>Pilih Pulau:</label>
            <select class="form-control" name="kategori">

                <option <?= $jw?> value="jawa">Jawa</option>
                <option <?= $Str?> value="Sumatera">Sumatera</option>
                <option <?= $kl?> value="kalimantan">Kalimantan</option>
                <option <?= $bali?> value="bali">Bali</option>
                <option <?= $nusa?> value="nusa">Nusa Tenggara Barat/Timur</option>
                <option <?= $sl?> value="Sulawesi">Sulawesi</option>
                <option <?= $mlk?>value="Maluku">Maluku</option>
                <option <?= $Papua?>value="Papua">Papua</option>
            </select>
        </div>
        <!-- rows -->
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label>Isi Artikel:</label>
                    <textarea name="content" value="<?= $article['content']; ?>" class="form-control"
                        rows="5"></textarea>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group" required>
                    <div id="image"></div>
                    <label>Gambar:</label>
                    <input type="file" value="<?php echo $article['image']; ?>" name="image" class="file"> <br>

                    <input name="image" type="text" class="form-control" value="<?= $article['image']; ?>">

                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group">
                <div>
                    <button type="submit" name="draft" class="button" value="true"
                        href="<?= base_url('auth/registration');?>">Save
                        to
                        Draft</button>
                    <button type="submit" name="draft" class="button button-primary" value="false">Publish
                        Update</button>
                </div>
            </div>
        </div>

    </form>

</div>