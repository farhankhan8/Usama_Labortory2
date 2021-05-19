
@extends('layouts.admin')
@section('content')
  <div class="card">
      <div class="card-header">
        Create New Test
      </div>
        <div class="card-body">
          <form method="POST" action="{{ route("availale-tests-store") }}" enctype="multipart/form-data">
          @csrf   
          <div class="form-row">
              <div class="col-md-4 mb-3">
                <label for="validationCustom01">Test Category</label>
                <select class="form-control select2 {{ $errors->has('category_id') ? 'is-invalid' : '' }}" name="category_id" id="category_id" required>
                    @foreach($categoryNames as $id => $categoryName)
                        <option value="{{ $id }}" {{ old('category_id') == $id ? 'selected' : '' }}>{{ $categoryName }}</option>
                    @endforeach
                  </select>     
              </div>

          <div class="col-md-4 mb-3">
          <div class="form-group">
                <label class="" for="name">Test Name</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', '') }}" required>
                @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
                <span class="help-block"></span>
            </div>
            <div class="valid-feedback">
               Looks good!
            </div>
          </div>


          <div class="col-md-4 mb-3">
              <label for="validationCustomUsername">Test Fee</label>
           <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupPrepend">Rs</span>
              </div>
              <input class="form-control {{ $errors->has('testFee') ? 'is-invalid' : '' }}" type="number" name="testFee" id="testFee" value="{{ old('testFee', '') }}" step="1"required>
            </div>
          </div>
        </div>
        <div class="form-row">
          <div class="col-md-2 mb-3">
            <label for="validationCustom03">First Normal Range</label>
            <input class="form-control {{ $errors->has('initialNormalValue') ? 'is-invalid' : '' }}" type="number" name="initialNormalValue" id="initialNormalValue" value="{{ old('initialNormalValue', '') }}" step="1"required>
          </div>
          <div class="col-md-2 mb-3">
            <label for="validationCustom04">Final Normal Range</label>
            <input class="form-control {{ $errors->has('finalNormalValue') ? 'is-invalid' : '' }}" type="number" name="finalNormalValue" id="finalNormalValue" value="{{ old('finalNormalValue', '') }}" step="1"required>
          </div>
          <div class="col-md-2 mb-3">
            <label for="validationCustom05">First Critical Value</label>
            <input class="form-control {{ $errors->has('firstCriticalValue') ? 'is-invalid' : '' }}" type="number" name="firstCriticalValue" id="firstCriticalValue" value="{{ old('firstCriticalValue', '') }}" step="1"required>
          </div>
          <div class="col-md-2 mb-3">
            <label for="validationCustom05">Final Critical Value</label>
            <input class="form-control {{ $errors->has('finalCriticalValue') ? 'is-invalid' : '' }}" type="number" name="finalCriticalValue" id="finalCriticalValue" value="{{ old('finalCriticalValue', '') }}" step="1"required>
          </div>
          <div class="col-md-4 mb-3">
            <label for="validationCustom05">Test Units</label>
            <input class="form-control {{ $errors->has('units') ? 'is-invalid' : '' }}" type="text" name="units" id="units" value="{{ old('name', '') }}" required>
          </div>
  </div>
  <button class="btn btn-primary" type="submit">Submit</button>
</form>
@endsection