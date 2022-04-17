<form action="Tags/add_tag" method="POST">
    <div class="container">
        <div class="col-12 ">
            <h5>Creez Tag</h5>
            <?php

            ?>
            <input name="tag_name" value="" type="text">
            <div><input type="submit" value="Submit" /></div>

            <?php if (isset($validation)) : ?>
                <div class="col-12 mt-3">
                    <div class="alert alert-danger" role="alert">
                        <?= $validation->listErrors() ?>
                    </div>
                </div>
            <?php endif; ?>
</form>
</div>
</div>
</form>