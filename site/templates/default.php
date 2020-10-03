<?php snippet('header'); ?>
<?php snippet('nav'); ?>
  <div class="layout-wrapper--contained">
    <div class="text text-transform">
      <?= $page->main_content()->kt(); ?>
    </div>
  </div>
<?php snippet('footer'); ?>
