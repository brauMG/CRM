<div class="panel panel-default">
    <div class="panel-heading">Información Básica</div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-3">
                <div class="form-group {{ $errors->has('first_name') ? 'has-error' : ''}}">
                    <label for="first_name" class="control-label">{{ 'Primer Nombre' }}</label>
                    <input class="form-control" name="first_name" type="text" id="first_name" value="{{ isset($contact->first_name) ? $contact->first_name : ''}}" >
                    {!! $errors->first('first_name', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group {{ $errors->has('middle_name') ? 'has-error' : ''}}">
                    <label for="middle_name" class="control-label">{{ 'Segundo Nombre' }}</label>
                    <input class="form-control" name="middle_name" type="text" id="middle_name" value="{{ isset($contact->middle_name) ? $contact->middle_name : ''}}" >
                    {!! $errors->first('middle_name', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group {{ $errors->has('last_name') ? 'has-error' : ''}}">
                    <label for="last_name" class="control-label">{{ 'Apellidos' }}</label>
                    <input class="form-control" name="last_name" type="text" id="last_name" value="{{ isset($contact->last_name) ? $contact->last_name : ''}}" >
                    {!! $errors->first('last_name', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group {{ $errors->has('status') ? 'has-error' : ''}}">
                    <label for="status" class="control-label">{{ 'Status' }}</label>
                    <select name="status" id="status" class="form-control">
                        @foreach($statuses as $status)
                            <option value="{{ $status->id }}" {{ isset($contact->status) && $contact->status == $status->id ? 'selected':'' }}>{{ $status->name }}</option>
                        @endforeach
                    </select>
                    {!! $errors->first('status', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group {{ $errors->has('referral_source') ? 'has-error' : ''}}">
                    <label for="referral_source" class="control-label">{{ 'Fuente de Referencia' }}</label>
                    <input class="form-control" name="referral_source" type="text" id="referral_source" value="{{ isset($contact->referral_source) ? $contact->referral_source : ''}}" >
                    {!! $errors->first('referral_source', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group {{ $errors->has('position_title') ? 'has-error' : ''}}">
                    <label for="position_title" class="control-label">{{ 'Titulo de Posición' }}</label>
                    <input class="form-control" name="position_title" type="text" id="position_title" value="{{ isset($contact->position_title) ? $contact->position_title : ''}}" >
                    {!! $errors->first('position_title', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group {{ $errors->has('company') ? 'has-error' : ''}}">
                    <label for="company" class="control-label">{{ 'Compañia' }}</label>
                    <input class="form-control" name="company" type="text" id="company" value="{{ isset($contact->company) ? $contact->company : ''}}" >
                    {!! $errors->first('company', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group {{ $errors->has('industry') ? 'has-error' : ''}}">
                    <label for="inductry" class="control-label">{{ 'Industría' }}</label>
                    <input class="form-control" name="industry" type="text" id="industry" value="{{ isset($contact->industry) ? $contact->industry : ''}}" >
                    {!! $errors->first('industry', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="col-md-4">
                <h4>Correos Electrónicos</h4>
                <div class="row">
                    <div class="col-md-10">
                        <div id="emails-wrapper">
                            @if(!isset($contact->emails))
                                <div class="row" style="margin-top: 5px;">
                                    <div class="col-md-10">
                                        <input type="email" name="email" class="form-control {{ $errors->has('email') ? 'has-error' : ''}}" value="" />
                                        {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
                                    </div>
                                </div>
                            @else
                                @foreach($contact->emails as $email)
                                    <div class="row" style="margin-top: 5px;">
                                        <div class="col-md-10">
                                            <input type="email" name="email" class="form-control {{ $errors->has('email') ? 'has-error' : ''}}" value="{{ $email->email }}" />
                                            {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <h4>Teléfonos</h4>
                <div class="row">
                    <div class="col-md-10">
                        <div id="phones-wrapper">
                            @if(!isset($contact->phones))
                                <div class="row" style="margin-top: 5px;">
                                    <div class="col-md-10">
                                        <input type="number" name="phone" class="form-control {{ $errors->has('phone') ? 'has-error' : ''}}" value="" />
                                        {!! $errors->first('phone', '<p class="help-block">:message</p>') !!}
                                    </div>
                                </div>
                            @else
                                @foreach($contact->phones as $phone)
                                    <div class="row" style="margin-top: 5px;">
                                        <div class="col-md-10">
                                            <input type="number" name="phone" class="form-control {{ $errors->has('phone') ? 'has-error' : ''}}" value="{{ $phone->phone }}" />
                                            {!! $errors->first('phone', '<p class="help-block">:message</p>') !!}
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="panel panel-default">
    <div class="panel-heading">Información Del Proyecto</div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-3">
                <div class="form-group {{ $errors->has('project_type') ? 'has-error' : ''}}">
                    <label for="project_type" class="control-label">{{ 'Tipo de Proyecto' }}</label>
                    <input class="form-control" name="project_type" type="text" id="project_type" value="{{ isset($contact->project_type) ? $contact->project_type : ''}}" >
                    {!! $errors->first('project_type', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group {{ $errors->has('project_description') ? 'has-error' : ''}}">
                    <label for="project_description" class="control-label">{{ 'Descripción del Proyecto' }}</label>
                    <input class="form-control" name="project_description" type="text" id="project_description" value="{{ isset($contact->project_description) ? $contact->project_description : ''}}" >
                    {!! $errors->first('project_description', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group {{ $errors->has('budget') ? 'has-error' : ''}}">
                    <label for="budget" class="control-label">{{ 'Presupuesto' }}</label>
                    <input class="form-control" name="budget" type="text" id="budget" value="{{ isset($contact->budget) ? $contact->budget : ''}}" >
                    {!! $errors->first('budget', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
        </div>
    </div>
</div>
<div class="panel panel-default">
    <div class="panel-heading">Información de Dirección</div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-2">
                <div class="form-group {{ $errors->has('address_country') ? 'has-error' : ''}}">
                    <label for="address_country" class="control-label">{{ 'País' }}</label>
                    <input class="form-control" name="address_country" type="text" id="address_country" value="{{ isset($contact->address_country) ? $contact->address_country : ''}}" >
                    {!! $errors->first('address_country', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group {{ $errors->has('address_state') ? 'has-error' : ''}}">
                    <label for="address_state" class="control-label">{{ 'Estado' }}</label>
                    <input class="form-control" name="address_state" type="text" id="address_state" value="{{ isset($contact->address_state) ? $contact->address_state : ''}}" >
                    {!! $errors->first('address_state', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group {{ $errors->has('address_city') ? 'has-error' : ''}}">
                    <label for="address_city" class="control-label">{{ 'Ciudad' }}</label>
                    <input class="form-control" name="address_city" type="text" id="address_city" value="{{ isset($contact->address_city) ? $contact->address_city : ''}}" >
                    {!! $errors->first('address_city', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group {{ $errors->has('address_street') ? 'has-error' : ''}}">
                    <label for="address_street" class="control-label">{{ 'Calle' }}</label>
                    <input class="form-control" name="address_street" type="text" id="address_street" value="{{ isset($contact->address_street) ? $contact->address_street : ''}}" >
                    {!! $errors->first('address_street', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group {{ $errors->has('address_zipcode') ? 'has-error' : ''}}">
                    <label for="address_zipcode" class="control-label">{{ 'Código Postal' }}</label>
                    <input class="form-control" name="address_zipcode" type="text" id="address_zipcode" value="{{ isset($contact->address_zipcode) ? $contact->address_zipcode : ''}}" >
                    {!! $errors->first('address_zipcode', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
        </div>
    </div>
</div>
<div class="panel panel-default">
    <div class="panel-heading">Otra Información</div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-3">
                <div class="form-group {{ $errors->has('website') ? 'has-error' : ''}}">
                    <label for="website" class="control-label">{{ 'Sitio Web' }}</label>
                    <input class="form-control" name="website" type="text" id="website" value="{{ isset($contact->website) ? $contact->website : ''}}" >
                    {!! $errors->first('website', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group {{ $errors->has('linkedin') ? 'has-error' : ''}}">
                    <label for="linkedin" class="control-label">{{ 'Linkedin' }}</label>
                    <input class="form-control" name="linkedin" type="text" id="linkedin" value="{{ isset($contact->linkedin) ? $contact->linkedin : ''}}" >
                    {!! $errors->first('linkedin', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
                    <label for="description" class="control-label">{{ 'Descripción' }}</label>
                    <textarea class="form-control" name="description" type="text" id="description">{{ isset($contact->description) ? $contact->description : ''}}</textarea>
                    {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
        </div>
    </div>
</div>

@if(count($campaigns) != 0)
    <div class="form-group">
        <label for="campaign" class="control-label">{{ 'Campaña' }} <i class="fa fa-link"></i></label>
        <select name="campaign" id="campaign" class="form-control">
            @foreach($campaigns as $campaign)
                @if($selected_campaign == $campaign->id)
                    <option value="{{ $campaign->id }}" selected>{{ $campaign->name }}</option>
                @else
                    <option value="{{ $campaign->id }}">{{ $campaign->name }}</option>
                @endif
            @endforeach
        </select>
    </div>
@endif

<div class="form-group">
    <label for="documents" class="control-label">{{ 'Documentos' }} <i class="fa fa-link"></i></label>
    <br>
    <select class="selectpicker pull-left" name="documents[]" type="text" id="link" data-live-search="true" data-style="btn-primary" data-width="fit" multiple>
        @foreach($documents as $document)
            <option value="{{ $document->id }}" {{ isset($selected_documents) && in_array($document->id, $selected_documents)?"selected":"" }}>{{ $document->name }}</option>
        @endforeach
    </select>
    <br>
</div>

@if(\Auth::user()->is_admin == 1)
    <div class="form-group {{ $errors->has('assigned_user_id') ? 'has-error' : ''}}">
        <label for="assigned_user_id" class="control-label">{{ 'Usuario Asignado' }}</label>
        <select name="assigned_user_id" id="assigned_user_id" class="form-control">
            @foreach($users as $user)
                @if($user->id == 2)
                @else
                <option value="{{ $user->id }}" {{ isset($contact->assigned_user_id) && $contact->assigned_user_id == $user->id?"selected":"" }}>{{ $user->name }}</option>
                @endif
            @endforeach
        </select>

        {!! $errors->first('assigned_user_id', '<p class="help-block">:message</p>') !!}
    </div>
@endif


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Actualizar' : 'Crear' }}">
</div>
