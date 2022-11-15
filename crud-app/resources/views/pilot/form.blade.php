<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Name') }}
            {{ Form::text('Name', $pilot->Name, ['class' => 'form-control' . ($errors->has('Name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('Name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Team') }}
            {{ Form::text('Team', $pilot->Team, ['class' => 'form-control' . ($errors->has('Team') ? ' is-invalid' : ''), 'placeholder' => 'Team']) }}
            {!! $errors->first('Team', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Number') }}
            {{ Form::text('Number', $pilot->Number, ['class' => 'form-control' . ($errors->has('Number') ? ' is-invalid' : ''), 'placeholder' => 'Number']) }}
            {!! $errors->first('Number', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Teammate') }}
            {{ Form::text('Teammate', $pilot->Teammate, ['class' => 'form-control' . ($errors->has('Teammate') ? ' is-invalid' : ''), 'placeholder' => 'Teammate']) }}
            {!! $errors->first('Teammate', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('TD') }}
            {{ Form::text('TD', $pilot->TD, ['class' => 'form-control' . ($errors->has('TD') ? ' is-invalid' : ''), 'placeholder' => 'Td']) }}
            {!! $errors->first('TD', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>