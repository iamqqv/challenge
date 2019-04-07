<?php
/**
 * @var \App\View\AppView              $this
 * @var \App\Model\Table\ArticlesTable $articles
 */

?>
<div class="article">
    <?php /** @var \App\Model\Entity\Article $article */ ?>
    <?php foreach ($articles as $article): ?>
        <h1 class="headline"><?= $article->headline ?></h1>
        <h3 class="subtitle"><?= $article->subtitle ?></h3>
        <p class="details">
            <span class="author"><?= $article->author_firstname . ' ' . $article->author_lastname ?></span>
            <span class="time"><?= $article->displaydate ?></span>
        </p>
        <section>
            <p class="introduction">
                <?= $article->introduction ?>
            </p>

            <?php if (!empty($article->image_url)): ?>
                <figure class="img-container">
                    <?= $this->Html->image($article->image_url, [
                        'alt' => 'article image'
                    ]) ?>
                    <figcaption
                        class="img-caption"><?= $article->image_text . ' | ' . $article->image_source ?></figcaption>
                </figure>
            <?php endif; ?>
        </section>
        <section class="chapters">
        <?php foreach ($article->chapters as $chapter): ?>
            <h3 class="subtitle"><?= $chapter->headline ?></h3>
            <p class="introduction"><?= strip_tags($chapter->text) ?></p>
            <?php if (!empty($chapter->image_url)): ?>
                <figure class="img-container">
                    <?= $this->Html->image($chapter->image_url, [
                        'class' => 'img',
                        'onclick' => 'openModal()',
                        'alt' => 'chapter image'
                    ]) ?>
                    <figcaption
                        class="img-caption"><?= h($chapter->image_text) . ' | ' . $chapter->image_source ?></figcaption>
                </figure>
            <?php endif; ?>
            </section>
        <?php endforeach; ?>
    <?php endforeach; ?>
</div>
