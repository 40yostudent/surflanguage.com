<?php include("first.php"); ?>

<main id="team">

    <div id="team-1">
        <?php include("header.php"); ?>

        <div class="block">
            <h1><?php echo $strings["team-maintitle"]; ?></h1>
            <h2><?php echo $strings["team-box1-title"]; ?></h2>
            <p><?php echo $strings["team-box1-body"]; ?></p>
        </div>

    </div>

    <div id="team-2">
        <div class="block">
            <h2><?php echo $strings["team-box2-title"]; ?></h2>
            <p><?php echo $strings["team-box2-body"]; ?>
            </p>
        </div>
    </div>

    <div id="team-3">
        <div class="block">
            <h2><?php echo $strings["team-box3-title"]; ?></h2>
            <p><?php echo $strings["team-box3-body"]; ?></p>
        </div>
    </div>

</main>

<?php include("footer.php"); ?>
