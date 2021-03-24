<?php
/* 
    ** Search Form
*/ 

?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url() );?>">
    <label>
    <span class="screen-reader-text">Search For:</span>
    <input type="search" class="search-field" placeholder="Search..." value="" name="">
    </label>
    <button type="submit" class="search-submit" value="Search">Search</button>
</form>