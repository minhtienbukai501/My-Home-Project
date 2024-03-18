<?php
    class MemberModel extends Database{
        public function getMember(){
            try {
                $sql = 'select *from member';
                return $this->con->query($sql);
            } catch(PDOException $e){
                echo $e->getMessage();
            }
           
        }

        public function getMemberId($id){
            $sql = 'select *from member where id='.$id.'';
            try {
                
                $result = $this->con->query($sql);
                return $result;
            } catch (PDOException $e){
                echo $e->getMessage();
            }
            return null;
        }

        public function getMemberbyId($id){
            $sql = 'select *from member where id='.$id.'';
            try {
                
                $result = $this->con->query($sql);
                $row = mysqli_fetch_row($result);
                return $row;
            } catch (PDOException $e){
                echo $e->getMessage();
            }
            return null;
        }
    }

?>