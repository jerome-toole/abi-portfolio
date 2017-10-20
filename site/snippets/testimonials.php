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

<div class="testimonial-list carousel" data-flickity='{ "wrapAround": true }'>

  <?php foreach($testimonials as $testimonial): ?>

    <div class="testimonial-list__item carousel-cell">
      <div class="testimonial-list__details">
        <div class="testimonial-list__description"><?= $testimonial->text()->kirbytext() ?></div>
        <p class="testimonial-list__title"><?= $testimonial->title()->html() ?></p>
        <p class="testimonial-list__position"><?= $testimonial->position()->html() ?></p>
      </div>
    </div>

  <?php endforeach ?>

</div>