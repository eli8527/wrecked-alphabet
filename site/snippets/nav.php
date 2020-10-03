<?php
// main menu items
$items = $pages->listed()->notTemplate('season');
?>
<nav>
  <ul class="navigation">
    <?php if (!$page->isHomePage()): ?>
      <li class="navigation__item--home font-4"><a href="<?= $site->url(); ?>"><?= $site->title(); ?></a></li>
    <?php endif; ?>
    <?php foreach($items as $item): ?>
    <li id="nav-<?= $item->title()->slug(); ?>" class="navigation__item <?php e($item->isOpen() && !isset($override), 'active') ?>"><a href="<?= $item->url() ?>"><?= $item->title(); ?></a></li>
    <?php endforeach ?>
  </ul>
</nav>
