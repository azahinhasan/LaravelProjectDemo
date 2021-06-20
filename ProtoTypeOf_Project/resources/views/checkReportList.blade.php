<!DOCTYPE html>
<html>
<head>
	<title>Create user</title>

     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</head>
<body>

     @include('..NavBar')
     <h3> Report List </h3>

	<form method="post">
     <input placeholder="ID/Email"/>
     <button type="button" class="btn btn-info">SEARCH</button>
     <table class="table">
          <tr>
               <th>GotRepotedID</th>
               <th>RepoterID</th>
               <th>Action</th>
          </tr>
          @foreach ($reportlist as $user)
          <tr>
               <td>{{$user['GotRepotedID']}}</td>
               <td>{{$user['RepoterID']}}</td>
               <td><a href="/reportList/{{$user['GotRepotedID']}}">More</a></td>
          </tr>
          @endforeach
     </table>
     </body>
	</form>
</body>
</html>