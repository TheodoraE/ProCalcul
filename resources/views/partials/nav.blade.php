<nav class="navbar navbar-expand-lg">
    <div class="container-fluid d-flex flex-column">
        <div class="row justify-content">
            <a class="navbar-brand" href="/"><span>PROTCALCUL</span></a>
        </div>
        <div class="row">
            @php $currentSegment = Request::segment(1); @endphp
            <ul class="nav">
                 <li class="nav-item">
                    <a class="nav-link text-center {{ $currentSegment === null ? 'active' : '' }}" href="/"><span>CALCULER</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-center {{ $currentSegment === 'repertory' ? 'active' : '' }}" href="/repertory"><span>RÉPERTOIRE</span></a>
                </li>
               <li class="nav-item">
                    @auth
                        <a class="nav-link text-center" href="{{ route('logout') }}"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <span>SE DÉCONNECTER</span>
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    @else
                        <a class="nav-link text-center {{ $currentSegment === 'login' ? 'active' : '' }}" href="/login"><span>SE CONNECTER / S'INSCRIRE</span></a>
                    @endauth
               </li>
            </ul>
        </div>
    </div>
</nav>
