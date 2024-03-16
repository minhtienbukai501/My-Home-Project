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

<div class="app__container">
            <div class="grid">
                <div class="grid__row">
                    <div class="grid__column-2">
                        <nav class="category">
                            <h3 class="category-heading"><i class="category-icon fa-solid fa-list"></i> Danh Sách Thành Viên</h3>
                            <ul class="category-list">
                                <?php 
                                    while($row = $data['listMember']->fetch_assoc()){
                                        ?>
                                        <li class="category-item">
                                            <a href="<?php echo 'http://localhost/PROJECTMYHOME/member/id/'.$row['id'].'';  ?>" class="category-item-links"><?php echo $row['name']?></a>
                                        </li>
                                        <?php
                                    }
                                ?>
                            </ul>
                        </nav>
                    </div>

                    <div class="grid__column-10">
                        <div class="products__page">
                            <span class="products__page-sortof">Sắp xếp</span>
                            <div class="select-sort">
                                <span class="select-sort-title">Theo <i class="fa-solid fa-chevron-down"></i></span>
                                <ul class="sort-list">
                                    <li class="sort-item">
                                        <a class="sort-item-link">Từ a -> z</a>
                                    </li>
                                    <li class="sort-item">
                                        <a class="sort-item-link">Sắp xếp theo ngày</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="home__page-percen">
                                <span class="home__page-percenofPage">
                                    <span class="home__page-percen-current">1</span> / 14
                                </span>
                                <div class="page-remote">
                                    <a href="" class="page-remotes">
                                        <i class="page-remote-icon fa-solid fa-chevron-left"></i>
                                    </a>
                                    <a href="" class="page-remotes">
                                        <i class="page-remote-icon fa-solid fa-chevron-right"></i>
                                    </a>
                                </div>
                            </div>

                        </div>
                        <div class="main-products">
                            <div class="grid__row">
                                <?php 
                                    while($row1=mysqli_fetch_array($data['listImage'])){
                                        ?>
                                        <div class="grid__row-2-of-10">
                                                <a href="http://localhost/PROJECTMYHOME/home/detail&id_image=<?php echo$row1['id']?>&id_member=<?php
                                                     for($i = 0; $i < COUNT($data['listImage_member']); $i++){
                                                            if($row1['id'] == $data['listImage_member'][$i]['id_image']){
                                                                echo $data['listImage_member'][$i]['id_member'];
                                                                break;
                                                            }
                                                     }
                                                ?>" class="product-item__detail-link">
                                                    <div class="main-product-item">
                                                        <div class="main-product-item__img" style="background-image: url('http://localhost/PROJECTMYHOME/public/assets/image/<?php echo$row1['image']?>');"></div>
                                                        <h4 class="main-product-item__name"><?php echo $row1['title']?></h4>
                                                        <h4 class="product-item__date">Ngày: <?php echo $row1['takeDate']?></h4>
                                                    </div>
                                                </a>
                                        </div>
                                    <?php 
                                    }                                     
                                ?>



                            


                            </div>
                        </div>

                        <div class="page">
                        <div class="page-content">
                            <a class="pag_btn" href="#">1</a>
                            <a class="pag_btn" href="#">2</a>
                            <a class="pag_btn" href="#">3</a>
                            <a class="pag_btn" href="#">4</a>
                            <a class="pag_btn" href="<?php
                                if($page > 1){
                                    echo 'http://localhost/PROJECTMYHOME/home/show&page='.($page - 1);
                                } else {
                                    echo 'http://localhost/PROJECTMYHOME/home/show&page=1';
                                }
                            
                            ?>">
                                <i class="fa-solid fa-arrow-left"></i>
                            </a>
                            <a class="pag_btn" href="<?php echo 'http://localhost/PROJECTMYHOME/home/show&page='.($page + 1);
                            ?>">
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    </div>
                    
                </div>

                </div>
            </div>
        </div>