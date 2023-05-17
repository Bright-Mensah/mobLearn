<?php
include('./db-config/db.php');

use PHPMailer\PHPMailer\PHPMailer;

require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';



// check if the register button is clicked
if (isset($_POST['btnRegister'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];

    //   check if the inputs are not empty

    if (empty($name)) {

        $msg = "<h3 class='text-red-600 text-center text-4xl'>name can't be empty</h3>";
    } else if (empty($email)) {
        $msg = "<h3 class='text-red-600 text-center text-4xl'>email can't be empty</h3>";
    } else if (empty($phone)) {
        $msg = "<h3 class='text-red-600 text-center text-4xl'>phone can't be empty</h3>";
    } else if (empty($password)) {
        $msg = "<h3 class='text-red-600 text-center text-4xl'>password can't be empty</h3>";
    } else if (empty($confirmPassword)) {
        $msg = "<h3 class='text-red-600 text-center text-4xl'>confirm password can't be empty<h3>";
    } else {
        // if all fields are not empty, check if confirm password matches  password
        if ($confirmPassword === $password) {
            // check if password length is equal or greater than 8 characters
            if (strlen($password) >= 8) {
                // check if student already exist
                $query = "SELECT email from Student where email='$email'";
                $query_run = mysqli_query($connection, $query);
                if (mysqli_num_rows($query_run) > 0) {

                    $msg = "<h3 class='text-red-600'>Sorry Email already exist</h3>";
                } else {




                    $generateIndex =  date('Y') . rand(100000, 999999);
                    $query = "INSERT INTO Student(name,email,phone,password,index_no)values('$name','$email','$phone','$password','$generateIndex')";

                    $query_run = mysqli_query($connection, $query);

                    if ($query_run) {
                        // send email to the student email provided
                        $msg = "<h3 class='text-green-900'>An Email has been sent to your mail.Verify Email to continue</h3>";

                        //Import the PHPMailer class into the global namespace

                        try {

                            $mail = new PHPMailer(true);




                            //Server settings
                            //Enable verbose debug output
                            $mail->isSMTP();                                            //Send using SMTP
                            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                            $mail->Username   = 'mensahokobright@gmail.com';                     //SMTP username
                            $mail->Password   = 'azppmvjolkvwtfmh';                               //SMTP password
                            $mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
                            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

                            //Recipients
                            $mail->setFrom('mensahokobright@gmail.com', 'MobLearn');
                            $mail->addAddress('bmensah@glydetek.com', 'MOB');     //Add a recipient
                            // $mail->addAddress($_POST['email']);               //Name is optional
                            // $mail->addReplyTo('info@example.com', 'Information');
                            // $mail->addCC('cc@example.com');
                            // $mail->addBCC('bcc@example.com');

                            // //Attachments
                            // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
                            // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

                            //Content
                            $mail->isHTML(true);                                  //Set email format to HTML
                            $mail->Subject = 'Thank you for Registering for an account';
                            $mail->Body    = 'Welcome to MobLearn, click the link below to verify your account <br/>
                            <br/>
                            <a href="http://localhost/mobLearn/success.php">Go to courses</a>';
                            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                            $mail->send();
                            echo 'Message has been sent';
                        } catch (Exception $e) {
                            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                        }
                    } else {
                        $msg = "<h3 class='text-red-600'>Something went wrong, try again!!!</h3>";
                    }
                }
            } else {
                $msg = 'Password must be equal or greater than 8 characters';
            }
        } else {
            $msg = "<h3 class='text-red-600 text-center text-4xl'>Password does not match<h3>";
        }
    }
}


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tailwind Register Template</title>
    <meta name="author" content="David Grzyb">
    <meta name="description" content="">

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');

        .font-family-karla {
            font-family: karla;
        }
    </style>
</head>

<body class="bg-slate-900 font-family-karla h-screen">

    <div class="w-full flex flex-wrap">

        <!-- Register Section -->
        <div class="w-full md:w-1/2 flex flex-col">

            <div class="flex justify-center md:justify-start pt-12 md:pl-12 md:-mb-12">
                <a href="#" class="bg-black text-white font-bold text-xl p-4" alt="Logo">Logo</a>
            </div>

            <div class="flex flex-col justify-center md:justify-start my-auto pt-8 md:pt-0 px-8 md:px-24 lg:px-32">

                <p class="text-center text-3xl text-white"> <?php echo (isset($msg) ?  $msg : "Join Us.") ?></p>
                <form class="flex flex-col pt-3 md:pt-8" action="signUp.php" method="POST">
                    <div class="flex flex-col pt-4">
                        <label for="name" class="text-lg text-white">Name</label>
                        <input type="text" id="name" name="name" placeholder="John Smith" value="<?php echo $_POST['name'] ?>" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline" />
                    </div>

                    <div class="flex flex-col pt-4">
                        <label for="email" class="text-lg text-white">Email</label>
                        <input type="email" id="email" name="email" value="<?php echo $_POST['email'] ?>" placeholder="your@email.com" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline" />
                    </div>

                    <div class="flex flex-col pt-4">
                        <label for="phone" class="text-lg text-white">Phone</label>
                        <input type="text" id="phone" name="phone" value="<?php echo $_POST['phone'] ?>" placeholder="23324343" class=" shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline" />
                    </div>

                    <div class="flex flex-col pt-4">
                        <label for="password" class="text-lg text-white">Password</label>
                        <input type="password" id="password" name="password" value="<?php echo $_POST['password'] ?>" placeholder="Password" class=" shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline" />
                    </div>

                    <div class="flex flex-col pt-4">
                        <label for="confirm-password" class="text-lg text-white">Confirm Password</label>
                        <input type="password" id="confirm-password" name="confirmPassword" placeholder="confirm Password " value="<?php echo $_POST['confirmPassword'] ?>" class=" shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline" />
                    </div>

                    <input type="submit" value="Register" name="btnRegister" class="bg-black text-white font-bold text-lg hover:bg-gray-700 p-2 mt-8" />
                </form>
                <div class="text-center pt-12 pb-12">
                    <p class="text-white">Already have an account? <a href="login.php" class="underline font-semibold text-white">Log in here.</a></p>
                </div>
            </div>

        </div>

        <!-- Image Section -->
        <div class="w-1/2 shadow-2xl">
            <lottie-player src="https://assets3.lottiefiles.com/packages/lf20_kdCeeh2u4M.json" class="w-full h-screen md:block object-cover hidden" background="transparent" speed="1" autoplay></lottie-player>
            <!-- <img class="object-cover w-full h-screen hidden md:block" src="https://source.unsplash.com/IXUM4cJynP0" alt="Background" /> -->
        </div>
    </div>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

</body>

</html>