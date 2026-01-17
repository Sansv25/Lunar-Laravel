<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Tabel Mahasiswa</title>
    <style>
        /* ====GLOBAL STYLE==== */
        body {
            background-color: #F8F8F8;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        div.container {
            width: 960px;
            padding: 20px 50px 50px;
            background-color: white;
            margin: 40px auto;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            border-radius: 8px;
        }

        h1 {
            text-align: center;
            font-family: Cambria, "Times New Roman", serif;
            color: #333;
            margin-bottom: 30px;
        }

        /* ======TABLE====== */
        table {
            border-collapse: collapse;
            border-spacing: 0;
            width: 100%;
            border: 1px solid #ddd;
        }

        th,
        td {
            padding: 12px 15px;
            border: 1px solid #ddd;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
            color: #333;
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #fafafa;
        }

        tr:hover {
            background-color: #f1f1f1;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Data Mahasiswa</h1>
        <table>
        <thead>
            <tr>
                <th>NIM</th>
                <th>Nama</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Fakultas</th>
                <th>Jurusan</th>
                <th>IPK</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mahasiswa as $mhs)
                <tr>
                    <td>{{ $mhs->nim }}</td>
                    <td>{{ $mhs->nama }}</td>
                    <td>{{ $mhs->tempat_lahir }}</td>
                    <td>{{ \Carbon\Carbon::parse($mhs->tanggal_lahir)->format('d-m-Y') }}</td>
                    <td>{{ $mhs->fakultas }}</td>
                    <td>{{ $mhs->jurusan }}</td>
                    <td>{{ $mhs->ipk }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    </div>
</body>

</html>