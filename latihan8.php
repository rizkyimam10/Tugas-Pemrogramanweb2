<!DOCTYPE html>
<head>

<style>
	.kelas {
		font-size: 28px ;
		font: arial;
		color: #1A0547;
        font-style: italic;
        font-style: underlined;
	}
</style>
</head>
<body>
<?php
 $tulisan="hello world! Here i come";
 $kelas="ganti-style";
 function ganti_style($style) {
 $tulisan;
 $kelas;
 echo($style);
}
 echo "<div class='kelas'>";
 echo ganti_style($tulisan,$kelas);
 echo"</div>";
?>
</body>
</html>