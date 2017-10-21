@component('mail::message')

    {{ __('user_recover_pass_message') }}

    @component('mail::button', ['url' => ''])
        {{ __('user_activate_button') }}
    @endcomponent

    Thanks,<br>
    {{ config('app.name') }}
@endcomponent