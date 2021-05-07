<?php
    Class Conexion
    {
        private $con;
        private $host = "localhost";
        private $dbname = "parcial_pweb";
        private $user = "root";
        private $password = "";

        public function conexion()
        {
            try{
                $this->con = "mysql:host=$this->host;dbname:$this->dbname;charset=utf8";
                $pdo = new PDO($this->con, $this->user, $this->password);
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $pdo;
            }catch(Exception $e){
                ('ERROR' . $e->getMessage());
                echo "La línea del error" .$e->getLine();
            }
        }

        /**
         * Obtiene los valores de la base de datos y los retorna en un array asociativo.
         */
        public function getData()
        {
            $query = $this->conexion()->query("SELECT * FROM $this->dbname.registros");

            $values = array();
            $i = 0;
            while($row = $query->fetch())
            {
                $values[$i] = array('id' => $row['id'],
                                    'nombre' => $row['Nombre'], 
                                    'apellido' => $row['Apellido'], 
                                    'identificacion' => $row['Identificacion'], 
                                    'email' => $row['Email'],  
                                    'fechaNacimiento' => $row['FechaNacimiento'], 
                                    'foto' => $row['Foto']);
                $i++;   
            }
            return $values;
        }

        public function delete($id)
        {
            $query = $this->conexion()->query("DELETE FROM $this->dbname.registros WHERE Id=$id") or die($query->error());
        }
        
        public function insert($nombre, $apellido, $identificacion, $email, $fechaNacimiento, $foto)
        {
            $query = $this->conexion()->query("INSERT INTO $this->dbname.registros (Nombre, Apellido, Identificacion, Email, FechaNacimiento, Foto) VALUES('$nombre', '$apellido', '$identificacion', '$email', '$fechaNacimiento', '$foto')") or die($query->error());
        }

        /**
         * Retorna los valores de un registro mediante el id.
         */
        public function getDataDB($id)
        {
            $query = $this->conexion()->query("SELECT * FROM $this->dbname.registros WHERE id=$id")  or die($query->error());
            
            $values = array();
            if($row = $query->fetch())
            {
                $values[0] = array('id' => $row['id'],
                                    'nombre' => $row['Nombre'], 
                                    'apellido' => $row['Apellido'], 
                                    'identificacion' => $row['Identificacion'], 
                                    'email' => $row['Email'],  
                                    'fechaNacimiento' => $row['FechaNacimiento'], 
                                    'foto' => $row['Foto']);
            }
            return $values;
        }

        public function update($id, $nombre, $apellido, $identificacion, $email, $fechaNacimiento, $foto)
        {
            $query = $this->conexion()->query("UPDATE $this->dbname.registros SET Nombre='$nombre', Apellido='$apellido', Identificacion='$identificacion', Email='$email', FechaNacimiento='$fechaNacimiento', Foto='$foto' WHERE Id=$id") or die($query->error());
        }

        /**
         * Retorna los valores de un registro mediante la identificacion.
         */
        public function searchByIdentificacion($identificacion)
        {
            $query = $this->conexion()->query("SELECT * FROM $this->dbname.registros WHERE identificacion='$identificacion'") or die($query->error());

            $values = array();
            if($row = $query->fetch())
            {
                $values[0] = array('id' => $row['id'],
                                    'nombre' => $row['Nombre'], 
                                    'apellido' => $row['Apellido'], 
                                    'identificacion' => $row['Identificacion'], 
                                    'email' => $row['Email'],  
                                    'fechaNacimiento' => $row['FechaNacimiento'], 
                                    'foto' => $row['Foto']);
            }
            return $values;
        }


        /**
         * Obtiene los valores de la base de datos y los retorna en un array asociativo.
         */
        public function getDataLimit($initialLimit, $endLimit)
        {
            $query = $this->conexion()->query("SELECT * FROM $this->dbname.registros LIMIT $initialLimit, $endLimit");

            $values = array();
            $i = 0;
            while($row = $query->fetch())
            {
                $values[$i] = array('id' => $row['id'],
                                    'nombre' => $row['Nombre'], 
                                    'apellido' => $row['Apellido'], 
                                    'identificacion' => $row['Identificacion'], 
                                    'email' => $row['Email'],  
                                    'fechaNacimiento' => $row['FechaNacimiento'], 
                                    'foto' => $row['Foto']);
                $i++;   
            }
            return $values;
        }


    }

    /**
     * Fuentes:
     * - https://www.youtube.com/watch?v=3xRMUDC74Cw
     */
?>