<?php

function get_view(String $view): String
{
  if (!$view || !view()->exists($view)) return false;
  return $view;
}
