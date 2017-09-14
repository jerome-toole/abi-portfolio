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
      <?php if($file = $page->file('sample.mp3')): ?>
      <div class="audio-player-wrap audiojs">
    
            <audio>
              Your browser does not support the <code>audio</code> element.
              <source src="<?php echo $file->url() ?>" type="audio/mp3">
            </audio>
            <div class="audio-player">
              <div class="play-pause">
                <p class="play">play</p>
                <p class="pause"></p>
                <p class="loading"></p>
                <p class="error"></p>
              </div>
              <div class="player-controls">
                <div class="scrubber">
                  <div class="progress"></div>
                  <div class="loaded"></div>
                </div>
              </div>

              <div class="time"><em class="played">00:00</em>/<strong class="duration">00:00</strong></div>
              <div class="error-message"></div>
            </div>

        
      </div>
      <?php endif ?>  

      <?php if($file = $page->file('sample.mp3')): ?>
      <div class="audio-player-wrap audiojs">
      
            <audio>
              Your browser does not support the <code>audio</code> element.
              <source src="<?php echo $file->url() ?>" type="audio/mp3">
            </audio>
            <div class="audio-player">
              <div class="controls">
              
                <div class="play-pause">
                  <p class="play">play</p>
                  <p class="pause"></p>
                  <p class="loading"></p>
                  <p class="error"></p>
                </div>
              
                <div class="player-controls">
                  <div class="scrubber">
                    <div class="progress"></div>
                    <div class="loaded"></div>
                  </div>
                </div>

                <div class="time"><em class="played">00:00</em>/<strong class="duration">00:00</strong></div>
                <div class="error-message"></div>
              </div>
            </div>

        
      </div>
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