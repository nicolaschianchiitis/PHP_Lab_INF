<?php
    require_once 'classDB.php';
    class ChitarreDB extends DB {
        public function getChitarrePerMarca($marca) {
            $sql = "SELECT * FROM marche INNER JOIN modelli ON marche.cod = modelli.codMarca where marca = '{$marca}'";
	        $result = $this->connect()->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $dati[] = $row;
                }
                return $dati;
            }
            return null;
        }
    }
?>