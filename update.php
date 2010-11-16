<?php
include("Twitter.class.php");
$twitter = new Twitter();

$json = $twitter->friends_timeline('json');
$updates = json_decode($json);
$update = $updates[0];
$i = 0;

foreach ($updates as $update) {
$i++;
if ($i > 8) break;
//   echo $update->text;
//   echo $update->user->name . "<br>";
?>

		<div id="update">
			<div id="left"><img width="48px" height="48px" src="<?=$update->user->profile_image_url?>"/></div>
			<div id="right">
				<div class="user"><?=$update->user->name?></div>
				<div class="detail">
				<?=$update->text?>
				</div>
			</div>
		</div>
<?php
}
?>