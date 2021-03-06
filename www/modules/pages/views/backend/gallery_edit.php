<ul>
	<?php foreach ($errors as $error):?>
		<li><?php echo $error ?></li>
	<?php endforeach;?>
</ul>
<form class="save_image" method="post" enctype="multipart/form-data">
	<input type="text" value="<?php echo $title?>" name="title">
	<img src="/<?php echo $thumb?>">
	<input type="file" name="img">
	<textarea name="text"><?php echo $text?></textarea>
	<input type="submit">
</form>

<a href="/admin/gallery/delete/<?php echo $id; ?>">Delete</a>


<script src="//cloud.tinymce.com/stable/tinymce.min.js"></script>
<script type="text/javascript" src="<?php echo Config::get('global')['js_dir']?>backend/editor.js"></script>
<script>
    document.querySelector('.save_image').addEventListener('submit', function (e) {
        tinyMCE.triggerSave();
        document.querySelectorAll('input[type="text"], textarea').forEach(function(element){
            if(!element.value){
                e.preventDefault();
                element.classList.add('error');
            }
        });
    })
</script>