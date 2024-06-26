@props(['popular', 'genres', 'trending', 'comedies', 'action', 'western', 'horror', 'thriller', 'animation'])

<div class="container my-6 mx-auto space-y-8 px-4">
    <!-- Popular Movies -->
    <x-movies :movies='$popular'>
        <x-slot:category> Popular na Netflix &rsaquo; </x-slot:category>
    </x-movies>
    <!-- End Popular Movies -->

    <!-- Trending Movies -->
    <x-movies :movies='$trending'>
        <x-slot:category> Tendências na Netflix &rsaquo; </x-slot:category>
    </x-movies>
    <!-- End Trending Movies -->

    <!-- Comedies Movies -->
    <x-movies :movies='$comedies'>
        <x-slot:category> Comedia &rsaquo; </x-slot:category>
    </x-movies>
    <!-- End Comedies Movies -->

    <!-- Action Movies -->
    <x-movies :movies='$action'>
        <x-slot:category> Ação &rsaquo; </x-slot:category>
    </x-movies>
    <!-- End Action Movies -->

    <!-- Western Movies -->
    <x-movies :movies='$western'>
        <x-slot:category> Ocidental &rsaquo; </x-slot:category>
    </x-movies>
    <!-- End Wester Movies -->

    <!-- Horror Movies -->
    <x-movies :movies=$horror>
        <x-slot:category> Terror &rsaquo; </x-slot:category>
    </x-movies>
    <!-- End Horror Movies -->

    <!-- Animation Movies -->
    <x-movies :movies='$animation'>
        <x-slot:category> Animação &rsaquo; </x-slot:category>
    </x-movies>
    <!-- End Animation Movies -->
</div>
