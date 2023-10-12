<?PHP

/**
 * Copyright 2021, 2024 5 Mode
 *
 * This file is part of Musicing.
 *
 * Musicing is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Musicing is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.  
 * 
 * You should have received a copy of the GNU General Public License
 * along with Musicing. If not, see <https://www.gnu.org/licenses/>.
 *
 * audio.php
 * 
 * Musicing Audio generator.
 *
 * @author Daniele Bonini <my25mb@aol.com>
 * @copyrights (c) 2016, 2024, 5 Mode
 */

  $av = filter_input(INPUT_GET, "av")??"";
  $av = strip_tags($av); 

  $AVATAR_PATH = APP_DATA_PATH . DIRECTORY_SEPARATOR . $av;
  $BLOG_PATH = $AVATAR_PATH . DIRECTORY_SEPARATOR . "blog";  

  $f = filter_input(INPUT_GET, "f")??"";
  $f = strip_tags($f); 
  
  $filePath = $BLOG_PATH . DIRECTORY_SEPARATOR . $f;
  
  header("Contet-type: audio/mpeg;");
  
  echo(file_get_contents($filePath));
