{\rtf1\ansi\ansicpg1252\cocoartf2868
\cocoatextscaling0\cocoaplatform0{\fonttbl\f0\fswiss\fcharset0 Helvetica;}
{\colortbl;\red255\green255\blue255;}
{\*\expandedcolortbl;;}
\paperw11900\paperh16840\margl1440\margr1440\vieww11520\viewh16900\viewkind0
\pard\tx720\tx1440\tx2160\tx2880\tx3600\tx4320\tx5040\tx5760\tx6480\tx7200\tx7920\tx8640\pardirnatural\partightenfactor0

\f0\fs24 \cf0 <?php\
\
use PHPMailer\\PHPMailer\\PHPMailer;\
use PHPMailer\\PHPMailer\\Exception;\
\
require 'PHPMailer/src/Exception.php';\
require 'PHPMailer/src/PHPMailer.php';\
require 'PHPMailer/src/SMTP.php';\
\
if ($_SERVER["REQUEST_METHOD"] === "POST") \{\
\
    // ======================\
    // GET FORM DATA\
    // ======================\
    $email = filter_var($_POST['userEmail'], FILTER_SANITIZE_EMAIL);\
    $project = $_POST['projectName'] ?? '';\
    $brief = $_POST['fullBrief'] ?? '';\
\
    $oneLine = $_POST['oneLineBrief'] ?? '';\
    $creative = $_POST['creativeDirection'] ?? '';\
    $guidelines = $_POST['designGuidelines'] ?? '';\
    $references = $_POST['references'] ?? '';\
    $market = $_POST['targetMarket'] ?? '';\
    $deliverables = $_POST['deliverables'] ?? '';\
    $budget = $_POST['budget'] ?? '';\
    $deadline = $_POST['materialDeadline'] ?? '';\
    $live = $_POST['liveDate'] ?? '';\
    $end = $_POST['endDate'] ?? '';\
\
    // ======================\
    // VALIDATE EMAIL\
    // ======================\
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) \{\
        echo "error";\
        exit;\
    \}\
\
    // ======================\
    // MAIL SETUP\
    // ======================\
    $mail = new PHPMailer(true);\
\
    try \{\
        // SMTP CONFIG\
        $mail->isSMTP();\
        $mail->Host = 'smtp.gmail.com';\
        $mail->SMTPAuth = true;\
        $mail->Username = 'sunbetwork@gmail.com';\
        $mail->Password = \'91geoltrdaswzzzwci\'92; \
        $mail->SMTPSecure = 'tls';\
        $mail->Port = 587;\
\
        // ======================\
        // EMAIL TO YOU\
        // ======================\
        $mail->setFrom('sunbetwork@gmail.com', 'Portfolio Site');\
        $mail->addAddress('sunbetwork@gmail.com');\
        $mail->addReplyTo($email);\
\
        $mail->Subject = 'New Brief Submission';\
\
        $mail->Body = "\
Email: $email\
Project: $project\
One Line Brief: $oneLine\
\
Full Brief:\
$brief\
\
Creative Direction: $creative\
Design Guidelines: $guidelines\
References: $references\
Target Market: $market\
Deliverables: $deliverables\
Budget: $budget\
Material Deadline: $deadline\
Live Date: $live\
End Date: $end\
";\
\
        $mail->send();\
\
        // ======================\
        // EMAIL TO USER (COPY)\
        // ======================\
        $mail->clearAddresses();\
\
        $mail->addAddress($email);\
        $mail->Subject = 'Copy of Your Brief';\
\
        $mail->Body = "\
Thank you for your submission.\
\
Project: $project\
\
Full Brief:\
$brief\
";\
\
        $mail->send();\
\
        echo "success";\
\
    \} catch (Exception $e) \{\
        echo "error";\
    \}\
\}}