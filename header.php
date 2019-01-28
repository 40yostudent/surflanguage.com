    <header>

        <nav>
            <ul>
                <li><a href="../<?= $_GET['lang']; ?>/about-us.php">about us</a></li>
                <li><a href="../<?= $_GET['lang']; ?>/program.php">programs</a></li>
                <li><a href="../<?= $_GET['lang']; ?>/team.php">team</a></li>
                <li id="main-logo-li"><a href="../<?= $_GET['lang']; ?>/index.php"><img src="./images/logo.svg" alt="logo"></a></li>
                <li><a href="../<?= $_GET['lang']; ?>/accomodations.php">lodging</a></li>
                <li><a href="../<?= $_GET['lang']; ?>/gallery.php">gallery</a></li>
                <li><a href="../<?= $_GET['lang']; ?>/contacts.php">contacts</a></li>
            </ul>
            <ul>
                <li>
                    <a href="../en/index.php" class="language-selector">EN</a>
                    <a href="../de/index.php" class="language-selector">DE</a>
                    <a href="../es/index.php" class="language-selector">ES</a>
                    <a href="../it/index.php" class="language-selector">IT</a>
                </li>
            </ul>
        </nav>

        <a href="../<?= $_GET['lang']; ?>/index.php"><img id="main-logo" src="./images/logo-mobile.svg" alt="logo"></a>

        <div id="menu-mobile">
            <button type="button" id="menu-button">
                <div></div>
                <div></div>
                <div></div>
            </button>
            <ul id="menu-list">
                <li><a href="../<?= $_GET['lang']; ?>/index.php"><img id="main-logo" src="./images/logo-mobile.svg" alt="logo"></a></li>
                <li>
                    <a href="../en/index.php" class="language-selector">EN</a>
                    <a href="../de/index.php" class="language-selector">DE</a>
                    <a href="../es/index.php" class="language-selector">ES</a>
                    <a href="../it/index.php" class="language-selector">IT</a>
                </li>
                <li><a href="../<?= $_GET['lang']; ?>/about-us.php">about us</a></li>
                <li><a href="../<?= $_GET['lang']; ?>/program.php">programs</a></li>
                <li><a href="../<?= $_GET['lang']; ?>/team.php">team</a></li>
                <li><a href="../<?= $_GET['lang']; ?>/accomodations.php">lodging</a></li>
                <li><a href="../<?= $_GET['lang']; ?>/gallery.php">gallery</a></li>
                <li><a href="../<?= $_GET['lang']; ?>/contacts.php">contacts</a></li>
            </ul>
        </div>

    </header>
    