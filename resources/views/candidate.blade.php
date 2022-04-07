@include('header')
<div class="container">
    <h3>View all Candidates</h3><hr>
        <p><b>Id:       </b>{{$candidates->id}}</p>
        </p><p><b>Name:     </b>{{$candidates->name}}</p>
        <p><b>Profile Picture:</b></p>
        <img src="{{ url('public/Image/'.$candidates->profile_picture) }}" style="height: 100px; width: 150px;"><p><b>Details:</b>{{$candidates->details}}</p>
         <a href="voteCandidate?candidate_id={{$candidates->id}}"><input type="submit" value="Vote" name="vote"></a><br><br>
      </tbody>
    </table>
  </div>