<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') { header('Location: index.html'); exit; }
if (!empty($_POST['company_website'] ?? '')) { header('Location: thank-you.html'); exit; }
function clean($value) { return trim(strip_tags((string)$value)); }
$type=clean($_POST['inquiry_type']??'General Inquiry');$first=clean($_POST['first_name']??'');$last=clean($_POST['last_name']??'');$email=filter_var($_POST['email']??'',FILTER_VALIDATE_EMAIL);$phone=clean($_POST['phone']??'');$company=clean($_POST['company']??'');$location=clean($_POST['location']??'');$role=clean($_POST['role']??'');$message=clean($_POST['message']??'');
if(!$email||!$first||!$last||!$company||!$message){header('Location: index.html?error=1#inquiries');exit;}
$body="Inquiry type: $type\nName: $first $last\nEmail: $email\nPhone: $phone\nCompany: $company\nLocation: $location\nRole: $role\n\nOverview:\n$message";$headers="From: Karana Website <info@karanainvest.com>\r\nReply-To: $email\r\nContent-Type: text/plain; charset=UTF-8\r\n";mail('info@karanainvest.com',"Karana Website: $type",$body,$headers);header('Location: thank-you.html');exit;
?>
