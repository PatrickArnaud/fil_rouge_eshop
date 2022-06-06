
<?php 
use App\Models\M_Recipes;
$recModel = new M_Recipes();
$url = uri_string();
$id = $url[strlen($url) - 1];
$rec = $recModel->getOneRecipe($id);

?>


<div class="container">
    <div class="col-12">
        <h1>Détail de : <?= $rec[0]->name ?></h1>
    </div>
</div>