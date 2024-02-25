<?php
class Mahasiswa extends Controller
{
    public function index()
    {
        $data['judul'] = 'Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->getAllMhs();
        $this->view('template/header', $data);
        $this->view('mahasiswa/index', $data);
        $this->view('template/footer');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->getMahasiswaById($id);
        $this->view('template/header', $data);
        $this->view('mahasiswa/detail', $data);
        $this->view('template/footer');
    }

    public function tambah()
    {
        if ($this->model('Mahasiswa_model')->tambahDataMahasiswa($_POST) > 0) {
            Flasher::setFlash('Berhasil', 'ditambahkan', 'success');
            header('Location:' . BASEURL . ' /Mahasiswa');
            exit;
        } else {
            header('Location:' . BASEURL . '/Mahasiswa');
            Flasher::setFlash('Gagal', 'ditambahkan', 'danger');
            exit;
        }
    }

    public function hapus($id)
    {
        if ($this->model('Mahasiswa_model')->hapusDataMhs($id) > 0) {
            Flasher::setFlash('Berhasil', 'dihapus', 'success');
            header('Location:' . BASEURL . ' /Mahasiswa');
            exit;
        } else {
            header('Location:' . BASEURL . '/Mahasiswa');
            Flasher::setFlash('Gagal', 'dihapus', 'danger');
            exit;
        }
    }
}
