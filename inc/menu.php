<header>
    <div class="header_top" id="home">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="logo text-left">
                <h1>
                    <a class="navbar-brand" href="index.php">
                        <img src="./images/<?= $site_logo ?>" width="50"> <?= $logo_title ?></a>
                    <!--<i class="fas fa-square"></i> Almila</a>-->
                </h1>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">

                </span>

            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav m-lg-auto text-right">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Anasayfa
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link tooltip-blog" href="about.php">Hakkımızda</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Ürünler
                            <i class="fas fa-angle-down"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <?php
                        $count = $dbh->query('select count(*) from dropdowns where status = 1')->fetchColumn();
                        if ($count > 1) {
                            $query = $dbh->query('select title, page_link from dropdowns where status = 1');
                            while ($row = $query->fetch()) {
                        ?>
                            <a class="dropdown-item" href="items.php?item_id=<?=$row['page_link']?>"><?=$row['title']?></a>
                        <?php 
                            }
                        }
                        ?>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link tooltip-blog" href="references.php">Referanslarımız</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link tooltip-blog" href="contact.php">İletişim</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link tooltip-blog" href="blog.html">Blog <span>New</span></a>
                    </li> -->


                </ul>

                <form action="#" method="post" class="form-inline my-2 my-lg-0 search">
                    <ul class="navbar-nav m-lg-auto text-right">
                        <!-- <li class="nav-item" onclick="window.location.href='./'">
                            <img src="../images/tr.webp" width="40px" style="border-radius: 50%;">
                        </li> -->
                        <li class="nav-item" onclick="window.location.href='./en'">
                            <img src="../images/en.png" width="40px" style="border-radius: 50%;margin-left:20px;">
                        </li>
                    </ul>
                    <!-- <input class="form-control mr-sm-1" type="search" placeholder="" name="Search" required="">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Ara</button> -->
                </form>
            </div>

        </nav>

    </div>
</header>