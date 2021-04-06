<script>
    /* Livewire Access */
        document.addEventListener('livewire:load', function () {
         window.component = @this
        });
        @if (session()->has('message'))
        let flash = {title:'{{session("message")['title']}}',message:'{{session("message")['message']}}' ,type:'{{session("message")['type']}}'};
        @endif
</script>