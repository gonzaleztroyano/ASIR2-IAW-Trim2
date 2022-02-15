<form action="..<?=$_SERVER['PHP_SELF']?>" method="post">
                    <input type="submit" name="Reiniciar" value="Reiniciar" > </br></br>
                </form>
    </br>
    <h2>Has accedido a estas páginas <?=$veces?> veces. </h2>
    <p>Puedes acceder al resto de páginas usando los siguientes enlaces</p>
    <ul>
        <li> <a href="./page1.php">Página 1</a>
        <li> <a href="./page2.php">Página 2</a>
        <li> <a href="./page3.php">Página 3</a>
    </ul> 
</br>

<style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0; margin-left:25px;}
.tg td{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
  overflow:hidden;padding:10px 5px;word-break:normal;}
.tg th{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
  font-weight:normal;overflow:hidden;padding:10px 5px;word-break:normal;}
.tg .tg-baqh{text-align:center;vertical-align:top}
.tg .tg-xuzy{font-size:medium;font-weight:bold;text-align:center;vertical-align:top}
</style>
<table class="tg" style="undefined;table-layout: fixed; width: 372px">
<colgroup>
<col style="width: 148px">
<col style="width: 224px">
</colgroup>
<thead>
  <tr>
    <th class="tg-xuzy">Página</th>
    <th class="tg-xuzy">Número de visitas</th>
  </tr>
</thead>
<tbody>
  <tr>
    <td class="tg-baqh">Página 1</td>
    <td class="tg-baqh"><?=$_COOKIE['veces_p1']?></td>
  </tr>
  <tr>
    <td class="tg-baqh">Página 2</td>
    <td class="tg-baqh"><?=$_COOKIE['veces_p2']?></td>
  </tr>
  <tr>
    <td class="tg-baqh">Página 3</td>
    <td class="tg-baqh"><?=$_COOKIE['veces_p3']?></td>
  </tr>
</tbody>
</table>