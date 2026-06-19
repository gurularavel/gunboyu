@php
    $user = Modules\User\Entities\User::find($param[0]);
@endphp

{!!  Form::open(['route' => ['update-user-password', $param[0]], 'method' => 'post']) !!}

    <div class="modal-body">
        @if($user)
            <div class="form-group">
                <label class="col-form-label"><b>{{ __('name') }}</b></label>
                <input value="{{ $user->first_name }} {{ $user->last_name }} ({{ $user->email }})" type="text" class="form-control" disabled>
            </div>
        @endif

        <div class="form-group">
            <label for="user_password" class="col-form-label"><b>{{ __('new_password') }}</b></label>
            <input id="user_password" name="password" type="password" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="user_password_confirmation" class="col-form-label"><b>{{ __('confirm_password') }}</b></label>
            <input id="user_password_confirmation" name="password_confirmation" type="password" class="form-control"
                   data-parsley-equalto="#user_password" required>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="m-r-10 fas fa-window-close"></i>{{ __('close') }}</button>
        <button type="submit" class="btn btn-primary"><i class="m-r-10 mdi mdi-content-save-all"></i>{{ __('save') }}</button>
    </div>

{{ Form::close() }}
