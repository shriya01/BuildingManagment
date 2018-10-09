@extends ('layouts.admin')
@section('content')       
<div class="row">
  <div class="col-lg-12">
    <h3 class="page-header"><i class="fa fa-file-text-o"></i>
    @if(isset($user_maintenance[0]->user_first_name)) {{ ucfirst($user_maintenance[0]->user_first_name) }} @endif @if(isset($user_maintenance[0]->user_last_name)) {{ ucfirst($user_maintenance[0]->user_last_name) }} @endif
   </h3>
    <ol class="breadcrumb">
      <li><i class="fa fa-home"></i><a href="{{ url('/') }}/dashboard"> {{ __('messages.home')}}</a></li>
      <li><i class="fa fa-file-text-o"></i> </li>
    </ol>
  </div>
</div>      
<form role="form" name="Registration_Form" method="post" action="">
  <div class="row"><div class="col-lg-3"></div>
  <div class="col-lg-6">
    <section class="panel">
      <header class="panel-heading">        
      </header>
      <div class="panel-body">
        @if ($errors->any())
        @foreach ($errors->all() as $error)
        <p class="error alert alert-block alert-danger fade in">
          {{ $error }}
        </p>
        @endforeach
        @endif
        <div class="col-lg-12">
          <div class="form-group">
            <label>{{ __('messages.amount')}}</label>
            <input type="text" class="form-control" name="maintenance_amount" placeholder="{{ __('messages.amount')}}" required>
          </div>
          <div class="form-group">            
            <label for="flat_type">Flat Number</label>
            <select name="flat_number" id="flat_number" class="form-control" >
              <option value="" selected="selected">Select Flat Number</option>
              @foreach($users as $key => $row)
              <option value="{{$row->flat_number }}">{{$row->flat_number }}</option>
               @endforeach
            </select>
          </div>
          <div class="form-group">
            <label>{{ __('messages.flat_type')}}</label>
            <input type="text" class="form-control" name="flat_type" placeholder="{{ __('messages.flat_type')}}" required>
          </div>
          <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">           
          <div class="form-group">
            <label>&nbsp;</label>
            <button type="submit" class="btn btn-primary">{{ __('messages.submit')}}</button>
          </div>
        </div>
      </section>
    </div>
  </div>
</form>
@endsection