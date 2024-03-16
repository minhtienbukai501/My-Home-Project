<?php 
    class ImageModel extends Database{
        public function getListImage(){
            try {
                $sql = 'select *from image';
                return $this->con->query($sql);
            } catch (PDOException $e){
                echo $e->getMessage();
            }
            return null;
          
        }

        public function getImageById($id){
            $sql = 'select *from image where id='.$id.'';
            try {
                
                $result = $this->con->query($sql);
                $row = mysqli_fetch_row($result);
                return $row;
            } catch (PDOException $e){
                echo $e->getMessage();
            }
        }

        public function getArrayImage(){
            $arr = array();

            try {
                $sql = 'select *from image';
                $ds=  $this->con->query($sql);
                while($row = mysqli_fetch_array($ds)){
                    $arr[] = $row;
                }
            } catch (PDOException $e){
                echo $e->getMessage();
            }
            return $arr;
        }
    }

?>