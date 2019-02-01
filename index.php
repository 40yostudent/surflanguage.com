<?php include("first.php"); ?>

<main>

    <div id="bg1">
        <?php include("header.php"); ?>

        <div id="title" class="block">
            <h1 style="text-align:center;"><?php echo $strings["homepage-maintitle"]; ?></h1>
        </div>

        <div id="intro" class="block">
            <h2><?php echo $strings["homepage-box1-title"]; ?></h2>
            <p><?php echo $strings["homepage-box1-body"]; ?></p>
            <span class="more"><a class="button" href="../<?= ($_GET['lang'] ? $_GET['lang'] : 'en' ) ?>/about-us.php"><?php echo $strings["button-aboutus"]; ?></a></span>
            
        </div>
    </div> <!-- background 1 -->

    <div id="bg2">
        <div id="destinations" class="block">
            <h2><?php echo $strings["homepage-box2-title"]; ?></h2>
            <p><?php echo $strings["homepage-box2-body"]; ?></p>
        </div>
        <div class="block">
            <div id="destination-options">
                <div class="destination-option">
                    <a class="button" href="../<?= ($_GET['lang'] ? $_GET['lang'] : 'en' ) ?>/porthcawl.php">
                    <picture>
                    <source srcset="./images/icon-galles.svg" media="(min-width: 768px)"/>
                    <img src="./images/icon-galles-mobile.svg" alt="Galles">
                        </picture></a>
                    <div class="mobile-only"> <p style="font-size:0.83em; text-align: center; line-height:1.3em;">English<br>GALLES</p></div>
                    <div class="desktop-only"><h2>English</h2>
                    <p style="text-transform: uppercase;">Galles</p></div>
                    
                    <div class="more desktop-only"><a class="button" href="../<?= ($_GET['lang'] ? $_GET['lang'] : 'en' ) ?>/porthcawl.php"><?php echo $strings["button-discovermore"]; ?></a></div>
                    
                </div>
                <div class="destination-option">
                    <a class="button" href="../<?= ($_GET['lang'] ? $_GET['lang'] : 'en' ) ?>/somo.php">
                    <picture>
                    <source srcset="./images/icon-spain.svg" media="(min-width: 768px)"/>
                    <img src="./images/icon-spain-mobile.svg" alt="Spain">
                    </picture></a>
                    <div class="mobile-only"> <p style="font-size:0.83em; text-align: center; line-height:1.3em;">Español<br>ESPAÑA</p></div>
                    <div class="desktop-only"><h2>Español</h2>
                    <p style="text-transform: uppercase;">España</p></div>
                    
                    <div class="more desktop-only"><a class="button" href="../<?= ($_GET['lang'] ? $_GET['lang'] : 'en' ) ?>/somo.php"><?php echo $strings["button-discovermore"]; ?></a></div>
                    
                </div>
                <div class="destination-option">
                    <a class="button" href="../<?= ($_GET['lang'] ? $_GET['lang'] : 'en' ) ?>/arcachon.php"><picture>
                    <source srcset="./images/icon-france.svg" media="(min-width: 768px)"/>
                    <img src="./images/icon-france-mobile.svg" alt="France">
                        </picture></a>
                    <div class="mobile-only"> <p style="font-size:0.83em; text-align: center; line-height:1.3em;">Français<br>FRANCE</p></div>
                    <div class="desktop-only">
                    <h2>Français</h2>
                    <p style="text-transform: uppercase;">France</p></div>
                    
                    <div class="more desktop-only"><a class="button" href="../<?= ($_GET['lang'] ? $_GET['lang'] : 'en' ) ?>/arcachon.php"><?php echo $strings["button-discovermore"]; ?></a></div>
                    
                </div>
                <div class="destination-option">
                    <a class="button" href="../<?= ($_GET['lang'] ? $_GET['lang'] : 'en' ) ?>/honolulu.php"><picture>
                    <source srcset="./images/icon-hawaii.svg" media="(min-width: 768px)"/>
                    <img src="./images/icon-hawaii-mobile.svg" alt="Hawaii">
                    </picture></a>
                    <div class="mobile-only"> <p style="font-size:0.83em; text-align: center; line-height:1.3em;">English<br>HAWAII</p></div>
                    <div class="desktop-only"><h2>English</h2>
                    <p style="text-transform: uppercase;">Hawaii</p></div>
                    
                    <div class="more desktop-only"><a class="button" href="../<?= ($_GET['lang'] ? $_GET['lang'] : 'en' ) ?>/honolulu.php"><?php echo $strings["button-discovermore"]; ?></a></div>
                    
                </div>
            </div>
        </div>
    </div> <!-- background 2 -->

    <div id="bg3">
        <div id="team" class="block">
            <h2><?php echo $strings["homepage-box3-title"]; ?></h2>
            <p><?php echo $strings["homepage-box3-body"]; ?></p>
            
            <span class="more"><a class="button" href="../<?= ($_GET['lang'] ? $_GET['lang'] : 'en' ) ?>/team.php"><?php echo $strings["button-discovermore"]; ?></a></span>
            <div class="arrow"></div>
            
        </div>
    </div> <!-- background 3 -->

    <div id="bg4">
        <div id="accomodations" class="block">
            <h2><?php echo $strings["homepage-box4-title"]; ?></h2>
            <p><?php echo $strings["homepage-box4-body"]; ?></p>
            
            <span class="more"><a class="button" href="../<?= ($_GET['lang'] ? $_GET['lang'] : 'en' ) ?>/accomodations.php"><?php echo $strings["button-discovermore"]; ?></a></span>
            <div class="arrow"></div>
            
        </div>
    </div> <!-- background 4 -->

    <div id="bg5">
        <div id="contacts" class="block">
           
                <h2><?php echo $strings["homepage-box5-title"]; ?></h2>
                <p><?php echo $strings["homepage-box5-body"]; ?></p>
            
            <span class="more"><a class="button" href="../<?= ($_GET['lang'] ? $_GET['lang'] : 'en' ) ?>/contacts.php"><?php echo $strings["button-contactus"]; ?></a></span>
        
            </div>
    </div> <!-- background 5 -->

</main>

<?php include("footer.php"); ?>
