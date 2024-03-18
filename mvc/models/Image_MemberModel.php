<?php 
    class Image_MemberModel extends Database{
        public function getImage_Member(){
            try{
                $sql = 'select * from image_member';
                return $this->con->query($sql);
            }
            catch(PDOException $e){
                echo $e->getMessage();
            }
        }

        public function getImage_MemberById($id){
            try{
                $sql = 'select * from image_member where id_member='.$id;
                return $this->con->query($sql);
            }
            catch(PDOException $e){
                echo $e->getMessage();
            }
        }

        public function getArray_Image_Member(){
            $arr = array();
            try{
                $sql = 'select * from image_member';
                $result=  $this->con->query($sql);
                while($row = mysqli_fetch_array($result)){
                    $arr [] =$row;
                }
            }
            catch(PDOException $e){
                echo $e->getMessage();
            }

            return $arr;
        }
    }


?>