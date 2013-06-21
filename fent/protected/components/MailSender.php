<?php
class MailSender
{
    public static function sendMail($receiver, $subject, $content)
    {               
        $message = new YiiMailMessage;
        $message->setSubject($subject);
        $message->setTo($receiver);        
        $message->setFrom(Yii::app()->params['adminEmail']);
        $message->setBody($content, 'text/html');
        $result = Yii::app()->mail->send($message);
        return $result;
    }
}
?>
