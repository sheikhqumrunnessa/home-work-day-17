<?php

class Demo
{
  public function demo()
  {
      if(isset($_POST['btn'])) {
          $first = $_POST['first_number'];
          $end = $_POST['last_number'];
          $choice = $_POST['check'];
          $res = "";
          if ($first < $end) {
              for ($i = $first; $i <= $end; $i++) {
                  if ($i % 2 != 0 && $choice == "Odd") {
                      $res .= $i . " "; //$res=$res$i""
                  }
                  if ($i % 2 == 0 && $choice == "Even") {
                      $res .= $i . " "; //$res=$res$i""
                  }
              }
              return $res;
          }if ($first > $end) {
              for ($i = $first; $i >= $end; $i--) {
                  if ($i % 2 != 0 && $choice == "Odd") {
                      $res .= $i . " "; //$res=$res$i""
                  }
                  if ($i % 2 == 0 && $choice == "Even") {
                      $res .= $i . " "; //$res=$res$i""
                  }
              }
              return $res;
          }
      }
  }
}