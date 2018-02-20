<div class="box box-default color-palette-box">
    <div class="box-body">
        <form role="form">
            <div class="box-header with-border">
                <h3><b><i class="fa fa-check-circle"></i> Konfrmasi Transaksi</b></h3>
            </div>
            <div class="box-body">
                <div class="form-group">
                    <label for="no_rekening">No Rekening Tujuan</label>
                    <select class="form-control" id="no_rekening" name="no_rekening">
                        <option>BCA</option>
                        <option>Mandiri</option>
                        <option>BRI</option>
                        <option>BNI</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="nama_pengirim">Nama Rekening Pengirim</label>
                    <input type="text" class="form-control" id="nama_pengirim" placeholder="Nama lengkap rekening pengirim">
                </div>

                <div class="form-group">
                    <label for="rekening_pengirim">Nomor Rekening Pengirim</label>
                    <input type="text" class="form-control" id="rekening_pengirim" placeholder="Nomor rekening pengirim">
                </div>

                <div class="form-group">
                    <label for="bank_pengirim">Nama Bank yang Digunakan</label>
                    <input type="text" class="form-control" id="bank_pengirim" placeholder="Nama bank yang digunakan pengirim">
                </div>

                <div class="form-group">
                    <label for="tanggal_transfer">Tanggal Transfer</label>

                    <div class="input-group date">
                        <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" class="form-control pull-right" id="tanggal_transfer" placeholder="dd-mm-yyyy">
                    </div>
                </div>

                <div class="form-group">
                    <label for="bukti_pengirim">Bukti Transfer (Foto/Scan). Max. 3MB</label>
                    <input type="file" id="bukti_pengirim">
                </div>

                <hr/>
                <div class="form-group">
                    <label for="bank_pengirim">Pesan Tambahan (Optional)</label>
                    <input type="text" class="form-control" id="bank_pengirim" placeholder="Nama bank yang digunakan pengirim">
                </div>
            </div>
            <!-- /.box-body -->

            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>