<h2>Compartir con</h2>

<form action="/action_page.php">
    <div class="dropdown">
         @foreach ($users as $user)
            <input type="checkbox" name="{{$user->id}}" value="{{$user->id}}">
            <label for="{{$user->id}}"> {{$user->name}}</label><br>
            @endforeach
    </div>       
  
  </form>

