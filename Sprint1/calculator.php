<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Kalkulator Sederhana</h1>
    <form>
        <?php
        if ($_GET):
            $a = (double) @$_GET['a'];
            $b = (double) @$_GET['b'];
            $operator =@$_GET['operator'];

            switch ($operator){
              case '+';
                $hasil = $a+$b;
                break;
              case '-';
                $hasil = $a-$b;
                break;
              case '*';
                $hasil = $a*$b;
                break;
              case '/';
                $hasil = $a/$b;
                break;
            }
        ?>
        <div>
            Hasil:<strong><?php echo $hasil ?></strong>
        </div>
        <?php
        endif;
        ?>
        <input type="number" name="a" placeholder="Bilangan a">

        <select name="operator">
            <option <?php echo !@$_GET['operator']  ? 'selected' :''?> disabled>pilih operator</option>
            <option <?php echo @$_GET['operator']==='+' ? 'selected' : '' ?>value="+">+</option>
            <option <?php echo @$_GET['operator']==='-' ? 'selected' : '' ?>value="-">-</option>
            <option <?php echo @$_GET['operator']==='*' ? 'selected' : '' ?>value="*">*</option>
            <option <?php echo @$_GET['operator']==='/' ? 'selected' : '' ?>value="/">/</option>
        </select>

        <input type="number" name="b" placeholder="Bilangan b" value="<?php echo @$_GET[''] ?>">

        <div>
            <button type="button" onclick="location.href = '?clear'">Clear</button>
            <button type="submit">Hitung</button>
        </div>
    </form>

</body>
</html>
    