@include('header')
<div class="container">
    <h3>Leader Board</h3><hr>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Name</th>
          <th scope="col">Number of votes</th>
        </tr>
      </thead>
      <tbody>
        @foreach($candidates as $data)
        <tr>
          <td>{{$data->id}}</td>
          <td>{{$data->name}}</td>
          <td>{{$data->votes}}</td>
        </tr>
        @endforeach
      </tbody>
    </table><hr>
  </div>