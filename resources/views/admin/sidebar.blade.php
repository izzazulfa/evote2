<div class="col-md-3">
    <div class="panel panel-default panel-flush">
        <div class="panel-heading">
            Sidebar
        </div>

        <div class="panel-body">
            <ul class="nav" role="tablist">
                <li role="presentation">
                    <a href="{{ url('/') }}">Home</a>
                </li>

                <li role="presentation">
                    <a href="{{ url('/hasiljok') }}">Hasil Paslon 01</a>
                </li>
                <li role="presentation">
                    <a href="{{ url('/hasilprab') }}">Hasil Paslon 02</a>
                </li>

                <li role="presentation">
                    <a href="{{ url('/user') }}">Manajemen Pengguna</a>
                </li>

                <li role="presentation">
                <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                        </li>
            </ul>
        </div>
    </div>
</div>
