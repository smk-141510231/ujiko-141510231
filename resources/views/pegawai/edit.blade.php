@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-black panel-primary">
                <div class="panel-heading">EDIT JABATAN</div>

                <div class="panel-body">
                {!! Form::model($pegawai,['method'=>'PATCH', 'route'=>['pegawai.update', $pegawai->id]]) !!}

					<div class="form-group {{ $errors->has('nip') ? ' has-error' : 'pesan' }}">
						{!! Form::label('NIP','NIP :') !!}
						{!!Form::text('nip',null,['class'=>'form-control']) !!}
						@if ($errors->has('nip'))
				                                    <span class="help-block">
				                                        <strong>{{ $errors->first('nip') }}</strong>
				                                    </span>
				                                @endif
					</div>
					<div class="form-group{{ $errors->has('user_id') ? ' has-error' : 'pesan' }}">
						{!! Form::label('User Id','User Id :') !!}
						{!!Form::text('user_id',null,['class'=>'form-control']) !!}
												@if ($errors->has('user_id'))
				                                    <span class="help-block">
				                                        <strong>{{ $errors->first('user_id') }}</strong>
				                                    </span>
				                                @endif
					</div>
					<div class="form-group {{ $errors->has('jabatan_id') ? ' has-error' : 'pesan' }}">
						{!! Form::label('Jabatan Id','Jabatan Id :') !!}
						{!!Form::text('jabatan_id',null,['class'=>'form-control']) !!}
												@if ($errors->has('jabatan_id'))
				                                    <span class="help-block">
				                                        <strong>{{ $errors->first('jabatan_id') }}</strong>
				                                    </span>
				                                @endif
					</div>
					<div class="form-group {{ $errors->has('golongan_id') ? ' has-error' : 'pesan' }}">
						{!! Form::label('Golongan Id','Golongan Id :') !!}
						{!!Form::text('golongan_id',null,['class'=>'form-control']) !!}
												@if ($errors->has('golongan_id'))
				                                    <span class="help-block">
				                                        <strong>{{ $errors->first('golongan_id') }}</strong>
				                                    </span>
				                                @endif
					</div>
					<div class="form-group">
						{!! Form::submit('Save', ['class' => 'btn btn-primary form control']) !!}
						{!! Form::close() !!}
						</div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection