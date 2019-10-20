<?php 

class About extends CI_Controller {
    public function index($nama = '')
    {
        $data['judul'] = 'Halaman About';
        $data['nama'] = 'Ardiana Juniawan Salim';
         $data['umur'] = '19';
          $data['pekerjaan'] = 'Prog-amer';
        $this->load->view('templates/header', $data);
        $this->load->view('about/index', $data);
        $this->load->view('templates/footer');
    }
}