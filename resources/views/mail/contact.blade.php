<div style="margin: 10px 0px;padding: 5px 15px;font-size:16px;">
    Hi Admin,
</div>

<div style="margin: 10px 0px;padding: 5px 15px;font-size:14px;">
    You have a new message.
</div>

<div style="margin: 2px 0px;padding: 5px 15px;font-size:14px;">
    Details:
</div>

<div style="margin: 2px 0px;padding: 5px 30px;font-size:14px;">
    Name: <span style="text-transform: uppercase;">{{ $data['name'] }} </span>
</div>

<div style="margin: 2px 0px;padding: 5px 30px;font-size:14px;">
    Email: <span style="text-transform: lowercase;">{{ $data['email'] }} </span>
</div>

<div style="margin: 2px 0px;padding: 5px 30px;font-size:14px;">
    Phone Number: <span style="text-transform: lowercase;">{{ $data['phone'] }} </span>
</div>


<div style="margin: 2px 0px;padding: 5px 30px;font-size:14px;">
    Subject: <span style="text-transform: lowercase;">{{ $data['subject'] }} </span>
</div>

<div style="margin: 2px 0px;padding: 5px 30px;font-size:14px;">
    Message:
    <p style="padding: 0px 10px">{!! $data['message'] !!} </p>
</div>
