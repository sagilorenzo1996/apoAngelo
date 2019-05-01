<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title>Developer</title>
  </head>
  <body>
    <h1 class="text-center">Developer{{$id}}</h1>
    <div class="col-sm-6">
    <h3 class="text-center">Add Task</h3>
    <form class="develperForm" id="addTask">
      <div class="form-group">
        <label for="projectId">Project ID</label>
        <input type="text" class="form-control" id="projectIdAdd">
      </div> <br>
      <div class="form-group">
        <label for="date">Date</label>
        <input type="date" class="form-control" id="dateAdd">
      </div> <br>
      <div class="form-group">
        <label for="hours">Hours</label>
        <input type="text" class="form-control" id="hourAdd">
      </div> <br>
      <div class="form-group">
        <label for="overtime">Overtime</label>
        <input type="text" class="form-control" id="overtimeAdd">
      </div> <br>
      <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control" id="descriptionAdd" rows="3"></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Add Task</button>
    </form>
  </div>
  <div class="col-sm-6">
  <h3 class="text-center">Update tasks</h3>
  <form class="develperForm" id="updateTask">
    <div class="form-group">
      <label for="projectId">Project ID</label>
      <input type="text" class="form-control" id="projectIdUpdate">
    </div> <br>
    <div class="form-group">
      <label for="date">Date</label>
      <input type="date" class="form-control" id="dateUpdate">
    </div> <br>
    <div class="form-group">
      <label for="hours">Hours</label>
      <input type="text" class="form-control" id="hourUpdate">
    </div> <br>
    <div class="form-group">
      <label for="overtime">Overtime</label>
      <input type="text" class="form-control" id="overtimeUpdate">
    </div> <br>
    <div class="form-group">
    <label for="description">Description</label>
    <textarea class="form-control" id="descriptionUpdate" rows="3"></textarea>
  </div>
    <button type="submit" class="btn btn-primary">Update Task</button>
  </form><br><br>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Description</th>
      <th scope="col">Project ID</th>
      <th scope="col">Project Name</th>
      <th scope="col">Date</th>
      <th scope="col">Hours</th>
      <th scope="col">Overtime Hours</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Final</td>
      <td>1</td>
      <td>API Project</td>
      <td>12/10/2018</td>
      <td>10</td>
      <td>16</td>
      <td><input id="Update" type="submit" name="Update" value="Update" />
      <input id="Delete" type="submit" name="Delete" value="Delete" /></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>FinalAPI</td>
      <td>2</td>
      <td>Incident Prevention</td>
      <td>18/10/2018</td>
      <td>14</td>
      <td>11</td>
      <td><input id="Update" type="submit" name="Update" value="Update" />
      <input id="Delete" type="submit" name="Delete" value="Delete" /></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>FinalDP</td>
      <td>3</td>
      <td>Distributed Bank</td>
      <td>12/11/2018</td>
      <td>18</td>
      <td>16</td>
      <td><input id="Update" type="submit" name="Update" value="Update" />
      <input id="Delete" type="submit" name="Delete" value="Delete" /></td>
    </tr>
  </tbody>
</table>
<script type="text/javascript">
  $(document).ready(function(){
    $('#addTask').on('submit',function(e){
      e.preventDefault();
      $.post('http://localhost:8000/api/tasks',
      {
        projectId: $('#projectIdAdd').val(),
        developerId:{{$id}},
        date: $('#dateAdd').val(),
        hours: $('#hourAdd').val(),
        overtime: $('#overtimeAdd').val(),
        description: $('#descriptionAdd').val()
      },function(data,status) {
        console.log(data + "this"+status)
      });
    });
  })
</script>
<script type="text/javascript">
  $(document).ready(function(){
    $('#updateTask').on('submit',function(e){
      e.preventDefault();
      $.post('http://localhost:8000/api/tasks',
      {
        projectId: $('#projectIdUpdate').val(),
        developerId:{{$id}},
        date: $('#dateUpdate').val(),
        hours: $('#hourUpdate').val(),
        overtime: $('#overtimeUpdate').val(),
        description: $('#descriptionUpdate').val()
      },function(data,status) {
        console.log(data + "this"+status)
      });
    });
  })
</script>  </body>
</html>
