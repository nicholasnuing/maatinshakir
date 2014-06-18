<?php
/**
 * The main template file
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file 
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

	<div class="container">
		<div class="row02">
			<div>
				<p>MAATINSHAKIR</p>
			</div>
			<div>
				<img class="logo" src="<?php echo get_stylesheet_directory_uri(); ?>/img/square-copy.png">
			</div>
			<div style="color:#666; font:0.75em/1.5em verdana, sans-serif;">
				&nbsp;
<!-- 				<ul class="navlist" style="padding:1.5em;text-align:right;">
					<li>news | </li>
					<li><a href="men">men</a> | </li>
					<li><a href="women">women</a> | </li>
					<li>about | </li>
					<li>blog | </li>
					<li>contact</li>
				</ul>
 -->			</div>
		</div>
		<div class="row03">
			<div class="womens">
				<a href="womens-page">
					<div style="text-align:center;height:100%;width:100%;overflow:auto;margin:auto;background:none;"></div>
				</a>
			</div>
			<div class="mens">
				<a href="mens-page">
					<div style="text-align:center;height:100%;width:100%;overflow:auto;margin:auto;background:none;"></div>
				</a>
			</div>
		</div>
		<div class="row04" style="float:left;width:100%;background:#222;height:300px;">
			<p style="float:left;">&nbsp;</p>
		</div>
	</div>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>