<?php

   include_once('Database.php');
   include_once('library/Validation.php');

   class Crud extends Database {

      public $validation;

      public function __construct()
      {
         parent::__construct();
         $this->validation = new Validation(); 
      }

      public function execute($query)
      {
         while ($row = $query->fetch_assoc()) {
            $rows[] = $row;
         }
         
         return $rows;
      }

      public function execute_a_row($query)
      {
         while ($row = $query->fetch_assoc()) {
            $rows[] = $row;
         }
         
         return $rows[0];
      }

      public function getBook()
      {
         $query = $this->connection->query(
               "SELECT buku.id, buku.kode_buku, buku.judul, buku.stok, pengarang.pengarang, penerbit.penerbit 
               FROM buku JOIN pengarang ON buku.id_pengarang=pengarang.id 
               JOIN penerbit ON buku.id_penerbit = penerbit.id"
            );
            
         return $this->execute($query);
      }

      public function getDetail()
      {
         $id = $_GET['id'];
         $query = $this->connection->query(
            "SELECT buku.*, pengarang.pengarang, penerbit.penerbit 
            FROM buku JOIN pengarang ON buku.id_pengarang=pengarang.id 
            JOIN penerbit ON buku.id_penerbit = penerbit.id
            WHERE buku.id = $id"
         );

         return $this->execute_a_row($query);
      }

      public function getPengarang()
      {
         $query = $this->connection->query("SELECT * FROM pengarang");

         return $this->execute($query);
      }

      public function getPenerbit()
      {
         $query = $this->connection->query("SELECT * FROM penerbit");

         return $this->execute($query);
      }

      public function getLastKodeBuku()
      {
         $query = $this->connection->query("SELECT kode_buku FROM buku ORDER BY id DESC LIMIT 1");
         
         while ($row = $query->fetch_assoc()) {
            $rows[] = $row;
         }
         
         $lastNumber = (int) substr($rows[0]['kode_buku'], 4, 4);
         $lastNumber += 1;
         $kodeBuku = "B" . sprintf("%04s", $lastNumber);
         return $kodeBuku;
      }

      public function getPenerbitById()
      {
         $id = $_GET['id'];
         $query = $this->connection->query(
            "SELECT * FROM penerbit WHERE id = $id"
         );

         return $this->execute_a_row($query);
      }

      public function insertPengarang()
      {
         $pengarang = $this->validation->checkInput($_POST['pengarang']);
         
         if ($pengarang == false) {
            return false;
            exit;
         } else {
            $this->connection->query("INSERT INTO pengarang VALUES ('', '$pengarang')");
            return true;
         }	
      }

      public function insertPenerbit()
      {
         $penerbit = $this->validation->checkInput($_POST['penerbit']);
         
         if ($penerbit == false) {
            return false;
            exit;
         } else {
            $this->connection->query("INSERT INTO penerbit VALUES ('', '$penerbit')");
            return true;
         }	
      }

      public function insertBook()
      {
         $judul         = $this->validation->checkInput($_POST['judul']);
         $kode_buku     = $this->validation->checkInput($_POST['kode_buku']);
         $id_pengarang  = $this->validation->isEmpty($_POST['pengarang']);
         $id_penerbit   = $this->validation->isEmpty($_POST['penerbit']);
         $tebal_halaman = $this->validation->isNumber($_POST['tebal_halaman']);
         $cetakan       = $this->validation->isEmpty($_POST['cetakan']);
         $harga         = $this->validation->isNumber($_POST['harga']);
         $stok          = $this->validation->isNumber($_POST['stok']);
         $deskripsi     = $this->validation->checkInput($_POST['deskripsi']);

         
         
         if(($judul && $kode_buku && $id_penerbit && $id_penerbit && $tebal_halaman && $cetakan && $harga && $stok && $deskripsi) == false) {
            return false;
         }else{
            $this->connection->query("INSERT INTO buku VALUES ('', '$kode_buku','$judul', '$id_pengarang', '$id_penerbit', '$tebal_halaman', '$cetakan', '$harga', '$stok', '$deskripsi')");
            return true;
         }
      }
      public function updateBook()
      {
         $id            = $_POST['id'];
         $kode_buku     = $this->validation->checkInput($_POST['kode_buku']);
         $judul         = $this->validation->checkInput($_POST['judul']);
         $id_pengarang  = $this->validation->isEmpty($_POST['pengarang']);
         $id_penerbit   = $this->validation->isEmpty($_POST['penerbit']);
         $tebal_halaman = $this->validation->isNumber($_POST['tebal_halaman']);
         $cetakan       = $this->validation->isEmpty($_POST['cetakan']);
         $harga         = $this->validation->isNumber($_POST['harga']);
         $stok          = $this->validation->isNumber($_POST['stok']);
         $deskripsi     = $this->validation->checkInput($_POST['deskripsi']);
         
         if(($kode_buku && $judul && $id_pengarang && $id_penerbit && $tebal_halaman && $cetakan && $harga && $stok && $deskripsi) == false) {
            return false;
            exit;
         }else{
            $this->connection->query(
               "UPDATE buku SET 
                  kode_buku = '$kode_buku',
                  judul = '$judul', 
                  id_pengarang = '$id_pengarang', 
                  id_penerbit = '$id_penerbit', 
                  tebal_halaman = '$tebal_halaman', 
                  cetakan = '$cetakan', 
                  harga = '$harga', 
                  stok = '$stok', 
                  deskripsi = '$deskripsi'
               WHERE id = $id"
            );
            return true;
         }
      }

      public function updatePenerbit()
      {
         $id       = $_POST['id'];
         $penerbit = $this->validation->checkInput($_POST['penerbit']);

         if($penerbit == false) {
            return false;
            exit;
         }else{
            $this->connection->query(
               "UPDATE penerbit SET 
                  penerbit = '$penerbit'
               WHERE id = $id"
            );
            return true;
         }
      }
      public function deleteBook()
      {
         $id = $_GET['id'];

         if(isset($id)){
            $this->connection->query("DELETE FROM buku WHERE id = $id");
            return true;
         }else{
            return false;
         }
      }

      public function deletePenerbit()
      {
         $id = $_GET['id'];

         if(isset($id)){
            $this->connection->query("DELETE FROM penerbit WHERE id = $id");
            return true;
         }else{
            return false;
         }
      }
   }