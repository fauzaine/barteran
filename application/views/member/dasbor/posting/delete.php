<button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#myModal<?php echo 
$posting->id_posting ?>" title="Delete posting">
	<i class="fa fa-trash-o"></i>
</button>
<div class="modal fade" id="myModal<?php echo $posting->id_posting ?>" tabindex="-1" role="dialog"aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
	<div class="modal-content">
	<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		<h4 class="modal-title" id="myModalLabel">Hapus Data posting?</h4>
	</div>
	<div class="modal-body">
		Yakin ingin menghapus data posting ini?
		</div>
		<div class="modal-footer">
		<button type="button" class="btn btn-default" data-dismiss="modal">close</button>
			<a href="<?php echo base_url('member/posting/delete/'.$posting->id_posting) ?>" class="btn btn-danger"><i class="fa fa-trash-o"></i> Ya, hapus data ini</a>
			</div>
			</div>
			</div>
			</div>

