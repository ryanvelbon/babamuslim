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

            $pause = 200;
            $email = 'johndoe@example.com';
            $pwd = '1234qwerAS!';

            $browser->visit('/')->pause(3000)
                    ->click('#signupBtn')
                    ->typeSlowly('email', $email)
                    ->typeSlowly('username', 'johnnyboy99')
                    ->typeSlowly('password', $pwd)
                    ->typeSlowly('password_confirmation', $pwd)
                    ->click('#regForm button')
                    ->pause(3000) // long pause required to give page enough time to load

                    // phase 1 of profile setup
                    ->click('label[for="genderM"]')->pause($pause)
                    ->click('#nextBtn')->pause($pause)
                    ->typeSlowly('firstName', 'John')
                    ->typeSlowly('lastName', 'Doe')
                    ->click('#nextBtn')->pause($pause)
                    ->select('dd', '27')
                    ->select('mm', '7')
                    ->select('yyyy', '1992')
                    ->click('#nextBtn')->pause($pause)
                    ->select('nationality', '218') // Turkey
                    ->click('#nextBtn')->pause($pause)
                    ->typeSlowly('height', '175')
                    ->typeSlowly('weight', '85')
                    ->click('#nextBtn')->pause($pause)
                    ->click('#skinColorMenu > ul > li[data-hex-value="#A26348"]')
                    ->click('#nextBtn')->pause($pause)
                    ->click('#hairColorMenu > ul > li[data-hex-value="#F4EBAA"]')
                    ->click('#nextBtn')->pause($pause)
                    ->click('#eyeColorMenu > ul > li[data-hex-value="#7FB4BE"]')
                    ->click('#nextBtn')->pause($pause)
                    ->click('label[for="master"]')->pause($pause)
                    ->click('#nextBtn')->pause($pause)
                    ->typeSlowly('job', 'elect')->pause(1000)
                    ->assertSee('Electrician')
                    ->click('#jobautocomplete-list > div') // this selector will not always be accurate. Find a better way to identify the desired dropdown list item
                    ->click('#nextBtn')->pause($pause)
                    ->click('label[for="salary5"]')->pause($pause)
                    ->click('#nextBtn')->pause($pause)
                    ->click('label[for="married"]')->pause($pause)
                    ->click('#nextBtn')->pause($pause)
                    ->typeSlowly('kids', '3')->pause($pause)
                    ->click('#nextBtn')->pause($pause)
                    ->type('bio', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.')
                    ->click('#nextBtn')->pause($pause)
                    ->click('button[type="submit"]')
                    ->pause(2000)

                    // phase 2 of profile setup
                    ->click('#continueBtn')->pause($pause)
                    ->click('label[for="convert"]')->pause($pause)
                    ->click('#nextBtn')->pause($pause)
                    ->click('label[for="salat4"]')->pause($pause)
                    ->click('#nextBtn')->pause($pause)
                    ->click('label[for="quran1"]')->pause($pause)
                    ->click('#nextBtn')->pause($pause)
                    ->click('label[for="smokingFreq2"]')->pause($pause)
                    ->click('#nextBtn')->pause($pause)
                    ->click('label[for="drinkingFreq4"]')->pause($pause)
                    ->click('#nextBtn')->pause($pause)
                    ->click('label[for="tattoosN"]')->pause($pause)
                    ->click('#nextBtn')->pause($pause)
                    ->click('button[type="submit"]')->pause($pause*5)

                    // Dashboard: log out
                    ->click('#logoutBtn')
                    ->pause(3000)

                    // Landing page: provide incorrect email
                    ->typeSlowly('loginEmail', $email."xxxxx")
                    ->typeSlowly('loginPwd', $pwd)
                    ->click('#loginBtn')
                    ->pause(2000)

                    // Landing page: provide incorrect password
                    ->typeSlowly('loginEmail', $email)
                    ->typeSlowly('loginPwd', $pwd."xxxxx")
                    ->click('#loginBtn')
                    ->pause(2000)

                    // Landing page: provide correct login credentials
                    ->typeSlowly('loginEmail', $email)
                    ->typeSlowly('loginPwd', $pwd)
                    ->click('#loginBtn')
                    ->pause(2000)
                    
                    // dashboard                    

                    ->waitFor('#inexistentElement', 3);


        });

        // assertDatabaseHas('users', ['email' => 'johndoe@example.com']);
    }
}
