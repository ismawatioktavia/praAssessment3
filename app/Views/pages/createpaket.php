<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <h1 class="mb-0 bread" style="margin:70px; color:teal;"><b>- FORM TAMBAH PAKET -</b></h1>
            </div>
        </div>

        <div class="container py-4">

            <div class="card" style="border-radius:10px;">
                <div class="card-body">
                    <form action="/home/savepaket" method="POST">
                        <?= csrf_field(); ?>
                        <div class="row mb-3">
                            <label for="tanggal_datang" class="col-sm-2 col-form-label">Tanggal Datang</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" id="tanggal_datang" name="tanggal_datang" autofocus>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="id_penghuni" class="col-sm-2 col-form-label">Sasaran</label>
                            <div class="col-sm-10">
                                <select name="nama_penghuni" required="" class="form-control">
                                    <option value="">-Pilih Penghuni-</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="id_penghuni" class="col-sm-2 col-form-label">Penerima</label>
                            <div class="col-sm-10">
                                <select name="nama_penerima" required="" class="form-control">
                                    <option value="">-Pilih Karyawan-</option>
                                </select>
                            </div>
                        </div>
                        <!-- <div class="row mb-3">
                            <label for="id_penghuni" class="col-sm-2 col-form-label">ID Penghuni</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="id_penghuni" name="id_penghuni">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="NIP" class="col-sm-2 col-form-label">NIP Penerima</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="NIP" name="NIP">
                            </div>
                        </div> -->
                        <div class="row mb-3">
                            <label for="isi_paket" class="col-sm-2 col-form-label">Isi Paket</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="isi_paket" name="isi_paket">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="tanggal_ambil" class="col-sm-2 col-form-label">Tanggal Ambil</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" id="tanggal_ambil" name="tanggal_ambil">
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