<?php

class dbConnectionTest extends CTestCase
{

    public function testDb()
    {
        $curdb  = explode('=', Yii::app()->db->connectionString);
        $this->assertEquals("fent_test", $curdb[2]);        
    }        
}

?>
