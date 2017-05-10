<?php
/* Template Name: email */
get_header();

 ?>

<?php

if (isset($_POST["mail"])) {
    echo "<p>votre email a été enregistré</p>";
    $wpdb->insert(
	'wp-email',
	array(
		'email' =>  $_POST["mail"]
	)
);

}
else {
    echo '<form class="" action="" method="post">';
    echo '<input type="email" name="mail" value="" placeholder="veuillez entrer votre mail">';
    echo '<input type="submit" name="form" value="envoyer">';
    echo '</form>';
}

 ?>
