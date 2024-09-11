<x-mail::message>
Dear {{ $data['name'] }},

We are pleased to inform you that your deposit of ৳ {{ $data['amount'] }} has been successfully approved.

If you have any further questions or need assistance, please don't hesitate to contact us.

Thank you for your continued trust and support.

<x-mail::panel>
    Payment Date: {{ $data['payment_date'] }} <br>
    Approve Date: {{ $data['approve_date'] }} <br>
    Approved By: {{ $data['approve_by'] }}
</x-mail::panel>

Best regards,<br>
Shopno Chowa Somobay Somity
</x-mail::message>
