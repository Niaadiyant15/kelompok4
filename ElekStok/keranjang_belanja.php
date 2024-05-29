<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran Belanja Online</title>
    <link rel="stylesheet" href="style-keranjang.css">
    <link rel="stylesheet" href="style-keranjang.css">
</head>
<body>
    <div class="container">
        <h2>Pembayaran Belanja Online</h2>
        <form>
            <div class="form-group">
                <label for="name">Nama Lengkap:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="address">Alamat Pengiriman:</label>
                <textarea id="address" name="address" required></textarea>
            </div>
            <div class="form-group">
                <label for="phone">Nomor Telepon:</label>
                <input type="tel" id="phone" name="phone" required>
            </div>
            <div class="form-group">
                <label for="payment-method">Metode Pembayaran:</label>
                <select id="payment-method" name="payment-method" required>
                    <option value="credit-card">Kartu Kredit</option>
                    <option value="bank-transfer">Transfer Bank</option>
                    <option value="cash-on-delivery">Bayar di Tempat</option>
                    <option value="e-wallet">E-Wallet</option>
                </select>
            </div>
            <div class="form-group">
                <label for="card-number">Nomor Kartu:</label>
                <input type="text" id="card-number" name="card-number" required>
            </div>
            <div class="form-group">
                <label for="expiry-date">Tanggal Kedaluwarsa:</label>
                <input type="month" id="expiry-date" name="expiry-date" required>
            </div>
            <div class="form-group">
                <label for="cvv">CVV:</label>
                <input type="text" id="cvv" name="cvv" required>
            </div>
            <button type="submit">Bayar Sekarang</button>
        </form>
    </div>
</body>
</html>
