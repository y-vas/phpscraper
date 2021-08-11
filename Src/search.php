
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
             integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<form class="w-50 m-auto pt-5" action="/search" method="get">

  <div class="input-group rounded">
    <input type="text" name='q' class="form-control rounded" placeholder="Query" aria-label="Search"
    aria-describedby="search-addon" />
  </div>

  <div class="input-group rounded mt-2">
    <input type="number" name='pages' class="form-control rounded" placeholder="Start Page" aria-label="Search"
    aria-describedby="search-addon" />
  </div>

  <div class="input-group rounded mt-2">
    <input type="submit" class="btn btn-success btn-block" value='Search'/>
  </div>

</form>
