<?php include("first.php"); ?>

<main>

    <div id="programme-1">
        <?php include("header.php"); ?>

        <div class="block">
            <h1><?php echo $strings["program-maintitle"]; ?></h1>
            <h2><?php echo $strings["program-box1-title"]; ?></h2>
            <p><?php echo $strings["program-box1-body"]; ?> 
            </p>
            <p><?php echo $strings["program-box1-body2"]; ?></p>
        </div>
        <div id="programme-1-links" class="block">
            <div id="programme-destination-options">
                <div class="destination-option">
                    <a class="button" href="../<?= ($_GET['lang'] ? $_GET['lang'] : 'en' ) ?>/porthcawl.php">
                    <picture>
                    <source srcset="./images/icon-galles.svg" media="(min-width: 768px)"/>
                    <img src="./images/icon-galles-mobile.svg" alt="Galles">
                    </picture></a>
                    <div class="mobile-only"> <p style="font-size:0.83em; text-align: center; line-height:1.3em;">English<br>GALLES</p></div>
                    <div class="desktop-only"><h5>English</h5>
                    <p style="text-transform: uppercase; font-size:1em;">Galles</p></div>
                    <div class="desktop-only"><a class="button" href="../<?= ($_GET['lang'] ? $_GET['lang'] : 'en' ) ?>/porthcawl.php"><?php echo $strings["button-discover"]; ?></a></div>
                </div>
                <div class="destination-option">
                    <a class="button" href="../<?= ($_GET['lang'] ? $_GET['lang'] : 'en' ) ?>/somo.php"><picture>
                    <source srcset="./images/icon-spain.svg" media="(min-width: 768px)"/>
                    <img src="./images/icon-spain-mobile.svg" alt="Spain">
                        </picture></a>
                    <div class="mobile-only"> <p style="font-size:0.83em; text-align: center; line-height:1.3em;">Español<br>ESPAÑA</p></div>
                    <div class="desktop-only"><h5>Español</h5>
                    <p style="text-transform: uppercase; font-size:1em;">ESPAÑA</p></div>
                    <div class="desktop-only"><a class="button" href="../<?= ($_GET['lang'] ? $_GET['lang'] : 'en' ) ?>/somo.php"><?php echo $strings["button-discover"]; ?></a>
                    </div>
                </div>
                <div class="destination-option">
                    <a class="button" href="../<?= ($_GET['lang'] ? $_GET['lang'] : 'en' ) ?>/arcachon.php"><picture>
                    <source srcset="./images/icon-france.svg" media="(min-width: 768px)"/>
                    <img src="./images/icon-france-mobile.svg" alt="France">
                    </picture></a>
                    <div class="mobile-only"> <p style="font-size:0.83em; text-align: center; line-height:1.3em;">Français<br>FRANCE</p></div>
                    <div class="desktop-only">
                    <h5>Français</h5>
                    <p style="text-transform: uppercase; font-size:1em;">France</p></div>
                    <div class="desktop-only"><a class="button" href="../<?= ($_GET['lang'] ? $_GET['lang'] : 'en' ) ?>/arcachon.php"><?php echo $strings["button-discover"]; ?></a></div>
                </div>
                
            </div>
            
        </div>
        <div class="block">
        <p><?php echo $strings["program-box2-body"]; ?>
            </p>
            <h6><?php echo $strings["program-box2-tagline"]; ?></h6>
           <br>
            <h3><?php echo $strings["program-box3-title"]; ?></h3>
        <ol class="a"><?php echo $strings["program-box3-body"]; ?>
        </ol>
        </div>
    </div>

    <div id="programme-2" class="row">
        <div id="programme-leftcolumn" class="block">
        <h2><?php echo $strings["program-box4-title"]; ?></h2>
        <p><?php echo $strings["program-box4-body"]; ?>
        </p>
        <p><?php echo $strings["program-box5-body"]; ?></p>
        </div>

        <div id="programme-rightcolumn" class="block">
            
            <div id="programme-2-links" class="block">
            <div id="button-icon">
                <picture class="desktop-only">
                    <img src="./images/icon-surf-theory.svg" alt="Surf History">
                </picture>
                <div>
                    <h3><?php echo $strings["program-leftcolum-box1-title"]; ?></h3>
                    <ul class="b">
                        <?php echo $strings["program-leftcolum-box1-body"]; ?>
                    </ul>
                </div>
            </div>
            <div id="button-icon">
                <picture class="desktop-only">
                    <img src="./images/icon-fitness.svg" alt="Surf History">
                </picture>
                <div>
                <h3><?php echo $strings["program-leftcolum-box2-title"]; ?></h3>
                <ul class="b">
                <?php echo $strings["program-leftcolum-box2-body"]; ?> 
                </ul>
                </div>
            </div>
                <div id="button-icon">
                <picture class="desktop-only">
                    <img src="./images/icon-surf-practice.svg" alt="Surf History">
                </picture>
                <div>
                <h3><?php echo $strings["program-leftcolum-box3-title"]; ?></h3>
                <ul class="b">
                    <?php echo $strings["program-leftcolum-box3-body"]; ?>
                </ul>
                </div>
        </div>
    </div>
            
            
        </div>
    </div>

</main>

<?php include("footer.php"); ?>
