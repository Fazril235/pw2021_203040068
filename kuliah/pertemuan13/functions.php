<?php
/*
Muhammad Fazril
203040068
https://github.csom/Fazril235/pw2021_203040068
Pertemuan 13
*/
?>
<?php

function Koneksi()
{
  return mysqli_connect('localhost', 'root', '', 'phpdasar');
}

function query($query)
{
  $conn = koneksi();

  $result = mysqli_query($conn, $query);

  // jika hasilnya hanya 1 data
  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }


  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

function upload()
{
  $nama_file = $_FILES['Gambar']['name'];
  $tipe_file = $_FILES['Gambar']['type'];
  $ukuran_file = $_FILES['Gambar']['size'];
  $error = $_FILES['Gambar']['error'];
  $tmp_file = $_FILES['Gambar']['tmp_name'];

  //ketika tidak ada gambar yang dipilih
  if($error == 4) {
    // echo "<script>
    //           alert('pilih gambar terlebih dahulu!');
    //       </script>";
          return 'nophoto.png'; 
  }

  // cek ekstensi file
  $daftar_gambar = ['jpg', 'jpeg', 'png'];
  $ekstensi_file = explode('.', $nama_file);
  $ekstensi_file = strtolower(end($ekstensi_file));
  if(!in_array($ekstensi_file, $daftar_gambar)) {
    echo "<script>
            alert('yang anda pilih bukan gambar!');
          </script>";
      return false;
  }

  // cek type file
  if($tipe_file != 'image/jpeg' && $tipe_file != 'image/png') {
    echo "<script>
            alert('yang anda pilih bukan gambar!');
          </script>";
      return false;
  }

  // cek ukuran file
  // maksimal 5Mb = 5000000
  if($ukuran_file > 5000000) {
    echo "<script>
            alert('ukuran terlalu besar!');
          </script>";
      return false;    
  }

  // lolos pengecekan
  // siap upload file
  // generate nama file baru
  $nama_file_baru = uniqid();
  $nama_file_baru .= '.';
  $nama_file_baru .= $ekstensi_file;
  move_uploaded_file($tmp_file, 'img/' . $nama_file_baru);

  return $nama_file_baru;
}

function tambah($data)
{
  $conn = koneksi();

  $nama = htmlspecialchars($data['Nama']);
  $nrp = htmlspecialchars($data['Nrp']);
  $email = htmlspecialchars($data['Email']);
  $jurusan = htmlspecialchars($data['Jurusan']);
  // $gambar = htmlspecialchars($data['Gambar']);

  // upload gambar
  $gambar = upload();
  if(!$gambar) {
    return false;
  }

  $query = "INSERT INTO
              mahasiswa
            VALUES
            (null, '$nama', '$nrp', '$email', '$jurusan', '$gambar');
            ";
  mysqli_query($conn, $query);
  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}

function hapus($id)
{
  $conn = koneksi();

  // menghapus gambar di folder img
  $mhs = query("SELECT * FROM mahasiswa WHERE id - $id");
  if($mhs['Gambar'] != 'nophoto.png') {
    unlink('img/' . $mhs['Gambar']);
  }

  mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id") or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function ubah($data)
{
  $conn = koneksi();

  $id = $data['id'];
  $nama = htmlspecialchars($data['Nama']);
  $nrp = htmlspecialchars($data['Nrp']);
  $email = htmlspecialchars($data['Email']);
  $jurusan = htmlspecialchars($data['Jurusan']);
  $gambar_lama = htmlspecialchars($data['Gambar_lama']);

  $Gambar = upload();
    if (!$Gambar) {
      return false;
  }

  if ($gambar == 'nophoto.png') {
    $gambar = $gambar_lama;
  }

  $query = "UPDATE mahasiswa SET
              Nama = '$nama',
              Nrp = '$nrp',
              Email = '$jurusan',
              Gambar = '$gambar'
            WHERE id = $id";
  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function cari($keyword)
{
  $conn = koneksi();

  $query = "SELECT * FROM mahasiswa
              WHERE 
              Nama LIKE '%$keyword%' OR 
              Nrp LIKE '%$keyword%'
              ";

  $result = mysqli_query($conn, $query);

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

function login($data)
{
  $conn = koneksi();

  $username = htmlspecialchars($data['username']);
  $password = htmlspecialchars($data['password']);

  // cek dulu username
  if ($user = query("SELECT * FROM user WHERE username = '$username'")) {
    //cek password
    if(password_verify($password, $user['password'])) {
   // set session
    $_SESSION['login'] = true;

    header("Location: index.php");
    exit;
    }
  } 
    return [
      'error' => true,
      'pesan' => 'Username / Pasword Salah!'
    ];
}

function registrasi($data) 
{
  $conn = koneksi();

  $username = htmlspecialchars(strtolower($data['username']));
  $password1 = mysqli_real_escape_string($conn, $data['password1']);
  $password2 = mysqli_real_escape_string($conn, $data['password2']);

// jika username / password kosong
  if(empty($username) || empty($password1) || empty($password2)) {
    echo "<script>
            alert('username / password tidak boleh kosong!');
            document.location.href = 'registrasi.php';
            </script>";
          return false;
  }
  //jika username sudah ada di database
  if(query("SELECT * FROM user WHERE username = '$username'")) {
    echo "<script>
            alert('username sudah terdaftar!');
            document.location.href = 'registrasi.php';
            </script>";
          return false;
  }
// jika konfirmasi password tidak sesuai
if( $password1 !== $password2) {
  echo "<script>
  alert('konfirmasi password tidak sesuai!');
  document.location.href = 'registrasi.php';
  </script>";
return false;
}
//  jika password < 5 digit 
if( strlen($password1) < 5){
  echo "<script>
            alert('password terlalu pendek!');
            document.location.href = 'registrasi.php';
            </script>";
          return false;
}
// jika username & password sudah sesuai
// enkripsi password
$password_baru = password_hash($password1, PASSWORD_DEFAULT);
// insert ke tabel user
$query = "INSERT INTO user 
            VALUES 
            (null, '$username', '$password_baru')
            ";
  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}
