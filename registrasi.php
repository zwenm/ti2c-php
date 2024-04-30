<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Registrasi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #353535;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background-color: #FFFF;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            margin: auto;
        }

        h3 {
            text-align: center;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-size: 14px;
        }

        input[type="text"],
        input[type="tel"],
        select {
            width: calc(100% - 22px); 
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            margin-bottom: 10px;
            box-sizing: border-box;
            margin-left: 11px; 
            display: flex; 
            justify-content: center; 
        }

        select {
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            background-image: url("data:image/svg+xml,%3Csvg width='12' height='6' viewBox='0 0 12 6' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.41 0L6 4.59 10.59 0 12 1.41l-6 6-6-6L0 1.41' fill='%23000' fill-rule='evenodd'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 8px top 50%;
            padding-right: 24px;
        }

        input[type="submit"] {
            background-color: #BDBBB0;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            width: calc(100% - 22px); /* Adjusted width */
            display: block;
            margin: 0 auto; /* Center submit button */
        }

        input[type="submit"]:hover {
            background-color: #8A897C;
        }
    </style>
</head>

<body>
    <div class="container">
        <h3>Registrasi Penghuni Baru</h3>
        <form action="proses_registrasi.php" method="POST">
            <div class="info-nama-pengunjung">
                <label for="nama">Nama Lengkap</label>
                <input type="text" id="nama" name="nama" placeholder="Masukkan Nama Lengkap" required>
            </div>
            <div class="alamat-pengunjung">
                <label for="alamat">Alamat</label>
                <input type="text" id="alamat" name="alamat" placeholder="Masukkan Alamat" required>
            </div>
            <div class="usia-pengunjung">
                <label for="usia">Usia</label>
                <input type="text" id="usia" name="usia" placeholder="Masukkan Usia" required>
            </div>
            <div class="jk-pengunjung">
                <label for="jenis_kelamin">Jenis Kelamin</label>
                <select name="jenis_kelamin">
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="no-pengunjung">
                <label for="kontak_telepon">No Whatsapp</label>
                <input type="tel" id="kontak_telepon" name="kontak_telepon" placeholder="Masukkan Nomor Whatsapp">
            </div>
            <div class="form-submit">
                <input type="submit" name="submit" value="Registrasi">
            </div>
        </form>
    </div>
</body>

</html>
