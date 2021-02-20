<?php

class Produksi extends CI_Controller
{
    public function lokasi_produksi()
    {
        $this->template->load('template', 'produksi/lokasi_produksi');
    }

    public function area_produksi()
    {
        $this->template->load('template', 'produksi/area_produksi');
    }

    public function komponen_produksi()
    {
        $this->template->load('template', 'produksi/komponen_produksi');
    }

    public function mesin_alat_kendaraan()
    {
        $this->template->load('template', 'produksi/mesin_alat_kend');
    }

    public function variable_produksi()
    {
        $this->template->load('template', 'produksi/variable_produksi');
    }

    public function komposisi_produksi()
    {
        $this->template->load('template', 'produksi/komposisi_produksi');
    }

    public function biaya_produksi()
    {
        $this->template->load('template', 'produksi/biaya_produksi');
    }
}
