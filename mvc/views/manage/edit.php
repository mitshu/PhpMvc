<div class="container center">
    <h1>
        Edit
    </h1>
    <form>
        <input style="float: right;" type="button" value="Back" onclick="history.back()">  
        <button style="float: right;" onclick="location.href='/test2/admin/showpost/<?php echo  $data['post']->id ?>'" type="button">
         Show</button>
    </form>
    <form action="<?php $_GET['url'] ?>" method="POST">
        Title <div class="form-item">
            <input
                type="text"
                name="title"
                value="<?php echo $data['post']->title ?>">
        </div>

        Description <div class="form-item">
            <input name="des" value ='<?php echo $data['post']->description ?>'></input>
        Image </div><div class="form-item">
            <?php $fs = $data['post']->image ?>
            <input type="file" id="img" name="img" value= "<?php echo $fs?>" accept="image/*">
            <p><img src="<?php echo ($data['post']->image) ?>" height=200 width=200></p>
            <?php $data['post']->image = $fs ?>
        </div>
        Status <div class="form-item">
            <select id="stt" name="stt1">
                <option value=1>Enable</option>
                <option value=0>Disable</option>
            </select>
        </div>
        <button class="btn green" name="submit" type="submit">Submit</button>
    </form>
    
</div>
