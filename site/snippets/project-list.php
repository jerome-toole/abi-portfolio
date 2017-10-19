<?php

$projects = page('projects')->children()->visible();

/*

The $limit parameter can be passed to this snippet to
display only a specified amount of projects:

```
<?php snippet('showcase', ['limit' => 3]) ?>
```

Learn more about snippets and parameters at:
https://getkirby.com/docs/templates/snippets

*/

if(isset($limit)) $projects = $projects->limit($limit);

?>

<ul class="project-list">

  <?php foreach($projects as $project): ?>

    <li class="project-list__item js-fademe">
      <?php if($image = $project->images()->sortBy('sort', 'asc')->first()): $thumb = $image->crop(600, 600); ?>
        <img src="<?= $thumb->url() ?>" alt="Thumbnail for <?= $project->title()->html() ?>" class="project-list__image" />
      <?php endif ?>
      <div class="project-list__details">
        <h3 class="project-list__title"><?= $project->title()->html() ?></h3>
        <h5 class="project-list__type"><?= $project->type()->html() ?></h5>
        <h5 class="project-list__client"><?= $project->client()->html() ?></h5>
        <p class="project-list__description"><?= $project->text()->kirbytext() ?></p>
      </div>
    </li>

  <?php endforeach ?>

</ul>