<?php snippet('header') ?>

  <main class="main" role="main">
    
    
    <section class="splash">
      <?php if($page->landingimage()->isNotEmpty()): ?>
        <figure class="landingimage">
        <img src="<?= $page->landingimage()->toFile()->url() ?>" alt="" />
        </figure>
      <?php endif ?>
      <div class="right">
        <h1><?= $site->title()->html() ?></h1>
        <h2>Voice Actress and Technician</h2>
      </div>
    </section>
    <section class="intro">
      <div class="text">
        <?= $page->intro()->kirbytext() ?>
      </div>
      <div class="experience text">
        <?= $page->experience()->kirbytext() ?>
      </div>
    </section>


    <section class="reels wrap">
      <?php if($page->commerciallink()): ?>
        <?php $commerciallink = $page->commerciallink()->toFile()->url() ?>
        <?php snippet('audioplayer', array('file' => $commerciallink)) ?>
      <?php endif ?>

      <?php if($page->commerciallink()): ?>
        <?php $commerciallink = $page->commerciallink()->toFile()->url() ?>
        <?php snippet('audioplayer', array('file' => $commerciallink)) ?>
      <?php endif ?>
    
    </section>

    <hr>

    <section class="projects-section">
      
      <div class="wrap wide">
        <h2>Latest Projects</h2>
        <?php snippet('project-list') ?>
      </div>

      <div class="wrap wide">
        <h2>Testimonials</h2>
        <?php snippet('testimonials') ?>
      </div>
      
    </section>

  </main>

<?php snippet('footer') ?>