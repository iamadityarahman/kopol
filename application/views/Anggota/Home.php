<div class="row">
    <div class="col-md-3">
        <div class="box box-primary">
            <div class="box-body box-profile">
                <img class="profile-user-img img-responsive img-circle" src="<?=base_url()?>assets/img/user2-160x160.jpg" alt="User profile picture">
                <h3 class="profile-username text-center"><?=$nama?></h3>
                <p class="text-muted text-center"><?=$no_anggota?></p>
            </div>
        </div>

        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Informasi Detail</h3>
            </div>

            <div class="box-body">
                <strong>NIK : </strong>
                <p class="text-muted"><?=$nik?></p>

                <strong>Pekerjaan : </strong>
                <p class="text-muted"><?=$pekerjaan?></p>

                <strong>Jenis Kelamin : </strong>
                <p class="text-muted"><?=$jenis_kelamin?></p>

                <strong>No Telpon/HP : </strong>
                <p class="text-muted"><?=$no_hp?></p>

                <strong>Tempat Lahir : </strong>
                <p class="text-muted"><?=$tempat_lahir?></p>

                <strong>Tanggal Lahir : </strong>
                <p class="text-muted"><?=$tanggal_lahir?></p>

                <strong>Agama : </strong>
                <p class="text-muted"><?=$agama?></p>

                <strong>Lama Kontrak Harian : </strong>
                <p class="text-muted"><?=$lama_kontrak?> Hari</p>

                <strong>Email : </strong>
                <p class="text-muted"><?=$email?></p>

                <strong>Anggota Sejak : </strong>
                <p class="text-muted"><?=$anggota_sejak?></p>
            </div>
        </div>
    </div>

    <div class="col-md-9">
        <div class="row">
            <div class="col-xs-6">
                <!-- small box -->
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3><sup style="font-size: 20px">Rp.</sup>100.000.000,-</h3>
                        <p>Total Simpanan</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-chevron-up"></i>
                    </div>
                    <a href="<?=site_url('anggota/simpan')?>" class="small-box-footer">
                        Selengkapnya <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-xs-6">
                <!-- small box -->
                <div class="small-box bg-red">
                    <div class="inner">
                        <h3><sup style="font-size: 20px">Rp.</sup>250.000.000,-</h3>
                        <p>Total Pinjaman</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-chevron-down"></i>
                    </div>
                    <a href="<?=site_url('anggota/pinjam')?>" class="small-box-footer">
                        Selengkapnya <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#riwayat" data-toggle="tab">Riwayat Transaksi</a></li>
                <li><a href="#settings" data-toggle="tab">Perbarui Profil</a></li>
            </ul>

            <div class="tab-content">
                <div class="active tab-pane" id="riwayat">
                    <div class="table-responsive">
                        <table id="riwayat_transaksi" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                    <th>Start date</th>
                                    <th>Salary</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php for($x = 0; $x <= 100; $x++): ?>
                                <tr>
                                    <td>Cedric Kelly</td>
                                    <td>Senior Javascript Developer</td>
                                    <td>Edinburgh</td>
                                    <td>22</td>
                                    <td>2012/03/29</td>
                                    <td>$433,060</td>
                                </tr>
                                <tr>
                                    <td>Airi Satou</td>
                                    <td>Accountant</td>
                                    <td>Tokyo</td>
                                    <td>33</td>
                                    <td>2008/11/28</td>
                                    <td>$162,700</td>
                                </tr>
                                <tr>
                                    <td>Brielle Williamson</td>
                                    <td>Integration Specialist</td>
                                    <td>New York</td>
                                    <td>61</td>
                                    <td>2012/12/02</td>
                                    <td>$372,000</td>
                                </tr>
                                <tr>
                                    <td>Herrod Chandler</td>
                                    <td>Sales Assistant</td>
                                    <td>San Francisco</td>
                                    <td>59</td>
                                    <td>2012/08/06</td>
                                    <td>$137,500</td>
                                </tr>
                                <tr>
                                    <td>Rhona Davidson</td>
                                    <td>Integration Specialist</td>
                                    <td>Tokyo</td>
                                    <td>55</td>
                                    <td>2010/10/14</td>
                                    <td>$327,900</td>
                                </tr>
                                <?php endfor; ?>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="tab-pane" id="settings"><br/>
                    <form class="form-horizontal">
                        <div class="form-group">
                            <label for="nik" class="col-sm-2 control-label">NIK</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nik" value="<?=$nik?>" disabled>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="nama" class="col-sm-2 control-label">Nama</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nama" value="<?=$nama?>" disabled>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="col-sm-2 control-label">Email</label>

                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="email" value="<?=$email?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="pekerjaan" class="col-sm-2 control-label">Pekerjaan</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="pekerjaan" value="<?=$pekerjaan?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputName" class="col-sm-2 control-label">Jenis Kelamin</label>

                            <div class="col-sm-10">
                                <div class="row">
                                    <div class="col-xs-6">
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="L">
                                                Laki-laki
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-xs-6">
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="P" checked>
                                                Perempuan
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="no_hp" class="col-sm-2 control-label">Nomor HP</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="no_hp" value="<?=$no_hp?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="tempat_lahir" class="col-sm-2 control-label">Tempat Lahir</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="tempat_lahir" value="<?=$tempat_lahir?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="tempat_lahir" class="col-sm-2 control-label">Tanggal lahir</label>

                            <div class="col-sm-10">
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" class="form-control pull-right" id="tanggal_lahir" value="<?=$tanggal_lahir?>">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="agama" class="col-sm-2 control-label">Agama</label>

                            <div class="col-sm-10">
                                <select class="form-control" name="agama" id="agama">
                                    <option>option 1</option>
                                    <option>option 2</option>
                                    <option>option 3</option>
                                    <option>option 4</option>
                                    <option>option 5</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="lama_kontrak" class="col-sm-2 control-label">Lama Kontrak</label>

                            <div class="col-sm-10">
                                <input type="number" class="form-control" id="lama_kontrak" value="<?=$lama_kontrak?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-primary">Perbarui</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>