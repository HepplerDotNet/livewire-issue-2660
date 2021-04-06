@props(['disabled' => false])
<div class="flex items-baseline">
<input {{ $disabled ? 'disabled' : '' }} {!! $attributes !!} type="password" class="flex flex-1">
<span class="bg-light border-b border-lighter flex p-3">

    <i class="fa fa-eye text-lighter" id="showPassword"></i>

</span>
</div>
