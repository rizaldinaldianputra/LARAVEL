<!DOCTYPE html>
<html>

<head>
    <title>Tutorial Membuat Pagination Pada Laravel - www.malasngoding.com</title>
</head>

<body>

    <style type="text/css">
        .pagination li {
            float: left;
            list-style-type: none;
            margin: 5px;
        }
    </style>

    <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
    <h3>Data Pegawai</h3>
    <form action="/pegawai/cari" method="GET">
        <input type="text" name="cari" placeholder="Cari Pegawai .." value="{{ old('cari') }}">
        <input type="submit" value="CARI">
    </form>

    <table border="1">
        <tr>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Umur</th>
            <th>Alamat</th>
        </tr>
        @foreach($pegawai as $p)
        <tr>
            <td>{{ $p->nama_pegawai }}</td>
            <td>{{ $p->pegawai_jabatan }}</td>
            <td>{{ $p->pegawai_umur }}</td>
            <td>{{ $p->pegawai_alamat }}</td>
        </tr>
        @endforeach
    </table>

    <br />
    Halaman : {{ $pegawai->currentPage() }} <br />
    Jumlah Data : {{ $pegawai->total() }} <br />
    Data Per Halaman : {{ $pegawai->perPage() }} <br />


    {{ $pegawai->links() }}


</body>

</html>