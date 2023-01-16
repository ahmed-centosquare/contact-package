<x-mail::message>
# Introduction

There is a new query from {{ $name }}
Message: 
<h1>{{ $message }}</h1>

<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
</x-mail::message>
