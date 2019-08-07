<?php
// Load file koneksi.php
include "koneksi.php";
 
// Ambil Data yang Dikirim dari Form
$nama_file = $_FILES['inputfile']['name'];
$ukuran_file = $_FILES['inputfile']['size'];
$tipe_file = $_FILES['inputfile']['type'];
$tmp_file = $_FILES['inputfile']['tmp_name'];
 
// Set path folder tempat menyimpan gambarnya
$path = "images/".$nama_file;
 
if($tipe_file == "image/jpeg" || $tipe_file == "image/png"){ // Cek apakah tipe file yang diupload adalah JPG / JPEG / PNG
    // Jika tipe file yang diupload JPG / JPEG / PNG, lakukan :
    if($ukuran_file <= 1000000){ // Cek apakah ukuran file yang diupload kurang dari sama dengan 1MB
        // Jika ukuran file kurang dari sama dengan 1MB, lakukan :
        // Proses upload
        if(move_uploaded_file($tmp_file, $path)){ // Cek apakah gambar berhasil diupload atau tidak
            // Jika gambar berhasil diupload, Lakukan :
            // Proses simpan ke Database
            $query = "INSERT INTO gambar(nama,ukuran,tipe) VALUES('".$nama_file."','".$ukuran_file."','".$tipe_file."')";
            $sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query
 
            if($sql){ // Cek jika proses simpan ke database sukses atau tidak
                echo "SUCCESS<|>Gambar berhasil diupload<|>";
                include "view.php";
            }else{
                // Jika Gagal, Lakukan :
                echo "FAILED<|>Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
            }
        }else{
            // Jika gambar gagal diupload, Lakukan :
            echo "FAILED<|>Maaf, Gambar gagal untuk diupload.";
        }
    }else{
        // Jika ukuran file lebih dari 1MB, lakukan :
        echo "FAILED<|>Maaf, Ukuran gambar yang diupload tidak boleh lebih dari 1MB";
    }
}else{
    // Jika tipe file yang diupload bukan JPG / JPEG / PNG, lakukan :
    echo "FAILED<|>Maaf, Tipe gambar yang diupload harus JPG / JPEG / PNG.";
}
?>