@extends('layouts.property')
@section('content')
<div class="container">
    <form class="mt-3" action="{{ route('property.store') }}" method="POST">
        @csrf
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="pName">Property Name</label>
            <input type="text" class="form-control" id="pName" name="pName" placeholder="Property name">
          </div>
          <div class="form-group col-md-6">
            <label for="pDescription">Property Description</label>
            <textarea class="form-control" id="pDescription" name="pDescription">
            </textarea>
          </div>
        </div>
        <div class="form-group form-row">
            <select name="status" class="custom-select col-md-6">
                <option selected>Status</option>
                <option value="occupied">Occupied</option>
                <option value="free">Free</option>
              </select>
              <div class="form-group col-md-6">
                <input type="text" class="form-control" name="owner" placeholder="Owner">
              </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
              <label for="phone_no">Phone number</label>
              <input type="text" class="form-control" id="phone_no" name="phone_number" placeholder="Phone number">
            </div>
            <div class="form-group col-md-6">
                <label for="pAddress">Address</label>
                <input type="text" class="form-control" id="pAddress" name="address" placeholder="Property address">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
              <label for="price">Price</label>
              <input type="text" class="form-control" id="price" name="price" placeholder="Price">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Add Property</button>
      </form>
</div>
@endsection
