# ContacFrom_PHPMailer
// Here we activate oure PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
    require_once "PHPMailer/PHPMailer.php";
    require_once "PHPMailer/SMTP.php";
    // Create variable $result and assign "" empty space/it will be use later
    $result="";
    // isser 'submit' to make sure that our form was been validate 
    if(isset($_POST['submit'])) {
        // Here start our function... ()
        $mail = new PHPMailer();
        //SMTP Settings
        $mail->isSMTP(true);  //uncomment/comment/  this line if you have some error
        $mail->Host ='smtp.gmail.com';
        $mail->Port =587;
        $mail->SMTPAuth = true;
        $mail->SMTPSecure='tls';
        // User settings
        $mail->Username = 'someemail@gamil.com'; // yore email..
        $mail->Password= "";//"youre_password_here";
        $mail->setFrom($_POST['email'],$_POST['name']);
        $mail->addAddress('someemail@gmail.com');
        $mail->addReplyTo($_POST['email'],$_POST['name']);
        // Enagle HTML
        $mail->isHTML(true);

        $mail->Subject="Form submission :" .$_POST['subject'];
        $mail->Body='<h1 align=center>Name :'.$_POST["name"].'<br/>Email :'.$_POST["email"].'<br/>Message:'.$_POST["msg"].'</h1>';
        //Sending mail
        if(!$mail->send()){
            $result="Something is went wrong. Please try again..!"; // Also we can show what type error is happend using $mail->ErrorInfo();
            header("Location: index.php");
        }
        else{
            $result="Thanks ".$_POST['name'] ."contacting us we We'll back to you soon!";
            header("Location: index.php");
        }
    }
    
?>
