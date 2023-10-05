<!DOCTYPE php>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>table, th, td {
      border: 1px solid black;
    }</style>
</head>
<body>

    <table>
      <form action="#" method="POST"></form>
        <tr>
          <td>Ime:</td>
          <td><input type="text" id="ime" name="ime" ><br></td>
        </tr>
        <tr>
          <td>Prezime:</td>
          <td><input type="text" id="prezime" name="prezime" ><br></td>
        </tr>
        <tr>
          <td>Email:</td>
          <td><input type="text" id="email" name="email" ><br></td>
        </tr>
        <tr>
          <td>Lozinka:</td>
          <td><input type="text" id="email" name="email" ><br></td>
        </tr>
        <tr>
          <td colspan="2"><input type="button" onclick="alert('Pošalji!')" value="Pošalji!"></td>
        </tr>
      </table>
    
</body>
</html>