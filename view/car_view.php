
<form action="buecar.php" method="POST">
         <?
    echo 'одна машина<br>';
    echo '<h1>'.$error.'</h1>';    

    foreach ($val as $item)
    {
        echo $item->key." : ".$item->value."<br>";
    }
    ?> 
    <input type="text" style="display:none" name="id" value='<?php echo $id ?>'>
    <input type="text" name="sname">
    <input type="text" name="lname">
    <select name="order">
        <option value="2" selected >cash</option>
        <option value="1">card</option>
    </select>
    <input type="submit">
    </form>