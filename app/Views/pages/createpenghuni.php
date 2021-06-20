<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <h1 class="mb-0 bread" style="margin:70px; color:teal;"><b>- FORM TAMBAH PENGHUNI -</b></h1>
            </div>
        </div>

        <div class="container py-4">

            <div class="card" style="border-radius:10px;">
                <div class="card-body">
                    <form action="/home/savepenghuni" method="POST" enctype="multipart/form-data">
                        <?= csrf_field(); ?>
                        <div class="row mb-3">
                            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nama" name="nama" autofocus>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="unit" class="col-sm-2 col-form-label">Unit</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="unit" name="unit">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="no_ktp" class="col-sm-2 col-form-label">Nomor KTP</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="no_ktp" name="no_ktp">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="foto" class="col-sm-2 col-form-label">Foto</label>
                            <div class="col-sm-10">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="foto">
                                    <label class="custom-file-label" for="Foto"></label>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Tambah Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?= $this->endSection(); ?>