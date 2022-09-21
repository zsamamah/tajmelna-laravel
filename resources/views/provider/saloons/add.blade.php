@extends('layouts.provider')

@section('content')
<div class="card">
  <div class="card-header">
    <h4>Add New Saloon</h4>
  </div>
  <div class=" row card-body">
    <div class="col-md-4">
      <form method="POST" action="">
        @csrf
        <div class="form-group">
          <label for="name">Saloon Name</label>
          <input type="text" id="name" class="btn ms-2 text-start border d-block" name="name" aria-describedby="emailHelp" placeholder="Beauty Care" required>
        </div>
        <div class="form-group">
          <label for="phone">Phone</label>
          <input type="tel" name="phone" class="btn ms-2 text-start border d-block" id="phone" placeholder="+962789652314" required>
        </div>
        <div class="form-group">
          <label for="location">Location</label>
          <input type="text" name="location" class="btn ms-2 text-start border d-block" id="location" placeholder="Zarqa, Batrawi" required>
        </div>
        <div class="form-group">
          <label for="profile_image">Profile Image (Link)</label>
          <input type="text" name="profile_image" class="btn ms-2 text-start border d-block" id="profile_image" placeholder="http://----" required>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
          <label for="image1">Image 1</label>
          <input type="text" id="image 1" class="btn ms-2 text-start border d-block" name="image 1" aria-describedby="emailHelp" placeholder="http://----" required>
        </div>
        <div class="form-group">
          <label for="image2">Image 2</label>
          <input type="text" name="image2" class="btn ms-2 text-start border d-block" id="image2" placeholder="http://----">
        </div>
        <div class="form-group">
          <label for="image3">Image 3</label>
          <input type="text" name="image3" class="btn ms-2 text-start border d-block" id="image3" placeholder="http://----">
        </div>
        <div class="form-group">
          <label for="image4">Image 4</label>
          <input type="text" name="image4" class="btn ms-2 text-start border d-block" id="image4" placeholder="http://----">
        </div>
      </div>
      <div class="col-md-4">
        ** Services Included **
        @foreach ($materials as $item)
          <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="{{$item->id}}" name="material{{$item->id}}" value="{{$item->id}}">
            <label class="custom-control-label" for="{{$item->id}}">{{$item->m_name}}</label>
          </div>
        @endforeach
      </div>
      <div class="col-md-4"></div>
      <div class="col-md-4">
        <button type="submit" class="btn btn-info">Submit</button>
        </form>
      </div>
      <div class="col-md-4"></div>
  </div>
</div>
@endsection