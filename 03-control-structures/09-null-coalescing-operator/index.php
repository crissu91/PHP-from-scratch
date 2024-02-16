<?php
$favouriteColour = 'red';
$secondFavouriteColour = 'green';

// $color = isset($favouriteColour) ? $favouriteColour : 'blue';

// $color = $favouriteColour ?? 'blue';

$color = isset($favouriteColour) ? $favouriteColour : (isset($secondFavouriteColour) ? $secondFavouriteColour : 'blue');

$color = $favouriteColour ?? $secondFavouriteColour ?? 'blue';

echo $color;
