     
     <?php include 'data.inc.php'; ?>
        <header>
          <h1>Art Store</h1>
          <nav>
            <ul>
              <?php foreach ($links as $link) { ?>
                <li><a href="<?php echo $link['url']; ?>"><?php echo $link['label']; ?></a></li>
                <?php } ?>
            </ul>
          </nav>
        </header>