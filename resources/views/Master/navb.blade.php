    <!-- App Bottom Menu -->
    <style type="text/css">
        .item{
            color: black;
        }
    </style>
    <div class="appBottomMenu">
        <a href="{{ url('/home') }}" class="item">
            <div class="col">
                <ion-icon name="home-outline"></ion-icon>
                HOME
            </div>
        </a>
        {{-- <a href="{{ url('/') }}" class="item">
            <div class="col">
                <ion-icon name="newspaper-outline"></ion-icon>
                PENDAFTARAN
            </div>
        </a>
        <a href="{{ url('/FAQ') }}" class="item">
            <div class="col">
                <ion-icon name="information-circle-outline"></ion-icon>
                KENDALA
            </div>
        </a>
        <a href="{{ url('/admin/profile') }}" class="item">
            <div class="col">
                <ion-icon name="settings-outline"></ion-icon>
                AKUN
            </div>
        </a>

        @if (empty(Auth::user()))
            <a href="{{ url('/admin') }}" class="item" onclick="udipi()"> 
                <div class="col">
                    <ion-icon name="log-out-outline"></ion-icon>
                    Login
                </div>
            </a>
        @else
                <a href="#" class="item" onclick="udipi()"> 
            <div class="col">
                <ion-icon name="log-out-outline"></ion-icon>
                KELUAR
            </div>
        </a> 
        @endif
        --}}
        <form action="{{url('/admin/logout')}}" method="POST">
            @csrf
            <button type="submit" class="" id="masss" style="display: none;"></button>
        </form>

        <script type="text/javascript">
            function udipi() {
                document.getElementById('masss').click()   
            }
        </script>
    </div>
    <!-- * App Bottom Menu -->