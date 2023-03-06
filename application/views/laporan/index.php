<div class="row">
    <div class="col-lg-12">
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h5 class="card-title"><?= $title; ?></h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <form method="post" action="<?= base_url() ?>laporan/cetak_laporan">
                            <!-- <form> -->
                            <div class="row">
                                <div div class="col-md-8">
                                    <div class="form-group">
                                        <label for="dari">Dari</label>
                                        <input type="date" name="dari" id="dari" class="form-control">
                                    </div>
                                </div>
                                <div div class="col-md-8">
                                    <div class="form-group">
                                        <label for="sampai">Sampai</label>
                                        <input type="date" name="sampai" id="sampai" class="form-control">
                                    </div>
                                </div>
                                <div div class="col-md-8">
                                    <div class="form-group">
                                        <label for="id_paket">Paket</label>
                                        <select name="id_paket" id="id_paket" class="form-control">
                                            <option value="">Semua Paket</option>
                                            <?php foreach ($paket as $row) : ?>
                                                <option value="<?php echo $row['id_paket'] ?>"><?php echo $row['nama_paket'] ?></option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                </div>
                                <div div class="col-md-8">
                                    <div class="form-group">
                                        <label for="id_outlet">Outlet</label>
                                        <select name="id_outlet" id="id_outlet" class="form-control">
                                            <option value="">Semua Outlet</option>
                                            <?php foreach ($outlet as $row) : ?>
                                                <option value="<?php echo $row['id_outlet'] ?>"><?php echo $row['nama'] ?></option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>

                                    <!-- <div class="form-group">
                                        <label for="">Status Pembayaran</label>
                                        <select name="kode_invoice" id="kode_invoice" class="form-control">
                                            <option>Status Pembayaran</option>
                                            <?php foreach ($transaksi as $row) : ?>
                                                <option value="<?= $row['kode_invoice'] ?>"><?= $row['dibayar'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div> -->

                                    <div class="form-group">
                                        <label for="">Status Pembayaran</label>
                                        <select name="dibayar" id="dibayar" class="form-control">
                                            <option>Pilih Status Pembayaran</option>
                                            <option value="Dibayar">Dibayar</option>
                                            <option value="Belum Dibayar">Belum Dibayar</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-block btn-primary">Submit</button>
                                    </div>

                                </div>
                            </div>
                        </form>
                        <hr>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- /.row -->