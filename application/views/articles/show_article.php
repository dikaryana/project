<article class="article">
    <h1 class="post-title"><?= $article->title ? html_escape($article->title) : "No Title" ?></h1>
    <div class="post-meta">
        Published at <?= $article->created_at ?>
    </div>
    <div class="post-body">
        <?= $article->content ?>
    </div>
</article>