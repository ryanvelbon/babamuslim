<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class SignupTest extends DuskTestCase
{
    use DatabaseMigrations;

    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->click('#signupBtn1') // or click?
                    ->typeSlowly('email', 'johndoe@example.com')
                    ->typeSlowly('username', 'johnnyboy99')
                    ->typeSlowly('password', '1234qwerAS!')
                    ->click('#nextBtn')
                    ->typeSlowly('firstName', 'John')
                    ->typeSlowly('lastName', 'Doe')
                    ->click('#nextBtn')
                    ->select('dd', '27')
                    ->select('mm', '7')
                    ->select('yyyy', '1992')
                    ->click('#nextBtn')
                    ->select('nationality', '218') // Turkey
                    ->click('#nextBtn')
                    ->typeSlowly('bio', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 50)
                    ->click('#nextBtn')
                    ->typeSlowly('height', '175')
                    ->typeSlowly('weight', '85')
                    ->click('#nextBtn')->pause(1000)
                    // ->radio('muslimSince', 'convert') does not work because radio element is outside of viewport
                    ->click('label[for="convert"]')->pause(1000)
                    ->click('#nextBtn')->pause(1000)
                    ->click('label[for="salatY"]')->pause(1000)
                    ->click('#nextBtn')->pause(1000)
                    ->click('label[for="quran1"]')->pause(1000)
                    ->click('#nextBtn')->pause(1000)
                    ->click('label[for="married"]')->pause(1000)
                    ->click('#nextBtn')->pause(1000)
                    ->typeSlowly('kids', '3')->pause(1000)
                    ->click('#nextBtn')->pause(1000)
                    ->click('label[for="master"]')->pause(1000)
                    ->click('#nextBtn')->pause(1000)
                    ->click('label[for="tattoosN"]')->pause(1000)
                    ->click('#nextBtn')->pause(1000)
                    ->typeSlowly('job', 'elect')->pause(4000)
                    ->assertSee('Electrician')
                    ->assertSee('foogooloozoo')

                    

                    ->waitFor('#inexistentElement', 20)


                    ->assertSee('Next');
        });

        // assertDatabaseHas('users', ['email' => 'johndoe@example.com']);
    }
}
