<div class="container bg-card mt-5">

    <div class="row">
        <div class="col-12 mt-5 pt-3 pb-3">
            <div class="container">
                <h1>Créez votre compte :</h1>
                <hr>
                <form action="register">
                    <div class="col-12">
                        <div class="col-12 col-sm-12">
                            <div class="form-group">
                                <label for="users_nickname">Pseudonyme</label>
                                <input type="text" class="form-control" name="'users_nickname" id="" value="<?= set_value('nickname') ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label for="firstname">Nom</label>
                                <input type="text" class="form-control" name="users_firstname" id="firstname" value="<?= set_value('firstname') ?>">
                            </div>
                        </div>

                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label for="lastname">Prénom</label>
                                <input type="text" class="form-control" name="users_lastname" id="lastname" value="<?= set_value('lastname') ?>">
                            </div>
                        </div>


                        <div class="col-12">
                            <div class="col-12 col-sm-12">
                                <div class="form-group">
                                    <label for="mail">E-Mail</label>
                                    <input type="text" class="form-control" name="users_email" id="" value="<?= set_value('mail') ?>">
                                </div>
                            </div>
                        </div>


                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label for="password">Votre mot de passe</label>
                                <input type="password" class="form-control" name="users_password" id="password" value="">
                            </div>
                        </div>

                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label for="passwordConfirm">Confirmez votre mot de passe</label>
                                <input type="password" class="form-control" name="users_passwordConfirm" id="passwordConfirm" value="">
                            </div>
                        </div>

                        <?php if (isset($validation)) : ?>
                            <div class="col-12 mt-3">
                                <div class="alert alert-danger" role="alert">
                                    <?= $validation->listErrors() ?>
                                </div>
                            </div>
                        <?php endif; ?>

                    </div>


                    <div class="row mt-5 mb-5">
                        <div class="col-12 col-sm-4">
                            <input class="btn btn-orange" type="submit">Créez votre compte</input>
                        </div>

                        <div class="col-12 col-sm-8 text-right">
                            <a href="login">J'ai déjà un compte.</a>
                        </div>

                    </div>



            </div>
        </div>
    </div>
    </form>
</div>

<div class="container mt-5 mb-5 bottom" style="height:10vh">

</div>