<?php
    class Pesanan{
        private $koneksi;
        public function __construct(){
            global $dbh;
            $this->koneksi = $dbh;
        }
        public function dataPesanan()
        {
            $sql = "SELECT pesanan.*,pelanggan.nama_pelanggan as nama,pelanggan.kode as kode FROM pesanan LEFT JOIN pelanggan ON pesanan.pelanggan_id = pelanggan.id";
            $ps = $this->koneksi->prepare($sql);
            $ps->execute();
            $rs = $ps->fetchAll();
            return $rs;
        }

        public function getPesanan($id){
        $sql="SELECT * FROM pesanan WHERE id = ?";
        $ps = $this->koneksi->prepare($sql);//prepare statement PDO
        $ps->execute([$id]);
        $rs = $ps->fetch();
        return $rs;
    }

    public function simpan($data){
        $sql="INSERT INTO pesanan(tanggal,total,pelanggan_id) VALUES(?,?,?)";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }
    }
?>