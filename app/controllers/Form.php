<?php


class Form extends Controller
{
    public function index()
    {
        $data['judul'] = 'Data Pinjaman';
        $data['pinjam'] = $this->model('PeminjamanModel')->getAllData();
        $this->view('templates/header', $data);
        $this->view('form/index', $data);
        $this->view('templates/footer');
    }

    public function create()
    {
        $data['judul'] = 'Tambah Data';
        $this->view('templates/header', $data);
        $this->view('form/create');
        $this->view('templates/footer');
    }

    public function savePeminjam()
    {
        if ($this->model('PeminjamanModel')->tambahPeminjaman($_POST) > 0) {
            header('location: ' . BASE_URL . '/form/index');
            exit;
        } else {
            header('location: ' . BASE_URL . '/form/index');
            exit;
        }
    }

    public function edit($id)
    {
        $data['judul'] = 'Edit Data';
        $data['pinjam'] = $this->model('PeminjamanModel')->getDataById($id);
        $this->view('templates/header', $data);
        $this->view('form/edit', $data);
        $this->view('templates/footer');
    }

    public function updateData() {
        if ($this->model('PeminjamanModel')->updateDataPeminjaman($_POST) > 0) {
            header('location: ' . BASE_URL . '/form/index');
            exit;
        } else {
            header('location: ' . BASE_URL . '/form/index');
            exit;
        }
    }

    public function delete($id)
    {
        if ($this->model('PeminjamanModel')->deleteData($id) > 0) {
            header('location: ' . BASE_URL . '/form/index');
            exit;
        } else {
            header('location: ' . BASE_URL . '/form/index');
            exit;
        }
    }
}
