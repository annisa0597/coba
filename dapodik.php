<?php
include "koneksi.php";?>
<?php
	$query = "SELECT * FROM datasekolah";
	$sql = mysql_query($query, $koneksi);
	$jml_baris = mysql_num_rows($sql);
	
?>

<!-- daftar pesan -->
<table border=1 cellspacing=0 width="80%">
	<tr>
		<td>nama</td>
		<td>nps</td>
		<td>bp</td>
		<td>status</td>
	</tr>
	<?php if($jml_baris==0): ?>
	<tr><td colspan=3>Tidak ada Pesan</td></tr>
	<?php else: ?>
	
	<tr>
		<?php while($data = mysql_fetch_object($sql)): ?>
		<td><?php echo $data->nama;?></td>
		<td><?php echo $data->nps;?></td>
		<td><?php echo $data->bp;?></td>
		<td><?php echo $data->status;?></td>
	</tr>
		<?php endwhile;?>
		<?php endif; ?>
</table>
<br/>



	
	