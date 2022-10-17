<div class="bg-indigo-500 text-white">
    <div class="flex justify-between px-20 py-7">
      <div class=''>
        <span class='uppercase font-black'>VideoStore</span>
      </div>
      <div class="space-x-4">
        @guest()
        <a href="{{ route('login') }}">Connexion</a>
        <a href="{{ route('register') }}">Inscription</a>
        @endguest
        @auth()
        <div class="flex space-x-4"></div>
            <div class=""></div>
              <a href="{{ route('dashboard') }}">Dashboard</a>
            </div>
            <div class="">
              <form method="POST" action={{ route('logout') }}>
                  @csrf
                  <button type='submit' class='border-solid border-2 border-gray-100 rounded p-2 text-white'>Deconnexion</button>
              </form>
            </div>
        </div>
        @endauth
      </div>
    </div>
</div>
