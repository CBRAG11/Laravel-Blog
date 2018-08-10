<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Post;
use Carbon\Carbon;

class ExampleTest extends TestCase
{
    use DatabaseTransaction;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
       
        $first = factory('Post::class')->create();

        $second = factory('Post::class')->create(
            [
                'created_at'=> \Carbon\Carbon::now->subMonth()
            ]);

        Post::archives();

        $this->assertEquals(
            [
                [  
                    "year"  => 2017,
                    "month" => "January",
                    "published"=> 1
                ]
            ], $posts)

    }


}
