<div class="banner">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
            <?php 
            $i = 0;
            $query = $dbh->query("select * from slider where slider_status = 1");
            while($row = $query->fetch()){
                ?>
                <li data-target="#carouselExampleIndicators" data-slide-to="<?=$i?>" class="<?=$i == 0 ? 'active' : ''?>"></li>
                <?php
                $i++;
            }
            ?>
            </ol>

            
            <div class="carousel-inner" role="listbox">
                <?php 
                $i = 0;
                $query = $dbh->query("select * from slider where slider_status = 1");
                while($row = $query->fetch()){
                    ?>
                    <div class="carousel-item <?=$i == 0 ? 'active' : 'item'.$i?>" style="
                    background: -webkit-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(images/<?=$row['slider_img']?>) no-repeat;
                    background: -moz-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(images/<?=$row['slider_img']?>) no-repeat;
                    background: -ms-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(images/<?=$row['slider_img']?>) no-repeat;
                    background: linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(images/<?=$row['slider_img']?>) no-repeat;
                    background-size: cover;">
                        <div class="carousel-caption">
                            <h3><?=$row['slider_text']?></h3>
                            <!-- <div class="bnr-button">
                                <button type="button" class="btn btn-primary play" data-toggle="modal"
                                    data-target="#exampleModal">
                                    <i class="fas fa-play"></i>
                                </button>
                            </div> -->

                        </div>
                    </div>
                    <?php
                    $i++;
                }
                ?>
                
                
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>