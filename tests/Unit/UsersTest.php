<?php

namespace Tests\Unit;

use PHPUnit\Framework\Constraint\IsType;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class UsersTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */


    public function testSave()
    {
        $user = factory(\App\User::class)->make();
        $this->assertTrue($user->save());
    }
    public function testQuestions()
    {
        $user = factory(\App\User::class)->make();
        $this->assertTrue(is_object($user->questions()->get()));
    }

    public function testAnswers()
    {
        $user = factory(\App\User::class)->make();
        $this->assertTrue(is_object($user->answers()->get()));
    }
    public function testProfile()
    {
        $user = factory(\App\User::class)->make();
        $this->assertTrue(is_object($user->profile()->get()));
    }


    public function testType()
    {
    $user = User::inRandomOrder()->first();
    $value=$user->type;
    $this->assertContains($value, ['Admin','SuperAdmin','Member']);

    }


    //public function testInsert()
    //{

        //$user = new User();
        //$user->name = '';
        //$user->email = '';
        //$user->password = '';
        //$this->assertTrue($user->save());

    //}


    //public function testUpdate()
    //{

        //$user = User::inRandomOrder()->first();
        //$user->name = 'Steve Smith';
        //$user->email = '';
        //$user->password = '';
        //$user->save();
        //$this->assertTrue($user->update());

    //}



    //public function testDelete()
    //{

        //$user = User::inRandomOrder()->first();
        //$user->name = '';
        //$user->email = '';
        //$user->password = '';
        //$user->save();
        //$this->assertTrue($user->delete());

    //}

    //public function testCount()
    //{
        //$user = User::All();
        //$user->count='50';
        //$this->assertEquals(50, $user->count());

    //}

}

//$user = User::All();
//$userCount = $user->count();
//$this->assertInternalType(IsType::TYPE_INT, $userCount);



//$user = User::inRandomOrder()->first();
//dd($user);
//$this->assertInternalType('int' ,$user->id);
//$this->assertInstanceOf('App\User' ,$user);   //clas path for App


//$user = new User();
//$user->name = $request->name;
//$user->save();
