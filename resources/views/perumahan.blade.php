<!DOCTYPE html>
<html>
<head>
    <title>Daftar Perumahan</title>
</head>
<body>
    <h1>Daftar Perumahan</h1>
    <table border="1">
        <tr>
            <th>ID Perumahan</th>
            <th>Luas Perumahan</th>
            <th>Harga Perumahan</th>
        </tr>
        @foreach($perumahan as $p)
        <tr>
            <td>{{ $p->id_perumahan }}</td>
            <td>{{ $p->luas_perumahan }}</td>
            <td>{{ $p->harga_perumahan }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
