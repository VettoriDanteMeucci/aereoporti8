<?php 
    class DB {
        private function getConnection(){
            $host = "localhost";
            $user = "root";
            $pass = "";
            $DBname = "aeroporti";
            return mysqli_connect($host, $user, $pass, $DBname);
        }

        public function getAereoportiNazione($nazione){
            $conn = $this->getConnection();
            $query = "SELECT * FROM aeroporti WHERE nazione = '$nazione'";
            $result = mysqli_query($conn, $query);
            $ans = [];
            while($row = mysqli_fetch_assoc($result)){
                $ans[] = $row;
            }
            mysqli_close($conn);
            return $ans;
        }

        public function getVoliInData($data){
            $conn = $this->getConnection();
            $query = "SELECT * FROM voli WHERE data = '$data'";
            $result = mysqli_query($conn, $query);
            $ans = [];
            while($row = mysqli_fetch_assoc($result)){
                $ans[] = $row;
            }
            mysqli_close($conn);
            return $ans;
        }

        public function getInfoAereoportoDaID($id){
            $conn = $this->getConnection();
            $query = "SELECT * FROM aeroporti WHERE id_aeroporto = '$id'";
            $result = mysqli_query($conn, $query);
            mysqli_close($conn);
            return mysqli_fetch_assoc($result);
        }
    }
?>