<form action="" method="post">
    <input type="text" name="item1" placeholder="Введите значеник x">
    <input type="text" name="item2" placeholder="Введите количество повторений">
    <input type="submit" name="buttom" value="Вывод">
</form>

<?php
        $x = $_POST['item1'];
        $n = $_POST['item2'];
        $b = 0;

        for($i = 1; $i <= $n; $i++){
            $a = ((1**$i)*($x**(2*$i+1)))/(2*$i+1);
            $b += $a;
        }

        echo $b;
?>