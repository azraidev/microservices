<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="/js/jquery.min.js"></script>

<center>
    <form action="/generateUser" method="post">
        {{csrf_field()}}
        <button>Generate User</button><br><br>
    </form>
    <?php
    $users = \App\Models\User::all();
    ?>
    <select id="user" name="user">
    @foreach($users as $user)
        <option value="{{$user->id}}">{{$user->name}}</option>
    @endforeach
    </select><br><br>
    <button onclick="selectUser();">Select User</button>
</center>
<script>
    function selectUser(){
        var id = $("#user").val();
        window.location.href='/selectUser/'+id;
    }
</script>