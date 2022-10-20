<div class="container-fluid">
	<div class="card">
  <div class="card-header">Detail Produk</div>
  <div class="card-body">
    	<?php foreach($barang as $brg ) : ?>
    <div class="row">
       <div class="col-md-4"><img src="<?php echo base_url().'./uploads/'.$brg->gambar ?>" class="card-img-top"> </div>
       <div class="col-md-8">
       <table class="table">
       	    <tr>
       	    	<td>Nama Produk</td>
       	    	<td><strong><?php echo $brg->nama_brg  ?></strong></td>	
          	</tr>
       	    <tr>
       	    	<td>Keterangan</td>
       	    	<td><strong><?php echo $brg->keterangan ?></strong></td>	
          	</tr>
       	    <tr>
       	    	<td>Kategori</td>
       	    	<td><strong><?php echo $brg->kategori   ?></strong></td>	
          	</tr>
       	    <tr>
       	    	<td>Stok</td>
       	    	<td><strong><?php echo $brg->stok ?></strong></td>	
          	</tr>
       	    <tr>
       	    	<td>Harga</td>
       	    	<td><div class="btn btn-sm btn-secondary"><strike><small>Rp.<?php echo number_format($brg->diskon,0,',','.')  ?></small></strike></div>
       	    		<strong><div class="btn btn-sm btn-success">Rp.<?php echo number_format($brg->harga,0,',','.')  ?></div></strong></td>	
          	</tr>
       </table> 
       <div align="right">
       <a href="<?php echo base_url('admin/data_barang/index') ?>"><div class="btn btn-sm btn-light">Kembali</div></a>
       	</div>
        
       </div>			
    </div>
    	<?php endforeach; ?>
  </div>
</div>
</div>