<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pegawai</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 20px;
        }
        .container {
            max-width: 600px;
            margin: auto;
            background: #f4f4f4;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #333;
            text-align: center;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        ul li {
            background: #fff;
            margin-bottom: 10px;
            padding: 10px;
            border-left: 4px solid #007bff;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Data Pegawai</h1>
        <ul>
            <li><strong>Nama:</strong> {{ $data['name'] }}</li>
            <li><strong>Umur:</strong> {{ $data['my_age'] }} tahun</li>
            <li><strong>Hobi:</strong> {{ implode(', ', $data['hobbies']) }}</li>
            <li><strong>Tanggal Harus Wisuda:</strong> {{ $data['tgl_harus_wisuda'] }}</li>
            <li><strong>Jarak Hari ke Wisuda:</strong> {{ $data['time_to_study_left'] }}</li>
            <li><strong>Semester Saat Ini:</strong> {{ $data['current_semester'] }}</li>
            <li><strong>Status:</strong> {{ $data['status'] }}</li>
            <li><strong>Cita-cita:</strong> {{ $data['future_goal'] }}</li>
        </ul>
    </div>
</body>
</html>
