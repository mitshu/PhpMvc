<h1>Manage</h1>
<button style="float: right;" onclick="location.href='/test2/admin/newpost'" type="button">New</button>
<table>
        <th>ID</th>
        <th>Thumb</th>
        <th>Title</th>
        <th>Status</th>
        <th>Action</th>
<?php foreach($data['posts'] as $post): ?>
    <tr>
    <td>
        <?php echo $post->id?>
    </td>
    <td>
        <img src='<?php echo $post->image ?>' height=100 width=150>
    </td>
    <td>
        <?php echo $post->title ?>
    </td>
    <td>
        <?php echo $post->status ?>
    </td>
    <td>
        <a href= '/test2/admin/showpost/<?php echo $post->id ?>'>Show</a>
        <a href= '/test2/admin/editpost/<?php echo $post->id ?>'>Edit</a>
        <a href= '/test2/admin/deletepost/<?php echo $post->id ?>'>Delete</a>

                
    </td>
<?php endforeach; ?>
</table>
