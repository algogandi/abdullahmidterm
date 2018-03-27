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
    public function testInsert()
    {

        $user = new User();
        $user->name = '';
        $user->email = '';
        $user->password = '';
        //$user->save();
        //$this->assertTrue(true);
        $this->assertTrue($user->save());

    }
    public function testUpdate()
    {

        $user = User::inRandomOrder()->first();
        $user->name = 'Steve Smith';
        $user->email = '';
        $user->password = '';
        $user->save();

        //$this->assertTrue(true);
        $this->assertTrue($user->update());

    }

    public function testDelete()
    {

        $user = User::inRandomOrder()->first();
        $user->name = '';
        $user->email = '';
        $user->password = '';
        $user->save();

        //$this->assertTrue(true);
        $this->assertTrue($user->delete());

    }

    public function testCount()
    {
        $user = User::All();
        $user->count='50';
        //$user->count();
        $this->assertEquals(50, $user->count());
        //$this->assertCount($user);
        //$this->assertInternalType(IsType::TYPE_INT, $user);
        //$this->assertTrue($user);


    }

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
