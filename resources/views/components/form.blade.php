<form {{ $attributes }}>
    <legend>{{$legend}}</legend>
    {{ csrf_field() }}
    <!-- Validation Errors -->
    <x-validation-errors :errors="$errors" />
   {!! $slot !!}
</form>