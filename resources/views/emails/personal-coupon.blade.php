@component('mail:message')
    # Your Personal Coupon

    Per your request, I0ve generated a special coupon with {{ $coupon->percentage_discount }}% off

    @component('mail:button', ['url' => url("signup?plan=yearly&coupon={$coupon->code})])
        Redeem
    @endcomponent

    Hope it helps,

    Carlos

@endcomponent
