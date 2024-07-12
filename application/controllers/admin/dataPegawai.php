<?php 
class dataPegawai extends CI_Controller {
    
    // public function __construct() {
    //     parent::__construct();
    //     if ($this->session->userdata('hak_akses') !='1') {
    //         $this->session->set_flashdata('pesan',
    //             '<div class="alert alert-info alert-dismissible fade show" role="alert">
    //             <strong>Anda belum login!</strong>
    //             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    //                 <span aria-hidden="true">&times;</span>
    //             </button>
    //             </div>'
    //         );
    //         redirect('welcome');
    //     }
    // }
    

    public function index()
    {
        // $data = $this->db->query("select * from data_pegawai")->result();
        // var_dump($data);
        $data['title'] = "Data Pegawai";
        $data['pegawai'] = $this->penggajianModel->get_data('data_pegawai')->result();
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/dataPegawai', $data);
        $this->load->view('templates_admin/footer');
    }

    public function tambahData() {
        $data['title'] = "Tambah Data Pegawai";
        $data['jabatan'] = $this->penggajianModel->get_data('data_jabatan')->result();
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/formTambahPegawai', $data);
        $this->load->view('templates_admin/footer');
    }

    public function DataAksi() {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->tambahData();
        } else {
            $nik = $this->input->post('nik');
            $nama_pegawai = $this->input->post('nama_pegawai');
            $jenis_kelamin = $this->input->post('jenis_kelamin');
            $jabatan = $this->input->post('jabatan');
            $tanggal_masuk = $this->input->post('tanggal_masuk');
            $status = $this->input->post('status');
            $hak_akses = $this->input->post('hak_akses');
            $username = $this->input->post('username');
            $password = md5($this->input->post('password'));
            $photo = $_FILES['photo']['name'];

            if ($photo='') {} else {
                $config ['upload_path'] = './assets/photo/';
                $config ['allowed_types'] = 'jpg|jpeg|png|tiff';
                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('photo')) {
                    echo "Photo Gagal diupload!";
                } else {
                    $photo = $this->upload->data('file_name');
                }
            }

            $data = array(
                'nik' => $nik,
                'nama_pegawai' => $nama_pegawai,
                'jenis_kelamin' => $jenis_kelamin,
                'jabatan' => $jabatan,
                'tanggal_masuk' => $tanggal_masuk,
                'status' => $status,
                'hak_akses' => $hak_akses,
                'username' => $username,
                'password' => $password,
                'photo' => $photo,
            );

            $this->penggajianModel->insert_data($data, 'data_pegawai' );
            $this->session->set_flashdata('pesan',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Data berhasil ditambahkan!</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>'
            );
            redirect('admin/dataPegawai');
        }
    }

    public function updateData($id) {
        // $where = array('id_pegawai' => $id);
        $data['title'] = 'Update Data Pegawai';
        $data['jabatan'] = $this->penggajianModel->get_data('data_jabatan')->result();

        $data['pegawai'] = $this->db->query("select * from data_pegawai where id_pegawai='$id'")->result();
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/formUpdatePegawai', $data);
        $this->load->view('templates_admin/footer');
    }

    public function updateDataAksi()
    {
        $this->_rules();
        

        if ($this->form_validation->run() == FALSE) {
            $this->updateData();
        } else {
            $id = $this->input->post('id_pegawai');
            $nik = $this->input->post('nik');
            $nama_pegawai = $this->input->post('nama_pegawai');
            $jenis_kelamin = $this->input->post('jenis_kelamin');
            $jabatan = $this->input->post('jabatan');
            $tanggal_masuk = $this->input->post('tanggal_masuk');
            $status = $this->input->post('status');
            $hak_akses = $this->input->post('hak_akses'); 
            $username = $this->input->post('username');
            $password = md5($this->input->post('password'));
            $photo = $this->input->post($_FILES['photo']['name']);


            if ($photo) {
            } else {
            // $delete_photo = $this->db->query("select * from data_pegawai where id_pegawai='$id'")->result();
            // foreach($delete_photo as $hasil_photo) {
                // $config ['upload_path'] = './assets/photo/';
                // $config ['allowed_types'] = 'jpg|jpeg|png|tiff';
                // $this->load->library('photo', $config);
                // $target = $config.$hasil_photo->photo;
            //     $target = "./assets/photo".$hasil_photo->photo;
            //     if(file_exists($target)) {
            //         unlink($target);
            //     }
            // }
            
            $config['upload_path'] = './assets/photo/';
            $config['allowed_types'] = 'jpg|jpeg|png|tiff';
            $this->load->library('upload', $config);
                
                
            $delete_photo = $this->db->query("select * from data_pegawai where id_pegawai='$id'")->result();
            foreach($delete_photo as $hasil_photo) {
            $target = './assets/photo/'.$hasil_photo->photo;
                if(file_exists($target)) {
                    unlink($target);
                }
            }

                if ($this->upload->do_upload('photo')) {
                    $photo = $this->upload->data('file_name');
                    $this->db->set('photo', $photo);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $data = array(
                'nik' => $nik,
                'nama_pegawai' => $nama_pegawai,
                'jenis_kelamin' => $jenis_kelamin,
                'jabatan' => $jabatan,
                'tanggal_masuk' => $tanggal_masuk,
                'status' => $status,
                'hak_akses' => $hak_akses,
                'username' => $username,
                'password' => $password,
                'photo' => $photo,
            );

            $where = array('id_pegawai' => $id);

            $this->penggajianModel->update_data( 'data_pegawai', $data, $where);
            $this->session->set_flashdata(
                'pesan',
                '<div class="alert alert-primary alert-dismissible fade show" role="alert">
                <strong>Data berhasil diperbarui!</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>'
            );
            redirect('admin/dataPegawai');
        }
    }

    public function _rules()
    {
            $this->form_validation->set_rules('nik', 'NIK', 'required');
            $this->form_validation->set_rules('nama_pegawai', 'Nama Pegawai', 'required');
            // $this->form_validation->set_rules('username', 'user Name', 'required');
            // $this->form_validation->set_rules('password', 'password', 'required');
            $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
        // $this->form_validation->set_rules('jabatan', 'Jabatan', 'required');
        // $this->form_validation->set_rules('tangal_masuk', 'Tanggal Masuk', 'required');
        // $this->form_validation->set_rules('status', 'status', 'required');
    }

    public function deleteData($id)
    {
        $where = array('id_pegawai' => $id);
        $this->deleteExistingPhoto($id); // Delete associated photo
        $this->penggajianModel->delete_data($where, 'data_pegawai');
        $this->session->set_flashdata(
            'pesan',
            '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Data berhasil dihapus!</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>'
        );
        redirect('admin/dataPegawai');
    }

    private function deleteExistingPhoto($id) {
        $existing_photo = $this->db->get_where('data_pegawai', ['id_pegawai' => $id])->row()->photo;
    
        if ($existing_photo && file_exists('./assets/photo/' . $existing_photo)) {
            unlink('./assets/photo/' . $existing_photo);
        }
    }
}
?>