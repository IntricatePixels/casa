@php $mimeo_current_lang = get_field('site_id', 'option'); @endphp
@include('sections.header')

<main id="main" class="main">
    @yield('content')
</main>

@hasSection('sidebar')
    <aside class="sidebar">
        @yield('sidebar')
    </aside>
@endif
@include('sections.lpfooterde')

