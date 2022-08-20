<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Export</title>
</head>
<body>
    @php
    // fungsi header dengan mengirimkan raw data excel
header('Content-type: application/vnd-ms-excel');

// membuat nama file ekspor "export-to-excel.xls"
header('Content-Disposition: attachment; filename=export-to-excel.xls');
        app\Models\Nasabah::all();
    @endphp
    
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Nasabah Sesuai KTP</th>
                <th>Nama Ibu Kandung</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Bulan Lahir</th>
                <th>Tahun Lahir</th>
                <th>No KTP</th>
                <th>NPWP</th>
                <th>Tanggal Terbitnya KTP</th>
                <th>Bulan Terbitnya KTP</th>
                <th>Tahun Terbitnya KTP</th>
                <th>Expired KTP</th>
                <th>Status Merital</th>
                <th>Jenis Kelamin</th>
                <th>Agama</th>
                <th>Email</th>
                <th>Alamat Rumah</th>
                <th>Kelurahan</th>
                <th>kecamatan</th>
                <th>Kota/Kab</th>
                <th>Kode POS</th>
                <th>Telpon Rumah</th>
                <th>Nomor HP</th>
                <th>Sandi Dati</th>
                <th>Nomor HP</th>
                <th>Sandi Dati</th>
                <th>Jumlah Tanggungan</th>
                <th>Status Pisah Harta</th>
                <th>Nama PT</th>
                <th>Alamat PT</th>
                <th>Kota PT</th>
                <th>Kode POS PT</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>No</td>
                <td>Nama Nasabah Sesuai KTP</td>
                <td>Nama Ibu Kandung</td>
                <td>Tempat Lahir</td>
                <td>Tanggal Lahir</td>
                <td>Bulan Lahir</td>
                <td>Tahun Lahir</td>
                <td>No KTP</td>
                <td>NPWP</td>
                <td>Tanggal Terbitnya KTP</td>
                <td>Bulan Terbitnya KTP</td>
                <td>Tahun Terbitnya KTP</td>
                <td>Expired KTP</td>
                <td>Status Merital</td>
                <td>Jenis Kelamin</td>
                <td>Agama</td>
                <td>Email</td>
                <td>Alamat Rumah</td>
                <td>Kelurahan</td>
                <td>kecamatan</td>
                <td>Kota/Kab</td>
                <td>Kode POS</td>
                <td>Telpon Rumah</td>
                <td>Nomor HP</td>
                <td>Sandi Dati</td>
                <td>Nomor HP</td>
                <td>Sandi Dati</td>
                <td>Jumlah Tanggungan</td>
                <td>Status Pisah Harta</td>
                <td>Nama PT</td>
                <td>Alamat PT</td>
                <td>Kota PT</td>
                <td>Kode POS PT</td>
            </tr>
        </tbody>
    </table>
</body>
</html>
