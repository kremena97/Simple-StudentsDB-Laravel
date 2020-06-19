    @extends('layouts.app')

@section('content')
<div class="container">
  <h1>Учебни центрове</h1>
  <br >
  <div class="row mb-5">
    <div class="col-sm-6">
      <h4>Център по Инофрматика и технически науки</h4>
      <img alt="Център по информатика и технически науки" class="img-fluid" src="https://www.bfu.bg/uploads/pages/computers.jpg">
      <div class="list-group">
      @foreach($specialities as $s)
      @if($s->faculty =='Център по информатика и технически науки')
      <a href="{{route('students', $s->id)}}" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
          {{ $s->name }}
                <span class="badge badge-info">{{$s->degree}}</span>
          </a>
          @endif
      @endforeach
</div>
    </div>
    <div class="col-sm-6">
      <h4>Център по икономически и управленски науки</h4>
      <img alt="Център по икономически и управленски науки" class="img-fluid" src="https://www.bfu.bg/uploads/pages/public2.jpg">
      <div class="list-group">
      @foreach($specialities as $s)
      @if($s->faculty =='Център по икономически и управленски науки')
      <a href="{{route('students', $s->id)}}" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
          {{ $s->name }}
                <span class="badge badge-info">{{$s->degree}}</span>
          </a>
          @endif
      @endforeach
</div>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-6">
      <h4>Център по юридически науки</h4>
      <img alt="Център по юридически науки" class="img-fluid" src="https://www.bfu.bg/uploads/pages/lawbooks1.jpg">
      <div class="list-group">
      @foreach($specialities as $s)
      @if($s->faculty =='Център по юридически науки')
      <a href="{{route('students', $s->id)}}" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
          {{ $s->name }}
                <span class="badge badge-info">{{$s->degree}}</span>
          </a>
          @endif
      @endforeach
</div>
    </div>
    <div class="col-sm-6">
      <h4>Център по хуманитарни науки</h4>
      <img alt="Център по хуманитарни науки" class="img-fluid" src="https://www.bfu.bg/uploads/pages/public1.jpg">
      <div class="list-group">
      @foreach($specialities as $s)
      @if($s->faculty =='Център по хуманитарни науки')
      <a href="{{route('students', $s->id)}}" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
          {{ $s->name }}
                <span class="badge badge-info">{{$s->degree}}</span>
          </a>
          @endif
      @endforeach
</div>
    </div>
  </div>
</div>

@endsection