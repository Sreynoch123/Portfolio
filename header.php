<!DOCTYPE html>
<html ​<?php language_attributes(); ?>>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
<head>
  <meta charset="<?php bloginfo(('charset')); ?>">
  <title><?php bloginfo('Name') ?></title>
  <?php wp_head(); ?>
</head>

<body>
  <?php
  echo my_navigation();
  ?>
 <section class="home" id="home">
    <div class="max-width">
      <div class="home-content">
        <div class="text-content">
          <div class="text-1">Hello, my name is</div>
          <div class="text-2">Na Sreynoch</div>
          <div class="text-3">And I'm a <span class="typing"></span></div>
          <a href="#" class="btn btn-primary text-light text-decoration-none">Hire me</a>
        </div>
      </div>
    </div>
  </section>

  <script>
    document.addEventListener("DOMContentLoaded", function() {
      const typingSpan = document.querySelector(".typing");
      const text = "Student studying software engineering";
      let index = 0;

      function type() {
        if (index < text.length) {
          typingSpan.textContent += text.charAt(index);
          index++;
          setTimeout(type, 100);
        }
      }
      type();
    });
  </script>