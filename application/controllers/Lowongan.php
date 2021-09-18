<?php 
class Lowongan extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Lowongan_model');
        // $this->load->library('form_validation');

    }

    public function index(){
        $data['judul'] = 'Halaman Lowongan';
        $data['lowongan'] = $this->Lowongan_model->getAllLowongan()->result();
        

        $this->load->view('templates/header',$data);
        $this->load->view('lowongan/index',$data);
        $this->load->view('templates/footer');
    }

    public function tambah(){
        $data['judul'] = 'Form Tambah Data Lowongan';
        $data['lowongan'] = $this->Lowongan_model->getAllLowongan();
        $data['mitra'] = $this->Lowongan_model->getAllMitra();

        $this->form_validation->set_rules('deskripsi_pekerjaan','Deskripsi','required');
        $this->form_validation->set_rules('mitra_id','Kemitraan','required');
        $this->form_validation->set_rules('tanggal_akhir','Dateline Pendaftaran','required');
        $this->form_validation->set_rules('lowongan_email','Email','required|valid_email');

        if($this->form_validation->run() == FALSE){
            $this->load->view('templates/header',$data);
            $this->load->view('lowongan/tambah',$data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'deskripsi_pekerjaan' => $this->input->post('deskripsi_pekerjaan', true),
                'mitra_id' => $this->input->post('mitra_id', true),
                'tanggal_akhir' => $this->input->post('tanggal_akhir', true),
                'lowongan_email' => $this->input->post('lowongan_email', true)
            ];
            $this->Lowongan_model->TambahDataLowongan($data);
            $this->session->set_flashdata('flash','Ditambahkan');
            redirect('lowongan/index');
        }
    }

    public function hapus($id){
        $data['lowongan_id']=$id;
        $this->Lowongan_model->DeleteData($data);
        $this->session->set_flashdata('flash','Dihapus');
        redirect('lowongan/index');

    }

    public function detail($id){
        $data['judul'] = 'Detail Data Lowongan';
        $data['lowongan'] = $this->Lowongan_model->getLowonganById($id);

        $this->load->view('templates/header',$data);
        $this->load->view('lowongan/detail',$data);
        $this->load->view('templates/footer');

    }
    
}