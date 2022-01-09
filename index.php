<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<title>Php dischi</title>
</head>

<body>

	<?php
	include __DIR__ . '../database.php';
	?>

	<header>
		<div class="content">
            <img src="logo.png" alt="logo">
        </div>
	</header>

	<div class="container">
		<?php foreach ($database as $key => $value) : ?>
			<div class="album">
				<div class="content-album">
                    <div class="album_img">
				    	<img src="<?php echo $value['poster'] ?>">
				    </div>
				    <div>
				    	<h4><?php echo $value['title'] ?></h4>
				    	<div class="author"><?php echo $value['author'] ?></div>
				    	<h5><?php echo $value['year'] ?> </h5>
				    	<div class="genre"><?php echo $value['genre'] ?></div>
				    </div>
                </div>
			</div>
		<?php endforeach; ?>

	</div>
</body>

</html>