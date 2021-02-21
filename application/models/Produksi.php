<?php

class Produksi extends CI_Model
{

    public function get_rekap_penjualan($date)
    {
        $this->db->from('prs_rekap_alt_kend');
        $this->db->like("tgl_proses", $date);
        $payload = $this->db->get();
        return $payload;
    }
}
