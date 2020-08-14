<table class="table" border="1 px solid">
    <td>worker_ID</td>
    <td>Vorname</td>
    <td>Nachname</td>
    <td>Edit</td>
    <td>New</td>


    @foreach($results as $result)

        <tr>
            <td>{{$result->worker_ID}}</td>

            <td>{{$result->Vorname}}</td>

            <td>{{$result->Nachname}}</td>
            <td><a href='edit/worker_ID/{{$result->worker_ID}}'>Bearbeiten</a></td>
            <td><a href='new/vorname&nachname/{{$result->vorname, nachname}}'>Neu</a></td>
        </tr>
    @endforeach


</table>

