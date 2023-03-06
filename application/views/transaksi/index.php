 <div class="row">
     <div class="col-lg-12">
         <div class="card card-primary card-outline">
             <div class="card-header">
                 <h5 class="card-title"><?= $title; ?></h5>
                 <div class="card-tools">
                 </div>
             </div>
             <div class="card-body">

                 <div class="row-mt-3">
                     <div class="col-mr-6">
                         <form action="<?= base_url('transaksi'); ?>" method="post">
                             <div class="input-group mb-3">
                                 <input type="text" class="form-control" placeholder="Search for..." name="cari">
                                 <button type="submit" class="btn btn-dark"><i class="fas fa-search"></i></button>
                             </div>
                         </form>
                     </div>
                 </div>

                 <div class="row">
                     <div class="col-md-12">

                         <?php if ($message = $this->session->flashdata('message')) : ?>
                             <div class="alert alert-success">
                                 <p><?= $message ?></p>
                             </div>
                         <?php endif; ?>

                         <table class="table table-bordered table-striped">
                             <thead>
                                 <tr>
                                     <th class="text-center">No</th>
                                     <th class="text-center">Tgl</th>
                                     <th class="text-center">Invoice</th>
                                     <th class="text-center">Outlet</th>
                                     <th class="text-center">Member</th>
                                     <th class="text-center">User</th>
                                     <th class="text-center">Batas Waktu</th>
                                     <th class="text-center">Tanggal Bayar</th>
                                     <th class="text-center">Status</th>
                                     <th class="text-center">Status Pembayaran</th>
                                     <th class="text-center">Total</th>
                                     <th class="text-center">Aksi</th>
                                 </tr>
                             </thead>
                             <tbody>
                                 <?php $no = 1;
                                    foreach ($transaksi as $row) : ?>
                                     <tr>
                                         <td class="text-center"><?= $no++ ?></td>
                                         <td class="text-center"><?= $row['tgl'] ?></td>
                                         <td class="text-center"><?= $row['kode_invoice'] ?></td>
                                         <td class="text-center"><?= $row['nama_outlet'] ?></td>
                                         <td class="text-center"><?= $row['nama_member'] ?></td>
                                         <td class="text-center"><?= $row['nama_user'] ?></td>
                                         <td class="text-center"><?= $row['batas_waktu'] ?></td>
                                         <td class="text-center"><?= $row['tgl_bayar'] ?></td>
                                         <td class="text-center"><?= $row['status'] ?></td>
                                         <td class="text-center"><?= $row['dibayar'] ?></td>
                                         <!-- <td class="text-center"><?= $row['total_bayar'] ?></td> -->
                                         <td>
                                             <?php if ($row['dibayar'] == "Dibayar") { ?>
                                                 <?php echo "Rp. " . number_format($row['total_bayar'], 0, '.', '.') ?>
                                             <?php } else { ?>
                                                 <?php echo "Rp. " . number_format($row['total_bayar'] * 0, 0, '.', '.') ?>
                                             <?php  } ?>
                                         </td>

                                         <td class="text-center">
                                             <a class="btn btn-sm btn-warning mb-2" href="<?= base_url('transaksi/ubah/') . $row['id_transaksi'] ?>"><i class="fas fa-edit"></i></a>
                                             <a class="btn btn-sm btn-danger mb-2" onclick="return confirm('Yakin ingin menghapus data ini?')" href="<?= base_url('transaksi/hapus/') . $row['id_transaksi'] ?>"><i class="fas fa-trash"></i></a>
                                             <!-- <button onclick="hapusTransaksi('<?= base_url('transaksi/hapus/') . $row['id_transaksi'] ?>')" class="btn btn-danger btn-sm tombol-hapus"><i class="fas fa-trash"></i></button> -->
                                             <a href="<?= base_url() ?>transaksi/cetak/<?= $row['kode_invoice'] ?>" class="btn btn-info btn-sm ml-2"><i class="fas fa-print"></i></a>
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
 <!-- /.row -->