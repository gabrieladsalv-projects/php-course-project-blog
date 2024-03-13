<?php
    include_once('templates/header.php');
    if(isset($_GET['id'])){
        $postid = $_GET['id'];
        $currentPost;
        foreach($posts as $post) {
            if($post['id'] == $postid){
                $currentPost = $post;
            }
        }
    
     }
?>
<main id="post-container">
    <div class="content-container">
        <h1 id="main-title"><?=$currentPost['title']?></h1>
        <p id="post-description"><?=$currentPost['description']?></p>
        <div class="img-container">
        <img src="<?= $currentPost["img"] ?>" alt="<?= $currentPost['title']?>">
        </div>
        <p class="post-content">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iure quo quaerat repellendus. Enim, maxime cumque ratione sed perferendis, deleniti vitae similique, dicta officia voluptatum laboriosam voluptates odit ipsum amet. Odit!
        Reiciendis, dolore quo. Impedit quam sunt illo facilis minus, dolores mollitia harum fugit omnis deserunt eveniet corrupti cum, vitae nisi tenetur voluptates itaque unde sed maxime dolore amet repellendus. Non.
        Impedit cumque, beatae unde velit provident necessitatibus magni ullam eius repellendus voluptate possimus sapiente doloremque placeat, deleniti libero non tenetur natus iure labore. Autem, voluptatibus dignissimos ipsam beatae eos modi?
        Facilis incidunt quam placeat excepturi saepe nisi rerum distinctio doloremque, provident, sint atque adipisci illum quae consequatur enim fugiat quod numquam ipsa velit? Quaerat laboriosam, placeat qui vel perferendis soluta!
        Obcaecati, voluptate vero autem laudantium rerum iure corrupti quas magnam minus saepe earum perferendis incidunt deleniti vel cupiditate voluptatum commodi voluptas, nobis accusantium. Nisi quo eius est, ratione iusto esse.</p>
        <p class="post-content">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iure quo quaerat repellendus. Enim, maxime cumque ratione sed perferendis, deleniti vitae similique, dicta officia voluptatum laboriosam voluptates odit ipsum amet. Odit!
        Reiciendis, dolore quo. Impedit quam sunt illo facilis minus, dolores mollitia harum fugit omnis deserunt eveniet corrupti cum, vitae nisi tenetur voluptates itaque unde sed maxime dolore amet repellendus. Non.
        Impedit cumque, beatae unde velit provident necessitatibus magni ullam eius repellendus voluptate possimus sapiente doloremque placeat, deleniti libero non tenetur natus iure labore. Autem, voluptatibus dignissimos ipsam beatae eos modi?
        Facilis incidunt quam placeat excepturi saepe nisi rerum distinctio doloremque, provident, sint atque adipisci illum quae consequatur enim fugiat quod numquam ipsa velit? Quaerat laboriosam, placeat qui vel perferendis soluta!
        Obcaecati, voluptate vero autem laudantium rerum iure corrupti quas magnam minus saepe earum perferendis incidunt deleniti vel cupiditate voluptatum commodi voluptas, nobis accusantium. Nisi quo eius est, ratione iusto esse.</p>
    </div>
    <aside id="nav-container">
        <h3 id="tags-title">Tags</h3>
        <ul id="tag-list">
            <?php foreach($currentPost['tags'] as $tag): ?>
                <li><a href="#"><?=$tag ?></a></li>
            <?php endforeach; ?>
        </ul>
        <h3 id="categories-title">Categories</h3>
        <ul id="categories-list">
        <?php foreach($categories as $category): ?>
                <li><a href="#"><?=$category ?></a></li>
            <?php endforeach; ?>
        </ul>
    </aside>
</main>


<?php
    include_once('templates/footer.php');
?>