<?php

$arcachon = [];
$honolulu = [];
$porthcawl = [];
$somo = [];

$imagesInUse = [];

$allImages = new FilesystemIterator('./images-slider/');

foreach($allImages as $image)
{
    $name = $image->getFilename();

    switch ($name) {
        case (preg_match('/arcachon.*/', $name) ? true : false):
            $arcachon[] = $name;
            break;
        case (preg_match('/honolulu.*/', $name) ? true : false):
            $honolulu[] = $name;
            break;
        case (preg_match('/porthcawl.*/', $name) ? true : false):
            $porthcawl[] = $name;
            break;
        case (preg_match('/somo.*/', $name) ? true : false):
            $somo[] = $name;
            break;
        default:
            break;
    }
}

switch ($location) {
    case 'arcachon':
        $imagesInUse = $arcachon;
        break;

    case 'honolulu':
        $imagesInUse = $honolulu;
        break;

    case 'porthcawl':
        $imagesInUse = $porthcawl;
        break;

    case 'somo':
        $imagesInUse = $somo;
        break;
    
    default:
        # Error!
        break;
}

echo '<div class="slider-container">';
echo '<div class="slider">';
echo '<div id="slides">';
foreach ($imagesInUse as $key => $image) {
    echo '<div class="slide" id="slide-'.$key.'"><img src="./images-slider/'.$location.'-'.$key.'.jpg"></div>';
}
echo '</div> <!-- slides END-->';
echo <<<ARROWS
<div id="arrows">
    <div class="arrow"><a href="#" class="left"></a></div>
    <div class="arrow"><a href="#" class="right"></a></div>
</div> <!-- arrows END-->
ARROWS;
echo '<div id="dots">';
echo '<a href="#" class="dot active-dot"></a>';
for ($i=0; $i < count($imagesInUse) - 1 ; $i++) { 
    echo '<a href="#" class="dot"></a>';
}
echo '</div> <!-- dots END-->';
echo '</div> <!-- slider END-->';
echo '</div> <!-- slider-container END-->';
?>
