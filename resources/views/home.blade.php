@extends('layouts.app')

@section('content')
         <!-- Tab Area Start Here -->
         <section>
                <div class="col-md-12 col-sm-12 mt-3">
                    <div class="tab-list">
                          <ul class="nav our-item">
                            <li>
                              <a href="#our-tab-content1" data-toggle="tab"  class="active">Notices</a>
                            </li>
                            <li>
                              <a href="#our-tab-content2" data-toggle="tab" >Events</a>
                            </li>
                            <li>
                              <a href="#our-tab-content3" data-toggle="tab">Attendence</a>
                            </li>
                            <li>
                              <a href="#our-tab-content4" data-toggle="tab">Profile</a>
                            </li>
                          </ul>
                      </div> 
                      <!-- tab-list -->
                      <div class="tab-content">
                            <div class="tab-pane fade show active" id="our-tab-content1">
                                <div class="tab_desk_1">
                                <div class="container-fluid">
                                    <div class="iq-card-body">
                                        <div class="table-responsive">
                                            <table id="user-list-table" class="table table-striped table-bordered mt-4" role="grid" aria-describedby="user-list-page-info">
                                            <thead>
                                                <tr>
                                                    <th>SI</th>
                                                    <th>Notice Board</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                $users = App\Models\NoticeBoard::orderBy('id','ASC')->get();
                                                @endphp
                                                @foreach ($users as $item)
                                                <tr>
                                                    <td>{{ $item->id }}</td>
                                                    <td>{{ $item->notice_board }}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                            </table>
                                        </div>
                                        <div class="row justify-content-between mt-3">
                                            <div id="user-list-page-info" class="col-md-6">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            </div> <!-- tab-pane active -->
                            <div class="tab-pane fade" id="our-tab-content2">
                                <div class="container-fluid">
                                    <div class="iq-card-body">
                                        <div class="table-responsive">
                                            <table id="user-list-table" class="table table-striped table-bordered mt-4" role="grid" aria-describedby="user-list-page-info">
                                            <thead>
                                                <tr>
                                                    <th>Sl</th>
                                                    <th>Events</th>
                                                    <th>Events Time</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                $users = App\Models\Event::orderBy('id','ASC')->get();
                                                @endphp
                                                @foreach ($users as $item)
                                                <tr>
                                                    <td>{{ $item->id }}</td>
                                                    <td>{{ $item->events }}</td>
                                                    <td>{{ $item->event_time }}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                            </table>
                                        </div>
                                        <div class="row justify-content-between mt-3">
                                            <div id="user-list-page-info" class="col-md-6">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- tab-pane active -->
                            <div class="tab-pane fade" data-toggle="collapse" id="our-tab-content3">
                                <div class="container-fluid">
                                    <div class="iq-card-body">
                                        <div class="table-responsive">
                                            <table id="user-list-table" class="table table-striped table-bordered mt-4" role="grid" aria-describedby="user-list-page-info">
                                            <thead>
                                                <tr>
                                                    <th>Sl</th>
                                                    <th>Click here for <span>Attendance</span></th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                {{-- @foreach ($users as $item) --}}
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td><input type="checkbox"></td>
                                                </tr>
                                                {{-- @endforeach --}}
                                            </tbody>
                                            </table>
                                        </div>
                                        <div class="row justify-content-between mt-3">
                                            <div id="user-list-page-info" class="col-md-6">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="our-tab-content4">
                                <h3>Profile</h3>
                            </div> 
                    </div> <!-- tab-content -->
                </div>
        </section>
        <!-- Tabe Area End Here -->
@endsection
