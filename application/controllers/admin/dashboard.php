<?php
class Dashboard extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        if ($this->session->userdata('hak_akses') !='1') {
            $this->session->set_flashdata('pesan',
                '<div class="alert alert-info alert-dismissible fade show" role="alert">
                <strong>Anda belum login!</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>'
            );
            redirect('welcome');
        }
    }
    
    public function index()
    {
        $data['title'] = "Dashboard";

        $pegawai = $this->db->query("select * from data_pegawai");
        $data['pegawai'] = $pegawai->num_rows();
        
        $admin = $this->db->query("select * from data_pegawai where jabatan = 'Admin'");
        $data['admin'] = $admin->num_rows();

        $jabatan = $this->db->query("select * from data_jabatan");
        $data['jabatan'] = $jabatan->num_rows();

        $kehadiran = $this->db->query("select * from data_kehadiran");
        $data['kehadiran'] = $kehadiran->num_rows();
        
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/dashboard', $data);
        $this->load->view('templates_admin/footer');
    }
}
