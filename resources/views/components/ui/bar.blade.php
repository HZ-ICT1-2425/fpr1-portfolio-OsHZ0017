<nav>
    <x-ui.nav :request="$request" route="welcome">Home page</x-ui.nav>
    @auth
        <x-ui.nav :request="$request" route="dashboard">Dashboard</x-ui.nav>
    @endauth
</nav>
