<x-mail::message>
# Introduction
There is a query from {{ $name }} <br>
    Message:
{{ $message }}

<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
