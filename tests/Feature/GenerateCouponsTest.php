<?php

namespace Tests\Feature;

use App\Mail\PersonalCoupon;
use App\Models\Coupon;
use App\User;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class GenerateCouponsTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function only_admins_can_generate_coupons()
    {
        $this->post('coupons')
            ->assertRedirect('/');
    }

    /** @test */
    public function it_records_a_new_coupon_in_the_database()
    {
        // TODO: test in stripe Mockery::mock (or use a spy)
        $admin = factory(User::class)->states('admin')->create();

        $this->actingAs($admin)
            ->post('coupons', [
                'code' => 'coupon-code',
                'description' => 'Foo Description',
                'percentage_discount' => 50,
                'recipient' => 'foo@example.com',
            ]);

        $this->assertCount(1, Coupon::all());
        $this->assertDatabaseHas('coupons', ['code' => 'coupon-code']);
    }

    /** @test */
    public function it_sends_an_email_to_the_user_with_the_coupon_code()
    {
        Mail::fake();

        $admin = factory(User::class)->states('admin')->create();

        $this->actingAs($admin)
            ->post('coupons', [
                'code' => 'coupon-code',
                'description' => 'Foo Description',
                'percentage_discount' => 50,
                'recipient' => 'foo@example.com',
            ]);

        // Todo: flash()

        Mail::assertQueued(PersonalCoupon::class);
    }
}
