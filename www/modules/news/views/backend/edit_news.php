<ul>
	<?php foreach ($errors as $error):?>
		<li><?php echo $error ?></li>
	<?php endforeach;?>
</ul>

<form class="news_edit" method="post" enctype="multipart/form-data">
	<input name="title" value="<?php echo $title ?>" type="text">
	<img src="/<?php echo $img?>">
	<input name="img" type="file">
	<textarea name="text"><?php echo $text ?></textarea>
	<input type="submit">
</form>

<script src="//cloud.tinymce.com/stable/tinymce.min.js"></script>
<script type="text/javascript" src="<?php echo Config::get('global')['js_dir']?>backend/editor.js"></script>
<script>
    document.querySelector('.news_edit').addEventListener('submit', function (e) {
        document.querySelectorAll('input[type="text"], textarea').forEach(function(element){
            if(!element.value){
                e.preventDefault();
                element.classList.add('error');
            }
        });
    });
</script>