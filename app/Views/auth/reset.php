<?= $this->extend('layouts/default') ?>
<?= $this->section('main') ?>

<div class="vg-main-wrapper">
    <div class="page-home">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-6">
                    <h2 class="text-center">Réinitialiser votre mot de passe </h2>

                    <form action="<?php echo site_url('login/update_password'); ?>" method="post"
                        class="vg-contact-form">
                        <p class="lead">Veuillez saisir votre nouveau mot de passe.</p>
                        <div class="form-group">
                            <label for="new_password">Nouveau mot de passe :</label>
                            <input type="password" class="form-control" id="new_password" name="new_password" required>
                        </div>
                        <div class="form-group">
                            <label for="confirm_password">Confirmer le nouveau mot de passe :</label>
                            <input type="password" class="form-control" id="confirm_password" name="confirm_password"
                                required>
                        </div>
                        <input type="hidden" name="token" value="#">
                        <button type="submit" class="btn btn-theme btn-block">Mettre à jour le mot de passe</button>
                    </form>
                    <hr>
                    <div class="text-center">Retour à la <a href="<?php echo site_url('auth/login'); ?>">page de
                            connexion</a></div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>