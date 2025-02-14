<?php 
session_start(); // Start the session;;

require 'dompdf/autoload.php'; 
use Dompdf\Dompdf;
use Dompdf\Options;

$fullname = ucwords($_POST['fullname']);
$email = $_POST['email'];
$mobile = $_POST['mobile'];

if ($fullname == '' || $email == "" || $mobile == "") {
    $url = "index.php"; 

    echo "<script language='javascript'>";
    echo "alert('Please provide all details');";
    echo "window.location.href = '$url';"; 
    echo "</script>";
    exit();
}else
{
    $path = "logo.jpg"; 
    $type = pathinfo($path, PATHINFO_EXTENSION);
    $data = file_get_contents($path);
    $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);

    $html = "<style>
        table {border: 1px solid #000000;border-collapse: collapse; margin: 0 auto;  padding: 0px;table-layout: fixed;min-width: 100%;}table th {text-align: center;padding: 8px;border: 1px solid #000000;background:#1b90bb;color:#FFFFFF;font-weight:bold;text-align:center}table td{padding: 8px;border: 1px solid #000000;}table tr{background-color: #dddddd;color:#000000;text-align:center;}
        </style>
        <div>
            <img src='".$base64."' alt='Trulli' width='100%' height='27%'>
        </div><br>
        <table>
            <tr>
                <th>Fullname</th>
                <td>".$fullname."</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>".$email."</td>
            </tr>
            <tr>
                <th>Mobile No.</th>
                <td>".$mobile."</td>
            </tr>
            
            </table>
        ";
    //echo $html;die;
    $options = new Options();
    $options->set('defaultFont', 'Arial');

    $dompdf = new Dompdf($options);
    $dompdf->loadHtml($html);
    $dompdf->setPaper('A4', 'portrait');
    $dompdf->render();
    $dompdf->stream("$email.pdf", ["Attachment" => true]);
    header("Location: index.php");
}
?>
