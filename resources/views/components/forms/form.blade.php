<form {{ $attributes(["class" => "max-w-4xl mx-auto space-y-2 md:space-y-6 p-8 bg-surface-1 rounded-xl md:border-t-6 border-t-4 border-grape", "method" => "GET"]) }}>
    @if ($attributes->get('method', 'GET') !== 'GET')
        @csrf
        @method($attributes->get('method'))
    @endif
    
    {{ $slot }}
</form>
