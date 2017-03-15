<ul>
	<?php foreach ($errors as $error):?>
		<li><?php echo $error ?></li>
	<?php endforeach;?>
</ul>
<form class="add_news" method="post" enctype="multipart/form-data">
	<input type="text" name="title">
	<input type="file" name="img">
	<textarea name="text"></textarea>
	<input type="submit">
</form>

<script>
    document.querySelector('.add_news').addEventListener('submit', function (e) {
        document.querySelectorAll('input:not([type="submit"]), textarea').forEach(function(element){
            if(!element.value){
                e.preventDefault();
                element.classList.add('error');
            }
        });
    })
</script>