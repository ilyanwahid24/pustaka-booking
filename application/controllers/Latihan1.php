<?php
    class Latihan1 extends CI_Controller{
        public function index(){
            echo "Selamat Datang.. selamat belajar Web Programming";
        }

        public function penjumlahan($n1, $n2){
            $this->load->model('Model_latihan1');
            // Membuat object dari class Model_latihan1
            
            $data['nilai1'] = $n1;
            $data['nilai2'] = $n2;
            // Mendeklarasikan key dan value dari array data yang nantinya akan dikirimkan ke view
            $data['hasil'] = $this->Model_latihan1->jumlah($n1, $n2);
            // Memanggil method jumlah dari object Model_latihan1 dan memasukan hasilnya ke key hasil pada array $data

            $this->load->view('view-latihan1', $data);
            // Render file view-latihan1.php dan mengirimkan data $data kepada view
        }
    }