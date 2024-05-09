<?php
    defined('BASEPATH') or exit ('no direct script access allowed');
    // Mencegah access pada script secara langsung
    class Web extends CI_Controller{
        // Deklarasi class Web
        function __construct(){
            parent::__construct();
            // Memanggil function constructor dari parent class yaitu CI_Controller
            // $this->load->helper('url');
        }

        public function index(){
            // Mendefinisikan function index untuk halaman utama dari Web dengan memanggil komponen Halaman yang dipisah pisah menjadi 3 bagian utama v_header, v_index dan v_footer
            $data['judul'] = 'Halaman Depan';
            $this->load->view('v_header', $data);
            $this->load->view('v_index', $data);
            $this->load->view('v_footer', $data);
        }
        
        public function about(){
            // Mendefinisikan function index untuk halaman about dari Web dengan memanggil komponen Halaman yang dipisah pisah menjadi 3 bagian utama v_header, v_about dan v_footer
            $data['judul'] = "Halaman About";
            $this->load->view('v_header', $data);
            $this->load->view('v_about', $data);
            $this->load->view('v_footer', $data);
        }
    }