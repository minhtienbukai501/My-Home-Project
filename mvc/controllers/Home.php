<?php 
    class Home extends Controller{
        public function show(){
            $memberModel = $this->model('MemberModel');
            $Image = $this->model('ImageModel');
            $listImage = $Image->getListImage();
            $listMember =  $memberModel->getMember();
            $listImage_member= $this->model('Image_MemberModel')->getArray_Image_Member();

            

            $this->view('HomeView', [
                'title' =>'HomePage',
                'page'=>'Homepage',
                'listMember'=> $listMember,
                'listImage' => $listImage,
                'listImage_member'=>$listImage_member

            ]);
        }

        public function memberid($id){
            $memberModel = $this->model('MemberModel');
            $result = $memberModel->getMemberId($id);
            $row = mysqli_fetch_assoc($result);
            echo $row['id'].'<br>'.$row['name'];
        }


        public function detail(){
            $id_member = '';
            if(isset($_GET['id_member'])){
                $id_member = $_GET['id_member'];
            }

            $id_image = '';
            if(isset($_GET['id_image'])){
                $id_image=$_GET['id_image'];
            }
            $member = $this->model('MemberModel')->getMemberbyId($id_member);
            $image = $this->model('ImageModel')->getImageById($id_image);
        
            $this->view('HomeView', [
                'title'=>'Page Detail',
                'page'=>'DetailMemberpage',
                'member'=>$member,
                'image'=>$image         
            ]);
        }
    }

?>