@include('header')
<div class="container">
    <h3>View all Candidates</h3><hr>
    <!-- <table class="table">
      <thead>
        <tr>
          <th scope="col">Id</th><br>
          <th scope="col">Name</th>
          <th scope="col">Profile Picture</th>
          <th scope="col">Details</th>
        </tr>
      </thead>
      <tbody> -->
        @foreach($candidates as $data)
        <p><b>Id:       </b>{{$data->id}}</p>
        </p><p><b>Name:     </b>{{$data->name}}</p>
        <p><b>Profile Picture:</b></p>
        <img src="{{ url('public/Image/'.$data->profile_picture) }}" style="height: 100px; width: 150px;"><p><b>Details:</b>{{$data->details}}</p>
         <input type="submit" value="Vote" name="vote"><br><br>
        <!-- <tr>
          <td>{{$data->id}}</td>
          <td>{{$data->name}}</td>
          <td>
	     <img src="{{ url('public/Image/'.$data->profile_picture) }}" style="height: 100px; width: 150px;">
	  </td>
          <td>{{$data->details}}</td>
          
          <td><input type="submit" value="Vote" name="vote"></td>
        </tr> -->
        @endforeach
      </tbody>
    </table>
  </div>