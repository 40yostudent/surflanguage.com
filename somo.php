<?php include("first.php"); ?>

<main>

    <div id="somo-1">
        <?php include("header.php"); ?>

        <div class="block">
            <h1><?php echo $strings["somo-maintitle"]; ?></h1>
            <h3 style="text-transform: uppercase;"><?php echo $strings["somo-subtitle"]; ?></h3>
            <p><?php echo $strings["somo-box1-body"]; ?></p>
        </div>

    </div>

    <div id="somo-2">
        <?php
            $location = "somo";
            include("slider.php");
        ?>
        <div class="desktop-only" style="padding: 8em;">
            <h3 style="margin: 0;"></h3>
            <p style="margin: 0;"></p>
        </div>
    </div>

    <div id="somo-3" class="row">
        <div id="somo-leftcolumn" class="block">
            <h2><?php echo $strings["somo-leftcolumn-title"]; ?></h2>
            <p><?php echo $strings["somo-leftcolumn-date1"]; ?></p>
            <p><?php echo $strings["somo-leftcolumn-date2"]; ?></p>
            <p><?php echo $strings["somo-leftcolumn-date3"]; ?></p> 
            <span class="more"><a class="button" href="../<?= ($_GET['lang'] ? $_GET['lang'] : 'en' ) ?>/schedule-spain.php"><?php echo $strings["button-programme"]; ?></a></span>
            <!-- icon and Contattaci button -->
        </div>

        <div id="somo-rightcolumn" class="block">
            <h2 style="color:#176CA5;"><?php echo $strings["somo-rightcolumn-title"]; ?></h2>
            <div id="porthcawl-rightcolumn-icons" class="desktop-only">
            <img src="./images/icon-flight.svg" alt="">
            <img src="./images/icon-transport.svg" alt="">
            <img src="./images/icon-accommodation.svg" alt="">
            <img src="./images/icon-trip.svg" alt="">
            <img src="./images/icon-tutor.svg" alt="">
            <img src="./images/icon-surf.svg" alt="">
            <img src="./images/icon-study.svg" alt="">
            <img src="./images/icon-insurance.svg" alt="">
            </div>
            <p style="font-size:1.1em;">
            <?php echo $strings["somo-rightcolumn-body"]; ?></p>
        </div>
    </div>

</main>

<?php include("footer.php"); ?>
