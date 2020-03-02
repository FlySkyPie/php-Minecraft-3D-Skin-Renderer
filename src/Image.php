<?php
namespace FlySkyPie\MinecraftSkinRenderer;

	/* Img class
	 *
	 * Handels image related things
	 */
	class Image {
		private function __construct() {
		}
		
		/* Function creates a blank canvas
		 * with transparancy with the size of the
		 * given image.
		 * 
		 * Espects canvas with and canvast height.
		 * Returns a empty canvas.
		 */
		public static function createEmptyCanvas($w, $h) {
			$dst = imagecreatetruecolor($w, $h);
			imagesavealpha($dst, true);
			$trans_colour = imagecolorallocatealpha($dst, 255, 255, 255, 127);
			imagefill($dst, 0, 0, $trans_colour);
			
			return $dst;
		}
		
		/* Function converts a non true color image to
		 * true color. This fixes the dark blue skins.
		 * 
		 * Espects an image.
		 * Returns a true color image.
		 */
		public static function convertToTrueColor($img) {
			if(imageistruecolor($img)) {
				return $img;
			}

			$dst = self::createEmptyCanvas(imagesx($img), imagesy($img));
		
			imagecopy($dst, $img, 0, 0, 0, 0, imagesx($img), imagesy($img));
			imagedestroy($img);

			return $dst;
		}
	}
		
