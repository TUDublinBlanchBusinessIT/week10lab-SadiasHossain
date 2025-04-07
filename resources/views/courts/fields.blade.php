<!-- Surface Field -->
<div class="form-group col-sm-6">
    {!! Form::label('surface', 'Surface:') !!}
    {!! Form::text('surface', null, ['class' => 'form-control']) !!}
</div>

<!-- Floodlights Field -->
<div class="form-group col-sm-6">
    {!! Form::label('floodlights', 'Floodlights:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('floodlights', false) !!}
        {!! Form::checkbox('floodlights', 1, null) !!} $VALUE$
    </label>
</div>

<!-- Indoor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('indoor', 'Indoor:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('indoor', false) !!}
        {!! Form::checkbox('indoor', 1, null) !!} $VALUE$
    </label>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('courts.index') !!}" class="btn btn-default">Cancel</a>
</div>
