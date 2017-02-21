<style type="text/css">
<?php $typography = of_get_option('body_type');
            if ($typography) { ?>
body {
	color:<?php echo $typography['color'] ?>;
	font-style: <?php  echo $typography['style'] ?>;
	font-family: <?php echo $typography['face'] ?>;
	font-size:<?php echo$typography['size']?>;
}
<?php } ?>
<?php $typography = of_get_option('h1');
            if ($typography) { ?>
h1 {
	color:<?php echo $typography['color'] ?>;
	font-style: <?php  echo $typography['style'] ?>;
	font-family: <?php echo $typography['face'] ?>;
	font-size:<?php echo$typography['size']?>;
}
<?php } ?>
<?php $typography = of_get_option('h2');
            if ($typography) { ?>
h2 {
	color:<?php echo $typography['color'] ?>;
	font-style: <?php  echo $typography['style'] ?>;
	font-family: <?php echo $typography['face'] ?>;
	font-size:<?php echo$typography['size']?>;
}
<?php } ?>
<?php $typography = of_get_option('h3');
            if ($typography) { ?>
h3 {
	color:<?php echo $typography['color'] ?>;
	font-style: <?php  echo $typography['style'] ?>;
	font-family: <?php echo $typography['face'] ?>;
	font-size:<?php echo$typography['size']?>;
}
<?php } ?>
<?php $typography = of_get_option('h4');
            if ($typography) { ?>
h4 {
	color:<?php echo $typography['color'] ?>;
	font-style: <?php  echo $typography['style'] ?>;
	font-family: <?php echo $typography['face'] ?>;
	font-size:<?php echo$typography['size']?>;
}
<?php } ?>
<?php $typography = of_get_option('h5');
            if ($typography) { ?>
h5 {
	color:<?php echo $typography['color'] ?>;
	font-style: <?php  echo $typography['style'] ?>;
	font-family: <?php echo $typography['face'] ?>;
	font-size:<?php echo$typography['size']?>;
}
<?php } ?>
<?php $typography = of_get_option('h6');
            if ($typography) { ?>
h6 {
	color:<?php echo $typography['color'] ?>;
	font-style: <?php  echo $typography['style'] ?>;
	font-family: <?php echo $typography['face'] ?>;
	font-size:<?php echo$typography['size']?>;
}
<?php } ?>
</style>