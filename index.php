<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>anak ayam</title>
</head>
<body>
<?php
// jumlah saat ayam pertama
$anakayam=3; //menunjukan awal ayam

echo "tek-kotek-kotek-kotek anak ayam turun ";
echo $anakayam;
echo "<br>";
//kondisi saat nilai awal
for ($i=$anakayam; $i>0  ; $i--) { 
	
	$anakayam = $anakayam-1;
	if ($anakayam>0) {
	
	if ($anakayam%2==0) {
	
			?>
			<p style="color:blue">mati satu tinggal <?php echo $anakayam ?> </p>
			<?php //text akan warna biru ketika tinggal 2
			
		}
		elseif ($anakayam%2>0) {
			
			?>
			<p style="color:orange">mati satu tinggal <?php echo $anakayam ?> </p>
			<?php //dan yang ini ketika tinggal 1
			
		}
	}

	else{
		echo "Mati satu habis semua T_T hiks";//menunjukan ayam mati semuah
	}

}

	?>
</body>
</html>
