<nav>
    <ul>
        <?php foreach ($nav as $link => $name): ?>
            <li><a href="<?php print $link ?>"><?php print $name ?></a></li>
        <?php endforeach; ?>
    </ul>
</nav>