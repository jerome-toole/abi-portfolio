<?php snippet('header') ?>

  <main class="main" role="main">

    
    <header class="wrap">
      <?php if($page->landingimage()->isNotEmpty()): ?>
        <figure class="landingimage">
          <img src="<?= $page->landingimage()->toFile()->url() ?>" alt="" />
        </figure>
      <?php endif ?>
      <section class="intro">
        <div class="text">
          <?= $page->intro()->kirbytext() ?>
        </div>
        <div class="experience text">
          <?= $page->experience()->kirbytext() ?>
        </div>
      </section>
    </header>

    <section class="reels wrap">
      <div>
        <h2>Commercial</h2>
        <iframe width="100%" height="110" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/<?php echo $page->commerciallink() ?>&amp;color=143888&amp;auto_play=false&amp;hide_related=false&amp;show_comments=false&amp;show_user=false&amp;show_reposts=false"></iframe>
      </div>
      
      <div>
        <h2>Narrative</h2>
        <iframe width="100%" height="110" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/<?php echo $page->narrativelink() ?>&amp;color=143888&amp;auto_play=false&amp;hide_related=false&amp;show_comments=false&amp;show_user=false&amp;show_reposts=false"></iframe>
      </div>
    </section>

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