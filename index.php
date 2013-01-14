<?php

$user_ids = $wpdb->get_col("SELECT ID FROM $wpdb->users WHERE ID NOT IN(2,4) ORDER BY RAND() LIMIT 2"); // query users
$id1 = $user_ids[0];
$id2 = $user_ids[1];
$user = get_userdata($id1);
?>

<a href="" class="">
	<?php
	echo userphoto($id1);
	echo '<div class="cover boxcaption">';
	echo '<figcaption>'. $user->display_name .' | <span> '.$user->job_title.'</span></figcaption>';
	echo '</div>';
	?>
</a>

<section>
	<?php the_excerpt(); ?>	
</section>	

<?php $user = get_userdata($id2);

?>

<a href="#" class="">
	<?php
	echo userphoto($id2);
	echo '<div class="cover boxcaption">';
	echo '<figcaption>'. $user->display_name .' | <span> '.$user->job_title.'</span></figcaption>';
	echo '</div>';
	?>
</a>