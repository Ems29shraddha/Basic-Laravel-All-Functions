@extends('layouts.main')
@section('content')

        <!-- Content Start -->
        <div class="content">
            <!-- nav Start -->
            @include('layouts.header')
            <!-- nav End -->

            <!-- Brand Details Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary rounded-top p-4">
                    <div class="row">
                        <div class="col-sm-12 col-xl-6">
                            <div class="bg-secondary rounded h-100 p-4">
                                <form action='{{route('admin.addBrand')}}' method="post" enctype="multipart/form-data">
                                    @csrf
                                <h6 class="mb-4">Company Details</h6>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Brand Name</label>
                                    <input type="text" name="brand" class="form-control" id="brand"
                                    >
                                </div>
                                <div class="form-floating">
                                    <textarea class="form-control" name="address" placeholder="Address Please"
                                        id="address" style="height: 100px;"></textarea>
                                    <label for="floatingTextarea">Address</label>
                                </div>
                                <div class="input-group">
                                    <button type="submit" class="btn btn-outline-danger m-2">Save</button>
                                </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-sm-12 col-xl-6">
                            <div class="bg-secondary rounded h-100 p-4">
                                <h6 class="mb-4">Brand List </h6>
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">S.no</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Address</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>John</td>
                                            <td>Doe</td>
                                            <td>jhon@email.com</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>mark@email.com</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>jacob@email.com</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        
                      
                    </div>
                </div>
            </div>
            <!-- Brand Details End -->

            <!-- Product's Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary rounded-top p-4">
                    <div class="row">
                        <div class="col-sm-12 col-xl-6">
                            <form action="" method="" enctype="multipart/form-data">
                                @csrf
                            <div class="bg-secondary rounded h-100 p-4">
                                <h6 class="mb-4">Add Product </h6>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Brand Name</label>
                                    <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                        <option selected>Open this select menu</option>
                                        <option value="1">Nike</option>
                                        <option value="2">Bata</option>
                                        <option value="3">Woodland</option>
                                        <option value="1">Puma</option>
                                        <option value="2">Adidas</option>
                                        <option value="3">Reebok</option>
                                        <option value="1">Liberty</option>
                                        <option value="2">Metro</option>
                                        <option value="3">Mochi</option>
                                        <option value="1">Fila</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Price </label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">$</span>
                                    <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                    <span class="input-group-text">.00</span>
                                </div>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Quantity </label>
                                    <div class="input-group mb-3">
                                        <input type="number" name="quantity" id="quantity" class="form-control" >
                                       
                                    </div>
                                    </div>
                                <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Size </label>    
                                <div class="input-group mb-3">
                                    <select class="form-select" multiple aria-label="multiple select example">
                                        <option selected>Open this select menu</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                 </div>
                                </div>
                                <div class="mb-3">
                                    <label for="formFileSm" class="form-label">Small file input example</label>
                                    <input class="form-control form-control-sm bg-dark"   type="file" id="file-upload" accept="image/*" onchange="previewImage(event);"  multiple>
                                </div>
                               
                                <div class="input-group ">
                                    <button type="submit" class="btn btn-outline-danger m-2">Add</button>
                                </div>
                            </div>
                            </form>
                        </div>
                        <div class="col-sm-12 col-xl-6">
                            <div class="bg-secondary rounded h-100 p-4">
                                <h6 class="mb-4">Product Image </h6>
                                <div class="mb-3 " >
                                    <img  id="preview-selected-image" width="300" height="300"/>
                                </div>
                            </div>
                    </div>
                    </div>
                </div>
            </div>
            <!-- Product's End -->
        </div>
        <!-- Content End -->
<script>
  const previewImage = (event) => {
   
    const imageFiles = event.target.files;
    
    const imageFilesLength = imageFiles.length;
   
    if (imageFilesLength > 0) {
      
        const imageSrc = URL.createObjectURL(imageFiles[0]);
       
        const imagePreviewElement = document.querySelector("#preview-selected-image");
       
        imagePreviewElement.src = imageSrc;
        
        imagePreviewElement.style.display = "block";
    }
};
</script>
@endsection