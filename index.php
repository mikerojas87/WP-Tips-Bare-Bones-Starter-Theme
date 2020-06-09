<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <?php
  if (have_posts()) {
    while (have_posts()) {
      the_post();
      get_template_part('template-parts/content');
    }
  } else {
    get_template_part('template-parts/content', '404');
  }
  ?>

  <?php wp_footer(); ?>
</body>

</html>