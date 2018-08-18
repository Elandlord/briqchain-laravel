<table>
    <thead>
    <tr>
        <th>Name</th>
        <th>Email</th>
    </tr>
    </thead>
    <tbody>
    @foreach($emailSubscriptions as $emailSubscription)
        <tr>
            <td>{{ $emailSubscription->name }}</td>
            <td>{{ $emailSubscription->email_address }}</td>
        </tr>
    @endforeach
    </tbody>
</table>