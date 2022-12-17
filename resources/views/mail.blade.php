<x-mail::message>
<h1>Hello you have a new order:</h1>
<h2>Name: {{ $order->name }}</h2>
<h2>Phone: {{ $order->phone }}</h2>
<h2>Adrsss: {{ $order->adress }}</h2>
<h2>Pizza Name: {{ $order->pizza }}</h2>
<h2>Size: {{ $order->size }}</h2>
<h2>Price: {{ $order->price }}</h2>
<h2>Pay Method: {{ $order->pay }}</h2>

{{ config('app.name') }}
</x-mail::message>

