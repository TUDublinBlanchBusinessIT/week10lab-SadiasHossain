<table class="table table-responsive" id="members-table">
    <thead>
        <th>Firstname</th>
        <th>Surname</th>
        <th>Membertype</th>
        <th>Dateofbirth</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($members as $member)
        <tr>
            <td>{!! $member->firstname !!}</td>
            <td>{!! $member->surname !!}</td>
            <td>{!! $member->membertype !!}</td>
            <td>{!! $member->dateofbirth !!}</td>
            <td>
                {!! Form::open(['route' => ['members.destroy', $member->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('members.show', [$member->id]) !!}" class='btn btn-default btn-xs'><i class="far fa-eye"></i></i></a>
                    <a href="{!! route('members.edit', [$member->id]) !!}" class='btn btn-default btn-xs'><i class="far fa-edit"></i></i></a>
                    {!! Form::button('<i class="far fa-trash-alt"></i></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>