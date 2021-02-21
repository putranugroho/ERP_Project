<?php

class Produksi_non_proses extends CI_Controller
{
    public function rekap_penjualan()
    {
        $this->template->load('template', 'aktifitas_perusahaan/produksi_non_proses/rekap_penjualan');
    }

    public function rekap_peralatan()
    {
        $date = $this->input->post('date');

        $data['payload'] = $this->produksi->get_rekap_penjualan($date)->result();
        $this->template->load('template', 'aktifitas_perusahaan/produksi_non_proses/rekap_penjualan_result', $data);
    }
}
