<div class="mt-4">
    <div class="container">
        <h1 class="text-fuchsia">Laporan Keuangan Koperasi</h1>
    </div>
    <div class="table-responsive">
        <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>Tanggal Transaksi</th>
                    <th>Kode Transaksi</th>
                    <th>Jenis Transaksi</th>
                    <th>Jumlah Transaksi</th>
                    <th>Saldo Koperasi</th>
                </tr>
            </thead>
            <tbody>
                <?php for($x = 0; $x <= 100; $x++): ?>
                    <tr>
                        <td>01/01/2018 - 16:02</td>
                        <td>SPP</td>
                        <td>Debit</td>
                        <td>1.000.000</td>
                        <td>12.500.000</td>
                    </tr>
                    <tr>
                        <td>02/01/2018 - 12:02</td>
                        <td>SMW</td>
                        <td>Debit</td>
                        <td>12.000.000</td>
                        <td>20.000.000</td>
                    </tr>
                    <tr>
                        <td>03/01/2018 - 07:02</td>
                        <td>PJM</td>
                        <td>Kredit</td>
                        <td>500.000</td>
                        <td>25.000.000</td>
                    </tr>
                <?php endfor; ?>
            </tbody>
        </table>
    </div>
    <br/>
</div>