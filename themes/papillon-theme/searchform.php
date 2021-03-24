<?php
/* 
    ** Search Form
*/ 

?>

<form role="search" method="get" class="search-form grid-x grid-x-padding" action="<?php echo esc_url( home_url() );?>">
    <label class="large-offset-2 small-offset-2 large-7 small-7 cell">
    <span class="screen-reader-text">Search For:</span>
    <input type="search" class="search-field" placeholder="Search..." value="" name="">
    </label>
    <div class="group large-3 small-3 cell">
        <button type="submit" class="search-submit btn" value="Search">Search</button>
    </div>
</form>