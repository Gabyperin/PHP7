<html>

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>

<body>
    <?php
    // $lista_coisas = array();
    $lista_coisas = [];

    $lista_coisas['frutas'] = array(1 => 'Banana', 2 => 'Maca', 3 => 'Morango', 4 => 'Uva');
    $lista_coisas['pessoas'] = [1 => 'Joao', 2 => 'Jose', 3 => 'Maria'];

    echo '<pre>';
    print_r($lista_coisas);
    echo '</pre>';
    echo '<hr/>';
    echo $lista_coisas['frutas'][3];
    echo '<br />';
    echo $lista_coisas['pessoas'][2];


    ?>
</body>

</html>