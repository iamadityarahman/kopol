<div class="box box-primary">
    <div class="box-header with-border">
        <div class="box-title">Transaksi Angsuran</div>
    </div>

    <div class="box-body">
        <form role="form">
            <div class="form-group">
                <label for="jenis_simpanan">Pilih pinjaman</label>
                <select class="form-control" id="jenis_simpanan" name="jenis_simpanan">
                    <option>SM100 - 500.000 (50.000/bulan) - 12 Februrari 2018</option>
                    <option>SM200 - 1.000.000 (100.000/bulan) - 05 April 2018</option>
                </select>
            </div>

            <div class="form-group">
                <label for="bank_tujuan">Bank Tujuan Transfer</label>
                <select class="form-control" id="bank_tujuan" name="bank_tujuan">
                    <option>BCA</option>
                    <option>Mandiri</option>
                    <option>Kuda</option>
                </select>
            </div>
    </div>

    <div class="box-footer">
        <button type="simpan" class="btn btn-primary">Angsur</button>
    </div>
    </form>
</div>
<div class="box box-info">
    <div class="box-header with-border">
        <div class="box-title">Riwayat Transaksi Simpan</div>
    </div>

    <div class="box-body">
        <div class="table-responsive">
            <table id="riwayat_transaksi" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>Tanggal transaksi</th>
                    <th>No transaksi</th>
                    <th>Kode pinjaman</th>
                    <th>Angsuran ke</th>
                    <th>Status</th>
                </tr>
                </thead>
                <tbody>
                <?php for($x = 1; $x <= 100; $x++): ?>
                    <tr>
                        <td>02/02/2018 - 16:00</td>
                        <td><a href="#">SPN123456</a></td>
                        <td>Simpanan Sukarela</td>
                        <td>1</td>
                        <td><span class="label label-warning">Pending</span></td>
                    </tr>
                    <tr>
                        <td>02/02/2018 - 16:00</td>
                        <td><a href="#">SPN123456</a></td>
                        <td>Simpanan Sukarela</td>
                        <td>2</td>
                        <td><span class="label label-danger">Gagal</span></td>
                    </tr>
                    <tr>
                        <td>02/02/2018 - 16:00</td>
                        <td><a href="#">SPN123456</a></td>
                        <td>Simpanan Pokok</td>
                        <td>3</td>
                        <td><span class="label label-success">Sukses</span></td>
                    </tr>
                <?php endfor; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>