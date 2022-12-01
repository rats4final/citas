<nav>
    <div class="flex justify-end">
        <ul>

            @auth
            <li>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <input type="submit" value="Log Out">
                </form>
            </li>
            @endauth
        </ul>
    </div>
</nav>
