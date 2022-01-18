@extends('layouts.admin')


@section('contents')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header card-header-primary">
                <h4 class="card-title">Add Tenant</h4>
                <p class="card-category"></p>
              </div>
              <div class="card-body">
                <form action="{{url('save-tenant')}}" method="POST">
                  @csrf
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="bmd-label-floating">Tenant Name</label>
                        <input type="text" class="form-control" name="tenant_name">
                      </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Tenant Description</label>
                          <div class="form-group">
                            <textarea class="form-control" rows="2" name="tenant_desc"></textarea>
                          </div>
                        </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="bmd-label-floating">Meta Title </label>
                        <input type="text" class="form-control" name="meta_tenant_title">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="bmd-label-floating">Meta Keywards</label>
                        <div class="form-group">
                          <textarea class="form-control" rows="2" name="meta_tenant_keywords"></textarea>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-1">
                      <div class="form-group">
                        <label class="">Status</label>
                        <input type="checkbox" class="form-control" name="tenant_status">
                      </div>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary pull-right">Save Tenant</button>
                  <div class="clearfix"></div>
                </form>
              </div>
            </div>
          </div>
    </div>

@endsection