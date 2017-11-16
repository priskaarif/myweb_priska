<html>
<head> 
<title>Luas dan Keliling Lingkaran</title>
</head>
<body>
   <form method="get" target="_self">
    <h4>Menghitung Luas dan Keliling Lingkaran</h4>
      <table>
         <tr>
              <td>Jari-jari Lingkaran</td>
              <td>:</td>
              <td><input type="text" id="jari" name="jari"></td> 
         </tr>
          <tr>
              <td></td>
              <td></td>
              <td><input type="submit" value="Hitung" ></td> 
         </tr> 
      </table>
    </form>
</body>

<?php
if (!empty($_GET)) {
$jari=$_GET['jari']; 
$luas=22/7*$jari*$jari;
$keliling=22/7*($jari+$jari);

echo "Luas Lingkaran = $luas <br>"; 
echo "Keliling Lingkaran = $keliling <br>";
}
?>
</html>