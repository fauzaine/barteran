<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dasbor extends CI_Controller {
	// Load database
	public function __construct() {
		parent::__construct();
		if ($this->session->userdata('akses_level')!="User") {
			redirect('error');
		}
		$this->load->model('user_model');
		$this->load->model('posting_model');
		$this->load->model('kategori_posting_model');
    $this->config->load('pagination1',TRUE);
			}
 

  // Index
  public function Index(){
  	$per_page=$this->config->item('per_page','pagination1');
        $row =$this->uri->segment(3);
      $posting=$this->posting_model->posting_home($per_page,$row);
        $listing_kategori = $this->kategori_posting_model->listing();
	$data = array (         'title'  => 'Halaman dasbor',
			                  'posting'  =>  $posting,
                'listing_kategori' => $listing_kategori,
                        'isi'      => 'member/dasbor/list');
    $this->load->view('member/layout/wrapper',$data);

  }

    

  // Read
  public function read($slug_posting){
  $posting = $this->posting_model->read($slug_posting);
  $kategori = $this->kategori_posting_model->listing();
  $listing_kategori = $this->kategori_posting_model->listing();
  $data = array (         'title'    => $posting->judul,
                          'posting'	 =>  $posting,
                          'kategori' =>  $kategori,
                  'listing_kategori' => $listing_kategori,
                          'isi'      => 'member/dasbor/detail');
    $this->load->view('member/layout/wrapper',$data);
  }

// About
  public function about(){
  	$data = array('isi' => 'member/dasbor/about');
  	$this->load->view('member/layout/wrapper',$data);
  }

// Contact
  public function contact(){
  	$data = array('isi' => 'member/dasbor/contact');
  	$this->load->view('member/layout/wrapper',$data);
  }

// term
  public function term(){
  	$data = array('isi' => 'member/dasbor/term');
  	$this->load->view('member/layout/wrapper',$data);
  }

 //search kategori  
  public function kategori($id){
      $kategori= $this->posting_model->search_kategori($id);
      $listing_kategori = $this->kategori_posting_model->listing();
      $data = array (         'title' => 'Search kategori',
                           'kategori' => $kategori,
                   'listing_kategori' => $listing_kategori,
                           'isi'      => 'member/dasbor/list_kategori');
        $this->load->view('member/layout/wrapper',$data);
  }
  
  //cari barter
  public function search(){
      $listing_kategori = $this->kategori_posting_model->listing();
      $search = $this->posting_model->search();
      $data = array (            'title' => 'Search kategori',
                      'listing_kategori' => $listing_kategori,
                              'kategori' => $search,
                                  'isi'  => 'member/dasbor/list_kategori');
        $this->load->view('member/layout/wrapper',$data);
  }
public function lihat_user($id_user){
  $user = $this->user_model->read($id_user);
  $data = array ( 'title'    => 'Data User',
                  'user'     =>  $user,
                  'isi'      => 'member/dasbor/user/profil/detail');
    $this->load->view('member/layout/wrapper',$data);
}

}


 