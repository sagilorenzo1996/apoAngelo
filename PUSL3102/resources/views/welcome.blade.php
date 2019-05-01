<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <title>Laravel</title>
    </head>
    <body class="container-fluid">
    <h1 class="text-center">Add Book</h1>
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <div class="form-group">
                <label for="exampleInputEmail1">Book Title</label>
                <input type="text" class="form-control" placeholder="Book Title" id="bookTitle" required>
            </div>
            <div class="form-group">
                <label for="categorySelect">Select Catergory</label>
                <select class="form-control" id="bookCategory">
                    <option>Thriller</option>
                    <option>Novel</option>
                    <option>Fantasy</option>
                </select>
            </div>
            <div class="form-group">
                <label for="bookISBN">ISBN number</label>
                <input type="text" class="form-control" placeholder="ISBN" id="bookISBN" required>
            </div>
            <div class="form-group">
                <label for="bookYear">Book Year</label>
                <input type="text" class="form-control" placeholder="Year" id="bookYear" required>
            </div>
            <div class="form-group">
                <label for="bookPrice">Book Price</label>
                <input type="text" class="form-control" placeholder="Price" id="bookPrice" required>
            </div>
            <div class="form-group">
                <label for="bookAuthor">Book Author</label>
                <input type="text" class="form-control" placeholder="Author" id="bookAuthor" required>
            </div>
            <div class="form-group">
                <label for="bookPublisher">Book Publisher</label>
                <input type="text" class="form-control" placeholder="Publisher" id="bookPublisher" required>
            </div>
            <button class="btn btn-lg btn-success" id="submitBtn">Add book</button>
            <div class="alert-success" id="successAlert">Book Successfully added</div>
            <div class="alert-danger"  id="failAlert">Failed please check</div>
        </div>
        <div class="col-sm-2"></div>
    </div>
    </body>
</html>
<script type="text/javascript">
    $(document).ready(function(){
        $('#successAlert').hide();
        $('#failAlert').hide();
        $('#submitBtn').on('click',function(e){
            e.preventDefault();
            $.post('http://localhost:8000/api/books',
                {
                    "category":$('#bookCategory').val(),
                    "title":$('#bookTitle').val(),
                    "author":$('#bookAuthor').val(),
                    "ISBN":$('#bookISBN').val(),
                    "year":$('#bookYear').val(),
                    "price":$('#bookPrice').val(),
                    "publisher":$('#bookPublisher').val()
                },function(data,status) {
                    if (status==="success") {
                        console.log(data);
                        $('#failAlert').hide();
                        $('#successAlert').show();
                    }
                    else {
                        $('#successAlert').hide();
                        $('#failAlert').show();
                    }
                });
        });
    })
</script>