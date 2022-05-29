<?php
include_once('templates/header.php');

if(isset($_GET['id'])){
  $postId = $_GET['id'];
  $currentPost;

  foreach($posts as $post){
    if($post['id'] == $postId){
      $currentPost = $post;
    }
  }
}
?>

<main id="post-container">
  <div class="content-container">
    <h1 id="main-title">
      <?= $currentPost['title'] ?>
    </h1>
    <p class="post-description">
      <?= $currentPost['description'] ?>
    </p>
    <div class="img-container">
      <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
    </div>
    <p class="pos-content">
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui placeat cumque nemo quia ab dolores veniam quis enim cupiditate sapiente, autem, odit quaerat explicabo deserunt exercitationem excepturi omnis accusamus facilis.
      Omnis, unde voluptas in laboriosam perspiciatis sed natus animi. Qui nostrum possimus assumenda hic omnis, ducimus error minima distinctio rem veritatis ut soluta facilis iste impedit magnam exercitationem consequatur libero.
      Voluptatem, ipsa! Laudantium temporibus, molestiae sequi, suscipit fuga eius adipisci, harum laboriosam aliquid minima maxime quisquam veritatis. Beatae consectetur ducimus eum ipsum, molestias vero architecto corporis ad quo, delectus impedit?
      Sunt perspiciatis quaerat, ratione facere amet impedit repellendus est facilis cum animi nulla. Praesentium dolorem harum unde sed, cumque eum similique vel id animi expedita totam illo vitae. Mollitia, tempora.
      Eveniet, sapiente placeat. Quas ipsam, voluptates et similique esse totam natus quasi quam aliquid consequatur nisi, magni excepturi atque nostrum mollitia molestiae blanditiis corrupti quos, dolorum fugit voluptas fuga possimus!
    </p>
  </div>
  <aside id="nav-container">
    <h3 id="tags-title">Tags</h3>
    <ul class="tags-list">
      <?php foreach ($currentPost['tags'] as $tag):  ?>
      <li><a href="#"><?= $tag ?></a></li>
      <?php endforeach; ?>
    </ul>
    <h3 id="categorias-title">Categorias</h3>
    <ul id="categorias-list">
      <?php foreach ($categories as $categoria):  ?>
      <li><a href="#"><?= $categoria ?></a></li>
      <?php endforeach; ?>
    </ul>
  </aside>
</main>
<?php
include_once('templates/footer.php');
?>