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
      <iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/<?php echo $page->commerciallink() ?>&amp;color=fff5ef&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>
      
      <iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/<?php echo $page->narrativelink() ?>&amp;color=fff5ef&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>
    </section>

    <section class="projects-section">
      
      <div class="wrap wide">
        <h2>Latest Projects</h2>
        <?php snippet('showcase', ['limit' => 3]) ?>
        <p class="projects-section-more"><a href="<?= page('projects')->url() ?>" class="btn">show all projects &hellip;</a></p>
      </div>
      
    </section>

  </main>

<?php snippet('footer') ?>