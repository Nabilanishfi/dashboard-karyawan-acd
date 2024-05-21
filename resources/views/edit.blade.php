@extends('layouts.auth')

@section('title', 'Edit Karyawan')
    
@section('container')
<form action="{{ route('admin.store') }}" method="POST">
    @csrf
    <div class="my-3 p-3 bg-body rounded shadow-sm">
      <li class="list-group-item bg-primary-subtle p-2 mb-4 text-center">
        <h5>Edit Karyawan</h5>
      </li>
    </div>
    <div class="input-group mt-3">
        <label class="input-group-text" for="unit" style="width:115px; ">Unit</label>
        <select class="form-select @error('unit_id') is-invalid @enderror" id="unit" name="unit_id">
          <option hidden>Pilih Unit...</option>
          @foreach ($units as $unit)
              <option value="{{ $unit->id }}">{{ $unit->name }}</option>
          @endforeach
        </select>
    </div>
</form>
@endsection