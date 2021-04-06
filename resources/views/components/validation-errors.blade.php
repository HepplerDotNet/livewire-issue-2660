@props(['errors'])
@if ($errors->any())
    <div {{ $attributes->merge(['class' => 'alert-box']) }}>
        <i class="fa fa-exclamation-triangle"></i>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
