<?php
include ("koneksi.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Query untuk menghapus data dari tabel tb_penghuni
    $sql_delete = "DELETE FROM tb_penghuni WHERE id = $id";
    $query_delete = mysqli_query($db, $sql_delete);

    if ($query_delete) {
        echo "<script>alert('Data berhasil dihapus'); window.location.href='penghuni.php';</script>";
        // Redirect kembali ke halaman ini setelah penghapusan berhasil
    } else {
        echo "<script>alert('Gagal menghapus data');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crypko: Anime Character Generation</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@100..900&family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&family=Roboto+Condensed:wght@100..900&family=Teko:wght@300..700&display=swap');
    header {
        background-color: #353535; /* Warna latar belakang */
        color: white; /* Warna teks */
        padding: 20px; /* Padding */
        text-align: center; /* Posisi teks menjadi tengah */
        margin-bottom: 20px; /* Margin bawah */
        border-radius: 5px; /* Membuat sudut header menjadi sedikit melengkung */
    }

    body {
        font-family: "Nunito Sans", sans-serif;
        margin: 0;
        padding: 40px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        border: 1px solid #ddd; /* Tambahkan garis tepi pada tabel */
    }

    th {
        background-color: #BDBBB0;
        color: white;
        text-align: left;
        padding: 10px;
        border-bottom: 2px solid #ddd; /* Tambahkan garis bawah pada header */
    }

    table tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    td {
        padding: 10px;
        border-bottom: 1px solid #ddd; /* Tambahkan garis bawah pada sel data */
    }

    @media(max-width: 500px) {
        .table thead {
            display: none;
        }

        .table,
        .table tbody,
        .table tr,
        .table td {
            display: block;
            width: 100%;
        }

        .table tr {
            margin-bottom: 15px;
        }

        .table td {
            text-align: right;
            padding-left: 50%;
            text-align: right;
            position: relative;
        }

    }

    .custom-button {
        background-color: #BDBBB0;
        border: none;
        color: white;
        padding: 8px 16px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 12px;
        margin-bottom: 10px;
        cursor: pointer;
        border-radius: 5px;
        transition-duration: 0.4s;
    }

    .custom-button:hover {
        background-color: #8A897C;
    }
</style>

<body>
    <header>
        <h2>Daftar Penghuni</h2>
    </header>

    <nav>
        <button class="custom-button" type="button" name="tambah" onclick="location.href='registrasi.php'">Tambahkan Penghuni</button>
        <button class="custom-button" type="button" name="kembali" onclick="location.href='index.php'">Kembali ke Menu Utama</button>
    </nav>

    <table border="1">
        <thead>
            <tr>
                <td>ID</td>
                <td>Nama</td>
                <td>Alamat</td>
                <td>Usia</td>
                <td>Jenis Kelamin</td>
                <td>No Whatsapp</td>
                <td>Tindakan</td>
            </tr>
        </thead>
        <tbody>
            <?php

            $sql = "SELECT * FROM tb_penghuni";
            $query = mysqli_query($db, $sql);

            while ($penghuni = mysqli_fetch_array($query)) {
                echo "<tr>";

                echo "<td>" . $penghuni['id'] . "</td>";
                echo "<td>" . $penghuni['nama'] . "</td>";
                echo "<td>" . $penghuni['alamat'] . "</td>";
                echo "<td>" . $penghuni['usia'] . "</td>";
                echo "<td>" . $penghuni['jk'] . "</td>";
                echo "<td>" . $penghuni['kontak_telepon'] . "</td>";

                echo "<td>";
                echo "<a href='?id=" . $penghuni['id'] . "' onclick=\"return confirm('Apakah anda yakin ingin menghapus data ini?')\">Hapus</a>";

                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

    <p>Jumlah penghuni : <?php echo mysqli_num_rows($query) ?>
    </p>

</body>

</html>