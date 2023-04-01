<?php
include 'api.php';
require __DIR__ . "/vendor/autoload.php";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Dompdf\Dompdf;
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


$dompdf    = new Dompdf;
$ct        = new chatApi();
$phpmail   = new PHPMailer();




if(isset($_REQUEST['pdfGonder']))
{
	$baslik        =     $_REQUEST['baslik'];
	$konu          =     $_REQUEST['hakkinda'];
	$kelime        =     $_REQUEST['range'];

	$makale        =     $ct->sendMsg($konu,$kelime);

	$html          = 
	"<style type='text/css'>
    * {
      font-family: 'DejaVu Sans',sans-serif;
    }
    </style>
    <h1>".$baslik."</h1>";
	$html         .= $makale;

	$dompdf->loadHtml($html);
	$dompdf->render();
	$dompdf->stream($baslik,["Attachment"=>0]);
	//stream içine yazılan değer pdf adidir.


}

else if(isset($_REQUEST['sendMail']))
{
	$baslik1        =     $_REQUEST['baslik1'];
	$konu1          =     $_REQUEST['konu1'];
	$email          =     $_REQUEST['email'];
	$kelime1        =     $_REQUEST['rangem'];


	$makaleMail     =     $ct->sendMsg($konu1,$kelime1);

	$html1          = 
	"<style type='text/css'>
    * {
      font-family: 'DejaVu Sans',sans-serif;
    }
    </style>
    <h1>".$baslik1."</h1>";
	$html1         .= $makaleMail;

	$dompdf->loadHtml($html1);
	$dompdf->render();
	//$dompdf->stream($baslik1,["Attachment"=>1]);
	file_put_contents('pdf/'.$baslik1.'.pdf', $dompdf->output());
	//stream içine yazılan değer pdf adidir.
				 $doc               = 'pdf/'.$baslik1.'.pdf';
		     $phpmail->IsSMTP();  
				 $phpmail->From     = "";                    
				 $phpmail->Sender   = "";                    
				 $phpmail->FromName = "";
				 $phpmail->Host     = "";
				 //from sender fromname ve host alanlarını doldurun
				 $phpmail->Port     = 465;
				 $phpmail->SMTPSecure="ssl";
				 $phpmail->CharSet  = "iso-8859-9";
				 $phpmail->Username = "";                     
				 $phpmail->Password = "";   
				 //username ve pasword mail ve şifrenizdir                
				 $phpmail->WordWrap = 50;
				 $phpmail->IsHTML(true); 
				 $phpmail->SMTPAuth=true;
				 $phpmail->addAttachment($doc);
				 $phpmail->Subject  = $baslik1;
				 $phpmail->Body     = "Merhabalar , ilgili belge ektedir.";
				 $phpmail->AltBody  = "Özgür";
				 $phpmail->AddAddress($sendmail);
				 $phpmail->Send();
				 $phpmail->ClearAddresses();
				 $phpmail->ClearAttachments();	

	       header('Location: index.php');

}
else
{
	header('Location: error.php');
}


 ?>