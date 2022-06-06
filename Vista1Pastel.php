<?php
	// Vista1Pastel.php
	class Vista1Pastel {
		public function dibujar($modelo){
			$img = imagecreate(400, 400);
			$blanco = imagecolorallocate($img, 255, 255, 255);
			$negro = imagecolorallocate($img, 0, 0, 0);
			imagefilledrectangle($img, 0, 0, 400, 400, $blanco);
			$color_a = imagecolorallocate($img, rand(0,255), rand(0,255), rand(0, 255));
			imagefilledarc($img, 200, 200, 200, 200, 0, $modelo->anga, $color_a, IMG_ARC_PIE);
			imagestring($img, 5, 180, 230, "a = " . $modelo->a . "%", $negro);
			$color_b = imagecolorallocate($img, rand(0,255), rand(0,255), rand(0, 255));
			imagefilledarc($img, 200, 200, 200, 200, $modelo->anga, $modelo->anga+$modelo->angb, $color_b, IMG_ARC_PIE);
			imagestring($img, 5, 130, 150, "b = " . $modelo->b . "%", $negro);
			$color_c = imagecolorallocate($img, rand(0,255), rand(0,255), rand(0, 255));
			imagefilledarc($img, 200, 200, 200, 200, $modelo->anga+$modelo->angb, 0, $color_c, IMG_ARC_PIE);
			imagestring($img, 5, 220, 150, "c = " . $modelo->c . "%", $negro);
			imagepng($img);
			imagedestroy($img);
		}
	}
?>