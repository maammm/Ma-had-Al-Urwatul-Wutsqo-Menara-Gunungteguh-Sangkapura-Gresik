<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran Siswa Baru</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            height: 100vh;
        }
        .container {
            background: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
            max-width: 600px;
            width: 100%;
            margin: 20px;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input, select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        button {
            width: 100%;
            padding: 15px;
            background-color: #5cb85c;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            box-sizing: border-box;
        }
        button:hover {
            background-color: #4cae4c;
        }
        .form-group {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
<div class="container" id=pendaftaran-form>
    <h1>Pendaftaran Santri Baru</h1>
    <form method="POST" action="{{ route('pendaftaran.siswa.store') }}">
        @csrf
        <!-- Identitas Diri -->
        <div class="form-group">
            <label for="name">Nama Lengkap</label>
            <input type="text" id="name" name="name" placeholder="Masukkan nama lengkap" required>
        </div>
        <div class="form-group">
            <label for="birthdate">Tanggal Lahir</label>
            <input type="date" id="birthdate" name="birthdate" required>
        </div>
        <div class="form-group">
            <label for="gender">Jenis Kelamin</label>
            <select id="gender" name="gender" required>
                <option value="">Pilih jenis kelamin</option>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>
        <div class="form-group">
            <label for="address">Alamat</label>
            <input type="text" id="address" name="address" placeholder="Masukkan alamat lengkap" required>
        </div>
        <div class="form-group">
            <label for="phone">No. Telp</label>
            <input type="tel" id="phone" name="phone" placeholder="Masukkan no telepon" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" id="email" name="email" placeholder="Masukkan email" required>
        </div>

        <!-- Data Orangtua -->
        <h2>Data Walisantri</h2>
        <div class="form-group">
            <label for="father_name">Nama Ayah</label>
            <input type="text" id="father_name" name="father_name" placeholder="Masukkan nama ayah" required>
        </div>
        <div class="form-group">
            <label for="father_birthdate">Tanggal Lahir</label>
            <input type="date" id="father_birthdate" name="father_birthdate" required>
        </div>
        <div class="form-group">
            <label for="father_gender">Jenis Kelamin</label>
            <select id="father_gender" name="father_gender" required>
                <option value="">Pilih jenis kelamin</option>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>
        <div class="form-group">
            <label for="father_job">Pekerjaan Ayah</label>
            <input type="text" id="father_job" name="father_job" placeholder="Masukkan pekerjaan ayah" required>
        </div>
        <div class="form-group">
            <label for="father_phone">No. Telepon Ayah</label>
            <input type="tel" id="father_phone" name="father_phone" placeholder="Masukkan no telepon ayah" required>
        </div>
        <div class="form-group">
            <label for="mother_name">Nama Ibu</label>
            <input type="text" id="mother_name" name="mother_name" placeholder="Masukkan nama ibu" required>
        </div>
        <div class="form-group">
            <label for="mother_birthdate">Tanggal Lahir</label>
            <input type="date" id="mother_birthdate" name="mother_birthdate" required>
        </div>
        <div class="form-group">
            <label for="mother_gender">Jenis Kelamin</label>
            <select id="mother_gender" name="mother_gender" required>
                <option value="">Pilih jenis kelamin</option>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>
        <div class="form-group">
            <label for="mother_job">Pekerjaan Ibu</label>
            <input type="text" id="mother_job" name="mother_job" placeholder="Masukkan pekerjaan ibu" required>
        </div>
        <div class="form-group">
            <label for="mother_phone">No. Telepon Ibu</label>
            <input type="tel" id="mother_phone" name="mother_phone" placeholder="Masukkan no telepon ibu" required>
        </div>

        <button type="submit">SUBMIT</button>
    </form>
</div>
</body>
</html>
