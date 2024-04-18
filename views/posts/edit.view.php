<?php 
    require "views/components/head.php";
?>
<?php
    require "views/components/navbar.php";
?>
<h1>Edit <?= $post["title"]?></h1>

<form method="POST"> 
    <label>
        Title:
        <input name="title" value="<?= $_POST["title"] ?? "" ?>"/>
        <?php if (isset($errors["title"])){?>
            <p><?= $errors["title"] ?></p>
        <?php } ?>
    </label>
    <label>
        Category ID:
        <select name="category-id">
            <option value="1">Sport</option>
            <option value="2">Music</option>
            <option value="3">Food</option>
        </select>
        <?php if (isset($errors["category-id"])){?>
            <p><?= $errors["category-id"] ?></p>
        <?php } ?>
    </label>
    <button>Save</button>
</form>


<?php
    require "views/components/footer.php";
?>