<?php snippet('header') ?>

  <main class="main" role="main">
    
    
    <section class="splash">
      <div class="outer-container">
        <div class="splash__welcome">
          <h1><?= $site->title()->html() ?></h1>
          <h2>Voice Actress and Technician</h2>
        </div>
        <?php if($page->landingimage()->isNotEmpty()): ?>
          <figure class="landingimage">
          <img src="<?= $page->landingimage()->toFile()->url() ?>" alt="" />
          </figure>
        <?php endif ?>
      </section>

      <div class="row">
        
        <section class="intro">
          <div class="text">
            <?= $page->intro()->kirbytext() ?>
          </div>
          <div class="experience text">
            <?= $page->experience()->kirbytext() ?>
          </div>
        </section>

        <section class="reels">

          <div class="audio-player-wrap audiojs">
                <audio>
                  Your browser does not support the <code>audio</code> element.
                  <source src="<?php echo $page->reel2file()->toFile()->url() ?>" type="audio/mp3">
                </audio>
                <div class="audio-player">
                  <div class="player-controls">
                    <div class="scrubber">
                      <div class="progress"></div>
                      <div class="loaded"></div>
                    </div>
                    <h2><?php echo $page->reel2title() ?></h2>
                    <div class="time"><small class="played">00:00</small><small class="duration">00:00</small></div>
                  </div>
                  <div class="play-pause">
                    <div class="play"></div>
                    <div class="pause"></div>
                    <div class="loading"></div>
                    <div class="error"></div>
                  </div>

                  <div class="error-message"></div>
                </div>
          </div>

          <div class="audio-player-wrap audiojs">
                <audio>
                  Your browser does not support the <code>audio</code> element.
                  <source src="<?php echo $page->reel1file()->toFile()->url() ?>" type="audio/mp3">
                </audio>
                <div class="audio-player">
                  <div class="player-controls">
                    <div class="scrubber">
                      <div class="progress"></div>
                      <div class="loaded"></div>
                    </div>
                    <h2><?php echo $page->reel1title() ?></h2>
                    <div class="time"><small class="played">00:00</small><small class="duration">00:00</small></div>
                  </div>

                  <div class="play-pause">
                    <div class="play"></div>
                    <div class="pause"></div>
                    <div class="loading"></div>
                    <div class="error"></div>
                  </div>
                  <div class="error-message"></div>
                </div>
          </div>

        
        </section>

      </div>

      <section class="projects-bio">
        <ul class="accordion-tabs bio-projects-tabs">
          <li class="tab-header-and-content">
            <a href="#projects" class="tab-link is-active">Projects</a>
            <div class="tab-content" id="projects">
              <section class="projects-section">
                
                <div class="outer-container">
                  <?php snippet('project-list') ?>
                </div>
                
              </section>
            </div>
          </li>
          <li class="tab-header-and-content">
            <a href="#bio" class="tab-link">Bio &amp; CV</a>
            <div class="tab-content" id="bio">
              <div class="text outer-container">
                <p>Abi has been in performing arts education since the age of 11, beginning her training at Sylvia Young Theatre School. While studying dance, music and theatre she began her acting career almost immediately recording radio plays, acting in British TV dramas including Casualty and The Bill and doing extensive and varied voice over work.</p><p>At the age of 14 she transitioned to the BRIT school where she studied music for 4 years before embarking on a classical music degree in 2011. Here she studied under Guildhall tuition as a solo soprano achieving a first in performance. Alongside and since her degree, she has been developing and gaining a reputation in the voice-over industry as both actress and engineer, utilising and adapting the skills she learnt in her degree in music for this industry.</p>
              </div>
            </div>
          </li>
        </ul>
      </section>


      <section class="testimonials">
        <div class="outer-container">
          <?php snippet('testimonials') ?>
        </div>
      </section>

  </main>

<?php snippet('footer') ?>