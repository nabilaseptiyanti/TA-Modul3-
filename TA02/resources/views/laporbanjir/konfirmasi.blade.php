<!DOCTYPE html>
<html>
<head>
    <title>Hasil Laporan Banjir</title>
</head>
<body>

    <h1>Hasil Laporan Banjir</h1>

    <p>
        Nama Pelapor: {{ $data['nama'] }}
    </p>

    <p>
        Kecamatan: {{ $data['kecamatan'] }}
    </p>

    <p>
        Desa: {{ $data['desa'] }}
    </p>

    <p>
        Tinggi Genangan Air: {{ $data['tinggi'] }} cm
    </p>

    <a href="{{ route('lapor.form') }}">Kembali ke Form</a>

</body>
</html>