<?php include("header.php"); ?>

<body>
<form id="form1" name="form1" method="post" action="registar.php" >
  <p>&nbsp;</p>
  <table width="491" border="1" align="center" cellspacing="0">
    <tr>
      <td width="150">Nome: </td>
      <td width="325"><label>
        <input name="nome" type="text" id="nome" size="30" maxlength="100" />
      </label></td>
    </tr>
    <tr>
      <td width="150">Bilhete de Identidade ou CC: </td>
      <td width="325"><label>
        <input name="bilhete_identidade" type="int" id="bilhete_identidade" size="30" maxlength="100" />
      </label></td>
    </tr>
    <tr>
      <td width="150">Password: </td>
      <td width="325"><label>
        <input name="password" type="text" id="password" size="30" maxlength="100" />
      </label></td>
    </tr>
    <tr>
      <td>Morada:</td>
      <td><label>
        <input name="morada" type="text" id="morada" size="30" maxlength="80" />
      </label></td>
    </tr>
    <tr>
      <td>Contacto:</td>
      <td><label>
        <input name="telefone" type="text" id="telefone" maxlength="15" />
      </label></td>
    </tr>
    <tr>
      <td>Email:</td>
      <td><label>
        <input name="mail" type="text" id="mail" size="30" maxlength="80" />
      </label></td>
    </tr>
    <tr>
      <td>Universidade:</td>
      <td><label>
        <input name="Universidades_id_universidade" type="int" id="Universidades_id_universidade" size="30" maxlength="80" />
      </label></td>
    </tr>
   <tr>
      <td>&nbsp;</td>
      <td align="right"><label>
        <input name="Submeter" type="submit" id="enviar" value="Enviar" />
        </label></td>
    </tr>
  </table>
</form>
</body>
<?php include("footer.php"); ?>
