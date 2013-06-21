<?php

class sendSignUpLinkTest extends CDbTestCase
{
    public $fixtures = array (
        'profiles' => 'Profile'
    );
    
    public $receiver = "tran.duc.thang@framgia.com";        
    
    public function testSendSignUpLink()
    {            
        $new_profile = new Profile;
        $new_profile->email = $this->receiver;
        $new_profile->employee_code = 'B120050';
        $new_profile->save(false);
        
        $profiles = Profile::model()->findAllByAttributes(array('email' => $this->receiver));
        $this->assertEquals(count($profiles), 1);
        
        $profile = $profiles[0];        
        $this->assertNotNull($profile->secret_key);
        $this->assertEquals($profile->sendSignUpEmail(), true);
        
    }
}
?>
