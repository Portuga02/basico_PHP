<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch</title>
</head>

<body>
    <?php
    class thami
    {
        public $arrayDados = [1, 2, 3, 4];


        public function funcionandoTamy()
        {
            $this->arrayDados;
        }
    }
    $parametro = 2;
    switch ($parametro) {
        case 1:

            echo 'entrou no case 1';
            break;

        case 2:
            echo 'Entrou no case 2';
            break;

        case 3:
            echo 'entoru no case 3';
            break;
        default:

            break;
    }
    // segunda forma de se passar um case por string
    
    $parametro = "1";
    switch ($parametro) {
        case "1":

            echo 'entrou no case 1';
            break;

        case "2":
            echo 'Entrou no case 2';
            break;

        case "3":
            echo 'entoru no case 3';
            break;
        default:

            break;
    }


    // terceira forma de se passa um valor no case, por variavel, pode-se usar também metoods para que seja feito calculos
    
    $tam = $tam->funcionandoTamy;
    switch ($tam) {
        case ($tam == 1):

            echo $tam . "1";
            break;

        default:
            # code...
            break;
    }

    // quarta forma de se passar dados, chamando diretamente o metodo da classe
    switch ($tam->funcionandoTamy) {
        case ($tam == 1):

            return $tam;
            break;

        default:
            # code...
            break;
    }

    ?>
</body>

</html>