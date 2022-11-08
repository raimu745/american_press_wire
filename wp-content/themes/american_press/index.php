<?php
get_header();

$news = array(
    'posts_per_page' => -1,
    'offset' => 0,
    'category' => '',
    'category_name' => 'entertainment',
    'orderby' => 'date',
    'order' => 'ASC',
    'post_type' => 'News',
    'post_status' => 'publish',
    'suppress_filters' => true,
);

$news_post= get_posts($news);

// dd($news);
// echo"<pre>";
// print_r($news_post);
// exit;


// ?>


<?php
while(have_posts()){
  the_post();
?>

<h1><?= the_title();?></h1>

<?php } ?>



<?php
get_footer();
?>






