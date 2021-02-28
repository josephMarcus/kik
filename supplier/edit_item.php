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
               
        <button class="btn btn-primary">Edit Item</button>
     </div>

     <div class="form-group col-md-6">
         <label>Change item Photo</label>
         <input type="file" class="form-control-file">
     </div>




     
        </div>

    </div>




</body>

</html>