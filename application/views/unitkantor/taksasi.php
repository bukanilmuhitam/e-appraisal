<div class="page-title">
    <div class="title_left">
        <h3>Taksasi Agunan</h3>
    </div>
</div>

<div class="">
    <div class="col-md-12 col-sm-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Taksasi Agunan</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">

                <ul class="nav nav-tabs bar_tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#showdata" role="tab"
                            aria-controls="showdata" aria-selected="true">Show Data</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#tambahdata" role="tab"
                            aria-controls="tambahdata" aria-selected="false"><i class="fa fa-plus"></i> Tambah Data</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="showdata" role="tabpanel" aria-labelledby="home-tab">

                        <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>NIK Debitur</th>
                                    <th>Nama Debitur</th>
                                    <th>Unit Kantor</th>
                                    <th>Lokasi Agunan</th>
                                    <th>Status</th>
                                </tr>
                            </thead>


                            <tbody>
                                <?php 
                                    $no = 1;
                                    foreach($items as $item){
                                ?>
                                <tr>
                                    <td><?=$no++?></td>
                                    <td><?=$item->nik_debitur?></td>
                                    <td><?=$item->nama_calon_debitur?></td>
                                    <td><?=$item->kode_unit_kantor?></td>
                                    <td><?=$item->lokasi_agunan?></td>
                                    <td><?=$item->status_taksasi?></td>
                                </tr>
                                <?php }?>
                            </tbody>
                        </table>

                    </div>
                    <div class="tab-pane fade" id="tambahdata" role="tabpanel" aria-labelledby="profile-tab">

                        <form action="<?=base_url()?>/taksasi/simpan" method="post">

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="">Setting Unit Kantor</label>
                                        <select name="kantor_cabang" class="form-control select2" style="width : 100%;">
                                            <option>Pilih Unit Kantor</option>
                                            <?php 
                                            foreach($cabangs as $cabang){
                                            ?>
                                            <option value="<?=$cabang->kd_cab?>"><?=$cabang->nm_cabang?></option>
                                            <?php  }?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Nama calon debitur</label>
                                        <input type="text" name="nama_calondebitur" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Nik Debitur</label>
                                        <input type="number" name="nik_debitur" class="form-control">
                                        <span class="text-danger error"></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="">upload_ktp_debitur</label>
                                    <input type="file" name="file_ktp" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Plafond</label>
                                        <input type="text" name="palfond" class="form-control nominal">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="">Nomor Handphone</label>
                                        <input type="text" name="no_hp" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Nama pemilik agunan</label>
                                        <input type="text" name="nama_pemilik_agunan" class="form-control">
                                    </div>

                                    <label for="">Lokasi Agunan</label>
                                    <select name="lokasi_agunan" class="form-control select2" style="width : 100%;">
                                        <option>Pilih wilayah</option>
                                        <?php 
                                            foreach($wilayah as $rowwilayah){
                                         ?>
                                        <option value="<?=$rowwilayah->kode_wilayah?>"><?=$rowwilayah->wilayah?>
                                        </option>
                                        <?php  }?>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-success submit"><i class="fa fa-save"></i>
                                        Simpan</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>