<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<!-- snack 1 -->
<?php 
    // $array = ['Verde', 'Rosso', 'Giallo', 'Azzurro'];
    // $colore = $_GET['colore'];
    // $interruttore = false;

    // for ($i = 0; $i < count($array) && $interruttore == false; $i++) {
    //     if ($colore == $array[$i]) {
    //         $interruttore = true;
    //     }
    //     if ($interruttore) {
    //         echo 'Parola trovata' . '<br>';
    //     } else {
    //         echo 'Parola non trovata' . '<br>';
    //     }
    // }
?>

<br>
<br>
<br>
<br>
<br>
<br>
<!-- snack 2 -->

<?php
    // Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore
    // un array di post associati a quella data. Stampare ogni data con i relativi post.

// $posts = [

//     '10/01/2019' => [
//         [
//             'title' => 'Post 1',
//             'author' => 'Michele Papagni',
//             'text' => 'Testo post 1'
//         ],
//         [
//             'title' => 'Post 2',
//             'author' => 'Michele Papagni',
//             'text' => 'Testo post 2'
//         ],
//     ],
//     '10/02/2019' => [
//         [
//             'title' => 'Post 3',
//             'author' => 'Michele Papagni',
//             'text' => 'Testo post 3'
//         ]
//     ],
//     '15/05/2019' => [
//         [
//             'title' => 'Post 4',
//             'author' => 'Michele Papagni',
//             'text' => 'Testo post 4'
//         ],
//         [
//             'title' => 'Post 5',
//             'author' => 'Michele Papagni',
//             'text' => 'Testo post 5'
//         ],
//         [
//             'title' => 'Post 6',
//             'author' => 'Michele Papagni',
//             'text' => 'Testo post 6'
//         ]
//     ],
// ];

// foreach ($posts as $key => $value) {
//     echo $key . '<br>';
//     foreach ($value as $post) {
//         echo $post['title'] . '<br>' . $post['author'] . '<br>';
//     }
  
// }
?>


<br>
<br>
<br>
<br>
<!-- snack 3 -->
<?php 
    // Creare un array con 15 numeri casuali ( da 1 a 100), tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta

    // $randomNum = [];

    // while (count($randomNum) < 15){
        
    //     $newNum = rand(1,100);
    //     if(!in_array($newNum, $randomNum)){
    //         $randomNum[] = $newNum;
    //     }      
    // }
    // var_dump($randomNum);
?>

<!-- snack 4 -->

<?php 
    // Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.

    // $articolo = 'Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo';
    // $paragrafi = explode('.', $articolo);

    // foreach ($paragrafi as $key => $paragrafo) {
    //     echo 'paragrafo n° ' . $key . ' ' . $paragrafo . '<br>';
    // }
?>

<br>
<br>
<br>
<br>
<br>

<!-- Snek 5 -->

<?php
    // include __DIR__ . '/database.php';
      
    // foreach($db as $key => $array) {
    //     if($key == 'teachers') {
    //         foreach($array as $key => $element) {
    //             echo '<div class="grey">' . $element['name'] . ' ' . $element['lastname']  . '</div>';   
    //         }
    //     } else {
    //         foreach($array as $key => $element) {
    //             echo '<div class="green">' . $element['name'] . ' ' . $element['lastname'] . '</div>';   
    //         }
    //     }
        
    // }
?>
<br>
<br>
<br>
<br>
<br>

<!-- Snek 6 -->
<?php
    include __DIR__ . '/database.php';
    require __DIR__ . '/funzioni.php';
    echo
    '<div>';
        '<li>' ;
            foreach ($db as $key => $alunni) {
                // echo $key;
                echo $alunni['name'];
                // foreach ($alunni['voti'] as $voto){
                //     echo $voto;
                    echo mediaVoti($alunni['voti']);
                // }
            }
          
        '</li>' ;
    '</div>';
?>
</body>
</html>




