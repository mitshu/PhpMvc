<h1><?php echo $data['post']->title  ?></h1>
<form>
 <input style="float: right;" type="button" value="Back" onclick="history.back()">
</form>
<table>
<th>
<img src="<?php echo $data['post']->image ?>" height=200 width=200>
</th>
<th>
<h2>Description<h2>
<h3><?php echo $data['post']->description ?></h3>
</th>
</table>
