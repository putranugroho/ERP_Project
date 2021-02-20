<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        SATUAN
        <small>Setup</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Setup</li>
        <li class="active">Satuan</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="nav-tabs-custom">
        <!-- Tabs within a box -->
        <ul class="nav nav-tabs pull-left">
            <li><a href="#input" data-toggle="tab">Input</a></li>
            <li><a href="#ubah" data-toggle="tab">Ubah</a></li>
            <li><a href="#hapus" data-toggle="tab">Hapus</a></li>
            <li><a href="#otoritas" data-toggle="tab">Otoritas</a></li>
        </ul>
        <div class="tab-content no-padding">
            <!-- Morris chart - Sales -->
            <div class="chart tab-pane" id="input">
                <div class="">
                    <!-- form start -->
                    <form class="form-horizontal">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Kode Satuan</label>

                                <div class="col-sm-10">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="kodeperusahaan">
                                        <div class="input-group-btn">
                                            <button type="button" class="btn btn-danger">Action</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label">Keterangan</label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputPassword3">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Kode Satuan Konversi</label>

                                <div class="col-sm-10">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="kodeperusahaan">
                                        <div class="input-group-btn">
                                            <button type="button" class="btn btn-danger">Action</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label">Nilai Konversi</label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputPassword3">
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                    </form>
                </div>
                <!-- /.box -->
            </div>
            <div class="chart tab-pane" id="ubah" style="position: relative; height: 300px;"></div>
            <div class="chart tab-pane" id="hapus" style="position: relative; height: 300px;"></div>
            <div class="chart tab-pane" id="otoritas" style="position: relative; height: 300px;"></div>
        </div>
    </div>
    <!-- /.nav-tabs-custom -->
</section>
<!-- /.content -->