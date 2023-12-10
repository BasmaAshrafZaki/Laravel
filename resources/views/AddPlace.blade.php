<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add Place</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <h2>Add Place</h2>
    <form action="{{route('Place-added')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" class="form-control" id="title" placeholder="Enter title" name="Title" value="{{ 
old('Title') }}" >
            @error('Title')
           {{ $message }}
              @enderror
        
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea class="form-control" rows="5" id="description" name="description" >{{ 
old('description') }} </textarea>
           
            @error('description')
           {{ $message }}
              @enderror
              <div class="form-group">
            <label for="PriceFrom">PriceFrom:</label>
            <input type="number" class="form-control" id="price" placeholder="Enter Price" name="PriceFrom" value="{{ 
old('PriceFrom') }}" >
            @error('PriceFrom')
           {{ $message }}
              @enderror
        
        </div>
        <div class="form-group">
            <label for="PriceTo">PriceTo:</label>
            <input type="number" class="form-control" id="price" placeholder="Enter Price" name="PriceTo" value="{{ 
old('PriceTo') }}" >
            @error('PriceTo')
           {{ $message }}
              @enderror
        
        </div>
              <div class="form-group">
            <label for="image">Image:</label>
            <input type="file" class="form-control" id="image" name="Image" >
            @error('Image')
                {{ $message }}
            @enderror
        </div>
        </div>
       
        <button type="submit" class="btn btn-default">Add</button>
    </form>
</div>

</body>
</html>
