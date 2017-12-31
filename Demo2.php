<?php

class Demo2
{
    public function demo2()
    {
        if(isset($_POST['btn'])) {
            $first = $_POST['first_number'];
            $end = $_POST['last_number'];

            $res = "";
            if ($first < $end) {
                for ($i = $first; $i <= $end; $i++) {
                    $res .= $i . " "; //$res=$res$i""
                }

                return $res;
            }
            if($first > $end){
                for ($i = $first; $i >= $end; $i--) {
                    $res .= $i . " "; //$res=$res$i""
                }

                return $res;
            }


}

    }
}