<?php
 if(!isset($_SESSION)){
     session_start();
 }

 $koneksi = mysqli_connect("localhost", "root", "", "wad_modul4");

 if (!$koneksi){
     echo " <script>
                alert ('Gagal Terkoneksi ke Database');
            </script>";
    die("Koneksi Gagal". mysqli_connect_error());
 }

 function registrasi($request)
 {
     global $koneksi;
 
     $nama = $request['nama'];
     $email = $request['email'];
     $no_hp = $request['no_hp'];
     $password = mysqli_real_escape_string($koneksi, $request['password']);
     $passwordConfirm = mysqli_real_escape_string($koneksi, $request['passwordConfirm']);
 
     //cek email
     $cekEmail = "SELECT email FROM user WHERE email='$email'";
     $select = mysqli_query($koneksi, $cekEmail);
 
     if(!mysqli_fetch_assoc($select)) {
         //cek password
         if ($password == $passwordConfirm) {
             $password = password_hash($password, PASSWORD_DEFAULT);
 
             //input data registrasi ke database
             $query = "INSERT INTO user VALUES ('', '$nama', '$email', '$password', '$no_hp')";
             mysqli_query($koneksi, $query);
 
             //message alert berhasil
             $_SESSION['registered'] = 'Berhasil Melakukan Registrasi,Silahkan Login :D';
             header("Location: Firenze_Login.php");
             exit();
         }
     }
     //message alert gagal
     $_SESSION['message'] = 'Email sudah pernah digunakan!. Silahkan menggunakan email lainnya!';
     header("Location: Firenze_Register.php");
     exit();
 }

 function login($request)
{
    global $koneksi;

    $email = $request['email'];
    $password = $request['password'];

    //cek email
    $cekEmail = "SELECT * FROM user WHERE email='$email'";
    $select = mysqli_query($koneksi, $cekEmail);
    
    if(mysqli_num_rows($select) == 1) {
        $result = mysqli_fetch_assoc($select);

        //cek password
        if(password_verify($password, $result['password'])){
            $_SESSION['id'] = $result['id'];
            $_SESSION['nama'] = $result['nama'];
            $_SESSION['email'] = $result['email'];
            $_SESSION['no_hp'] = $result['no_hp'];

            //alert message berhasil
            $_SESSION['message'] = 'Telah Berhasil Melakukan Login!';

            //pindah ke index
            header("Location: Firenze_Index.php");
            exit();
        } else {
            //message alert password salah
            $_SESSION['message'] = 'Password salah. Silahkan Login kembali!';
            header("Location: Firenze_Login.php");
            exit();
        }
    }
    //alert message failed login
    $_SESSION['message'] = 'Login Tidak Berhasil. Silahkan Login Kembali!';
    header("Location: Firenze_Login.php");
    exit();
}
?>