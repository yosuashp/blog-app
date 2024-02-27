<section class="section section-page">
    <div class="container-xl">
        <div class="row">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= langBaseUrl(); ?>"><?= trans("home"); ?></a></li>
                    <li class="breadcrumb-item active"><?= esc($tag->tag); ?></li>
                </ol>
            </nav>
            <h1 class="page-title"><?= trans("tag"); ?>:&nbsp;<?= esc($tag->tag); ?></h1>
            <div class="col-sm-12 col-md-12 col-lg-8">
                <div class="row">
                    <?php $i = 0;
                    if (!empty($posts)):
                        foreach ($posts as $item):
                            if ($i == 2):
                                echo loadView('partials/_ad_spaces', ['adSpace' => 'posts_top', 'class' => 'mb-4']);
                            endif; ?>
                            <div class="col-sm-12 col-md-6">
                                <?= loadView("post/_post_item", ['postItem' => $item, 'showLabel' => false]); ?>
                            </div>
                            <?php $i++;
                        endforeach;
                    endif;
                    echo loadView('partials/_ad_spaces', ['adSpace' => 'posts_bottom', 'class' => '']); ?>
                    <div class="col-12 mt-5">
                        <?= view('common/_pagination'); ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-4">
                <?= loadView('partials/_sidebar'); ?>
            </div>
        </div>
    </div>
</section>