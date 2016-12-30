<?php

$testimonials = page('testimonials')->children()->visible();

/*

The $limit parameter can be passed to this snippet to
display only a specified amount of testimonials:

```
<?php snippet('showcase', ['limit' => 3]) ?>
```

Learn more about snippets and parameters at:
https://getkirby.com/docs/templates/snippets

*/

if(isset($limit)) $testimonials = $testimonials->limit($limit);

?>

<ul class="testimonial-list">

  <?php foreach($testimonials as $testimonial): ?>

    <li class="testimonial-list__item">
      <?php if($image = $testimonial->images()->sortBy('sort', 'asc')->first()): $thumb = $image->crop(600, 600); ?>
        <img src="<?= $thumb->url() ?>" alt="Thumbnail for <?= $testimonial->title()->html() ?>" class="testimonial-list__image" />
      <?php endif ?>
      <div class="testimonial-list__details">
        <h3 class="testimonial-list__title"><?= $testimonial->title()->html() ?></h3>
        <h5 class="testimonial-list__type"><?= $testimonial->type()->html() ?></h5>
        <h5 class="testimonial-list__client"><?= $testimonial->client()->html() ?></h5>
        <p class="testimonial-list__description"><?= $testimonial->text()->kirbytext() ?></p>
      </div>
    </li>

  <?php endforeach ?>

</ul>