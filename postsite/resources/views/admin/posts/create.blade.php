@extends('admin.layout.master')
@section('contentAdmin')
    
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Manage Posts</h6>
              </div>
            </div>
              <div class="table-responsive p-0">
                <div class="card-body px-0 pb-2">
                    <div class="table-responsive p-0">
                        <form class="px-5" action="{{route('create_post')}}" method="POST" enctype="multipart/form-data">
                          @csrf
                            <div class="row">
                              <div class="form-group col-md-6 mb-3">
                                <label>Post Title</label>
                                <input type="text" class="form-control border" id="inputEmail4" name="post_title" placeholder="Post Title">
                              </div>
                              <div class="form-group col-md-6 mb-3">
                                <label>Post Author</label>
                                <input type="text" class="form-control border" id="inputEmail4" name="post_author" placeholder="Post Author">
                              </div>
                              <div class="form-group col-md-6 mb-3">
                                <label>Post Date</label>
                                <input type="date" class="form-control border" id="inputEmail4" name="product_date" placeholder="Post Date">
                              </div>
                              <div class="form-group col-md-6 mb-3">
                                <label>Post Image</label>
                                <input type="file" class="form-control border" name="post_image" id="post_image">
                              </div>
                              <div class="form-group col-md-6 mb-3">
                                <label>Post Content</label>
                                <input type="text" class="form-control border" id="post_content" name="post_content" placeholder="Post Content">
                              </div>
                              <div class="form-group col-md-6 mb-3">
                                <label for="inputState">Post Status</label>
                                <select id="status" class="form-control border" name="post_status">
                                  <option selected>Select Status</option>
                                  <option>Published</option>
                                  <option>Draft</option>
                                </select>
                              </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Add Post</button>
                          </form>
                        </div>
                    </div>
                  </div>
                </div>
              </div>

@endsection