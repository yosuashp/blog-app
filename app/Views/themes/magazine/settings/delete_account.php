<section class="section section-page">
    <div class="container-xl">
        <div class="row">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= langBaseUrl(); ?>"><?= trans("home"); ?></a></li>
                    <li class="breadcrumb-item"><a href="<?= generateURL('settings'); ?>"><?= trans("settings"); ?></a></li>
                    <li class="breadcrumb-item active"><?= esc($title); ?></li>
                </ol>
            </nav>
            <h1 class="page-title"><?= esc($title); ?></h1>
            <div class="page-content">
                <div class="row">
                    <div class="col-sm-12 col-md-3">
                        <?= loadView('settings/_setting_tabs'); ?>
                    </div>
                    <div class="col-sm-12 col-md-9">
                        <?= loadView('partials/_messages'); ?>
                        <form action="<?= base_url('delete-account-post'); ?>" method="post" class="needs-validation">
                            <?= csrf_field(); ?>
                            <input type="hidden" name="back_url" value="<?= currentFullURL(); ?>">
                            <div class="mb-3">
                                <label class="form-label"><?= trans("password"); ?></label>
                                <input type="password" name="password" class="form-control form-input" value="<?= old("password"); ?>" placeholder="<?= trans("password"); ?>" required>
                            </div>
                            <div class="mb-3 form-check form-check-delete-account">
                                <input type="checkbox" name="confirm" class="form-check-input" id="checkboxContactTerms" required>
                                <label class="form-check-label display-flex" for="checkboxContactTerms">
                                    <?= trans("delete_account_confirm"); ?>
                                </label>
                            </div>
                            <button type="submit" class="btn btn-md btn-custom"><?= trans("delete_account") ?></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>