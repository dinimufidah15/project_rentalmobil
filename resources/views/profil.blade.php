@php
   $username = 'dini mufidah';
   $role = 'admin';
@endphp

@if($role == 'admin')
    <h3>selamat datang, {{ $username }}! anda adalah seorang {{ $role }}</h3>
@else
    <h3>selamat datang, {{ $username }}! anda adalah seorang user</h3>
@endif    