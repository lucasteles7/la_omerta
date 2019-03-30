<ul class="sidenav" id="mobile-demo">
    <li><a href="{{route('orders.index')}}">Novo Pedido</a></li>
    <li><a href="{{route('customer_payment.index')}}">Caixa</a></li>
    <li><a href="{{route('customers.index')}}">Clientes</a></li>
    <li><a href="{{route('customers.index')}}">Faturamento</a></li>
    @if(Auth::check())
        <li><a href="{{ route('logout') }}"
               onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{csrf_field()}}
            </form>
        </li>
    @else
        <li><a href="{{route('login')}}">Login</a></li>
        <li><a href="{{route('register')}}">Registrar</a></li>
    @endif
</ul>