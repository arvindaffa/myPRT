<!-- Tampilkan daftar data pekerja -->
@foreach ($daftarPekerja as $pekerja)
    <div class="pekerja">
        <h4>{{ $pekerja->name }}</h4>
        <p>Gaji: Rp {{ number_format($pekerja->gaji, 0, ',', '.') }}</p>
        <button onclick="bayarGaji({{ $pekerja->id }})">Bayar Gaji</button>
    </div>
@endforeach

<script>
    function bayarGaji(id) {
        fetch('/bayargaji', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}' // Ganti dengan token CSRF yang sesuai
                },
                body: JSON.stringify({
                    id: id
                })
            })
            .then(response => response.text())
            .then(data => {
                // Tanggapi respon dari server setelah pengurangan saldo berhasil dilakukan
                // Lakukan penanganan sesuai dengan kebutuhan aplikasi Anda
                console.log(data);
            })
            .catch(error => {
                // Tangani jika terjadi error dalam proses pengurangan saldo
                console.error(error);
            });
    }
</script>
