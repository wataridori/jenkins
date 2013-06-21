<?php

class mailTest extends CTestCase
{
    public function testSendMail()
    {
        $receiver = 'tran.duc.thang@framgia.com';
        $subject = 'TEST';
        $content = 'Just a test';
        $this->assertEquals(MailSender::sendMail($receiver, $subject, $content), true);
    }
}

?>
