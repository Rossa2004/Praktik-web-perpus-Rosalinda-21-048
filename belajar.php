<html>
<head> < title> Pengulangan Dengan For </title> </head>
<body>
Tanggal Lahir :
<select name = tanggal> 
<option value = 0 selected > Tanggal 
 <?php
 //bentuk pilihan tanggal 1 sampai dengan 31 
 for ($i 1 ; $ i < 32; $ i + + )
echo "<option value =$i >$i";
 ?>
</option>
< / select >
</body>
< / html >