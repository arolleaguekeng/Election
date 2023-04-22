<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>liste des régions</title>

    <style>
        body {
            background: #EEE;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        table {
            background: #FFF;
            width: 400px;
            max-height: 400px;
            text-align: center;
            border-radius: 5px;
            box-shadow: 0px 0px 10px 0px gray;
        }

        th {
            background: #171717;
            color: white;
            height: 40px;
            width: 125px;
        }

        td {
            height: 40px;
            border-top: solid 1px gray;
            border-top: solid 1px gray;
        }

        .btn {
            display:flex;
        }

        span {
            display: flex;
            width: 60px;
            height: 40px;
            justify-content: center;
            align-items: center;
        }

        a {
            text-decoration: none;
            color: white;
        }

        .btn-delete {
            background: red;
        }

        .btn-edit {
            background: green;
        }
        .btn-print{
    margin-left: 10px;
    border-color: rgb(4, 47, 126);
}
button{
    border: 2px black solid;
    padding: 10px;
    background-color: transparent;
    font-weight: 300;
    border-radius: 7px;
    width: 80px;
}
button:hover{
    background-color: rgb(4, 100, 189);
    border: none;
    color: white;
}
.container{
    display:flex;
    flex-direction:column;
}
    </style>
</head>

<body>
    <div class="container">
    <h1>Liste des Elections</h1>
        <div class="actions">
        <button class="btn-new" onclick="openForm('form')">New</button>
        <button class="btn-print">Print</button>
        </div>
    @if($list->count() > 0 )
    
    <table cellspacing="0">
        <tr>
            <th>Id</th>
            <th>Nom</th>
            <th>Description</th>
            <th>Action</th>
        </tr>
        <tbody>
            @foreach ($list as $r)
            <tr>
                <td> {{$r->id}} </td>
                <td> {{$r->nom}} </td>
                <td> {{$r->description}} </td>
                <td>
                    <div class="btn">
                        <div>
                            <span class="btn-delete">
                                <a href="/election_delete/{{$r->id}}">Del</a>
                            </span>
                        </div>
                        <div>
                            <span class="btn-edit">
                                <a href="/form_update_election/{{$r->id}}">Edit</a>
                            </span>
                        </div>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif
    </div>
</body>

</html>