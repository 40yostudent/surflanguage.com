<?php include("first.php"); ?>

<main>

<div id="accomodations-1" >

    <?php include("header.php"); ?>

    <div class="row">

        <div id="accomodations-leftcolumn" class="block">
            <div>
                <h1><?php echo $strings["accommodations-maintitle"]; ?></h1>
                <p><?php echo $strings["accommodations-leftcolum-box1-body"]; ?></p>
                &nbsp;
                <h2><?php echo $strings["accommodations-leftcolum-box2-title"]; ?></h2>
                <p><?php echo $strings["accommodations-leftcolum-box2-body"]; ?></p>
                <h6><?php echo $strings["accommodations-leftcolumn-box2-tagline"]; ?></h6>
            </div>
        </div>

        <div id="accomodations-rightcolumn" class="block">
            <h2 style="color: #106391;"><?php echo $strings["accommodations-rightcolumn-title"]; ?></h2>
            &nbsp;
            <p style="color: #106391; font-size: 1.6em;">min
                <img src="./images/icon-2-people.svg" style="height: 2em;">
                / max&nbsp;<img src="./images/icon-4-people.svg" style="height: 2em;">
            </p>
            <p style="font-size: 1.1em;"><?php echo $strings["accommodations-rightcolumn-body"]; ?></p>
        </div>

    </div>
</div>
    
    
</main>

<?php include("footer.php"); ?>
