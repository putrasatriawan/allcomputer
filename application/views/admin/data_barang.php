
<div class="container-fluid">
	<button class="btn btn-sm btn-primary mb-3	" data-toggle="modal" data-target="#tambahbarang" ><i class="fas fa-plus fa-sm"></i>Tambah Barang</button>

	<table class="table table-bordered">
		<tr>
			<th>No</th>
			<th>Nama Barang</th>
			<th>Keterangan</th>
			<th>kategori</th>
			<th>Harga</th>
			<th>Stok</th>
			<th>Detail</th>
      <th>Edit</th>
      <th>hapus</th>
   </tr>

   <?php $no=1;
   foreach ($barang as $brg) 
    :?>
  <tr>
   <td><?php echo $no++ ?></td>
   <td><?php echo $brg->nama_brg ?></td>
   <td><?php echo $brg->keterangan ?></td>
   <td><?php echo $brg->kategori ?></td>
   <td>Rp.<?php echo number_format($brg->harga,0,',','.') ?></td>
   <td><?php echo $brg->stok ?></td>
   <td align="center"><?php echo anchor('admin/data_barang/detail/'.$brg->id_brg,'<div class="btn btn-success btn-sm"><i class="fas fa-search-plus"></i></div>')?></td>
   <td align="center"><?php echo anchor('admin/data_barang/edit/'.$brg->id_brg, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>')?></td>
   <td align="center"><?php echo anchor('admin/data_barang/hapus/'.$brg->id_brg,'<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>')?></td>

 </tr>
<?php endforeach; ?>

</table>
</div>
<!-- Modal -->
<div class="modal fade" id="tambahbarang" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Input Produk</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form action="<?php echo base_url().'admin/data_barang/tambah_aksi';?>"  method="post" enctype="multipart/form-data">
       	<div class="form-group">
       		<label>Nama Barang</label>
       		<input type="text" name="nama_brg" class="form-control">
       	</div>
       	<div class="form-group">
       		<label>Keterangan</label>
       		<input type="text" name="keterangan" class="form-control">
       	</div>
        <div class="form-group">
         <label>Kategori</label>
         <select name="kategori" class="form-control">
          <option>komputer</option>
          <option>laptop</option>
          <option>sparepart laptop</option>
          <option>sparepart komputer</option>
        </select>
        <!-- <input type="text" name="kategori" class="form-control" placeholder="Contoh:komputer,laptop,sparepart laptop,sparepart komputer"> -->
      </div>
      <div class="form-group">
       <label>Harga Diskon </label>
       <input type="text" name="harga" class="form-control">
     </div>
     <div class="form-group">
       <label>Harga Asli </label>
       <input type="text" name="diskon" class="form-control">
     </div>
     <div class="form-group">
       <label>Stok</label>
       <input type="text" name="stok" class="form-control">
     </div>
     <div class="form-group">
       <label>Gambar Produk</label><br>
       <input type="file" name="gambar" class="form-control">
     </div>

   </div>
   <div class="modal-footer">
    <button  type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
    <button  type="submit" class="btn btn-primary third"  >Simpan</button>

  </div>
</div>
</form>
</div>
</div>