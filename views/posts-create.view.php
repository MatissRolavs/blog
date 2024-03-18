<?php 
    require "components/head.php";
?>
<?php
    require "components/navbar.php";
?>

<h1>Create Posts</h1>

<form method="POST"> 
    <label>
        Title:
        <input name="title"/>
    </label>
    <label>
        Category ID:
        <input name="category-id"/>
    </label>
    <button>Save</button>
</form>

<?php
    require "components/footer.php";
?>