<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */

/**
 * Template Name: Women's Page
 */
?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<?php
	$dir = get_stylesheet_directory() . '/img/products/womens/';
	$web_dir = get_stylesheet_directory_uri() . '/img/products/womens/';
	// echo $dir;
	$scanned_dir = array_diff(scandir($dir), array('..', '.', '.DS_Store'));
	// print_r($scanned_dir);
?>

<div class="container">
	<div style="margin:0 auto;">
		<?php
			foreach($scanned_dir as $val) {
				echo "
					<div style=\"padding:10px 5px 10px 10px;\">
						<img height=\"300px\" src=\"$web_dir$val\">
					</div>
				";
			}
		?>
	</div>
</div>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>
