    <?php

    class Siswa extends Controller {
        public function index() {
            $data['title'] = 'Data Siswa';
            $data['siswa'] = $this->model('Siswa_model')->getAllSiswa();
            $this->view('templates/header', $data   );
            $this->view('siswa/index', $data);
            $this->view('templates/footer');
        }

        public function detail($id) {
            $data['title'] = 'Detail Siswa';
            $data['siswa'] = $this->model(model: 'Siswa_model')->getSiswaById($id);
            $this->view('templates/header', data: $data   );
            $this->view('siswa/detail', data: $data);
            $this->view('templates/footer');
        }

        public function tambah()
        {
            if($this->model(model: 'Siswa_model')->tambahDataSiswa($_POST) > 0) {
                Flasher::setFlash( pesan: 'berhasil', tipe: 'success', aksi: 'ditambahkan');
                header(header: 'Location: ' . BASEURL . '/siswa');
                exit;
            }else {
                Flasher::setFlash( pesan: 'gagal', tipe: 'danger', aksi: 'ditambahkan');
                header(header: 'Location: ' . BASEURL . '/siswa');
                exit;
            }
        }

        public function hapus($id)
        {
            if($this->model(model: 'Siswa_model')->hapusDataSiswa($id) > 0) {
                Flasher::setFlash( pesan: 'berhasil', tipe: 'success', aksi: 'hapus');
                header(header: 'Location: ' . BASEURL . '/siswa');
                exit;
            }else {
                Flasher::setFlash( pesan: 'gagal', tipe: 'danger', aksi: 'dihapus');
                header(header: 'Location: ' . BASEURL . '/siswa');
                exit;
            }
        }

        public function getubah()
        {
           echo json_encode($this->model('Siswa_model')->getSiswaById($_POST['id']));
        }

        public function ubah()
        {
            if($this->model(model: 'Siswa_model')->ubahDataSiswa($_POST) > 0) {
                Flasher::setFlash( pesan: 'berhasil', tipe: 'success', aksi: 'diubah');
                header(header: 'Location: ' . BASEURL . '/siswa');
                exit;
            }else {
                Flasher::setFlash( pesan: 'gagal', tipe: 'danger', aksi: 'diubah');
                header(header: 'Location: ' . BASEURL . '/siswa');
                exit;
            }
        }

        public function cari()
        {
            $data['title'] = 'Data Siswa';
            $data['siswa'] = $this->model('Siswa_model')->cariDataSiswa();
            $this->view('templates/header', $data   );
            $this->view('siswa/index', $data);
            $this->view('templates/footer');
        }
    }