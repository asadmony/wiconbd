<div>
    @if (session()->has('message'))
        <div class="alert alert-success">{{ session()->get('message') }}</div>
    @elseif (session()->has('error'))
    <div class="alert alert-success">{{ session()->get('error') }}</div>
    @endif
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul class="list-unstyled">
            @foreach ($errors->all() as $error)
                <li><i class="pe-7s-shield"> </i> {{ $error }}</li>
            @endforeach
        </ul>
    </div>
	@endif
</div>
