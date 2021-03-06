@extends('layouts.admin')

@section('title')
Edit User - Circle of Influence
@endsection

@section('contents')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header card-header-primary">
                <h4 class="card-title">Edit User Details</h4>
                <p class="card-category"></p>
              </div>
              <div class="card-body">
                <form action="{{url('update-user/'.$user->id)}}" method="POST">
                  @csrf
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="bmd-label-floating">First Name</label>
                        <input type="text" class="form-control" name="first_name" value="{{$user->first_name}}">
                      </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Last Name</label>
                          <input type="text" class="form-control" name="last_name" value="{{$user->last_name}}">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Username</label>
                          <input type="text" class="form-control" name="username" value="{{$user->username}}">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Email</label>
                          <input type="email" class="form-control" name="email" value="{{$user->email}}">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Mobile</label>
                          <input type="text" class="form-control" name="mobile" value="{{$user->mobile}}">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Address</label>
                          <input type="text" class="form-control" name="address" value="{{$user->address}}">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Tenant</label>
                            <select id="inputState" class="form-control" name="tenant_id">
                                @foreach($tenants as $tenant)
                                    <option value="{{ $tenant->id }}">
                                        {{ $tenant->tenant_name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="">Role (Click on checkbox to give user the administrative rights)</label>
                            <input type="checkbox" class="form-control" name="role_as" {{$user->role_as == "1" ? 'checked':''}}>
                        </div>
                      </div>
                  </div>
                  <button type="submit" class="btn btn-primary pull-right">Update</button>
                  <div class="clearfix"></div>
                </form>
              </div>
            </div>
          </div>
    </div>

@endsection