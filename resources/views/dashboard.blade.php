@extends('layouts.admin.master')

@section('title')
    Dashboard
@endsection

@section('content')
<div class="page-title">
    <div class="row">
      <div class="col-sm-6">
          <h4 class="mb-0">Dashboard</h4>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right">
          <li class="breadcrumb-item"><a href="{{route('dashboard')}}" class="default-color">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </div>
    </div>
</div>

  <!-- widgets -->


  <div class="calendar-main mb-30">
    <div class="row">
      <div class="col-lg-3">
        <div class="row">
            <div class="col-12 sm-mb-30">
                <a href="#" data-toggle="modal" data-target="#add-category" class="btn btn-primary btn-block m-t-20">
                        <i class="fa fa-plus pr-2"></i> Create New
                    </a>
                <div id="external-events" class="m-t-20">
                    <br>
                    <p class="text-muted">Drag and drop your event or click in the calendar</p>
                    <div class="external-event bg-success fc-event">
                        <i class="fa fa-circle mr-2 vertical-middle"></i>New Theme Release
                    </div>
                    <div class="external-event bg-info fc-event">
                        <i class="fa fa-circle mr-2 vertical-middle"></i>My Event
                    </div>
                    <div class="external-event bg-warning fc-event">
                        <i class="fa fa-circle mr-2 vertical-middle"></i>Meet manager
                    </div>
                    <div class="external-event bg-danger fc-event">
                        <i class="fa fa-circle mr-2 vertical-middle"></i>Create New theme
                    </div>
                </div>
            </div>
        </div>
    </div>
      <div class="col-lg-9">
          <div id="calendar"></div>
           <div class="modal" tabindex="-1" role="dialog" id="event-modal">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title">Add New Event</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span></button>
                      </div>
                      <div class="modal-body p-20"></div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-success save-event">Create event</button>
                          <button type="button" class="btn btn-danger delete-event" data-dismiss="modal">Delete</button>
                      </div>
                  </div>
              </div>
          </div>
          <!-- Modal Add Category -->
          <div class="modal" tabindex="-1" role="dialog" id="add-category">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title">Add a category</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      </div>
                      <div class="modal-body p-20">
                          <form>
                              <div class="row">
                                  <div class="col-md-6">
                                      <label class="control-label">Category Name</label>
                                      <input class="form-control form-white" placeholder="Enter name" type="text" name="category-name" />
                                  </div>
                                  <div class="col-md-6">
                                      <label class="control-label">Choose Category Color</label>
                                      <select class="form-control form-white" data-placeholder="Choose a color..." name="category-color">
                                          <option value="success">Success</option>
                                          <option value="danger">Danger</option>
                                          <option value="info">Info</option>
                                          <option value="primary">Primary</option>
                                          <option value="warning">Warning</option>
                                      </select>
                                  </div>
                              </div>
                          </form>
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-success save-category" data-dismiss="modal">Save</button>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </div>
  </div>

@endsection





