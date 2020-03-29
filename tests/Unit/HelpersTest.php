<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class HelpersTest extends TestCase
{
    /** @test */
    public function Page_Title_Should_Return_The_Correct_Title()
    {
        $this->assertEquals('Laracarte - List of artisans', page_title(''));
    }
    /** @test */
    public function Page_Title_Should_Return_The_Base_Title_If_Title_Is_Provided()
    {
        $this->assertEquals('About | Laracarte - List of artisans', page_title('About'));
        $this->assertEquals('Home | Laracarte - List of artisans', page_title('Home'));
    }
    /** @test */
    /*public function Sset_Active_Route_Should_Return_The_Correct_Class_Based_On_A_Given_Route()
    {
        $this->get(route('home'));
        $this->assertEquals('active', set_active_route('home'));
        $this->assertEquals('', set_active_route('about'));

        $this->get(route('contact.create'));
        $this->assertEquals('active', set_active_route('contact.create'));
        $this->assertEquals('', set_active_route('home'));
        $this->assertEquals('', set_active_route('about'));
    }*/
}
