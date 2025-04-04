<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #fcf5e5;
        }
        .container {
            margin-top: 100px;
        }
        .btn-sewa {
            background-color: #2d572c;
            color: #fff;
            padding: 10px;
            font-size: 18px;
            font-weight: bold;
            border: none;
        }
        .product-image {
            max-width: 50px;
            max-height: 50px;
            object-fit: cover;
            margin-right: 15px;
        }
    </style>
</head>
<body>
<div class="container">
        <h1 class="mb-4">Pembayaran</h1>
        <div class="card">
            <div class="card-body">
                <h3>Ringkasan Pesanan</h3>
                <ul class="list-group mb-3">
                    <??>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center">
                                <img src="../assets/foto_produk/<??>" alt="<??>" class="product-image">
                                <div>
                                    <h5 class="mb-0"><??></h5>
                                    <small>Jumlah Produk: <??></small>
                                </div>
                            </div>
                            <span class="product-price" data-sewa_produk="<??>">
                                Rp<??>
                            </span>
                        </li>
                    <??>
                    <li class="list-group-item d-flex justify-content-between">
                        <strong>Total</strong>
                        <strong id="totalHargaDisplay">Rp<??></strong>
                    </li>
                </ul>
                <h3>Detail Pembayaran</h3>
                <form method="POST" action="">
                    <div class="mb-3">
                        <label for="nama_penerima" class="form-label">Username</label>
                        <input type="text" class="form-control" id="nama_penerima" name="nama_penerima" required>
                    </div>
                    <div class="mb-3">
                        <label for="alamat_penerima" class="form-label">Alamat</label>
                        <textarea class="form-control" id="alamat_penerima" name="alamat_penerima" rows="3" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="no_hp" class="form-label">Nomor HP</label>
                        <input type="tel" class="form-control" id="no_hp" name="no_hp" required>
                    </div>
                    <div class="mb-3">
                        <label for="tanggal_penyewaan" class="form-label">Tanggal Penyewaan</label>
                        <input type="date" class="form-control" id="tanggal_penyewaan" name="tanggal_penyewaan" onchange="updateTotal()" required>
                    </div>
                    <div class="mb-3">
                        <label for="selesai_penyewaan" class="form-label">Tanggal Selesai Penyewaan</label>
                        <input type="date" class="form-control" id="selesai_penyewaan" name="selesai_penyewaan" onchange="updateTotal()" required>
                    </div>
                    <div class="mb-3">
                        <label for="metode_pembayaran" class="form-label">Metode Pembayaran</label>
                        <select class="form-select" id="metode_pembayaran" name="metode_pembayaran" required>
                            <option value="E-Wallet">E-Wallet </option>
                            <option value="COD">Cash on Delivery</option>
                        </select>
                    </div>
                    <input type="hidden" name="total_harga" id="total_harga" value="<??>">
                    <button type="submit" class="btn btn-primary w-100">Sewa</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        function updateTotal() {
            const startDate = document.getElementById('tanggal_penyewaan').value;
            const endDate = document.getElementById('selesai_penyewaan').value;

            if (startDate && endDate) {
                const start = new Date(startDate);
                const end = new Date(endDate);

                // Hitung selisih hari
                const diffTime = Math.abs(end - start);
                const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24));

                if (diffDays >= 0) {
                    let totalHarga = 0;

                    // Loop untuk menghitung harga setiap produk
                    document.querySelectorAll('.product-price').forEach((element) => {
                        const pricePerDay = parseFloat(element.getAttribute('data-sewa_produk'));
                        const quantity = parseInt(element.getAttribute('data-quantity'));

                        totalHarga += diffDays * pricePerDay * quantity;
                    });

                    // Perbarui elemen total harga
                    document.getElementById('totalHargaDisplay').innerText = `Rp${totalHarga.toLocaleString('id-ID')}`;
                    document.getElementById('total_harga').value = totalHarga; // Simpan ke input tersembunyi
                }
            }
        }
    </script>
</body>
</html>