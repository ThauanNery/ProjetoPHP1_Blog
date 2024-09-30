<?php
    include_once("templates/header.php");

        if(isset($_GET['id']))
        {
            $postId = $_GET['id'];
            $currentPost;

            foreach($posts as $post)
            {
                if($post['id'] == $postId){
                    $currentPost = $post;
                }
            }
        }
?>
    <main id="post-container">
        <div class="content-container">
            <h1 id="main-title"> <?= $currentPost['title'] ?></h1>
            <p id="post-description"><?= $currentPost['description'] ?></p>
            <div class="img-container">
                <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
            </div>
            <p class="post-content"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro nam, adipisci labore non quod reiciendis, reprehenderit delectus consequatur totam optio consequuntur commodi. Rem dolore reprehenderit aut quam recusandae ipsam nam!
            Exercitationem, consequuntur? Error asperiores, placeat temporibus non consequuntur quidem consectetur, corporis molestias earum praesentium libero eligendi suscipit sint in optio! Amet ullam ad facilis placeat eaque ipsum accusamus doloribus cumque?
            Labore hic natus ad pariatur aperiam consequatur sed ex dolores earum obcaecati fugiat, eveniet non itaque est blanditiis rem aliquam enim tempora omnis voluptates! Harum suscipit quos praesentium ullam id.
            Eligendi in molestias vel libero est quibusdam repudiandae consequuntur officia, magni ullam illo ad praesentium recusandae inventore voluptas similique officiis asperiores nobis pariatur iure? Similique praesentium eius veniam libero vero.
            Impedit dolores iure, maxime in veritatis doloremque facilis tempora excepturi est praesentium consequatur a repellat expedita quod, mollitia fuga neque! Placeat dolor voluptatibus iure odio aut et dolorum eos cumque!</p>
       
        <p class="post-content"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro nam, adipisci labore non quod reiciendis, reprehenderit delectus consequatur totam optio consequuntur commodi. Rem dolore reprehenderit aut quam recusandae ipsam nam!
            Exercitationem, consequuntur? Error asperiores, placeat temporibus non consequuntur quidem consectetur, corporis molestias earum praesentium libero eligendi suscipit sint in optio! Amet ullam ad facilis placeat eaque ipsum accusamus doloribus cumque?
            Labore hic natus ad pariatur aperiam consequatur sed ex dolores earum obcaecati fugiat, eveniet non itaque est blanditiis rem aliquam enim tempora omnis voluptates! Harum suscipit quos praesentium ullam id.
            Eligendi in molestias vel libero est quibusdam repudiandae consequuntur officia, magni ullam illo ad praesentium recusandae inventore voluptas similique officiis asperiores nobis pariatur iure? Similique praesentium eius veniam libero vero.
            Impedit dolores iure, maxime in veritatis doloremque facilis tempora excepturi est praesentium consequatur a repellat expedita quod, mollitia fuga neque! Placeat dolor voluptatibus iure odio aut et dolorum eos cumque!</p>
        </div>

        <asid id="nav-container">
        <h3 id="tags-title">Tags</h3>
        <ul id="tags-list">
            <?php foreach($currentPost['tags'] as $tag): ?>
                <li><a href="#"><?=$tag?></a></li>
            <?php endforeach; ?>    
        </ul>
        <h3 id="categories-title">Categorias</h3>
        <ul id="categories-list">
            <?php foreach($categories as $category): ?>
                <li><a href="#"><?=$category?></a></li>
            <?php endforeach; ?>
        </ul>
    </asid>
    </main>
   
 <?php
    include_once("templates/footer.php");
?>