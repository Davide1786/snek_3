<?php 

    // function mediaVoti($par1, $par2, $par3, $par4) {
    //     // echo $par1;
    //     // echo $par2;
    //     // echo $par3;
    //     // echo $par4;
    //     $media = ($par1 + $par2 + $par3 + $par4) / 4;
    //     return $media;
    // }

    function mediaVoti($par) {
        $media = 0;
        foreach($par as $voto){
          $media += $voto;
        }
        $media = $media / count($par);
        return $media;
    }


?>