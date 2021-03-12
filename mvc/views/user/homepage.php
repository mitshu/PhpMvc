<table>
        <th>ID</th>
        <th>Thumb</th>
        <th>Title</th>
<?php foreach($data['posts'] as $post): ?>
    <tr>
    <td>
        <a href='/test2/user/detail/<?php echo $post->id ?>'><?php echo $post->id?></a>
    </td>
    <td>
        <img src='<?php echo $post->image ?>' height=100 width=150>
    </td>
    <td>
    <a href='/test2/user/detail/<?php echo $post->id ?>'><?php echo $post->title?></a>
    </td>
<?php endforeach; ?>
</table>
