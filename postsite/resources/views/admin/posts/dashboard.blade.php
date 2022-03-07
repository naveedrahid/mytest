@extends('admin.layout.master')
@section('contentAdmin')
    
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3 d-flex justify-content-between pe-3">
                <h6 class="text-white text-capitalize ps-3">Manage Posts</h6>
                <a href="{{route('create_post')}}" class="btn bg-white">Create Post</a>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Author</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Post Title</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Post Content</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Date</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Edit Post</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Delete Post</th>
                    </tr>
                  </thead>
                  <tbody>
                      @if (count($posts) > 0)
                          @foreach ($posts as $key => $singleposts)
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="{{$singleposts->post_image}}" class="avatar avatar-sm me-3 border-radius-lg" alt="user1">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">{{$singleposts->post_author}}</h6>
                            {{-- <p class="text-xs text-secondary mb-0">john@creative-tim.com</p> --}}
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs text-secondary mb-0">{{$singleposts->post_title}}</p>
                      </td>
                      <td>
                        <p class="text-xs text-secondary mb-0" style="white-space: break-spaces;">{{$singleposts->post_content}}</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        @if ($singleposts->post_status == 'Published')
                          <span class="badge badge-sm bg-gradient-success">{{$singleposts->post_status}}</span>
                          @else
                          <span class="badge badge-sm" style="background:#c7cacf;color: #000;">{{$singleposts->post_status}}</span>
                        @endif
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">{{date("M d, Y h:i A", strtotime($singleposts->post_date))}}</span>
                      </td>
                      <td class="align-middle text-center">
                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                          Edit
                        </a>
                      </td>
                      <td class="align-middle text-center">
                          <a href="javascript:;" class="badge badge-sm bg-gradient-danger">Delete</a>
                      </td>
                    </tr>
                         @endforeach
                    @else
                    <h2>No Post Found</h2>
                @endif
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>


    @endsection