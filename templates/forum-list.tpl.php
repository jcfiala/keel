<section class="forum-overview">

<?php foreach ($forums as $child_id => $forum): ?>
	<?php
		//lets figure out which is the first of each round
		$count = " count-" . $forum->count % 3;
	?>

	<?php if ($forum->is_container){ ?>
		<h2><?php print $forum->name; ?>:</h2>
	<?php }else{ ?>

  <article class="<?php print $forum->zebra . $count; ?>">
    <h3><a href="<?php print $forum->link; ?>"><?php print $forum->name; ?></a></h3>

		<?php if ($forum->description): ?>
    	<p><?php print $forum->description; ?></p>
    <?php endif; ?>

		<div class="icon <?php print $forum->icon_class; ?>">
    	<?php print $forum->icon_title; ?>
    	<span class="element-invisible"><?php print $forum->icon_title; ?></span>
    </div>

		<?php print t('Topics');?> <?php print $forum->num_topics ?>

  	<?php if ($forum->new_topics): ?>
  	<mark><a href="<?php print $forum->new_url; ?>" class="new"><?php print $forum->new_text; ?></a></mark>
  	<?php endif; ?>

  	<div>
    <?php print t('Posts');?> <?php print $forum->num_posts ?>
		</div>

  	<?php print t('Last post'); ?> <?php print $forum->last_reply ?>

	</article>

	<?php } ?>

<?php endforeach; ?>
</section>
