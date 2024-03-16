<?php
    if(isset($_GET['page'])){
        $page = $_GET['page'];
        if($page <= 0){
            $page =1;
        }
    }else {
        $page = 1;
    } 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  type='text/css' href="http://localhost/PROJECTMYHOME/public/assets/css/base.css">
    <link rel="stylesheet"  type='text/css' href="http://localhost/PROJECTMYHOME/public/assets/css/member.css">
    <link rel="preconnect"  type='text/css' href="https://fonts.googleapis.com">
    <link rel="preconnect"   type='text/css' href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
   
    <link rel="stylesheet" type='text/css'  href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <link rel="stylesheet"  type='text/css' href="http://localhost/PROJECTMYHOME/public/assets/icon/fontawesome-free-6.5.1-web/css/all.min.css">

    <link rel="stylesheet"  type='text/css' href="http://localhost/PROJECTMYHOME/public/assets/icon/fontawesome-free-6.5.1-web/js/all.min.js">
    <title><?php echo $data['title']; ?></title>
</head>
<body>
    <div class="main">
        <div class="header">
            <div class="grid">
                <div class="profile__background">

                </div>
                <div class="profile__info">
                    <div class="grid__column-4">
                        <div class="profile__info-image" style="background-image: url('http://localhost/PROJECTMYHOME/public/assets/image/<?php echo $data['Member']['image'] ?>');">

                        </div>
                    </div>
                    <div class="grid__column-6">
                        <div class="profile__info-infomation">
                            <h1 class="profile__info-name"><?php echo $data['Member']['name'] ?></h1>
                            <span class="profile__info-birthday"><?php echo $data['Member']['birthDay'] ?></span>
                            <span class="profile__info-decription"><?php echo $data['Member']['decription'] ?></span>
                        </div>

                    </div>
                    
                </div>
            </div>

        </div>

        <div class="body">
            <div class="grid">
                <h2 class = "content__title">Danh Sách hình ảnh</h2>
                <div class="grid__row">
                     
                    <?php 
                        while($row1=mysqli_fetch_array($data['listMemberOfImage'])){
                            for($i = 0; $i < COUNT($data['listImage']); $i++)
                            {         
                                if($row1['id_image'] == $data['listImage'][$i]['id']){
                                                 
                                ?>
                                     <div class="grid__column-5">
                                        <a href="http://localhost/PROJECTMYHOME/home/detail&id_image=<?php echo$row1['id_image'];?>&id_member=<?php echo $data['Member']['id'] ?>" class = "show_detail_links">
                                            <div class="content">
                                                <div class="content__image" style="background-image:url('http://localhost/PROJECTMYHOME/public/assets/image/<?php echo $data['listImage'][$i]['image'] ?>');" ></div>
                                                <div class="content__image-info">
                                                    <h3 class="content__image-title"><?php echo $data['Member']['name'] ?></h3>
                                                    <span class="content__image-date">Ngày chụp: <?php echo $data['listImage'][$i]['takeDate'] ?></span>
                                                    <p class="content__image-decription"><?php echo $data['listImage'][$i]['decription'] ?></p>                  
                                                    </div>
                                            </div>
                                        </a>
                                     </div>    
                                <?php
                                break;
                                }
                            }
                        }             
                    
                    ?>
                   
                    

                    
                </div>
                <div class="page">
                    <div class="page-content">
                        <a class="pag_btn" href="#">1</a>
                        <a class="pag_btn" href="#">2</a>
                        <a class="pag_btn" href="#">3</a>
                        <a class="pag_btn" href="#">4</a>
                        <a class="pag_btn" href="<?php
                            if($page > 1){
                                echo 'http://localhost/PROJECTMYHOME/member/id/1&page='.($page - 1);
                            } else {
                                echo 'http://localhost/PROJECTMYHOME/member/id/1&page=1';
                            }
                           
                        ?>">
                            <i class="fa-solid fa-arrow-left"></i>
                        </a>
                        <a class="pag_btn" href="<?php echo 'http://localhost/PROJECTMYHOME/member/id/1&page='.($page + 1);
                        ?>">
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
</body>
</html>