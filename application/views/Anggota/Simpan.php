<div class="box box-primary">
    <div class="box-header with-border">
        <div class="box-title">Transaksi Simpan</div>
    </div>

    <div class="box-body">
        <form role="form">
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
                    <th>No transaksi</th>
                    <th>Jenis simpanan</th>
                    <th>Jumlah simpan</th>
                    <th>Total simpanan</th>
                    <th>Status</th>
                </tr>
                </thead>
                <tbody>
                <?php for($x = 1; $x <= 100; $x++): ?>
                    <tr>
                        <td>02/02/2018 - 16:00</td>
                        <td><a href="#">SPN123456</a></td>
                        <td>Simpanan Sukarela</td>
                        <td>500.000</td>
                        <td><?=500000*$x?></td>
                        <td><span class="label label-warning">Pending</span></td>
                    </tr>
                    <tr>
                        <td>02/02/2018 - 16:00</td>
                        <td><a href="#">SPN123456</a></td>
                        <td>Simpanan Sukarela</td>
                        <td>1.000.000</td>
                        <td><?=1000000*$x?></td>
                        <td><span class="label label-danger">Gagal</span></td>
                    </tr>
                    <tr>
                        <td>02/02/2018 - 16:00</td>
                        <td><a href="#">SPN123456</a></td>
                        <td>Simpanan Pokok</td>
                        <td>20.000</td>
                        <td><?=20000*$x?></td>
                        <td><span class="label label-success">Sukses</span></td>
                    </tr>
                <?php endfor; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>