<?php
//memulai session atau melanjutkan session yang sudah ada
session_start();

//menyertakan code dari file koneksi
include "koneksi.php";

//check jika sudah ada user yang login arahkan ke halaman admin
if (isset($_SESSION['username'])) { 
	header("location:admin.php"); 
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST['user'];
  
  //menggunakan fungsi enkripsi md5 supaya sama dengan password  yang tersimpan di database
  $password = md5($_POST['pass']);

	//prepared statement
  $stmt = $conn->prepare("SELECT username 
                          FROM user 
                          WHERE username=? AND password=?");

	//parameter binding 
  $stmt->bind_param("ss", $username, $password);//username string dan password string
  
  //database executes the statement
  $stmt->execute();
  
  //menampung hasil eksekusi
  $hasil = $stmt->get_result();
  
  //mengambil baris dari hasil sebagai array asosiatif
  $row = $hasil->fetch_array(MYSQLI_ASSOC);

  //check apakah ada baris hasil data user yang cocok
  if (!empty($row)) {
    //jika ada, simpan variable username pada session
    $_SESSION['username'] = $row['username'];

    //mengalihkan ke halaman admin
    header("location:admin.php");
  } else {
	  //jika tidak ada (gagal), alihkan kembali ke halaman login
    header("location:login.php");
  }

	//menutup koneksi database
  $stmt->close();
  $conn->close();
} else {
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DREAM()SCAPE</title>
    <link rel="icon" href="img/logo.jpg">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>

  <body class="bg-success-subtle">
    <div class="container mt-5 pt-5">
      <div class="row">
        <div class="col-12 col-sm-8 col-md-6 m-auto">
          <div class="card border-0 shadow rounded-5">
            <div class="card-body">
              <div class="text-center mb-3">
                <i class="bi bi-person-circle h1 display-4"></i>
                <p>DREAM()SCAPE</p>
                <hr />
              </div>
              <form action="" method="post" id="loginForm">
                <input
                  type="text"
                  name="user"
                  id="user"
                  class="form-control my-4 py-2 rounded-4"
                  placeholder="Username"
                />
                <input
                  type="password"
                  name="pass"
                  id="pass"
                  class="form-control my-4 py-2 rounded-4"
                  placeholder="Password"
                />
                <div class="text-center my-3 d-grid">
                  <button class="btn btn-success rounded-4">Login</button>
                </div>
                <p id="errorMsg" class="text-danger"></p>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br> <br>

    <?php
//set variable username dan password dummy
$username = "admin";
$password = "123456";

//check apakah ada request dengan method POST yang dilakukan
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // ambil nilai input
    $userInput = isset($_POST['user']) ? trim($_POST['user']) : "";
    $passInput = isset($_POST['pass']) ? trim($_POST['pass']) : "";

    // --- VALIDASI EMPTY FIELD ---
    if ($userInput === "") {
        echo "Username tidak boleh kosong!";
        exit; // hentikan proses
    }

    if ($passInput === "") {
        echo "Password tidak boleh kosong!";
        exit; // hentikan proses
    }

		//jika lolos semua validasi 
    //tampilkan isi dari variable array POST menggunakan perulangan
    foreach($_POST as $key => $val){
        echo $key . " : " . $val . "<br>";
    }

    //jika lolos semua validasi 
    //check apakah username dan password yang di POST sama dengan data dummy
    if ($userInput == $username AND $passInput == $password) {
        echo "Username dan Password Benar";
    } else {
        echo "Username dan Password Salah";
    }
}
?>

    <script>
  document.getElementById("loginForm").addEventListener("submit", function(event) {
      const user = document.getElementById("user").value.trim();
      const pass = document.getElementById("pass").value.trim();
      const errorMsg = document.getElementById("errorMsg");

      // Reset pesan error
      errorMsg.textContent = "";

      // Cek username kosong
      if (user === "") {
          errorMsg.textContent = "Username tidak boleh kosong!";
          event.preventDefault(); // stop submit (stop kirim data dari form ke server)
          return;
      }

      // Cek password kosong
      if (pass === "") {
          errorMsg.textContent = "Password tidak boleh kosong!";
          event.preventDefault(); // stop submit (stop kirim data dari form ke server)
          return;
      }

      // Jika lolos semua validasi, form akan submit (kirim data dari form ke server)
  });
</script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>

<?php
}
?>