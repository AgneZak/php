<nav>
    <ul>
        <?php foreach ($data as $link => $name): ?>
            <li><a href="<?php print $link ?>"><?php print $name ?></a></li>
        <?php endforeach; ?>
    </ul>
</nav>