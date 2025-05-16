<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/gayaku.css') }}">    
</head>
<body>
    <nav>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">list</a></li>
            <li><a href="#">Deck</a></li>
            <li><a href="#">File</a></li>
            <li><a href="#">Profile</a></li>
        </ul>
    </nav>
    <?php $i = 1 ?>
    @foreach($users as $user)
    <div class="container">
        <div class="card">
            <p id="nomor">{{$i++}}</p>
            <div class="text">
                <p>{{$user->name}}</p>
                <p>{{$user->description}}</p>
            </div>
            <p style="color: {{strtolower(trim($user->status)) == 'completed' ? 'green' : 'inherit' ;}}" class="status">{{$user->status}}</p>
        </div>
        @endforeach
        <!-- @foreach($user2 as $user)
        <p>{{$user}}</p>
        @endforeach -->
</body>
<!-- <script>
    var status = document.querySelectorAll(".status"); //Menyeleksi semua kelas status


    status.forEach(function(status){
        if(status.innerHtml.trim().toLowerCase() === "completed")
    {
        status.style.color == "green";
    }
    })
    // for(var i = 0; i < status.length; i++){
    //     if(status[i].innerHTML == "completed"){
    //         status[i].style.backgroundColor = "green";
    //         status[i].style.color = "white";
    //     }
    // }
</script> -->
</html>
