<div class="row">
    <h1>{!! ucwords($input['subject']) !!}</h1>
    <strong>Sender: {!! ucwords($input['email']) !!}</strong>
    <p>
        {!! $input['message'] !!}
    </p>
</div>