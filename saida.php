<?php
  $nomeBanda = $_POST['banda'];
  $imagem = $_POST['imagem'];
  $biografia =$_POST['biografia'];

  $nomeIntegrante1 = $_POST['nomeintegrante1'];
  $nascIntegrante1 = $_POST['nascintegrante1'];
  $instrIntegrante1 = $_POST['instrintegrante1'];

  $nomeIntegrante2 = $_POST['nomeintegrante2'];
  $nascIntegrante2 = $_POST['nascintegrante2'];
  $instrIntegrante2 = $_POST['instrintegrante2'];

  $nomeIntegrante3 = $_POST['nomeintegrante3'];
  $nascIntegrante3 = $_POST['nascintegrante3'];
  $instrIntegrante3 = $_POST['instrintegrante3'];
  $CorFundo = $_POST['coresfundo'];
  $CorTexto = $_POST ['corestexto'];

  echo '<style> 
        body{
            background: '.$CorFundo.';   
            color: '.$CorTexto.'}
        </style>';
  echo '<h1>' .$nomeBanda. '</h1>';
  echo '<img src= '.$imagem.' alt='.$nomeBanda.' title='.$nomeBanda.'>';
  echo '<hr>';
  echo '<h2> Biografia da Banda </h2>';
  echo '<p>' .$biografia. '</p>';
  echo '<hr>';
  echo '<h2> Integrantes </h2>';
  echo '<table>   
    <tr>
        <td> Nome: </td>
        <td> Data de Nascimento: </td>
        <td> Instrumento: </td>
    </tr>

    <tr>
    <td> '.$nomeIntegrante1.' </td>
    <td> '.$nascIntegrante1.' </td>
    <td> '.$instrIntegrante1.' </td>
    </tr>

    <tr>
    <td> '.$nomeIntegrante2.' </td>
    <td> '.$nascIntegrante2.' </td>
    <td> '.$instrIntegrante2.' </td>
    </tr>

    <tr>
    <td> '.$nomeIntegrante3.' </td>
    <td> '.$nascIntegrante3.' </td>
    <td> '.$instrIntegrante3.' </td>
    </tr>  

  </table>'
?>