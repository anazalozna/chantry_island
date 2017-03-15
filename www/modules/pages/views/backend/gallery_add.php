<ul>
	<?php foreach ($errors as $error):?>
		<li><?php echo $error ?></li>
	<?php endforeach;?>
</ul>
<form class="add_image" method="post" enctype="multipart/form-data">
	<input type="text" name="title">
	<input type="file" name="img">
	<textarea name="text"></textarea>
	<input type="submit">
</form>

<script src="//cloud.tinymce.com/stable/tinymce.min.js"></script>
<script type="text/javascript" src="<?php echo Config::get('global')['js_dir']?>backend/editor.js"></script>
<script>
    document.querySelector('.add_image').addEventListener('submit', function (e) {
        tinyMCE.triggerSave();
        document.querySelectorAll('input:not([type="submit"]), textarea').forEach(function(element){
            if(!element.value){
                e.preventDefault();
                element.classList.add('error');
            }
        });
    })
</script>