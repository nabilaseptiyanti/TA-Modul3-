<!DOCTYPE html>
<html>
<head>
    <title>Lapor Banjir</title>
</head>
<body>

    <h1>Input Laporan Banjir</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('lapor.proses') }}" method="POST">
        @csrf

        <p>
            <label>Nama Pelapor:</label>
            <input type="text" name="nama" value="{{ old('nama') }}">
        </p>

        <p>
            <label>Kecamatan:</label>
            <input type="text" name="kecamatan" value="{{ old('kecamatan') }}">
        </p>

        <p>
            <label>Desa:</label>
            <input type="text" name="desa" value="{{ old('desa') }}">
        </p>

        <p>
            <label>Tinggi Genangan Air (cm):</label>
            <input type="number" name="tinggi" value="{{ old('tinggi') }}">
        </p>

        <button type="submit">Kirim Laporan</button>
    </form>

</body>
</html>