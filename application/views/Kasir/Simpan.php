<div class="box box-primary">
    <div class="box-header with-border">
        <div class="box-title">Transaksi Simpan</div>
    </div>

    <div class="box-body">
        <form role="form">
            <div class="form-group">
                <label for="no_anggota">Nomor Anggota</label>
                <input type="text" name="no_anggota" id="no_anggota" class="form-control" placeholder="Masukan nomor anggota penyimpan"/>
            </div>

            <div class="form-group">
                <label for="jenis_simpanan">Jenis Simpanan</label>
                <select class="form-control" id="jenis_simpanan" name="jenis_simpanan">
                    <option>Simpanan Pokok</option>
                    <option>Simpanan Sukarela</option>
                </select>
            </div>

            <div class="form-group">
                <label for="jumlah_simpanan">Jumlah Simpanan</label>
                <input type="text" name="jumlah_simpanan" id="jumlah_simpanan" class="form-control" placeholder="Masukan jumlah simpanan tanpa titik"/>
            </div>
    </div>

    <div class="box-footer">
        <button type="simpan" class="btn btn-primary">Simpan</button>
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
                    <th>No anggota</th>
                    <th>Jenis simpanan</th>
                    <th>Total simpanan</th>
                </tr>
                </thead>
                <tbody>
                <?php for($x = 1; $x <= 100; $x++): ?>
                    <tr>
                        <td>02/02/2018 - 16:00</td>
                        <td>ABC123456</td>
                        <td>Simpanan Sukarela</td>
                        <td>500.000</td>
                    </tr>
                    <tr>
                        <td>02/02/2018 - 16:00</td>
                        <td>ABC123456</td>
                        <td>Simpanan Sukarela</td>
                        <td>1.000.000</td>
                    </tr>
                    <tr>
                        <td>02/02/2018 - 16:00</td>
                        <td>ABC123456</td>
                        <td>Simpanan Pokok</td>
                        <td>20.000</td>
                    </tr>
                <?php endfor; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>