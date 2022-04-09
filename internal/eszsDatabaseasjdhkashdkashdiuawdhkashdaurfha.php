<?php
  session_start();
  require_once("eszsDatabaseGoBrrr.php");
?>

<html>
<head>
	<style>
	td {
		padding: 5px;
		border: 1px solid black;
	}
	</style>
</head>
<body>

<form action="submit_medijawsetqaw2.php" method="post">
    <table>
      <tr>
        <td>Medij: </td>
        <td>
          <input type="text" name="ime"/>
        </td>
      </tr>
    </table>
    <input type="submit" value="Dodaj medij">
  </form>
  
  <form action="submit_tipawsetqaw2.php" method="post">
    <table>
      <tr>
        <td>Tip: </td>
        <td>
          <input type="text" name="imeTip"/>
        </td>
      </tr>
    </table>
    <input type="submit" value="Dodaj tip">
  </form>
  
  <form enctype="multipart/form-data" action="add_delavecw4sedrtgytsawe.php" method="post">
    <table>
      <tr>
        <td>Medij: </td>
        <td>
          <select name="medijID">
            <?php foreach (database::getAllMedij() as $medij): ?>
              <option value="<?= $medij["medijID"] ?>"><?= $medij["medijIme"] ?></option>
            <?php endforeach; ?>
          </select>
        </td>
      </tr>
	  <tr>
        <td>Tip: </td>
        <td>
          <select name="tipID">
            <?php foreach (database::getAllTip() as $tip): ?>
              <option value="<?= $tip["tipID"] ?>"><?= $tip["tipIme"] ?></option>
            <?php endforeach; ?>
          </select>
        </td>
      </tr>
      <tr>
        <td>Ime: </td>
        <td>
          <input type="text" name="ime"/>
        </td>
      </tr>
      <tr>
        <td>Priimek: </td>
        <td>
          <input type="text" name="priimek"/>
        </td>
      </tr>
	  <tr>
        <td>Naziv: </td>
        <td>
          <input type="text" name="naziv"/>
        </td>
      </tr>
	  <tr>
        <td>E-mail: </td>
        <td>
          <input type="text" name="mail"/>
        </td>
      </tr>
	  <tr>
        <td>Telefon: </td>
        <td>
          <input type="text" name="phone"/>
        </td>
      </tr>
	  <tr>
        <td>Odzivnost: </td>
        <td>
			<input type="checkbox" name="odzivnost">
			<label for="odzivnost"> Je odziven</label><br>
        </td>
      </tr>
    </table>
    <input type="submit" value="Dodaj kontakt">
  </form>
  
    <table>
		<tr>
			<td>Medij</td><td>Tip</td><td>Ime</td><td>Priimek</td><td>Naziv</td><td>E-mail</td><td>Telefon</td><td>Odzivnost</td></tr>
			<?php foreach (database::getAllDelavec() as $delavec): ?><tr>
			<td><?= $delavec["medij"] ?></td><td><?= $delavec["tip"] ?></td><td><?= $delavec["ime"] ?></td><td><?= $delavec["priimek"] ?></td>
			<td><?= $delavec["naziv"] ?></td><td><?= $delavec["mail"] ?></td><td><?= $delavec["phone"] ?></td><td><?= $delavec["odzivnost"] ?></td>
			<?php endforeach; ?></tr>		
	</table>
  <br><br>
  <form enctype="multipart/form-data" action="add_eszsclanja6sdkass8asdz.php" method="post">
    <table>
      <tr>
        <td>Ime: </td>
        <td>
          <input type="text" name="ime"/>
        </td>
      </tr>
      <tr>
        <td>Priimek: </td>
        <td>
          <input type="text" name="priimek"/>
        </td>
      </tr>
	  <tr>
        <td>Vzdevek: </td>
        <td>
          <input type="text" name="vzdevek"/>
        </td>
      </tr>
	  <tr>
        <td>Naslov: </td>
        <td>
          <input type="text" name="naslov"/>
        </td>
      </tr>
	  <tr>
        <td>Poštna številka: </td>
        <td>
          <input type="text" name="ps"/>
        </td>
      </tr>
	  <tr>
        <td>Pošta: </td>
        <td>
          <input type="text" name="posta">
        </td>
      </tr>
	  <tr>
        <td>Datum rojstva: </td>
        <td>
          <input type="date" name="datumRojstva"/>
        </td>
      </tr>
	  <tr>
        <td>E-mail: </td>
        <td>
          <input type="text" name="email"/>
        </td>
      </tr>
	  <tr>
        <td>Telefonska številka: </td>
        <td>
          <input type="text" name="telefon"/>
        </td>
      </tr>
	  <tr>
        <td>Igre, ki jih igraš: </td>
        <td>
          <input type="text" name="igre"/>
        </td>
      </tr>
	  <tr>
        <td>Ekipa: </td>
        <td>
          <input type="text" name="ekipa"/>
        </td>
      </tr>
    </table>
    <input type="submit" value="Dodaj člana EŠZS (ne deluje še!)">
  </form>
  
</body>
</html>