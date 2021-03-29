   @extends('backend.master')
   @section('content')
   <div class="content-wrapper">
   <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Add Products</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v2</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
   <div class="card card-primary">
   @include('backend.message')
   <div class="card-header">
      <h3 class="card-title">Quick Example</h3>
        </div>        
              <!-- /.card-header -->
              <!-- form start -->
              <form action="addproduct" method="POST" enctype="multipart/form-data">
              @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter Product Name" required>
                  </div>
                  <div class="form-group">
                    <label>Category</label>
                    <select class="form-control select2" name="category_id" style="width: 100%;" required>
                      <option value="" selected="selected">Please Select The Brand For Category</option>
                      @foreach(App\Models\Category::orderBy('name','asc')->get() as $category)
                      <option value="{{$category->id}}">{{$category->name}}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Description</label>
                    <textarea type="text" name="description" class="form-control"  placeholder="Description"></textarea>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Slug</label>
                    <input type="text" name="slug" class="form-control" placeholder="Enter Slug" required>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Quantity</label>
                    <input type="number" name="quantity" class="form-control" placeholder="Enter Quantity" required>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Price</label>
                    <input type="number" name="price" class="form-control" placeholder="Enter Price" required>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Offer Price</label>
                    <input type="number" name="offer_price" class="form-control" placeholder="Enter Offer Price" required>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="product_img[]" class="custom-file-input" multiple>
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
   </div>
 @endsection
   
   
  