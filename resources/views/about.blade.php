<h1>О блоге</h1>
<p>Эксперименты с Laravel на Хекслете</p>
<h3>Our stuff:</h3>
@foreach ($team as $user)
    <table  border="1">
        <tr>
            <td>{{ $user['name'] }}</td>
            <td>{{ $user['position'] }}</td>
        </tr>
    </table>
@endforeach