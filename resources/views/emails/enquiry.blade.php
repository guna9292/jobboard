<x-mail::message>
# Hello ,You have got an enquiry from {{ $data['fname'] }} {{ $data['lname'] }}

<h3></h3>Email : {{ $data['email'] }}</h3>
<h3></h3>Subject : {{ $data['subject'] }}</h3>
<p>
    Message : {{ $data['messageContent'] }}
</p>

<x-mail::button :url="$url">
 View more Details
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
