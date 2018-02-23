<div class="box box-primary">
    <div class="box-header with-border">
        <div class="box-title">Transaksi Tarik Simpanan</div>
    </div>

    <div class="box-body">
        <form role="form">
            <div class="form-group">
                <label for="no_anggota">Nomor Anggota </label>
                <input type="text" name="no_anggota" id="no_anggota" class="form-control" placeholder="Masukan nomor anggota penyimpan"/>
            </div>

            <div class="form-group">
                <label for="jumlah_tarik">Jumlah yang Ditarik</label>
                <input type="text" name="jumlah_tarik" id="jumlah_tarik" class="form-control" placeholder="Masukan jumlah peneraikan tanpa tanda pemisah"/>
            </div>
    </div>

    <div class="box-footer">
        <button type="simpan" class="btn btn-primary">Tarik</button>
    </div>
    </form>
</div>
<div class="box box-info">
    <div class="box-header with-border">
        <div class="box-title">Riwayat Penarikan Simpanan</div>
    </div>

    <div class="box-body">
        <div class="table-responsive">
            <table id="riwayat_transaksi" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>Tanggal transaksi</th>
                    <th>No anggota</th>
                    <th>Jumlah penarikan</th>
                    <th>Sisa saldo</th>
                </tr>
                </thead>
                <tbody>
                <?php for($x = 1; $x <= 100; $x++): ?>
                    <tr>
                        <td>02/02/2018 - 16:00</td>
                        <td>ABC123456</td>
                        <td>1.000.000</td>
                        <td>12.000.000</td>
                    </tr>
                    <tr>
                        <td>02/02/2018 - 16:00</td>
                        <td>ABC123456</td>
                        <td>2.000.000</td>
                        <td>14.000.000</td>
                    </tr>
                    <tr>
                        <td>02/02/2018 - 16:00</td>
                        <td>ABC123456</td>
                        <td>500.000</td>
                        <td>20.000.000</td>
                    </tr>
                <?php endfor; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>