<?php 
    require "views/components/head.php";
?>
<?php
    require "views/components/navbar.php";
?>
    <form>
        <input name='id' value='<?= ($id ?? '')?>'/>
        <button>Submit ID</button>
    </form>

    <form>
        <input name='category' value='<?= ($category ?? '')?>'/>
        <button>Submit Category</button>
    </form>

    <h1>Posts</h1>

    <ul>
        <?php foreach($posts as $post){ ?>
        <li>
            <a href="/show?id=<?= $post["id"] ?>"><?= htmlspecialchars($post["title"])?></a>
            <form method="POST" action="/delete" class="delete-form">
                <button name="id" value="<?= $post["id"] ?>">Delete</button>
            </form>
        </li>
        <?php } ?>  
    </ul>
<form action="/logout" method="POST">
    <button>Logout</button>
</form>
<?php
    require "views/components/footer.php";
?>
