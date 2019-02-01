<?php include("first.php"); ?>

<main>

    <div id="arcachon-1">
        <?php include("header.php"); ?>

        <div class="block">
            <h1><?php echo $strings["arcachon-maintitle"]; ?></h1>
            <h3 style="text-transform: uppercase;"><?php echo $strings["arcachon-subtitle"]; ?></h3>
            <p><?php echo $strings["arcachon-box1-body"]; ?></p>
        </div>

    </div>

    <div id="arcachon-2">
        <?php
            $location = "arcachon";
            include("slider.php");
        ?>
        <div class="desktop-only" style="padding: 10em;">
            <h3 style="margin: 0;"></h3>
            <p style="margin: 0;"></p>
        </div>
    </div>

    <div id="arcachon-3" class="row">
        <div id="arcachon-leftcolumn" class="block">
            <h2><?php echo $strings["arcachon-leftcolumn-title"]; ?></h2>
            <p><?php echo $strings["arcachon-leftcolumn-date1"]; ?></p>
            <p><?php echo $strings["arcachon-leftcolumn-date2"]; ?></p>
            <p><?php echo $strings["arcachon-leftcolumn-date3"]; ?></p>
            <span class="more"><a class="button" href="../<?= ($_GET['lang'] ? $_GET['lang'] : 'en' ) ?>/schedule-france.php"><?php echo $strings["button-programme"]; ?></a></span>
            <!-- icon and Contattaci button -->
        </div>

        <div id="arcachon-rightcolumn" class="block">
            <h2 style="color:#176CA5;"><?php echo $strings["arcachon-rightcolumn-title"]; ?></h2>
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
            <?php echo $strings["arcachon-rightcolumn-body"]; ?></p>
        </div>
    </div>

</main>

<?php include("footer.php"); ?>
