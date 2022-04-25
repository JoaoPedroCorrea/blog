<?php
include_once("templates/header.php");

if(isset($_GET['id'])){
    $postId = $_GET['id'];
    $currentPost;

    foreach($posts as $post){

        if($post['id'] == $postId) {
            $currentPost = $post;
        }
    }
}

?>

<main id="post-container">
    <div class="content-container">
        <h1><?= $currentPost['title']?></h1>
        <p id="post-description"><?= $currentPost['description']?></p>
        <div class="img-container">
            <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
        </div>
        <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum consequuntur fugit vitae magni recusandae, asperiores, ipsa sed inventore ratione ipsum quasi assumenda numquam dignissimos ad accusantium, neque totam iure voluptatibus.
        Nobis alias odio illum eos harum delectus veniam nisi ipsa? Officia cum accusantium, exercitationem harum illum eveniet suscipit magni architecto sit sint eum commodi quasi quo eaque pariatur perferendis blanditiis!
        Non expedita eaque odio nostrum ipsam assumenda, similique dolor nulla error magni, aliquam explicabo. Veritatis suscipit adipisci dolorem dicta vel, reprehenderit error consectetur nobis numquam? Iusto dignissimos minus explicabo libero!
        Deserunt incidunt eaque illum porro nisi tempore, natus id soluta esse laborum cupiditate dolorem ullam quisquam sapiente! Adipisci suscipit, placeat doloremque unde molestiae, inventore assumenda accusantium, rem dicta quasi voluptatum.
        Aliquam nesciunt molestias et dicta ratione debitis dolore quo consectetur, a culpa alias quod. Ab odit sed fuga error illum, itaque corrupti! Ipsam repudiandae vel voluptatem quia dignissimos ea sed.Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum consequuntur fugit vitae magni recusandae, asperiores, ipsa sed inventore ratione ipsum quasi assumenda numquam dignissimos ad accusantium, neque totam iure voluptatibus.
        Nobis alias odio illum eos harum delectus veniam nisi ipsa? Officia cum accusantium, exercitationem harum illum eveniet suscipit magni architecto sit sint eum commodi quasi quo eaque pariatur perferendis blanditiis!
        Non expedita eaque odio nostrum ipsam assumenda, similique dolor nulla error magni, aliquam explicabo. Veritatis suscipit adipisci dolorem dicta vel, reprehenderit error consectetur nobis numquam? Iusto dignissimos minus explicabo libero!
        Deserunt incidunt eaque illum porro nisi tempore, natus id soluta esse laborum cupiditate dolorem ullam quisquam sapiente! Adipisci suscipit, placeat doloremque unde molestiae, inventore assumenda accusantium, rem dicta quasi voluptatum.
        Aliquam nesciunt molestias et dicta ratione debitis dolore quo consectetur, a culpa alias quod. Ab odit sed fuga error illum, itaque corrupti! Ipsam repudiandae vel voluptatem quia dignissimos ea sed.</p>
    </div>

    <aside id="nav-container">
        <h3 id="tags-title">Tags</h3>
        <ul id="tag-list">
            <?php foreach($currentPost['tags'] as $tag): ?>
                <li><a href="#"><?= $tag ?></a></li>
            <?php endforeach; ?>
        </ul>
    
        <h3 id="categories-title">Categorias</h3>
        <ul id="categories-list">
            <?php foreach($categories as $category): ?>
                <li><a href="#"><?= $category ?></a></li>
            <?php endforeach; ?>

</main>
    </ul>

</aside>
<?php
include_once("template/footer.php")
?>