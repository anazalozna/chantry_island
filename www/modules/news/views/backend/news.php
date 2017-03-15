<ul>
	<?php foreach ($news as $news_article): ?>
		<li>
			<a href="/admin/news/edit/<?php echo $news_article['id']?>"><?php echo $news_article['title']?></a>
			<a href="/admin/news/delete/<?php echo $news_article['id']?>">Delete</a>
		</li>
	<?php endforeach; ?>
</ul>

<a href="/admin/news/add">Add new</a>