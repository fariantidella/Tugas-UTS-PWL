<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Halaman Pembelian
        <small>Setting Pembelian</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-book"></i> Pembelian</a></li>
        <li class="active">Here</li>
    </ol>
</section>

<section class="content">
<div class="content-wrapper">
	
    <section class="content-header">
		<h1>
			Data Pembelian
        </h1>
    </section>

    <section class="content">
    	<button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i>Tambah Data Pembelian</button>
    	<table class="table">
    		<tr>
    			<th>No</th>
    			<th>Kode Pembelian</th>
    			<th>Nama Pembelian</th>
                <th>Harga</th>
                <th>Stok</th>
                
    		</tr>
    		<?php 
    		$no = 1;
    		foreach ($pembelian as $pembelian): ?>
    		<tr>
    			<td><?php echo $no++ ?></td>
    			<td><?php echo $pembelian->kd_barang ?></td>
    			<td><?php echo $pembelian ->nm_barang?></td>
                <td><?php echo $pembelian ->harga?></td>
                <td><?php echo $pembelian ->stok?></td>
                

    		</tr>
    	<?php endforeach; ?>

    	</table>
    </section>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Form Input data Pembelian</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <form method="post"action="<?php echo site_url().'anggota/tambah_anggota'; ?>">
        	
            <div class="form-group">
        		<label>Kode Pembelian</label>
        		<input type="text" name="id_anggota" class="form-control">
        	</div>
        	
            <div class="form-group">
        		<label>Nama Pembelian</label>
        		<input type="text" name="nama_anggota" class="form-control">
        	</div>
            
            <div class="form-group">
                <label>Harga</label>
                <input type="textarea" name="alamat" class="form-control">
            </div>
            
            <div class="form-group">
                <label>Stok</label>
                <input type="text" name="jenis_kelamin" class="form-control">
            </div>
            

        	   <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
               <button type="submit" class="btn btn-primary">Simpan</button>
           </form>
       </div>
       </div>
   </div>
</div>


</section><!-- /.content -->




<!--tambahkan custom js disini-->
<!-- jQuery UI 1.11.2 -->
<script src="<?php echo base_url('assets/js/jquery-ui.min.js') ?>" type="text/javascript"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Morris.js charts -->
<script src="<?php echo base_url('assets/js/raphael-min.js') ?>"></script>
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/morris/morris.min.js') ?>" type="text/javascript"></script>
<!-- Sparkline -->
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/sparkline/jquery.sparkline.min.js') ?>" type="text/javascript"></script>
<!-- jvectormap -->
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') ?>" type="text/javascript"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/knob/jquery.knob.js') ?>" type="text/javascript"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/daterangepicker/daterangepicker.js') ?>" type="text/javascript"></script>
<!-- datepicker -->
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/datepicker/bootstrap-datepicker.js') ?>" type="text/javascript"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') ?>" type="text/javascript"></script>
<!-- iCheck -->
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/iCheck/icheck.min.js') ?>" type="text/javascript"></script>

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/dist/js/pages/dashboard.js') ?>" type="text/javascript"></script>

<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/dist/js/demo.js') ?>" type="text/javascript"></script>


