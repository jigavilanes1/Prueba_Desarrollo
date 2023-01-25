<?php
include ("../Config/Database.php");
    class Producto{
        private $id;
        private $nombre;
        private $precio;
        private $marca;
        private $foto;

        public function __construct()
        {
            
        }
         
        public function getId()
        {
                return $this->id;
        }

        public function setId($id)
        {
                $this->id = $id;

                return $this;
        }

         
        public function getNombre()
        {
                return $this->nombre;
        }

        public function setNombre($nombre)
        {
                $this->nombre = $nombre;

                return $this;
        }

         
        public function getPrecio()
        {
                return $this->precio;
        }

        public function setPrecio($precio)
        {
                $this->precio = $precio;

                return $this;
        }

         
        public function getMarca()
        {
                return $this->marca;
        }

        public function setMarca($marca)
        {
                $this->marca = $marca;

                return $this;
        }

         
        public function getFoto()
        {
                return $this->foto;
        }

        
        public function setFoto($foto)
        {
                $this->foto = $foto;

                return $this;
        }

        public function InsertarProducto(){
            $conn = new DataBase();
            $sql = "insert into productos(id, nombre, precio, marca, foto) values (null, ?,?, ?,?)";
            $stmt = $conn->ms->prepare($sql);
            $stmt->bind_param("sdss", $this->nombre, $this->precio, $this->marca, $this->foto);
            $stmt->execute();
            $id = $stmt->insert_id;
            return ($id);
        }

        public function ActualizarProducto(){
            $conn = new DataBase();
            $sql = "update productos set nombre=?, precio=?, marca=?, foto=? where id=?";
            $stmt = $conn->ms->prepare($sql);
            $stmt->bind_param("sdssi", $this->nombre, $this->precio, $this->marca, $this->foto, $this->id);
            $stmt->execute();
        }

        public function EliminarProducto(){
                $conn = new DataBase();
                $sql = "delete from productos where id=?";
                $stmt = $conn->ms->prepare($sql);
                $stmt->bind_param("i", $this->id);
                $stmt->execute();
        }

        public function BuscarTodos(){
                $conn = new DataBase();
                $sql = "select * from productos; ";
                $stmt = $conn->ms->prepare($sql);
                $stmt->execute();
                $result = $stmt->get_result();
                return $result->fetch_all();
                // $data = [];
                // while($row = $result->fetch_assoc()){
                //         $data[] = $row;
                // }
                // return json_encode($data);
        }

        public function BuscarProducto(){
                $conn = new DataBase();
                $sql = "select * from productos where id=?";
                $stmt = $conn->ms->prepare($sql);
                $stmt->bind_param("i", $this->id);
                $stmt->execute();
                $result = $stmt->get_result();
                // return $result->fetch_all();
                $data = [];
                while($row = $result->fetch_assoc()){
                        $data[] = $row;
                }

                return json_encode($data);
        }

    }
?>