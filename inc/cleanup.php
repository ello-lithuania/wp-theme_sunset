<?php

/*
	
@package sunsettheme
	
	========================
		REMOVE GENERATOR VERSION NUMBER
	========================
*/

/* remove metatag generator from header */
function sunset_remove_meta_version() {
	return '';
}
add_filter( 'the_generator', 'sunset_remove_meta_version' );