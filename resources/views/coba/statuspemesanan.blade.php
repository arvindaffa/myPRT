<!DOCTYPE html>
<html>
<head>
    <title>Daftar Tawaran</title>
</head>
<body>
    <h1>Daftar Tawaran</h1>

    <table>
        <thead>
            <tr>
                <th>Pekerja</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($list as $t)
            <tr>
                <td>{{ $t->pekerja->name }}</td>
                <td>{{ $t->status }}</td>
                <td>
                    @if($t->status == 'disetujui' && !$t->isPaid())
                    <form method="POST" action="{{ route('pembayaran', $t->id) }}">
                        @csrf
                        <button type="submit">Bayar</button>
                    </form>
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
