<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f7f7f7;
            margin: 20px;
            color: #333;
        }
        h2, h3 {
            color: #2c3e50;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 30px;
            background: #ffe6f0;
        }
        table th, table td {
            padding: 12px 15px;
            border: 1px solid #ffb6c1; 
            text-align: left;
        }
        table th {
            background-color: #5d394b; 
            color: white;
        }
        table tr:nth-child(even) {
            background-color: #ffd6e8; 
        }
        form {
            background: #fff;
            padding: 20px;
            box-shadow: 0 0 5px rgba(0,0,0,0.1);
            max-width: 400px;
        }
        input[type="text"], input[type="email"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #bbb;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 14px;
        }
        button {
            padding: 10px 20px;
            font-size: 14px;
        }
    </style>
</head>
<body>

<h2>Data Mahasiswa</h2>

<table>
    <thead>
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Prodi</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $m)
        <tr>
            <td>{{ $m->nim }}</td>
            <td>{{ $m->nama }}</td>
            <td>{{ $m->prodi }}</td>
            <td>{{ $m->email }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

<h3>Tambah Data</h3>

<form action="/store" method="POST">
    @csrf
    <input type="text" name="nim" placeholder="NIM" required>
    <input type="text" name="nama" placeholder="Nama" required>
    <input type="text" name="prodi" placeholder="Prodi" required>
    <input type="email" name="email" placeholder="Email" required>
    <button type="submit">Simpan</button>
</form>

</body>
</html>
