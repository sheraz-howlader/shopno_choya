<x-mail::message>
Dear {{ $data['name'] }},

We are pleased to inform you that your account has been successfully activated. You can now access your account at any time.
<br>

For security reasons, we recommend that you keep your password confidential and do not share it with anyone.
If you encounter any issues or have questions, feel free to reach out to our support team.

<x-mail::panel>
    Approved By: {{ $data['approve_by'] }}
</x-mail::panel>

Best regards,<br>
Shopno Chowa Somobay Somity
</x-mail::message>
