@component('mail::message')
# Results Uploaded

The results for your order, **Order Number:** {{ $order->order_number }} have been uploaded...

You can get further details about your order by logging into our website.

@component('mail::button', ['url' => config('app.url'), 'color' => 'green'])
Go to Website
@endcomponent

Thank you again for choosing us. Please provide us feedback here.

@component('mail::button', ['url' => config('app.url/feedback'), 'color' => 'green'])
Give us Feedback
@endcomponent

Regards,<br>
{{ config('app.name') }}
@endcomponent