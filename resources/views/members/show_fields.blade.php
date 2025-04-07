<!-- Firstname Field -->
<div class="form-group">
    {!! Form::label('firstname', 'Firstname:') !!}
    <p>{!! $member->firstname !!}</p>
</div>

<!-- Surname Field -->
<div class="form-group">
    {!! Form::label('surname', 'Surname:') !!}
    <p>{!! $member->surname !!}</p>
</div>

<!-- Membertype Field -->
<div class="form-group">
    {!! Form::label('membertype', 'Membertype:') !!}
    <p>{!! $member->membertype !!}</p>
</div>

<!-- Dateofbirth Field -->
<div class="form-group">
    {!! Form::label('dateofbirth', 'Dateofbirth:') !!}
    <p>{!! $member->dateofbirth !!}</p>
</div>

