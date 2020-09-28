<?php snippet('header'); ?>
  <div class="layout-wrapper--contained">
    <div class="text">
      <?= $site->about()->kt(); ?>
    </div>
    <ul class="student__list">
      <?php $studentList = $site->index()->filterBy('intendedTemplate', 'student')->listed(); ?>
      <?php foreach($studentList as $student): ?>
        <li class="student__list__item">
          <a href="<?= $student->url(); ?>">
            <?= $student->title(); ?>
          </a>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
<?php snippet('footer'); ?>
