<?php
// sesuaikan nama kelas, tetap extends ke Controller
class Home extends Controller
{
  // method default
  public function index(){

    $data['title'] = 'Buku Tamu';
    $data['tamu'] = $this->model('Model_bukutamu')->tampilTamu();

    $this->view('template/header',$data);
    $this->view('home/index',$data);
    $this->view('template/footer');

  }

  public function tambah(){
    $data['action']=BASEURL."/Home/actionTambah";
    $data['title']="Form Buku Tamu";
    $data['tamu'] = ['nomorHP'=>'' , 'nama'=>'' , 'alamat' =>''];

    $this->view('template/header',$data);
    $this->view('home/formulir',$data);
    $this->view('template/footer');
  }

  public function actionTambah(){
    // print_r($_POST);
    if( $this->model('Model_bukutamu')->tambahTamu($_POST) > 0 ){
      header("Location:".BASEURL);
    }
  }

  public function edit($nomorHP){
    $data['action']=BASEURL."/Home/actionUbah";
    $data['tamu'] = $this->model('Model_bukutamu')->pilihTamu($nomorHP);
    $data['title']="Form Buku Tamu";

    $this->view('template/header',$data);
    $this->view('home/formulir',$data);
    $this->view('template/footer');
  }

  public function actionUbah(){
    if( $this->model('Model_bukutamu')->ubahTamu($_POST) > 0 ){
      header("Location:".BASEURL);
    }
  }

  public function Hapus($nomorHP){
    if( $this->model('Model_bukutamu')->hapusTamu($nomorHP) > 0 ){
      header("Location:".BASEURL);
    }
  }
}

