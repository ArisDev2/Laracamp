@component('mail::message')
    # Register Camp : {{ $checkout->Camp->title }}

    Hi {{ $checkout->User->name }}
    <br>
    Thankyou for register on online course <b> {{ $checkout->Camp->title }}</b>,Please see the payment instruction


    @component('mail::button', ['url' => route('user.checkout.invoice', $checkout->id)])
        Button Text
    @endcomponent

    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
