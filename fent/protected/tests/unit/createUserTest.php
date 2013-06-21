<?php

class createUserTest extends CDbTestCase
{
    public $fixtures = array (
        'profiles' => 'Profile',
        'users' => 'User'
    );
    
    public $receiver = "tran.duc.thang@framgia.com"; 
    
    public function testCreateUser()
    {
        $profile = new Profile;
        $profile->email = $this->receiver;
        $profile->employee_code = 'B120050';
        $profile->save();        
        
        //There must be no user belongs to this profile
        $this->assertNull($profile->user);
        $user1 = new User;        
        $this->assertTrue($user1->signUp('thang','thang',$profile->id));        
        
        //Cannot sign up with existing username
        $user2 = new User;
        $this->assertFalse($user2->signUp('thang','thang',$profile->id));        
        
        //Cannot sign up when username is equal to existing employee_code
        $user3 = new User;
        $this->assertFalse($user3->signUp($profile->employee_code,'thang',$profile->id));        
        
        //There is only one user 
        $users = User::model()->findAll();
        $this->assertEquals(count($users), 1);
        
        //$user must belong a profile
        $this->assertNotNull($users[0]->profile);
        
        //Now $profile must have an user
        $profile->refresh();
        $this->assertNotNull($profile->user);
    }
}
?>
