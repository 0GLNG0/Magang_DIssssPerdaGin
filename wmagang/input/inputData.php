<?php
session_start();
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "data_harga_pokok";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from the database
// $sql = "SELECT * FROM data_barang";
// $result = $conn->query($sql);

// $data = array();

// if ($result->num_rows > 0) {
//     while ($row = $result->fetch_assoc()) {
//         $data[] = array(
//             'tanggal' => $row['tanggal'],
//             'nama_barang' => $row['nama_barang'],
//             'harga_lama' => $row['harga_lama'],
//             'harga_baru' => $row['harga_baru'],
//             'selisih' => $row['selisih'],
//             'lokasi' => $row['lokasi'],
//         );
//     }
// }

// Convert data to JSON
// $json_data = json_encode($data, JSON_PRETTY_PRINT);

// Output JSON
// header('Content-Type: application/json');
// echo $json_data;

// fungsi selisih
function calculatePriceDifference($harga_lama, $harga_baru)
{
    return $harga_baru - $harga_lama;
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Escape user inputs for security
    $tanggal = mysqli_real_escape_string($conn, $_POST['tanggal']);
    $barang = mysqli_real_escape_string($conn, $_POST['barang']);
    $harga_lama = mysqli_real_escape_string($conn, $_POST['harga_lama']);
    $harga_baru = mysqli_real_escape_string($conn, $_POST['harga_baru']);
    $lokasi = mysqli_real_escape_string($conn, $_POST['lokasi']);

    // Calculate price difference
    $selisih = calculatePriceDifference($harga_lama, $harga_baru);

    // Insert data into the database
    $sql = "INSERT INTO data_barang (tanggal, nama_barang, harga_lama, harga_baru, selisih, lokasi) VALUES ('$tanggal', '$barang', '$harga_lama', '$harga_baru', '$selisih', '$lokasi')";

    if ($conn->query($sql) === TRUE) {
        $_SESSION['success_message'] = "Data Berhasil Ditambahkan";
        header("Location: index.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close connection
$conn->close();
