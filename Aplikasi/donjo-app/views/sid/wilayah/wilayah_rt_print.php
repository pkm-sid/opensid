<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<title>Data Wilayah</title>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?php if(is_file(LOKASI_LOGO_DESA . "favicon.ico")): ?>
	<link rel="shortcut icon" href="<?php echo base_url()?><?php echo LOKASI_LOGO_DESA?>favicon.ico" />
<?php else: ?>
	<link rel="shortcut icon" href="<?php echo base_url()?>favicon.ico" />
<?php endif; ?>
<link href="<?php echo base_url()?>assets/css/report.css" rel="stylesheet" type="text/css">
<style>
		.textx{
		  mso-number-format:"\@";
		}
		td,th{
			font-size:6.5pt;
		}
</style>
</head>
<body>
<div id="container">

<!-- Print Body --><div id="body"><div class="header" align="center"><label align="left"><?php echo get_identitas()?></label>
<h3> DATA WILAYAH ADMINISTRASI </h3>
<h4>RT <?php echo strtoupper($this->setting->sebutan_dusun)?> <?php echo strtoupper(ununderscore($dusun))?></h4>
</div>
<br>
    <table class="border thick">
	<thead>
		<tr class="border thick">
                <th width="30">No</th>
				<th width="50">RT</th>
				<th width="100">NIK Ketua RT</th>
				<th width="100">Nama Ketua RT</th>
				<th width="50">Jumlah KK</th>
				<th width="50">Jiwa</th>
				<th width="50">LK</th>
				<th width="50">PR</th>
			</tr>
		</thead>
		<tbody>
        <?php  foreach($main as $data): ?>
		<tr>
			<td align="center"><?php echo $data['no']?></td>
			<td align="center" class="textx"><?php echo $data['rt']?></td>
			<td class="textx"><?php echo $data['nik_ketua']?></td>
			<td><?php echo $data['nama_ketua']?></td>
			<td align="right"><?php echo $data['jumlah_kk']?></td>
			<td align="right"><?php echo $data['jumlah_warga']?></td>
			<td align="right"><?php echo $data['jumlah_warga_l']?></td>
			<td align="right"><?php echo $data['jumlah_warga_p']?></td>
		  </tr>
        <?php  endforeach; ?>
		</tbody>
            <tr style="background-color:#BDD498;font-weight:bold;">
			<td colspan="4" width="50"><label>TOTAL</label></th>
			<td align="right"><?php echo $total['jmlkk']?></th>
			<td align="right"><?php echo $total['jmlwarga']?></th>
			<td align="right"><?php echo $total['jmlwargal']?></th>
			<td align="right"><?php echo $total['jmlwargap']?></th>
		</tr>
	</tbody>
</table>
</div>

   <label>Tanggal cetak : &nbsp; </label><?php echo tgl_indo(date("Y m d"))?>
</div>

</body></html>
