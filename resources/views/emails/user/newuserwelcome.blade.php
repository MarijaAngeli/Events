@component('mail::message')
# Welcome {{ $user->name }} to Digital Infinity

Thanks for *signing up*.
We **really appreciate** it.

@component('mail::panel')
    The email address you signed up with is: {{ $user->email }}
@endcomponent

@component('mail::button', ['url' => 'http://www.digitalinfinity.rs'])
Visit Site
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
