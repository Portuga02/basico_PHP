
<?php

$dir = isset($_GET['dir']) ? './'.$_GET['dir']: './';

$itens = new DirectoryIterator("$dir");
   foreach($itens as $item){
    if($item->gettype() === 'dir'){
        $diretorios[] = $item->getFilename();
    }else{
        $arquivos[] = $item->getFilename();
    }

}


foreach($diretorios as $diretorio){
    echo "<table>";
    echo '<tr>';    
    echo '<td class="alert alert-info text-left tamanho"><a href="?dir='.$diretorio.'">/'.$diretorio.'</a></td>';
    echo '</tr><br>';
    echo "</table>";
}

foreach($arquivos as $arquivo){
    echo '<tr>';
    echo '<td class="alert text-right tamanho"><a href="/'.$arquivo.'">'.$arquivo.'</a></td>';
    echo '</tr><br>';
}

?>
