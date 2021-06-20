<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <h1 class="mb-0 bread" style="margin:70px; color:teal;"><b>- LIST PAKET -</b></h1>
                </div>
            </div>

            <div class="container py-4">

                <div class="card" style="border-radius:10px;">
                    <div class="card-body">
                        <a href="/home/createpaket" class="btn btn-primary mb-3">Tambah Paket</a>
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">NO</th>
                                    <th scope="col">Tanggal Datang</th>
                                    <th scope="col">Sasaran</th>
                                    <th scope="col">Penerima Paket</th>
                                    <th scope="col">Isi Paket</th>
                                    <th scope="col">Tanggal Ambil</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($paket as $p) : ?>
                                    <tr>
                                        <th scope="row"><?= $i++; ?></th>
                                        <td><?= $p['tanggal_datang']; ?></td>
                                        <td><?= $p['id_penghuni']; ?></td>
                                        <td><?= $p['NIP']; ?></td>
                                        <td><?= $p['isi_paket']; ?></td>
                                        <td><?= $p['tanggal_ambil']; ?></td>
                                        <td>
                                            <a href="" class="btn btn-success">Update Paket</a>
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