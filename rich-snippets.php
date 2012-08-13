<?php
/*
Plugin Name: Rich Snippets Plugin
Plugin URI: 
Description: Plugin to add recipe snippets to posts
Author: Clinton Warren
Version: 1.0
Author URI: http://www.clintonwarren.com
*/

//add meta fields to posts
add_action('add_meta_boxes', 'add_custom_meta_boxes');

function add_custom_meta_boxes() {
	add_meta_box('rs-meta', 'Rich Snippets Recipe info','rs_show_metabox','post','normal','high');

}
function rs_show_metabox($post) {
	// retrieve data if it exists
	$rs_recipename = get_post_meta($post->ID, '_rs_recipename',true);
	$rs_recipecategory = get_post_meta($post->ID, '_rs_recipecategory',true);
	$rs_recipeimage = get_post_meta($post->ID, '_rs_recipeimage',true);
	$rs_recipedescription = get_post_meta($post->ID, '_rs_recipedescription',true);
	$rs_recipeingredients = get_post_meta($post->ID, '_rs_recipeingredients',true);
	$rs_recipeinstructions = get_post_meta($post->ID, '_rs_recipeinstructions',true);
	$rs_recipeyield = get_post_meta($post->ID, '_rs_recipeyield',true);
	$rs_recipepreptime = get_post_meta($post->ID, '_rs_recipepreptime',true);
	$rs_recipecooktime = get_post_meta($post->ID, '_rs_recipecooktime',true);
	$rs_recipedate = get_post_meta($post->ID, '_rs_recipedate',true);
	$rs_recipeauthor = get_post_meta($post->ID, '_rs_recipeauthor',true);
	
	echo 'Please fill out your information below';
	?>
	
	<p>Recipe Name: <input type="text" name="rs_recipename" value="<?php echo esc_attr($rs_recipename);?>"/> </p>
	<p>Recipe Category: <input type="text" name="rs_recipecategory" value="<?php echo esc_attr($rs_recipecategory);?>"/> </p>
	<p>Recipe Image: <input type="text" name="rs_recipeimage" value="<?php echo esc_attr($rs_recipeimage);?>"/> </p>
	<p>Recipe Description: <input type="textarea" name="rs_recipedescription" value="<?php echo esc_attr($rs_recipedescription);?>"/> </p>
	<p>Recipe Ingredients: <input type="text" name="rs_recipeingredients" value="<?php echo esc_attr($rs_recipeingredients);?>"/> </p>
	<p>Recipe Instructions: <input type="textarea" name="rs_recipeinstructions" value="<?php echo esc_attr($rs_recipeinstructions);?>"/> </p>
	<p>Recipe Yield: <input type="text" name="rs_recipeyield" value="<?php echo esc_attr($rs_recipeyield);?>"/> </p>
	<p>Recipe Preptime: <input type="text" name="rs_recipepreptime" value="<?php echo esc_attr($rs_recipepreptime);?>"/> </p>
	<p>Recipe Cook Time: <input type="text" name="rs_recipecooktime" value="<?php echo esc_attr($rs_recipecooktime);?>"/> </p>
	<p>Recipe Date: <input type="text" name="rs_recipedate" value="<?php echo esc_attr($rs_recipedate);?>"/> </p>
	<p>Recipe Author: <input type="text" name="rs_recipeauthor" value="<?php echo esc_attr($rs_recipeauthor);?>"/> </p>
		
	<?php 

}



// custom meta box names -- name, recipecategory, image, description, ingredients, instructions, recipeYield, prepTime, cookTime, totalTime, datePublished, author



//save meta box values
add_action('save_post','rs_save_meta');

function rs_save_meta($post_id) {
	if(isset($_POST['rs_recipename'])) {
		update_post_meta($post_id, '_rs_recipename', strip_tags($_POST['rs_recipename']));
		update_post_meta($post_id, '_rs_recipecategory', strip_tags($_POST['rs_recipecategory']));
		update_post_meta($post_id, '_rs_recipeimage', strip_tags($_POST['rs_recipeimage']));
		update_post_meta($post_id, '_rs_recipedescription', strip_tags($_POST['rs_recipedescription']));
		update_post_meta($post_id, '_rs_recipeingredients', strip_tags($_POST['rs_recipeingredients']));
		update_post_meta($post_id, '_rs_recipeinstructions', strip_tags($_POST['rs_recipeinstructions']));
		update_post_meta($post_id, '_rs_recipeyield', strip_tags($_POST['rs_recipeyield']));
		update_post_meta($post_id, '_rs_recipepreptime', strip_tags($_POST['rs_recipepreptime']));
		update_post_meta($post_id, '_rs_recipecooktime', strip_tags($_POST['rs_recipecooktime']));
		update_post_meta($post_id, '_rs_recipedate', strip_tags($_POST['rs_recipedate']));
		update_post_meta($post_id, '_rs_recipeauthor', strip_tags($_POST['rs_recipeauthor']));
	
	}

}



//filter to add meta box data to posts, formatted as with rich snippets info




?>
