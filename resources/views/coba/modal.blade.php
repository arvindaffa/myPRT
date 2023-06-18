<!DOCTYPE html>
<html>
<head>
  <title>Contoh Laman Bayar</title>
  <style>
    .container {
      margin: 20px;
    }

    .input-field {
      margin-bottom: 10px;
    }

    .button {
      padding: 10px 20px;
      background-color: #4CAF50;
      color: white;
      border: none;
      cursor: pointer;
    }

    .popup {
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      padding: 20px;
      background-color: white;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
      z-index: 9999;
    }

    .popup button {
      margin-right: 10px;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Bayar</h2>
    <div class="input-field">
      <label for="amount">Jumlah:</label>
      <input type="number" id="amount" min="0" step="1">
    </div>
    <button class="button" onclick="bayar()">Bayar</button>
  </div>

  <div id="popup" class="popup" style="display: none;">
    <p>Saldo anda tidak mencukupi, silahkan isi PRTpay Anda.</p>
    <button onclick="kembali()">Kembali</button>
    <button onclick="isiUlang()">Isi Ulang</button>
  </div>

  <script>
    function bayar() {
      var amount = document.getElementById('amount').value;
      var saldo = 500000; // Saldo yang dimiliki (contoh)

      if (amount > saldo) {
        document.getElementById('popup').style.display = 'block';
      } else {
        // Lakukan aksi bayar yang sesuai di sini
        alert('Pembayaran berhasil!');
      }
    }

    function kembali() {
      document.getElementById('popup').style.display = 'none';
    }

    function isiUlang() {
      // Lakukan aksi isi ulang saldo di sini
      alert('Isi ulang saldo PRTpay Anda!');
      document.getElementById('popup').style.display = 'none';
    }
  </script>
</body>
</html>
