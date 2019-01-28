<?php include("first.php"); ?>

<main>

    <div id="porthcawl-1">
        <?php include("header.php"); ?>

        <div class="block">
            <h1><?php echo $strings["porthcawl-maintitle"]; ?></h1>
            <h3 style="text-transform: uppercase;"><?php echo $strings["porthcawl-subtitle"]; ?></h3>
            <p><?php echo $strings["porthcawl-box1-body"]; ?></p>
        </div>

    </div>

    <div id="porthcawl-2">
        <?php
            $location = "porthcawl";
            include("slider.php"); 
        ?>
        <div class="desktop-only" style="padding: 8em;">
            <h3 style="margin: 0;"></h3>
            <p style="margin: 0;"></p>
        </div>
    </div>

    <div id="porthcawl-3" class="row">
        <div id="porthcawl-leftcolumn" class="block">
            <h2><?php echo $strings["porthcawl-leftcolumn-title"]; ?></h2>
            <p><?php echo $strings["porthcawl-leftcolumn-date1"]; ?></p>
            <p><?php echo $strings["porthcawl-leftcolumn-date2"]; ?></p>
            <p><?php echo $strings["porthcawl-leftcolumn-date3"]; ?></p>
            <p><?php echo $strings["porthcawl-leftcolumn-date4"]; ?></p>
            <p><?php echo $strings["porthcawl-leftcolumn-date5"]; ?></p>
            <span class="more"><a class="button" href="../<?= $_GET['lang']; ?>/schedule-galles.php"><?php echo $strings["button-programme"]; ?></a></span>
            <!-- icon and Contattaci button -->
        </div>

        <div id="porthcawl-rightcolumn" class="block">
            <h2 style="color:#176CA5;"><?php echo $strings["porthcawl-rightcolumn-title"]; ?></h2>
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
            <?php echo $strings["porthcawl-rightcolumn-body"]; ?></p>
        </div>
    </div>

</main>

<?php include("footer.php"); ?>
