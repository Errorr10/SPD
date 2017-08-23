<script type="text/javascript" src="../js/my.js"></script>
<?php
function tujuan(){
?>
<div id="myModal3" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Tambah Tempat Tujuan</h4>
            </div>
            <div class="modal-body">
				<form action="" method="post">
					<div class="form-group">
						<label class="control-label col-lg">Nama Tujuan</label>
						<input type="text" required class="form-control" name="nama_tujuan"/>
					</div>
						<input type="submit" class="btn btn-primary" name="tujuan" value="Tambah"/>
				</form>
            </div>
        </div>
    </div>
</div>
<?php
}
?>
<?php
function makan(){
?>

<div id="myModal4" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Tambah Rincian Panjar</h4>
            </div>
            <div class="modal-body">
			
				<form action="" method="post">
				<input type="hidden" name="id_panjar" autofocus required class="form-control" readonly value="<?php echo $editDb["id_panjar"];?>" select/>
					<div class="form-group">
						<label class="control-label col-lg">Tanggal</label>
						<input type="date" required class="form-control" name="tgl"/>
					</div>
				<form action="" method="post">
					<div class="form-group">
						<label class="control-label col-lg">Makan Pagi</label>
						<input type="number" required class="form-control" name="mkn_pg"/>
					</div>
				<form action="" method="post">
					<div class="form-group">
						<label class="control-label col-lg">Makan Siang</label>
						<input type="number" required class="form-control" name="mkn_sg"/>
					</div>
				<form action="" method="post">
					<div class="form-group">
						<label class="control-label col-lg">Makan Malam</label>
						<input type="number" required class="form-control" name="mkn_ml"/>
					</div>
					<div class="form-group">
						<label class="control-label col-lg">Makan Lainnya</label>
						<input type="number" required class="form-control" name="dll"/>
					</div>
					<div class="form-group">
						<label class="control-label col-lg">Harga</label>
						<input type="number" required class="form-control" name="hrglain"/>
					</div>
					<div class="form-group">
						<label class="control-label col-lg">Accomodation</label>
						<input type="number" required class="form-control" name="acomodation"/>
					</div>
					<div class="form-group">
						<label class="control-label col-lg">Biaya</label>
						<input type="number" required class="form-control" name="BiayaAcom"/>
					</div>
				<form action="" method="post">
					<div class="form-group">
						<label class="control-label col-lg">Daily Allowance</label>
						<input type="number" required class="form-control" name="daily"/>
					</div>
				<form action="" method="post">
					<div class="form-group">
						<label class="control-label col-lg">Keterangan</label>
						<input type="textarea"  class="form-control" name="ket"/>
					</div>
						<input type="submit" class="btn btn-primary" name="makan" value="Tambah"/>
				</form>
            </div>
        </div>
    </div>
</div>
<?php
}
?>
<?php
function trans(){
?>

<div id="myModal5" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Tambah Rincian Transportasi</h4>
            </div>
            <div class="modal-body">
			
				<form action="" method="post">
				<input type="hidden" name="id_panjar" autofocus required class="form-control" readonly value="<?php echo $editDb["id_panjar"];?>" select/>
					<div class="form-group">
						<label class="control-label col-lg">Tanggal</label>
						<input type="date" required class="form-control" name="tgl_trans"/>
					</div>
				<form action="" method="post">
					<div class="form-group">
						<label class="control-label col-lg">from</label>
						<input type="text" required class="form-control" name="asal"/>
					</div>
				<form action="" method="post">
					<div class="form-group">
						<label class="control-label col-lg">To</label>
						<input type="text" required class="form-control" name="tujuan"/>
					</div>
				<form action="" method="post">
					<div class="form-group">
						<label class="control-label col-lg">Quantity</label>
						<input type="number" required class="form-control" name="qty"/>
					</div>
				<form action="" method="post">
					<div class="form-group">
						<label class="control-label col-lg">Jenis Transportasi</label>
						<input type="text" required class="form-control" name="jns_trans"/>
					</div>
				<form action="" method="post">
					<div class="form-group">
						<label class="control-label col-lg">Harga</label>
						<input type="text" required class="form-control" id="inputku" name="harga" onkeydown="return numbersonly(this, event);" onkeyup="javascript:tandaPemisahTitik(this);"/>
					</div>
				<form action="" method="post">
					<div class="form-group">
						<label class="control-label col-lg">Keterangan</label>
						<input type="textarea"  class="form-control" name="keterangan"/>
					</div>
						<input type="submit" class="btn btn-primary" name="trans" value="Tambah"/>
				</form>
            </div>
        </div>
    </div>
</div>
<?php
}
?>