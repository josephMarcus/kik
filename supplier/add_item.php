<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>

<body>
    <div class="container">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">JET</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="home.html">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="add_item.html">Add Items</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="my_items.html">My Items</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="edit_profile.html">My Profile</a>
                  </li>
        
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Reports
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Items Report</a>
                    <a class="dropdown-item" href="#">Customer Reports</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Char statistics</a>
                  </div>
                </li>
               
              </ul>
              <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
              </form>
            </div>
          </nav>






        <div class="form-row">
           
            <div class="form-group col-md-6">
                <label>Item Name</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group col-md-6">
                <label>Price</label>
                <input type="number" class="form-control">
            </div>
     
            <div class="form-group col-md-6">
                <label>Item Size</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group col-md-6">
                <label>unit</label>
                <input type="number" class="form-control">
            </div>
     
            <div class="form-group col-md-6">
                <label>Category</label>
                <select class="form-control">
                    <option>PC</option>
                    <option>labtop</option>
                    <option>phones</option>
                    <option>elctronics</option>
                </select>
     </div>

     <div class="form-group col-md-6">
        <label>Production Date</label>
        <input type="date" class="form-control">
    </div>
    <div class="form-group col-md-12">
        <label>Short Description</label>
        <input type="text" class="form-control">
    </div>
    <div class="form-group col-md-12">
        <label>Full Description</label>
       <textarea class="form-control"></textarea>
    </div>
    <div class="form-group col-md-6">
               
        <button class="btn btn-primary">Add Item</button>
     </div>

     <div class="form-group col-md-6">
         <label>Upload item Photo</label>
         <input type="file" class="form-control-file">
     </div>




     
        </div>

    </div>




</body>

</html>