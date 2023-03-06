<div class="container">
    <div class="row my-5" data-aos="fade-up" data-aos-duration="1000">

        <div class="row mb-5" data-aos="fade-up" data-aos-duration="1000">
            <div class="col-lg text-info text-center">
                <p class="text-info"><span class="oleo-font">Bunga Laundry</span> adalah aplikasi laundry untuk membantu ibu rumah tangga agar <strong>meringankan</strong> pekerjaan rumahnya. Selain itu, aplikasi ini dapat melihat <strong>timeline</strong> pakaian yang anda laundry menggunakan fitur <strong>cek status pesanan</strong>. Sehingga, anda tidak perlu repot-repot datang ke tempat laundry bila pakaian anda yang sedang dilaundry belum selesai (Belum bisa diambil).</p>
                <h4>Kami memiliki beberapa cabang yaitu:</h4>
                <div class="table-responsive text-dark p-3 rounded bg-white">
                    <table class="table table-hover table-bordered" style="font-size: .9rem">
                        <thead>
                            <tr>
                                <th>Nama Outlet</th>
                                <th>Alamat Outlet</th>
                                <th>Telepon Outlet</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($outlet as $o) : ?>
                                <tr>
                                    <td><?= $o['nama']; ?></td>
                                    <td><?= $o['alamat']; ?></td>
                                    <td><?= $o['tlp']; ?></td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>

                <div class="col-lg text-info text-center">
                    <p class="text-info"><span class="oleo-font">Bunga Laundry</span> adalah aplikasi laundry untuk membantu ibu rumah tangga agar <strong>meringankan</strong> pekerjaan rumahnya. Selain itu, aplikasi ini dapat melihat <strong>timeline</strong> pakaian yang anda laundry menggunakan fitur <strong>cek status pesanan</strong>. Sehingga, anda tidak perlu repot-repot datang ke tempat laundry bila pakaian anda yang sedang dilaundry belum selesai (Belum bisa diambil).</p>
                    <h4>Disini juga terdapat berbagi nama & jenis paket yaitu:</h4>
                    <div class="table-responsive text-dark p-3 rounded bg-white">
                        <table class="table table-hover table-bordered" style="font-size: .9rem">
                            <thead>
                                <tr>
                                    <th>Nama Paket</th>
                                    <th>Jenis Paket</th>
                                    <th>Harga Paket</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($paket as $o) : ?>
                                    <tr>
                                        <td><?= $o['nama_paket']; ?></td>
                                        <td><?= $o['jenis']; ?></td>
                                        <td><?= $o['harga']; ?></td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>