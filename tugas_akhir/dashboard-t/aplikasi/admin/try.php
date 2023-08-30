<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>Nama</th>
                      <th>Gambar</th>
                      <th>Kategori</th>
                      <th>Lokasi</th>
                      <th>Rate</th>
                      <th>Harga</th>
                      <th>Jam Buka</th>
                      <th>Latitude</th>
                      <th>Longitude</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    include "../../koneksi/koneksi.php";
                    $sql = mysqli_query($koneksi,"SELECT * from daftar_lokasi");
                      while ($data = mysqli_fetch_array($sql)){
                    ?>
                    <tr>
                      <td><?php echo $data['id']; ?></td>
                      <td><?php echo $data['nama']; ?></td>
                      <td><img src="images/<?php echo $data['gambar']; ?>" width="150px"></td>
                      <td><?php echo $data['tipe_barang']; ?></td>
                      <td><?php echo $data['nama_barang']; ?></td>
                      <td><?php echo $data['jenis_barang']; ?></td>
                      <td><?php echo $data['jumlah']; ?></td>
                      <td><?php echo $data['jenis_kondisi']; ?></td>
                      <td><?php echo $data['lokasi']; ?></td>
                      <td><?php echo $data['lokasi']; ?></td>
                      <td>
                        <!-- <a href="javascript:void(0);" id='<?php echo $data['id_barang']; ?>' class='btn btn-success fa fa-eye open_modal'> Detail</a> -->
                        <!-- <a href="#" class='btn btn-success fa fa-eye'> Lihat</a> -->
                        <a href="form-edit-barang.php?noseri=<?php echo $data['noseri']; ?>" class='btn btn-warning fa fa-pencil'></a> <br>
                        <a href="data-history.php?noseri=<?php echo $data['noseri']; ?>" class='btn btn-primary fa fa-clock'></a>
                        <a href="pro-hapus-barang.php?noseri=<?php echo $data['noseri']; ?>" onclick="return confirm('Data akan dihapus?');" class='btn btn-danger fa fa-trash-o'></a><br>
                        <a href="form-tambah-perawatan.php?noseri=<?php echo $data['noseri']; ?>" class='btn btn-success fa fa-plus'></a>
                        <a href="form-tambah-data-keluar.php?noseri=<?php echo $data['noseri']; ?>" class='btn btn-dark fa fa-arrow-left'></a>
                        <!-- <a href="form-tambah-perawatan.php?id=<?php echo $data['noseri']; ?>" class="btn btn-success fa fa-plus"></a> -->
                      
                      </td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>