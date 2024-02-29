<?php
include "header.php";
include "navbar.php";
?>

<div class="container px-0">
     <div class="card mt-2">
          <div class="card-body">
               <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#tambah-data">
                    Tambah Data
               </button>
          </div>
          <div class="card-body">
               <?php
               if (isset($_GET['pesan'])) {
                    if ($_GET['pesan'] == "simpan") { ?>
                         <div class="alert alert-success" role="alert">
                              Data Berhasil Di Simpan
                         </div>
                    <?php } ?>
                    <?php if ($_GET['pesan'] == "update") { ?>
                         <div class="alert alert-success" role="alert">
                              Data Berhasil Di Update
                         </div>
                    <?php } ?>
                    <?php if ($_GET['pesan'] == "hapus") { ?>
                         <div class="alert alert-succes" role="alert">
                              Data Berhasil Di Hapus
                         </div>
                    <?php } ?>
               <?php
               }  ?>
               <table class="table table-bordered table-striped">
                    <thead>
                         <tr>
                              <th>No</th>
                              <th>ID Pelanggan</th>
                              <th>Nama Pelanggan</th>
                              <th>No. Telepon</th>
                              <th>Total Pembayaran</th>
                              <th class="text-center">Aksi</th>
                         </tr>
                    </thead>
                    <tbody>
                         <?php
                         include '../koneksi.php';
                         $no = 1;
                         $data = mysqli_query($koneksi,"SELECT * FROM pelanggan INNER JOIN penjualan ON pelanggan.pelangganID=penjualan.pelangganID");
                         while ($d = mysqli_fetch_array($data)) {
                         ?>
                              <tr>
                                   <td><?php echo $no++; ?></td>
                                   <td><?php echo $d['PelangganID']; ?></td>
                                   <td><?php echo $d['NamaPelanggan']; ?></td>
                                   <td><?php echo $d['NomorTelepon']; ?></td>
                                   <td><?php echo $d['TotalHarga']; ?></td>
                                   <td class="text-center">
                                        <a href="detail_pembelian.php?PelangganID=<?php echo $d['PelangganID']; ?>" class="btn btn-primary btn-sm">Detail</a>
                                        <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#edit-data<?php echo $d['PelangganID']; ?>">Edit</button>
                                        <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#hapus-data<?php echo $d['PelangganID']; ?>">Hapus</button>
                                   </td>
                              </tr>

                              <!-- Modal Edit Data -->
                                   <div class="modal fade" id="edit-data<?php echo $d['PelangganID']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                             <div class="modal-content">
                                                  <div class="modal-header">
                                                       <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data</h1>
                                                       <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close"></button>
                                                  </div>
                                                  <form action="proses_update_pembelian.php" method="post">
                                                       <div class="modal-body">
                                                            <div class="form-group">
                                                                 <input type="text" name="PelangganID" value="<?php echo $d['PelangganID']; ?>" class="form-control">
                                                            </div>
                                                            <div class="form-group">
                                                                 <label>Nama Pelanggan</label>
                                                                 <input type="text" name="NamaPelanggan" class="form-control" value="<?php echo $d['NamaPelanggan']; ?>">
                                                            </div>
                                                            <div class="form-group">
                                                                 <label>No. Telepon</label>
                                                                 <input type="text" name="NomorTelepon" class="form-control" value="<?php echo $d['NomorTelepon']; ?>">
                                                            </div>
                                                            <div class="form-group">
                                                                 <label>Alamat</label>
                                                                 <input type="text" name="Alamat" class="form-control" value="<?php echo $d['Alamat']; ?>">
                                                            </div>
                                                            <div class="modal-footer">
                                                                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                 <button type="submit" class="btn btn-primary">Simpan</button>
                                                            </div>
                                                       </div>
                                                  </form>
                                             </div>
                                        </div>
                                   </div>
                                   <!-- Modal Hapus Data -->
                                   <div class="modal fade" id="hapus-data<?php echo $d['PelangganID']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                             <div class="modal-content">
                                                  <div class="modal-header">
                                                       <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus data</h1>
                                                       <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close"></button>
                                                  </div>
                                                  <form action="proses_hapus_pembelian.php" method="post">
                                                       <div class="modal-body">
                                                            <input type="hidden" name="PelangganID" value="<?php echo $d['PelangganID']; ?>">
                                                            Apakah anda yakin menghapus data <b><?php echo $d['NamaPelanggan']; ?></b>
                                                       </div>
                                                       <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary">Hapus</button>
                                                       </div>
                                                  </form>
                                             </div>
                                        </div>
                                   </div>
                         <?php } ?>
                    </tbody>
               </table>
          </div>
     </div>
</div>
<!-- Modal Tambah Data -->
<div class="modal fade" id="tambah-data" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog">
          <div class="modal-content">
               <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close"></button>
               </div>
               <form action="proses_pembelian.php" method="post">
                    <div class="modal-body">
                         <div class="form-group">
                              <label>ID Pelanggan</label>
                              <input type="text" name="PelangganID" value="<?php echo date('dmHis'); ?>" class="form-control" readonly>
                         </div>
                         <div class="form-group">
                              <label>Nama Pelanggan</label>
                              <input type="text" name="NamaPelanggan" class="form-control">
                         </div>
                         <div class="form-group">
                              <label>Nomor Telepon</label>
                              <input type="number"  name="NomorTelepon" class="form-control">
                         </div>
                         <div class="form-group">
                              <label>Alamat</label>
                              <input type="text" name="Alamat" class="form-control">
                              <input type="hidden" name="TanggalPenjualan" value="<?php echo $d["Y-m-d"] ?>" class="form-control">
                         </div>
                         <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Keluar</button>
                              <button type="submit" class="btn btn-primary">Simpan</button>
                         </div>
                    </div>
               </form>
          </div>
     </div>
</div>

<?php
include 'footer.php';
?>