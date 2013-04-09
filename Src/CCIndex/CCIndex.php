<?php
/**
* Standard controller layout.
* 
* @package WinstonCore
*/
class CCIndex implements IController {

   /**
    * Implementing interface IController. All controllers must have an index action.
    */
   public function Index() {   
      global $win;
      $win->data['title'] = "The Index Controller";
      $win->data['main'] = "<h1>The Index Controller</h1>";
   }

}
