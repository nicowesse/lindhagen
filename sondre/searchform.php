<?php
/**
 * The template used for the search form
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
	<input type="search" class="search-field" placeholder="Søk, og trykk enter" value="" name="s" title="Søk etter" />
	<input type="submit" class="search-submit" value="Search" />
</form>