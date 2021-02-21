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
                            <input type="date" class="form-control" id="kodeperusahaan">
                            <div class="input-group-btn">
                                <button type="submit" class="btn btn-primary">Action</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <?php foreach ($payload as $load) : ?>
                <table id="Table<?php echo $no++ ?>" class="table table-bordered table-hover dataTable" style="border-color: #000000;">
                    <thead>
                        <tr>
                            <th>Kode Barang</th>
                            <th>Urut</th>
                            <th>Nama Barang</th>
                            <th>Supplier</th>
                            <th>Nama Supplier</th>
                            <th>Harga Sewa</th>
                            <th>Min Sewa</th>
                            <th>Satuan Sewa</th>
                            <th>Lama Pakai</th>
                            <th>Biaya Sewa</th>
                            <th>BBM</th>
                            <th>Tanggal Mulai</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="border-top: 1px solid #000000;"><?php echo $load->kd_brg ?></td>
                            <td style="border-top: 1px solid #000000;"><?php echo $load->urut ?></td>
                            <td style="border-top: 1px solid #000000;"></td>
                            <td style="border-top: 1px solid #000000;"><?php echo $load->pemilik ?></td>
                            <td style="border-top: 1px solid #000000;"></td>
                            <td style="border-top: 1px solid #000000;"><?php echo $load->ha_sewa ?></td>
                            <td style="border-top: 1px solid #000000;"><?php echo $load->min_sewa ?></td>
                            <td style="border-top: 1px solid #000000;"><?php echo $load->kd_satuan ?></td>
                            <td style="border-top: 1px solid #000000;"><?php echo $load->jam_pakai ?></td>
                            <td style="border-top: 1px solid #000000;"><?php echo $load->by_sewa ?></td>
                            <td style="border-top: 1px solid #000000;"><?php echo $load->b_bakar ?></td>
                            <td style="border-top: 1px solid #000000;"><?php echo $load->tgl_mulai ?></td>
                        </tr>
                    </tbody>
                </table>
            <?php endforeach; ?>
        </div>
    </div>
    <!-- /.box-body -->
    </div>
    <!-- /.box -->
</section>