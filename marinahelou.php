<?php
namespace Grav\Theme;

class Marinahelou extends Deliver
{
   // Some new methods, properties etc.

   public function onTwigInitialized()
        {
          $this->grav['twig']->twig()->addFunction(
          new \Twig_SimpleFunction('loadJson', [$this, 'getJson'])
          );
        }

   public function getJson($url)
        {
            if ($url) {
              $ch = curl_init();
              curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
              curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
              curl_setopt($ch, CURLOPT_URL,$url);
              $result=curl_exec($ch);
              curl_close($ch);
            return json_decode($result);
          }
          else {
            return null;
          }
        }
}
?>
