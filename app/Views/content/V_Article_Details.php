
<?php 
use App\Models\M_Article;
$ingModel = new M_Article();

$url = uri_string();
$id = $url[strlen($url) - 1];
$ing = $ingModel->getOneIngredients($id);
var_dump($ing);

?>
<div class="container">
    <div class="col-12">
        <h1>Détail de ...</h1>
    </div>
</div>