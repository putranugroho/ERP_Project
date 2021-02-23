<?php

class Produksi extends CI_Model
{

    public function get_rekap_penjualan($date)
    {
        $this->db->select('*');
        $this->db->from('prs_rekap_alt_kend a');
        $this->db->join('m_sarana_prod b', 'b.kd_brg=a.kd_brg', 'left');
        $this->db->join('m_customer c', 'c.kd_cust=a.pemilik', 'left');
        $this->db->like("a.tgl_proses", $date);
        $payload = $this->db->get();
        return $payload;
    }
}
