<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="styleReg.css">
    </head>
    <body>
        <?php
            include "connection.php";
            $id=$_GET['id'];
            $query="SELECT * FROM dbdata WHERE id='$id'";
            $result=mysqli_query($connect, $query);
        ?>
        <form action="prosesEdit.php" method="GET">
             <?php
                while($row=mysqli_fetch_array($result)){
            ?>
            <div class="container">
                <div class="jumbotron">
                    <header>
                        <div class="top">
                            <p><img src="logo.png" >Formulir Pendaftaran Calon Mahasiswa Baru Politeknik Negeri Malang</p>
                        </div>
                    </header>
                    <footer>
                        <div class="mid">
                            <h3>I. BIODATA MAHASISWA :</h1>
                            <form action="daftar.php" method="get">
                        <table>
                            <tr>
                                <td>A. No. UN SMA/MA/Sederajat</td>
                                <td><input type="text" name="no"></td>
                            </tr>
                            <tr>
                                <td>B. Nama Lengkap</td>
                                <td><input type="text" name="nama"></td>
                            </tr>
                            <tr>
                                <tr>
                                    <td>C. Jenis Kelamin</td>
                                    <td><input type="text" name="jenis" id="jenis"></td>
                                    <td>Tempat Lahir</td>
                                    <td><input type="text" name="tempat" id="tempat"></td>
                                    
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>Tanggal Lahir</td>
                                    <td><input type="text" name="tgl" id="tgl"></td>
                                </tr>
                            </tr>
                            <tr>
                                <td>D. Nama Orangtua/Wali</td>
                                <td><input type="text" name="namaortu"></td>
                            </tr>
                            <tr>
                                <td>E. Alamat</td>
                                <td><input type="text" name="alamat"></td>
                            </tr>
                            <tr>
                                    <td>F. Kota / Kabupaten</td>
                                    <td><input type="text" name="kota"></td>
                                    <td>No. Telp./HP.</td>
                                    <td><input type="text" name="telp" id="telp"></td>
                            </tr>
                            <tr>
                                <td>G. Asal Sekolah</td>
                                <td><input type="text" name="asal"></td>
                            </tr>
                            <tr>
                                <td>H. Agama</td>
                                <td><input type="text" name="agama"></td>
                            </tr>
                            <tr>
                                <td>
                                    <button type="submit" class="btn btn-primary">EDIT</button>
                                </td>
                            </tr>
                        </table>
                    </form>
                        </div>
                    </footer>
                </div>
            </div>
                <?php
                    }
                ?>
            
        </form>
    </body>
</html>

