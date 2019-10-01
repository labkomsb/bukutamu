<?php
class Model_bukutamu
{
    private $table = "tetamu";
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    
    public function contohQueryDB($data){
        /*
        $sql = "sebuah query ke sql. Misal: INSERT INTO tabel
        VALUES ( :kolom1 , :kolom2 , :kolom3 , :kolomX) "

        $this->db->query($sql);

        // binding data, mengamankan karakter aneh
        $this->db->bind('kolom1', $data['kolom1']);
        $this->db->bind('kolom2', $data['kolom2']);
        $this->db->bind('kolom3', $data['kolom3']);
        $this->db->bind('kolomX', $data['kolomX']);

        //eksekusi query setelah binding data
        $this->db->execute();

        // pesan baris terpengaruh
        return $this->db->rowCount();

        // kembalikan hasil pembacaan data, banyak baris;
        return $this->db->resultSet();

        // kembalikan hasil pembacaan data, 1 baris;
        return $this->db->resultOne();
        */
    }

    public function tambahTamu($data){
        //print_r($data);
        $sql = "INSERT INTO ".$this->table." SET nama = :namaTamu , alamat = :alamat , nomorHP = :nomorHP";

        $this->db->query($sql);
        
        $this->db->bind('namaTamu',$data['namaTamu']);
        $this->db->bind('alamat',$data['alamat']);
        $this->db->bind('nomorHP',$data['nomorHP']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function tampilTamu(){
        $sql = "SELECT * FROM " . $this->table . " LIMIT 20";
        $this->db->query($sql);
        $this->db->execute();
        return $this->db->resultSet();
    }


    public function pilihTamu($nomorHP){
        $sql = "SELECT * FROM " . $this->table . " WHERE nomorHP = :nomorHP ";
        
        $this->db->query($sql);
        $this->db->bind('nomorHP',$nomorHP);
        $this->db->execute();
        return $this->db->resultOne();
        
    }

    public function ubahTamu($data){
        $sql = "UPDATE ".$this->table." SET nama = :namaTamu , alamat = :alamat WHERE nomorHP = :nomorHP";

        $this->db->query($sql);
        $this->db->bind('namaTamu',$data['namaTamu']);
        $this->db->bind('alamat',$data['alamat']);
        $this->db->bind('nomorHP',$data['nomorHP']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function hapusTamu($nomorHP){
        $sql = "DELETE FROM ". $this->table . " WHERE nomorHP = :nomorHP ";
        $this->db->query($sql);
        $this->db->bind('nomorHP',$nomorHP);
        $this->db->execute();
        return $this->db->rowCount();
    }
}
