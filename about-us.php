<?php include("first.php"); ?>

<main>

    <div id="about-us">

        <?php include("header.php"); ?>
        
        <div id="about-us-text" class="block">
            <h1><?php echo $strings["aboutus-maintitle"]; ?></h1>
            <p><?php echo $strings["aboutus-body"]; ?>
</p>
        </div>

        <div id="about-us-links" class="block">
            <div id="button-icon">
                <a class="button" href="../<?= ($_GET['lang'] ? $_GET['lang'] : 'en' ) ?>/surf-history.php"><picture>
                    <source srcset="./images/icon-surf-history.svg" media="(min-width: 768px)"/>
                    <img src="./images/icon-surf-history-mobile.svg" alt="Surf History">
                    </picture></a>
                <div class="mobile-only"><?php echo $strings["aboutus-link1"]; ?></div>
                <div class="desktop-only">
                    <h3><?php echo $strings["aboutus-link1"]; ?></h3>
                    <h6><a class="button" href="../<?= ($_GET['lang'] ? $_GET['lang'] : 'en' ) ?>/surf-history.php"><?php echo $strings["button-readmore-arrow"]; ?></a></h6>
                </div>
            </div>
            <div id="button-icon">
                <a class="button" href="../<?= ($_GET['lang'] ? $_GET['lang'] : 'en' ) ?>/study-abroad.php">
                    <picture>
                    <source srcset="./images/icon-study-abroad.svg" media="(min-width: 768px)"/>
                    <img src="./images/icon-study-abroad-mobile.svg" alt="Surf History">
                    </picture></a>
                <div class="mobile-only"><?php echo $strings["aboutus-link2"]; ?></div>
                <div class="desktop-only">
                <h3><?php echo $strings["aboutus-link2"]; ?></h3>
                    <h6><a class="button" href="../<?= ($_GET['lang'] ? $_GET['lang'] : 'en' ) ?>/study-abroad.php"><?php echo $strings["button-readmore-arrow"]; ?></a></h6>
                </div>
            </div>
        </div> 
    </div>

</main>

<?php include("footer.php"); ?>