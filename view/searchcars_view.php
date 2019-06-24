<?
    echo 'поиск по параметрам<br>';
    echo '<h1>'.$error.'</h1>';    

foreach ($val as $item)
{
    ?>
    <form action="car.php" method="POST">
        <?
        $value = $item;
        foreach ($value as $items){
            if($items->key == 'id'){
                ?> 
                <input type="text" name="id" readonly style="display:none;" value="<?echo $items->value;?>" ><br> 
                <?
                echo("<button data-id=".$items->value.">детали</button><br>");
            }else{
                echo($items->value."<br>");
            }
        }
            ?> 
    
    </form>
<?
}