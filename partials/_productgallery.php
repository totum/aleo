<?php
// Nested inside a div for fotorama
?>

<div class="fotorama"
	data-allowfullscreen="true"
	data-nav="thumbs"
	data-arrows="true"
    data-click="true"
    data-swipe="true"
    data-captions="true"
    data-shadows="true"
    data-thumbwidth="70"
    data-thumbheight="70" >

<?php
// Getting ready for looping. Anticipating maximum amount of images.
$i = 1;
$max_images = 5;

while ($i <= $max_images) {
	$i_str = (string)$i;
	$image = get_field('featured_' . $i_str);
	if( !empty($image) ) {

		// We have an image! Set vars to target attributes
		$url = $image['url'];
		$title = $image['title'];
		$alt = $image['alt'];
		$caption = $image['caption'];

		// Set sizes
		// Might not need this as I use picturefill..
		//$size = 'thumbnail';
		//$thumb = $image['sizes'][ $size ];
		//$width = $image['sizes'][ $size . '-width' ];
		//$height = $image['sizes'][ $size . '-height' ];

		// Make it a list item, for the slider
		?><?php

			// Picturefill markup starts.
			?>
			<a href="<?php echo $image['sizes']['medium']?>" data-at2x="http://example.com/my_image@2x.png" data-caption="<p><?php echo $image['caption'] ?></p>" />
				<img src="<?php echo $image['sizes']['thumbnail']?>" data-full="<?php echo $image['sizes'][ 'large' ]?>" alt="<?php echo $image['alt']?>">
			</a>

<?php
// picturefill
/*
		    <span data-picture data-alt="<?php echo $alt ?>" title="<?php echo $title; ?>" data-title="my title" data-description="My description" data-big="/img/big.jpg">
		        <span data-src="<?php echo $image['sizes'][ 'small' ]?>"></span>
		        <span data-src="<?php echo $image['sizes'][ 'medium' ]?>" 	data-media="(min-device-pixel-ratio: 2.0)"></span>
		        <span data-src="<?php echo $image['sizes'][ 'medium' ]?>"	data-media="(min-width: 480px)"></span>
		        <span data-src="<?php echo $image['sizes'][ 'large' ]?>"	data-media="(min-width: 480px) and (min-device-pixel-ratio: 2.0)"></span>
		        <!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. -->
			    <a href="/img/large1.jpg"> 
			        <noscript>
			            <img src="<?php echo $image['sizes'][ 'small' ]?>" alt="<?php echo $alt ?>">
			        </noscript>
			    </a>
		    </span>
*/

  	 } 
  	$i++;
} ?>
</div>