<?php
// Cetak notifikasi
if($this->session->flashdata('sukses')){
    echo '<div class="alert alert-success">';
    echo $this->session->flashdata('sukses');
    echo '</div>';

}
?>

<table class="table table-striped table-bordered table-hover" id="dataTables-example">
<thead>
<tr>
    <th>#</th>
    <th>Postingan</th>
    <th>Penawaran</th>
    <th>Aksi</th>
    
</tr>
</thead>
<tbody>
<?php $i= 1; foreach($pesan as $pesan) { ?>
<tr class="odd gradex">
    <td><?php echo $i ?></td>
    <td><img src="<?php echo base_url('assets/upload/image/thumbs/'.$pesan->gambar) ?>" width="60" height="60"><br><a href="<?php echo base_url('admin/posting/read/'.$pesan->slug_posting) ?>"><?php echo $pesan->judul ?></a></td>
    <td><img src="<?php echo base_url('assets/upload/image/thumbs/'.$pesan->gambar1) ?>" width="60" height="60"><br><a href="<?php echo base_url('admin/pesan/read/'.$pesan->id_pesan) ?>"><?php echo $pesan->nama_barang1 ?></td>
   <td>
   <?php
    //Delete
    include('delete.php');
    ?>
    </td>
     
</tr>

<?php $i++; } ?>
</tbody>
</table>
