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

      <div class="outer-container">
        
        <section class="intro">
          <div class="text">
            <?= $page->intro()->kirbytext() ?>
          </div>
          <div class="experience text">
            <?= $page->experience()->kirbytext() ?>
          </div>
        </section>

        <section class="reels">

          <?php if($page->commerciallink()): ?>
            <?php $commerciallink = $page->commerciallink()->toFile()->url() ?>
            <?php snippet('audioplayer', array('file' => $commerciallink)) ?>
          <?php endif ?>

          <?php if($page->commerciallink()): ?>
            <?php $commerciallink = $page->commerciallink()->toFile()->url() ?>
            <?php snippet('audioplayer', array('file' => $commerciallink)) ?>
          <?php endif ?>
        
        </section>

      </div>

      <ul class="accordion-tabs bio-projects-tabs">
        <li class="tab-header-and-content">
          <a href="#" class="tab-link is-active">Projects</a>
          <div class="tab-content">
            <section class="projects-section">
              
              <div class="wrap wide">
                <?php snippet('project-list') ?>
              </div>
              
            </section>
          </div>
        </li>
        <li class="tab-header-and-content">
          <a href="#" class="tab-link">Bio &amp; CV</a>
          <div class="tab-content">
            <p>Abi has been in performing arts education since the age of 11, beginning her training at Sylvia Young Theatre School. While studying dance, music and theatre she began her acting career almost immediately recording radio plays, acting in British TV dramas including Casualty and The Bill and doing extensive and varied voice over work. At the age of 14 she transitioned to the BRIT school where she studied music for 4 years before embarking on a classical music degree in 2011. Here she studied under Guildhall tuition as a solo soprano achieving a first in performance. Alongside and since her degree, she has been developing and gaining a reputation in the voice-over industry as both actress and engineer, utilising and adapting the skills she learnt in her degree in music for this industry.</p>
          </div>
        </li>
      </ul>


      <section class="wrap wide">
        <div class="outer-container">
          <h2>Testimonials</h2>
          <?php snippet('testimonials') ?>
        </div>
      </section>

  </main>

<?php snippet('footer') ?>