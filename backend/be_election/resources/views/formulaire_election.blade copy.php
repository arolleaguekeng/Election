<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/app.css">
    <title>Ajouter region</title>
    <style>
body{
    background-color: whitesmoke;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    margin: 10% 10%;
}

h1{
    text-align: center;
}

.table{
    display: flex;
    width: 100;
}
.features{
    display: flex;
    justify-content: right;
    margin-bottom: 15px;
}
thead{
    background-color: aqua;
    padding: auto;
}
th{
    width: 100%;
    border: 1px solid;
    background-color: rgb(41, 41, 41);
    color: white;
    padding: 10px;
    font-weight: 900;
}

table{
    width: 100%;
    
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


.btn-print{
    margin-left: 10px;
    border-color: rgb(4, 47, 126);
}




.container{
    display: flex;
    justify-content: center;
    padding: 5% 0%;
}

form{
    padding: 5% 0%;
    background-color: white;
    border-radius: 10px;
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 350px;
}

input{
    border-radius: 5px;
    height: 30px;
    margin-top: 15px;
    padding-left: 10px;
    border: 0.2px solid rgb(165, 165, 165);
    width: 220px;
}

input[type="submit"]{
    border: 2px solid rgb(4, 47, 126);
    background-color: white;
    color: rgb(4, 47, 126);
    border-radius: 5px;
    font-weight: 500;
    font-size: 15px;
}

input[type="submit"]:hover{
    background-color: rgb(4, 47, 126);
    color: white;
}

.Enregistrer{
    margin-top: 15px;
    width: 150px;
    background-color: rgb(4, 47, 126);
    color: white; 
    background-color: white;
    color: rgb(4, 47, 126);
    border-radius: 5px;
    border: 2px solid rgb(4, 47, 126);
    font-weight: 500;
    font-size: 15px;
}
    </style>
</head>
<body>

<div class="container" id="container">
<form method="POST" action="{{route('add')}}">
            @csrf
            <h1>Ajouter Une Election</h1>
            <input type="text" name="nom" id="nom" placeholder="Entrer le nom">
            <input type="text" name="description" id="prix" placeholder="Entrer la Description">
            <input  type="submit" value="Enregistrer" class="Enregistrer">
        </form>
    </div>
</body>
</html>