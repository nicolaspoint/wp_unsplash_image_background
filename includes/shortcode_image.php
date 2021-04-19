<?php
// [bartag height="350" title="my Title" title_tag="h1" image_url="image_url" classes="myclass"]
function unsplash_image( $atts ) {
	$a = shortcode_atts( array(
		'height' => '350',
        'title_tag' => 'h1',
        'title' => 'Hello World!',
        'subtitle_tag' => 'h4',
        'subtitle'  => '',
        'image_url' => "",
        'classes' => "",
    ), $atts );
    
    $image = ($a['image_url'] != "") ? $a['image_url'] : ""; 
    $random_image = ($a['image_url'] != "") ? false : true;
    $title = ($a['title'] != "") ? "<".$a['title_tag'].">".$a['title']."</".$a['title_tag'].">" : "";
    $subtitle = ($a['subtitle'] != "") ? "<div class='ubi_title'><".$a['subtitle_tag'].">".$a['subtitle']."</".$a['subtitle_tag']."></div>" : "";
    $classes = ($a['classes'] != "")? $a['classes'] : "";
    $style_inner= 'style="background-repeat: no-repeat; background-size: cover; background-position: center center; background: url('.$image.');"';
    
    $ubi_result = '<div id="ubi_plugin" data-random_image="'.$random_image.'" class="'.$classes.'" style="height: '.$a['height'].'px"><div id="ubi_inner" '.$style_inner.'></div><div id="filter"></div><div class="ubi_title">'.$title.'</div>'.$subtitle.'</div>';

    return $ubi_result;

}

add_shortcode( 'unsplash_bg_image', 'unsplash_image' );