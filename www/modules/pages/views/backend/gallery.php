<?php foreach ($images as $image):?>
	<div class="flex_item">
		<a href="/admin/gallery/edit/<?php echo $image['id']; ?>">
            <img src="/<?php echo $image['thumb']; ?>">
        </a>
        <a href="/admin/gallery/delete/<?php echo $image['id']; ?>">Delete</a>
	</div>
<?php endforeach; ?>

<a href="/admin/gallery/add">Add new</a>
