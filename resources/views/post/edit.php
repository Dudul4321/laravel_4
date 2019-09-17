<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width,user-scalable=no,initial">
    <meta http-equiv="X-UA-Compatible"content="ie=edge">
    <title>Update post</title>
</head>
<body>
<h1>Update post</h1>
<form action="<?php echo url('post/update',$post->id) ?>"method="post">
    <?php echo csrf_field(); ?>
    <input  type="text" name="_method" value="PUT">
    <input type="text"name="title" value="<?php echo $post->title ?>" placeholder="Title">
    <br>
    <br>
    <textarea name="details" id="" cols="30" rows="10" placeholder="Details">
        <?php echo $post->details ?>
    </textarea>
    <br>
    <button>submit</button>

</form>
</body>
</html>

