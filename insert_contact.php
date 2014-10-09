<?php
    include './koneksi.php';
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    
    $query = mysql_query("INSERT INTO tb_contact (nama, email) VALUES ('$nama','$email')", $connection) or die(mysql_error());
   
    if ($query){
        ?>
        <script language="JavaScript">
        document.location='index.php'</script>
        <?php
    }
?>
