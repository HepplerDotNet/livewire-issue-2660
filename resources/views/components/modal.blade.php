<div {{ $attributes->merge(['class' => 'modal hidden']) }}">
    <div>
    <div>{{ $slot }}</div>
        <div class="mt-auto">
            {{ $buttons }}
        </div>
    </div>
</div>