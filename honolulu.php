<?php include("first.php"); ?>

<main>

    <div id="honolulu-1">
        <?php include("header.php"); ?>

        <div class="block">
            <h1><?php echo $strings["honolulu-maintitle"]; ?></h1>
            <h3 style="text-transform: uppercase;"><?php echo $strings["honolulu-subtitle"]; ?></h3>
            <p><?php echo $strings["honolulu-box1-body"]; ?>
            </p>
        </div>
  
    </div>

    <div id="honolulu-2">
        <?php
            $location = "honolulu";
            include("slider.php");
        ?>
        <div class="desktop-only" style="padding: 8em;">
            <h3 style="margin: 0;"></h3>
            <p style="margin: 0;"></p>
        </div>
    </div>

    <div id="honolulu-3" class="row">
        <div id="honolulu-leftcolumn" class="block">
            <h2><?php echo $strings["honolulu-leftcolumn-box1-title"]; ?></h2>
            <p><?php echo $strings["honolulu-leftcolumn-box1-body"]; ?></p>
            <h2><?php echo $strings["honolulu-leftcolumn-box2-title"]; ?></h2>
            <h4><?php echo $strings["honolulu-leftcolumn-date1"]; ?></h4> 
            <h4><?php echo $strings["honolulu-leftcolumn-date2"]; ?></h4>
            <h4><?php echo $strings["honolulu-leftcolumn-date3"]; ?></h4>
            <br>
            <h5><?php echo $strings["honolulu-leftcolumn-tagline1"]; ?></h5>
            <p><?php echo $strings["honolulu-leftcolumn-box2-body"]; ?>
            </p>
            <br>
            <h5><?php echo $strings["honolulu-leftcolumn-tagline2"]; ?></h5>
            <ul class="a">
            <?php echo $strings["honolulu-rightcolumn-body"]; ?>
            </ul>
            <br>
            <span class="more2"><a class="button" href="../<?= ($_GET['lang'] ? $_GET['lang'] : 'en' ) ?>/contacts.php"><?php echo $strings["button-contactus"]; ?></a></span>
            <!-- icon and Contattaci button -->
        </div>

    </div>

</main>

<?php include("footer.php"); ?>
