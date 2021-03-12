<div class="container center">
    <h1>
        New
    </h1>
    <form>
        <input style="float: right;" type="button" value="Back" onclick="history.back()">  
    </form>
    <form action="<?php $_GET['url'] ?>" method="POST">
        Title <div class="form-item">
            <input
                type="text"
                name="title">
        </div>

        Description <div class="form-item">
            <input name="des" ></input>
        Image </div><div class="form-item">
            <input type="file" id="img" name="img" accept="image/*">
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
