<form action="#" method="post">
    <div>
        <label for="t1">Trabalho 1 (Terça):</label>
        <select name="t1" id="t1">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>
    <div>
        <label for="t2">Trabalho 2 (Quinta):</label>
        <select name="t2" id="t2">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>
    <button>Executar</button>
</form>

<style>
select, button{
    margin: 10px;
}
</style>

<?php
if(isset($_POST['t1'],$_POST['t2'])){
    if(!!$_POST['t1'] && !!$_POST['t2']){
        echo "TV 50' e Sorvete.";
    }elseif(!!$_POST['t1'] || !!$_POST['t2']){
        echo "TV 32' e Sorvete.";
    }else{
        echo "Fica em casa mais saudável";
    }
}else{
    echo 'Click no botão "Executar"!';
}
?>