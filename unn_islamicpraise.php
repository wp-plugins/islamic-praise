<?php
/*
Plugin Name: Usayd's Islamic Praise
Plugin URI: http://www.usayd.com/pluginshacks/islamic-praise/
Description: Replaces Islamic Terms with appropriate images or text.
Author: Usayd Younis
Author URI: http://www.usayd.com
Version: 0.8
*/
/*  Refer to readme.txt for installation */
/*  Copyright 2006  Usayd Younis  (email : plugins@usayd.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
*/
function islamicterms($text) {

// The directory containing the images. You can change this to anywhere you want to put your images.

$dir = get_settings('siteurl') . "/wp-content/plugins/islamicpraise/images/";

// The images

$saws = $dir . "saws.jpg";
$swt = $dir . "allah.gif";
$allah = $dir . "allah.png";
$bism = $dir . "bsmlh.gif";
$bismi = $dir . "bismillah.gif";
$muhammed = $dir . "muhammed.gif";
$alhamd_smiley = $dir . "alhamdullilah.gif";
$amin = $dir . "amin.gif";
$salamfull = $dir . "assalam.gif";
$crescent = $dir . "crescent.gif";
$insha_smiley = $dir . "inshallah.gif";
$mashallah = $dir . "masha.gif";
$mosque = $dir . "mosque.gif";
$peace = $dir . "peace.gif";
$salaam_simley = $dir . "salaam.gif";
$salaam_simley1 = $dir . "salambox.gif";
$sawsgif = $dir . "saws.gif";
$salamhalf = $dir . "sl.gif";
$swtgif = $dir . "swt.gif";
$wshalf = $dir . "wa.gif";
$wsfull = $dir . "wasalam.gif";
$ws_smiley = $dir . "wasalambox.gif";
$alhamd_smiley = $dir . "alhumdillah.gif";

// Add more if you wish, they are all in the form: // $image_name = $dir . "image.gif"; and any image type can be used

   global $islamic_islamic;
	
   if( empty($islamic_islamic) ) {
      $islamic_islamic = array(

	/* 
	First, we define all the things we're going to replace. 
	Each definition is in the form: // "name" => "replacement", 
	ESPECIALLY note that they all end with commas EXCEPT the last one 
	*/

		"Prophet Muhammad" => "Prophet Muhammad <img src='$saws' alt='(SAWS)' title='Peace and Blessings be upon him' border='0' style='border: 0px;' />",
		"Prophet Mohammad" => "Prophet Mohammad <img src='$saws' alt='(SAWS)' title='Peace and Blessings be upon him' border='0' style='border: 0px;' />",
		"Prophet Mohammed" => "Prophet Mohammad <img src='$saws' alt='(SAWS)' title='Peace and Blessings be upon him' border='0' style='border: 0px;' />",
		"Prophet Muhammed" => "Prophet Muhammed <img src='$saws' alt='(SAWS)' title='Peace and Blessings be upon him' border='0' style='border: 0px;' />",
		"Prophet Muhammad1" => "Prophet Muhammad <img src='$sawsgif' alt='(SAWS)' title='Peace and Blessings be upon him' border='0' style='border: 0px;' />",
		"Prophet Mohammad1" => "Prophet Mohammad <img src='$sawsgif' alt='(SAWS)' title='Peace and Blessings be upon him' border='0' style='border: 0px;' />",
		"Prophet Mohammed1" => "Prophet Mohammad <img src='$sawsgif' alt='(SAWS)' title='Peace and Blessings be upon him' border='0' style='border: 0px;' />",
		"Prophet Muhammed1" => "Prophet Muhammed <img src='$sawsgif' alt='(SAWS)' title='Peace and Blessings be upon him' border='0' style='border: 0px;' />",
		"Prophet Muhammednoimg" => "Prophet Muhammed (PBUH)",
		"Prophet Muhammednoimg1" => "Prophet Muhammed (SAW)",
		"Prophet Muhammadnoimg" => "Prophet Muhammad (PBUH)",
		"Prophet Muhammadnoimg1" => "Prophet Muhammad (SAW)",
		"Prophet Mohammednoimg" => "Prophet Mohammed (PBUH)",
		"Prophet Mohammednoimg1" => "Prophet Mohammed (SAW)",
		"Prophet Mohammadnoimg1" => "Prophet Mohammad (PBUH)",
		"Prophet Mohammadnoimg1" => "Prophet Mohammad (SAW)",
		"Prophet Muhammedimg" => "<img src='$muhammed' alt='Muhammed' title='Prophet Muhammed Peace be upon him' border='0' style='border: 0px;' />",
		"Prophet Muhammadimg" => "<img src='$muhammed' alt='Muhammad' title='Prophet Muhammad Peace be upon him' border='0' style='border: 0px;' />",
		"Prophet Mohammedimg" => "<img src='$muhammed' alt='Mohammed' title='Prophet Mohammed Peace be upon him' border='0' style='border: 0px;' />",
		"Prophet Mohammadimg" => "<img src='$muhammed' alt='Mohammad' title='Prophet Mohammad Peace be upon him' border='0' style='border: 0px;' />",
		"Muhammedarabic" => "محمد",
		"Mohammedarabic" => "محمد",
		"Mohammadarabic" => "محمد",
		"Muhammadarabic" => "محمد",
		"Allah" => "Allah <img src='$swt' alt='(SWT)' title='Praised and exalted is He' border='0' style='border: 0px;' />",
		"Allah1" => "Allah <img src='$swtgif' alt='(SWT)' title='Praised and exalted is He' border='0' style='border: 0px;' />",
		"Allahimg" => "<img src='$allah' alt='Allah' title='Name of God in Arabic' border='0' style='border: 0px;' />",
		"Allahnoimg" => "Allah (SWT)",
		"Allaharabic" => "الله",
		"Bismimg" => "<img src='$bism' alt='Bismillah' title='In the name of Allah' border='0' style='border: 0px;' />",
		"Bismimg2" => "<img src='$bismi' alt='Bismillah' title='In the name of Allah' border='0' style='border: 0px;' />",
		"Bismarabic" => "باسم الآب والابن والروح القدس",
		"الله"=> "الله<img src='$swt' alt='(SWT)' title='Praised and exalted is He' border='0' style='border: 0px;' />",
		"mosqueimg" => "<img src='$mosque' alt='Mosque' title='Mosque' border='0' style='border: 0px;' />",
		"peaceimg" => "<img src='$peace' alt='Peace' title='Peace' border='0' style='border: 0px;' />",
		"aminimg" => "<img src='$amin' alt='Amin' title='Amin' border='0' style='border: 0px;' />",
		"salaamimg" => "<img src='$salamfull' alt='Asalamualikum' title='Asalamualikum - Peace!' border='0' style='border: 0px;' />",
		"salaamimg1" => "<img src='$salamhalf' alt='Asalamualikum' title='Asalamualikum - Peace!' border='0' style='border: 0px;' />",
		"salaamimg2" => "<img src='$salaam_simley' alt='Asalamualikum' title='Asalamualikum - Peace!' border='0' style='border: 0px;' />",
		"salaamimg3" => "<img src='$salaam_simley1' alt='Asalamualikum' title='Asalamualikum - Peace!' border='0' style='border: 0px;' />",
		"wasalaamimg" => "<img src='$wshalf' alt='Wasalaam' title='Wasalaam - Peace Out!' border='0' style='border: 0px;' />",
		"wasalaamimg1" => "<img src='$wsfull' alt='Wasalaam' title='Wasalaam - Peace Out!' border='0' style='border: 0px;' />",
		"wasalaamimg2" => "<img src='$ws_smiley' alt='Wasalaam' title='Wasalaam - Peace Out!' border='0' style='border: 0px;' />",
		"crescentimg" => "<img src='$crescent' alt='Crescent' title='Crescent' border='0' style='border: 0px;' />",
		"inshallahimg" => "<img src='$insha_smiley' alt='InshaAllah' title='If God wills' border='0' style='border: 0px;' />",
		"mashallahimg" => "<img src='$mashallah' alt='MashaAllah' title='What God wishes' border='0' style='border: 0px;' />",
		"alhamdullilahimg" => "<img src='$alhamd_smiley' alt='Alhamdullilah' title='Praise belongs to God' border='0' style='border: 0px;' />"

	        );
   }

     $text = " $text ";
   foreach($islamic_islamic as $islamic => $description) {

		 $text = preg_replace("|(?!<[^<>]*?)(?<![?./&])\b$islamic\b(?!:)(?![^<>]*?>)|imsU","$description" , $text);
	     		 
   }
   return trim( $text );
}
// You can add appropriate filters if you want this to take place in other places within WordPress.
add_filter('the_content', 'islamicterms', 18);
add_filter('comment_text', 'islamicterms', 18);

?>