<?php 
/*
Muhammad Fazril Fuady Hermawan
203040068
https://github.com/Fazril235/pw2021_203040068
Pertemuan 6
Jumat 10.00 - 11.00
*/
?>
<?php
// koneksi ke database dan memilih database
function koneksi(){
    $conn = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conn, "pw_tubes_203040068");

    return $conn;
}
 // function untuk melakukan query dan memasukannya kedalam array
 function query($sql){
    $conn = koneksi();
    $result = mysqli_query($conn, "$sql");
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;

    }
    return $rows;
}

// fungsi untuk menambahkan data didalam database
function tambah($data)
{
    $conn = koneksi();

    // upload gambar 
    $img =upload();
    if( !$img ) {
        return false;
    }
    $merk = htmlspecialchars($data['merk']);
    $tipe = htmlspecialchars($data['tipe']);
    $harga = htmlspecialchars($data['harga']);
    $warna = htmlspecialchars($data['warna']);
    $query = "INSERT INTO otomotif
                VALUES
                ('', '$img', '$merk', '$tipe', '$harga', '$warna')";
    mysqli_query($conn,$query);

    return mysqli_affected_rows($conn);
}

function upload() {

    $namaFile = $_FILES['img']['name'];
    $ukuranFile = $_FILES['img']['size'];
    $error = $_FILES['img']['error'];
    $tmpName = $_FILES['img']['tmp_name'];

    // cek apakah tidak ada gambar yang di upload
    if( $error === 4 ) {
        echo "<script>
            alert('chose image!!');
        </script>";

        return false;
    }
    // 
}

function hapus($id)
{
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM otomotif WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    $conn = koneksi();
    $id = $data["id"];
    $img = htmlspecialchars($data['img']);
    $merk = htmlspecialchars($data['merk']);
    $tipe = htmlspecialchars($data['tipe']);
    $harga = htmlspecialchars($data['harga']);
    $warna = htmlspecialchars($data['warna']);

    $query = "UPDATE otomotif
            SET
            img = '$img',
            merk = '$merk',
            tipe = '$tipe',
            harga = '$harga',
            warna = '$warna'
        WHERE id = $id
            ";
    
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


function cari($keyword) {
    $query = "SELECT * FROM otomotif 
                    WHERE 
                    merk LIKE '%$keyword%' OR 
                    tipe LIKE '%$keyword%' OR 
                    warna LIKE '%$keyword%'
                    ";

            return query($query);
}

function registrasi($data)
{
    $conn = koneksi();
    $username = strtolower(stripcslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);

    // cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username' ");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>";
        return false;
    }
    // enkripsi password 
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambah user baru
    $query_tambah = "INSERT INTO user VALUES('', '$username', '$password')";
    mysqli_query($conn, $query_tambah);

    return mysqli_affected_rows($conn);
}
?>
