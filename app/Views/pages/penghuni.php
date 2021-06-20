<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <h1 class="mb-0 bread" style="margin:70px; color:teal;"><b>- LIST PENGHUNI -</b></h1>
                </div>
            </div>

            <div class="container py-4">

                <div class="card" style="border-radius:10px;">
                    <div class="card-body">

                        <a href="/home/createpenghuni" class="btn btn-success mb-3">Tambah Penghuni</a>
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">NO</th>
                                    <th scope="col">Nama Penghuni</th>
                                    <th scope="col">Unit</th>
                                    <th scope="col">Nomor KTP</th>
                                    <th scope="col">Foto</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($penghuni as $pe) : ?>
                                    <tr>
                                        <th scope="row"><?= $i++; ?></th>
                                        <td><?= $pe['nama']; ?></td>
                                        <td><?= $pe['unit']; ?></td>
                                        <td><?= $pe['no_ktp']; ?></td>
                                        <td><img src="/img/<?= $pe['foto']; ?>" alt="" width="100"></td>
                                        <td>
                                            <a href="/home/delete/<?= $pe['id_penghuni']; ?>" class="btn btn-danger">Hapus</a>
                                            <a href="/home/editpenghuni" class="btn btn-primary">Edit</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>