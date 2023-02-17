<?php 
class LaporanAbsensi extends CI_Controller {
    
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
    
    public function index() {
        $data['title'] = "Laporan Absensi";
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/filterLaporanAbsensi', $data);
        $this->load->view('templates_admin/footer');
    } 

    public function cetakLaporanAbsensi() {
        $data['title'] = "Cetak Laporan Absensi";

        // $bulan = $this->input->post('bulan');
        // $tahun = $this->input->post('tahun');
        // $bulantahun = $bulan.$tahun;

        if ((isset($_POST['bulan'])) && (isset($_POST['tahun']) )) {
            $bulan = $_POST['bulan'];
            $tahun = $_POST['tahun'];
            $bulantahun =  $bulan . $tahun;
        } else {
            $bulan = date('m');
            $tahun = date('Y');
            $bulantahun =  $bulan.$tahun;
        }

        $bulantahun = $bulan.$tahun;
        $data['lap_kehadiran'] = $this->db->query("SELECT * FROM data_kehadiran WHERE bulan='$bulantahun' ORDER BY nama_pegawai ASC")->result();

        $this->load->view('templates_admin/header', $data);
        $this->load->view('admin/cetakLaporanAbsensi', $data);

    }
}
?>