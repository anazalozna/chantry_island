<nav class="control_menu">
    <div class="wrapper_small">
        <ul>
            <?php foreach ($menuList as $item): ?>
                <li><a href="<?php echo $item['link'];?>"><?php echo $item['name'];?></a></li>
            <?php endforeach; ?>
        </ul>
    </div>
</nav>