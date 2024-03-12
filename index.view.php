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
    <li><?= $post["title"]?></li>
    <?php } ?>  
</ul>
