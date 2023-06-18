<!DOCTYPE html>
<html>

<head>
    <title>Daftar Penawaran Kontrak</title>
</head>

<body>
    <h1>Daftar Penawaran Kontrak</h1>

    <table>
        <thead>
            <tr>
                <th>Penawar</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kontrak as $k)
                <tr>
                    <td>{{ $k->user->name }}</td>
                    <td>{{ $k->status }}</td>
                    <td>
                        @if ($k->status == 'diproses')
                            <form method="POST" action="{{ route('konfirmasi', $k->id) }}">
                                @csrf
                                <button type="submit" name="action" value="accept">Terima</button>
                                <button type="submit" name="action" value="reject">Tolak</button>
                            </form>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
