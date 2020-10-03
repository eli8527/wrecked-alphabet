<?php snippet('header'); ?>
<?php snippet('nav'); ?>
  <div class="layout-wrapper--contained">
    <div class="text text-transform">
      <?= $page->main_content()->kt(); ?>
    </div>
  </div>
  <ul class="exhibition__gallery" id="gallery">
    <?php foreach($page->installation_shots()->toFiles() as $file): ?>
      <li class="exhibition__gallery__item">
        <a href="<?= $file->resize(2000)->url() ?>">
          <div class="exhibition__gallery__item__image">
            <img src="<?= $file->resize(500)->url() ?>" loading="lazy">
          </div>
          <div class="exhibition__gallery__item__caption text text-transform">
            <?= $file->caption()->kt(); ?>
          </div>
        </a>
      </li>
    <?php endforeach; ?>
  </ul>
  <div class="layout-wrapper--contained">
    <div class="text text-transform">
      <?= $page->main_content_continued()->kt(); ?>
    </div>
  </div>
<?php snippet('footer'); ?>
