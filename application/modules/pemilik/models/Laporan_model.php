<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Laporan_model extends CI_Model {
    public function __construct()
    {
        parent::__construct();
    }

     public function laporan($table, $mulai, $akhir)
    {
        $tgl = $table == 'barang_masuk' ? 'tanggal_masuk' : 'tanggal_keluar';
        $this->db->where($tgl . ' >=', $mulai);
        $this->db->where($tgl . ' <=', $akhir);
        return $this->db->get($table)->result_array();
    }