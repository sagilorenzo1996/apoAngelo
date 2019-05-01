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
    <title>Manager</title>
  </head>
  <body>
    <h1 class="text-center">Welcome</h1>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Project</th>
          <th scope="col">Developer</th>
          <th scope="col">Hours</th>
          <th scope="col">Overtime</th>
          <th scope="col">Contribution</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">Distributed Bank System</th>
          <td>Matt Leblanc</td>
          <td>20</td>
          <td>5</td>
          <td>33%</td>
        </tr>
        <tr>
          <th scope="row"></th>
          <td>Jenifer Aniston</td>
          <td>18</td>
          <td>5</td>
          <td>30%</td>
        </tr>
        <tr>
          <th scope="row"></th>
          <td>Lisa Kidrow</td>
          <td>22</td>
          <td>5</td>
          <td>37%</td>
        </tr>
        <tr>
          <th scope="row">Incident Prevention</th>
          <td>Matthew Perry</td>
          <td>30</td>
          <td>15</td>
          <td>54%</td>
        </tr>
        <tr>
          <th scope="row"></th>
          <td>David schwimmer</td>
          <td>22</td>
          <td>12</td>
          <td>46%</td>
        </tr>
        <tr>
          <th scope="row">API Project</th>
          <td>Courteney Cox</td>
          <td>33</td>
          <td>18</td>
          <td>66%</td>
        </tr>
        <tr>
          <th scope="row"></th>
          <td>Monika Geller</td>
          <td>17</td>
          <td>6</td>
          <td>34%</td>
        </tr>
      </tbody>
    </table>
      <form class="develperForm" id="updateTask">
        <div class="col-sm-6">
          <div class="form-group">
            <label for="projectId">Enter Developer ID</label>
            <input type="text" class="form-control" id="projectIdUpdate">
          </div> <br>
          <div class="form-group">
            <label for="date">Username</label>
            <input type="date" class="form-control" id="dateUpdate">
          </div> <br>
          <div class="form-group">
            <label for="hours">ID</label>
            <input type="text" class="form-control" id="hourUpdate">
          </div> <br>
        </div>
        <div class="col-sm-6">
          <div class="form-group">
            <label for="overtime">Developer First Name</label>
            <input type="text" class="form-control" id="overtimeUpdate">
          </div> <br>
          <div class="form-group">
            <label for="overtime">Developer Last Name</label>
            <input type="text" class="form-control" id="overtimeUpdate">
          </div> <br>
          <div class="form-group">
            <label for="overtime">Role</label>
            <input type="text" class="form-control" id="overtimeUpdate">
          </div> <br>
        </div> <br>
        <div class="col-sm-4">
        </div>
        <div class="col-sm-4 text-center">
          <button type="submit" class="btn btn-primary">Search Developer</button>
        </div>
        <div class="col-sm-4">
        </div>
    </form>
  </body>
</html>
