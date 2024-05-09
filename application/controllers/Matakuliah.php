<?php
    class Matakuliah extends CI_Controller{
        // Deklarasi class Matakuliah yang berasal dari parent class CI_Controller
        public function index(){
            // Definisikan function index
            $this->load->view('view-form-matakuliah');
            // Meload file view-form-matakuliah pada view
        }

        public function cetak(){
            // Mendefinisikan function cetak yang akan memasukan data yang diinputkan dari file view-form-matakuliah kedalam array $data dengan susunan seperti dibawah
            $data = [
                'kode' => $this->input->post('kode'),
                'nama' => $this->input->post('nama'),
                'sks' => $this->input->post('sks'),
            ];
            // Susunan array $data yang berisi key kode, nama, dan sks
            $this->load->view('view-data-matakuliah', $data);
            // Meload file view-data-matakuliah dan mengirimkan array $data kepada file tersebut
        }
    }