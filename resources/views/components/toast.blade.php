<div {{ $attributes->merge(['class' => 'toast']) }}>
    <div>{{$title}}</div>
    <div>{{$slot}}</div>
</div>