<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        REKAP PERALATAN
        <small>Produksi Non Proses</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Produksi</li>
        <li>Produksi Non Proses</li>
        <li class="active">Rekap Peralatan</li>
    </ol>
</section>


<!-- Main content -->
<section class="content">
    <div class="box">
        <div class="box-header">
            <form action="<?php echo base_url() . 'produksi/get_rekap_penjualan'; ?>" method="post">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2">Tanggal Proses</label>

                    <div class="col-sm-6">
                        <div class="input-group">
                            <input type="date" name="date" class="form-control">
                            <div class="input-group-btn">
                                <button type="submit" class="btn btn-primary">Action</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <!-- /.box-header -->
    </div>
    <!-- /.box -->
</section>