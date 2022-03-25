<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="/js/jquery.min.js"></script>

<?php
$userPreferences = $user->preferences;
$preferences = $userPreferences->pluck('name')->toArray();
$genres = [
    'Classic',
    'Rock',
    'Pop',
    'Hip Hop',
    'Jazz',
    'Acoustic',
];
sort($genres);
$interests = [
    'dance',
    'song',
    'music',
];
sort($interests);
$languages = [
    'English',
    'French',
    'Spanish',
];
sort($languages);
?>
<div class="container">
    <div class="p-5"></div>
    <h3 class="mr-5">{{$user->name}}</h3> <a href="/" class="btn btn-sm btn-secondary">Go Back</a>
    <hr>
    <div class="card">
        <div class="card-body">
            <form action="/userPreference" method="POST">
                {{csrf_field()}}
                <input type="hidden" name="user_id" value="{{$user->id}}">
                <input type="hidden" name="type" value="genre">
                <div class="row">
                    <div class="col-md-6">
                        <label for="inputState" class="form-label">Genre</label>
                        <br>
                        @foreach($user->preferences->where('type','=','genre') as $preference)
                            <span class="mb-2 badge bg-dark">{{$preference->name}}</span>
                        @endforeach
                        <select name="name" id="inputState" class="form-select">
                            @foreach($genres as $genre)
                                @if(in_array($genre,$preferences)) @continue @endif
                                <option value="{{$genre}}">{{$genre}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="p-2"></div>
                <button type="submit" class="btn btn-success">Save Genre</button>
            </form>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <form action="/userPreference" method="POST">
                {{csrf_field()}}
                <input type="hidden" name="user_id" value="{{$user->id}}">
                <input type="hidden" name="type" value="interest">
                <div class="row">
                    <div class="col-md-6">
                        <label for="inputState" class="form-label">Interest</label>
                        <br>
                        @foreach($user->preferences->where('type','=','interest') as $preference)
                            <span class="mb-2 badge bg-dark">{{$preference->name}}</span>
                        @endforeach
                        <select name="name" id="inputState" class="form-select">
                            @foreach($interests as $interest)
                                @if(in_array($interest,$preferences)) @continue @endif
                                <option value="{{$interest}}">{{ucfirst($interest)}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="p-2"></div>
                <button type="submit" class="btn btn-success">Save Interest</button>
            </form>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <form action="/userPreference" method="POST">
                {{csrf_field()}}
                <input type="hidden" name="user_id" value="{{$user->id}}">
                <input type="hidden" name="type" value="language">
                <div class="row">
                    <div class="col-md-6">
                        <label for="inputState" class="form-label">Language</label>
                        <br>
                        @foreach($user->preferences->where('type','=','language') as $preference)
                            <span class="mb-2 badge bg-dark">{{$preference->name}}</span>
                        @endforeach
                        <select name="name" id="inputState" class="form-select">
                            @foreach($languages as $language)
                                @if(in_array($language,$preferences)) @continue @endif
                                <option value="{{$language}}">{{ucfirst($language)}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="p-2"></div>
                <button type="submit" class="btn btn-success">Save Language</button>
            </form>
        </div>
    </div>

    @if(count($playlists) > 0)
    <div class="card">
        <div class="card-body">
            @foreach($playlists as $playlist)
                <span class="badge bg-primary">{{$playlist->name}}</span><br>
                <ul>
                    @foreach($playlist->playlist_medias as $playlistMedia)
                        <li>
                            {{$playlistMedia->media->name}}
                        </li>
                    @endforeach
                </ul>
            @endforeach
        </div>
    </div>
    @endif
</div>