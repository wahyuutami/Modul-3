<!DOCTYPE html>
 <html>
 <body>
 <?php
 $nama = $_POST['nama'];
 $pass = $_POST['pass'];
 if (($nama == "firdausa") && ($pass == "123")) 
 {    
      echo "Login Berhasil";
      echo "<br>"; 
 } 
 else 
 {    
      echo "Login Gagal"; 
      echo "<br>";
      
 }

 ?>
 </body>
 </html>

 