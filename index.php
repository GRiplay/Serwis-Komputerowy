<?php
include ('licz.txt');
?>

<html>

<head>
<title> Strona Internetowa </title>
<meta charset="utf-8"/>
<link rel="stylesheet" type="text/css" href="Style.css"/>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Acme&family=Didact+Gothic&display=swap" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>

<style>
</style>

</head>

<body onload="Funkcja()">



<script src="Skrypt.js"></script>

<div class="WebSite">
<div class="Menu">

<ul>
  <li><a href="index.html"> Home </a></li>
  <li><a href="#"> Informacje </a></li>
  <li><a href="#Cena"> Cennik </a></li>
  <li><a href="#Kontakt"> Kontakt </a></li>
</ul>

</div>

<div class="Pierwszy">
  <b style="color:white ; font-size:45px; display:block ; width:480px; padding:60px 0 0 150px;" > Serwis Komputerów Stacjonarnych</b>
  <p style="color:white ; font-size:20px; display:block ; width:380px; text-align: justify; padding:10px 0 0 150px;">  Jeśli komputer zaczyna się przegrzewać lub wydawać niepokojące dźwięki, to sygnał, by dokonać przeglądu.
  <br><br> Sprawdzona i czysta maszyna gwarantuje cichą, szybką oraz wydajną pracę przez długi czas. </p>
  <button>Sprawdź</button>
</div>

<div style="margin:0 0 0 325px;">
<div style="width:5px; height:50px;background-color:white;margin:10px 0px 0 185px ;">
</div>
<div style="width:190px; height:5px;background-color:#012d74;margin:10px 0px 0 0 ;">
</div>
<div style="width:5px; height:60px;background-color:white;margin:10px 0px 0 0 ;">
</div>
</div>

<div style="margin-left:280px;"class="Blok">
<img style="width:120px; float:left;" src="Naprawa.png"/>
<p style="margin:10px 0 0 30px"><b>Etap<b style="color:orange"> 1</b><br></b>Konserwacja / Gruntowne czyszczenie wszystkich podzespołów komputera. Wymiana
pasty termo-przewodzącej proceosra. Uporządkowanie wnętrza obudowy.</p>
</div>

<img style="width:40px;margin:10px 0 0 310px;" src="Strzalka.png"/>

<div style="margin:10px 0 0 260px;"class="Blok">
<img style="width:140px;float:left;" src="Dysk.png"/>
<p style="margin:25px 0 0 35px"><b>Etap<b style="color:orange"> 2</b><br></b>Tworzenie kopii zapasowej danych " recovery ". Podział dysku twardego na partycje i formatowanie.</p>
</div>

<img style="width:40px;margin-left:310px;" src="Strzalka.png"/>

<div style="margin:30px 0 0 275px;"class="Blok">
<img name="1" id="Photo" src="Linux.png"/>
<p style="margin:0 0 0 55px"><b>Etap <b style="color:orange"> 3</b><br></b>Instalacja systemu operacyjnego Windows / Linux.
Instalacja podstawowego oprogramowania, aplikacji, sterowników. Optymalizacja systemu pod względem
uzyskania najlepszej wydajności oraz szybkości działania.   </p>
</div>

<div id="Cena" class="Trzeci">
  <table>
    <tr>
      <td style="background-color:#012d74; font-size:22px; text-align:center"> Nazwa usługi </td>
      <td style="width:100px; font-size:22px; text-align:center"> Cena </td>
    </tr>
    <tr>
      <td> Gruntowne czyszczenie / konserwacja komputera </td>
      <td style="text-align:center"> 70 zł </td>
    </tr>
    <tr>
      <td> Formatowanie dysku oraz instalacja systemu operacyjnego </td>
      <td style="text-align:center"> 30 zł </td>
    </tr>
    <tr>
      <td> Pełen serwis : czyszczenie, formatowanie, instalacja oprogramowania   </td>
      <td style="text-align:center; background-color:#012d74"> 80 zł </td>
    </tr>
  </table>
</div>

<iframe id="Kontakt" style="margin:0px 0 0 285px; border:solid 2px black ; border-radius:2px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d82595.97477835481!2d21.681723989073703!3d49.68963368166127!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x473c48ca2a422a0f%3A0x7279237954aa022d!2sKrosno!5e0!3m2!1spl!2spl!4v1647214913242!5m2!1spl!2spl" width="588" height="300" allowfullscreen="" loading="lazy"></iframe>

<table class="Kontakt" style="color:white; margin:20px 0 0 265px;padding:5px; border-radius:5px;font-size:16px">
  <tr>
    <td><img style="width:70px;" src="phone.png"/></td>
    <td> 577 393 533</td>
    <td style="padding-left:60px"> <img style="width:70px;" src="Mail.png"/></td>
    <td> MaziLGC@gmail.com</td>
  </tr>
</table>


<footer>
<p>Copyright © 2022 Krosno</p>
</footer>

</div>

</body>

</html>
