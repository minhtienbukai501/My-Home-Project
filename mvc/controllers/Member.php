<?php 
    class Member extends Controller{
        function id($id){
            $member = $this->model('MemberModel');
            $memberid = $member->getMemberId($id);
            $memberid = mysqli_fetch_assoc($memberid);
            $member_image = $this->model('Image_MemberModel');
            $listmember_image =  $member_image->getImage_MemberById($id);
            $listImage = $this->model('ImageModel');
            $dsImage = $listImage->getArrayImage();
           

           
            $this->view('MemberPage', [
                'title'=>'MemberPage', 'Member' => $memberid ,
                'listImage'=> $dsImage,
                'listMemberOfImage'=>$listmember_image
        ]);
        }

        
    }


?>