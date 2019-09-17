<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width,user-scalable=no,initial">
    <meta http-equiv="X-UA-Compatible"content="ie=edge">
    <title>List of posts</title>
</head>
<body>
<h1>List of posts</h1>
<a href="<?php echo url('post/create')?>">create new post</a>
<br>
<br>
<table border="1">
    <tr>
    <th>Id</th>
    <th>Title</th>
    <th>Details</th>
        <th>Action</th>
    </tr>
    <?php foreach ($posts as $post) { ?>
        <tr>
            <td><?php echo $post->id ?></td>
            <td><?php echo $post->title ?></td>
            <td><?php echo $post->details ?></td>
            <td>
                <a href="<?php echo url('post/edit/'.$post->id) ?>">Edit</a>
                <form action="<?php echo url('post/delete',$post->id)?php>"method="post">
                <input type="hidden" name="_method" value="delete">
                <button>Delete</buttton>
            </td>
        </tr>
    <?php } ?>
</table>>
</body>>
</html>>
