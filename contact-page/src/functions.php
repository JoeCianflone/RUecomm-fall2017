<?php

/**
 * dd -- Die and Dump we use this function for
 * debugging
 * @param  Array $items an array of items we'd like to display
 * @return void
 */
function dd(...$items) : void {
   echo "<pre>";
   foreach ($items as $item) {
      var_dump($item);
   }
   echo "<pre>";
   die();
}