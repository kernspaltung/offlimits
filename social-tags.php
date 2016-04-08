<?php

$name = get_bloginfo('name');

$twitter_user = '@offlimitsmx';

if( is_single() ) {

   $description = apply_filters( 'the_excerpt', get_the_excerpt() );
   $url = get_the_permalink( get_the_ID() );

} else {

   $description = get_bloginfo('description');
   $url = bloginfo('url');

}

$thumb_id = get_post_thumbnail_id();
$thumb_url = wp_get_attachment_image_src($thumb_id,'large', true);
$image = $thumb_url[0];


$date = '';
$time = '';

?>


<meta name="description" content="<?php echo $description; ?>" />

<!-- Schema.org markup for Google+ -->
<meta itemprop="name" content="<?php echo $name; ?>">
<meta itemprop="description" content="<?php echo $description; ?> ?>ss">
<meta itemprop="image" content="<?php echo $image; ?>">

<!-- Twitter Card data -->
<meta name="twitter:card" content="<?php echo $image; ?>">
<meta name="twitter:site" content="<?php echo $twitter_user; ?>">
<meta name="twitter:title" content="<?php echo $name; ?>">
<meta name="twitter:description" content="<?php echo $description; ?>">
<!-- <meta name="twitter:creator" content="@author_handle"> -->
<!-- Twitter summary card with large image must be at least 280x150px -->
<meta name="twitter:image:src" content="<?php echo $image; ?>">

<!-- Open Graph data -->
<meta property="og:title" content="<?php echo $name; ?>"/>
<meta property="og:type" content="article" />
<meta property="og:url" content="<?php echo $url; ?>" />
<meta property="og:image" content="<?php echo $image; ?>" />
<meta property="og:description" content="<?php echo $description; ?> ?>" />
<meta property="og:site_name" content="<?php echo $name; ?>" />
<meta property="article:published_time" content="<?php echo $date; ?>" />
<meta property="article:modified_time" content="<?php echo $time; ?>" />
<!-- <meta property="article:section" content="Artget_numberic ID" /> -->
