<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php wp_title(''); ?></title>
<link rel="stylesheet" href="https://use.typekit.net/kmc1kxa.css">
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/styles.css">
<script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/src/js/main.js"></script>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-111120106-1"></script>

<!-- Analytics code -->
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-111120106-1');
</script>
<meta name="google-site-verification" content="o_wwCyg0ifKIptWahQPZD30t0A6AJIx51uSqUir9fTY" />

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>