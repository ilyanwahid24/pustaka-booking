<?php
    class Matakuliah extends CI_Controller{
        function __construct(){
            parent::__construct();
            $this->load->library('form_validation');
        }
        
            
        
        // Deklarasi class Matakuliah yang berasal dari parent class CI_Controller
        public function index(){
            // Definisikan function index
            $this->load->view('view-form-matakuliah');
            // Meload file view-form-matakuliah pada view
        }

        public function cetak(){
            $this->form_validation->set_rules('kode', 'Kode MataKuliah', 'required');
            $this->form_validation->set_rules('nama', 'Nama MataKuliah', 'required');
            // $this->form_validation->set_rules('kode', 'Kode Matakuliah', 'required|min_length[3]', [
            //     'required' => 'Kode Matakuliah Harus diisi', 
            //     'min_length' => 'Kode terlalu pendek'
            // ]);

            // $this->form_validation->set_rules('nama', 'Nama Matakuliah', 'required|min_length[3]', [
            //     'required' => 'Nama Matakuliah Harus diisi',
            //     'min_length' => 'Nama terlalu pendek'
            // ]);

            if($this->form_validation->run() != false){
                // Mendefinisikan function cetak yang akan memasukan data yang diinputkan dari file view-form-matakuliah kedalam array $data dengan susunan seperti dibawah
                $data = [
                    'kode' => $this->input->post('kode'),
                    'nama' => $this->input->post('nama'),
                    'sks' => $this->input->post('sks'),
                ];
                // Susunan array $data yang berisi key kode, nama, dan sks
                $this->load->view('view-data-matakuliah', $data);
            
            } else {
                // Meload file view-data-matakuliah dan mengirimkan array $data kepada file tersebut
                $this->load->view('view-form-matakuliah');
        }
        }
    }