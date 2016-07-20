<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Product 1 | Semi Restful Route Demo</title>
</head>
<body>
<?php foreach ($itemsList as $editing) { 
?>
<h1>Edit Product <?php echo $editing['id']; ?></h1>
<div>
<form action="/products/update/<?php echo $editing['id']; ?>" method="post">
<p>Name:</p>
<input type="text" name="name"value="<?php echo$editing['name']; ?>">
<p>Description:</p>
<textarea name="description" rows="5" cols="40"><?php echo $editing['description']; ?></textarea>
<p>Price:</p>
<input type="text" name="price" value=" <?php echo $editing['price']; ?>">
<input type="submit" value="Update">
</form>
<?php

}
?>

<a href="/products/show/<?=$editing['id']?>">Show</a> | <a href="/products/index">Back</a>

</body>
</html>