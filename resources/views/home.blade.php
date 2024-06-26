<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css')}}">

    <title>Kaleb</title>
</head>
<body>
    <section class="convite">
        <div class="content">
            <img src="{{ asset('assets/images/leao.png') }}" class="leao" alt="leão">
            <img src="{{ asset('assets/images/nome.png') }}" class="nome" alt="">
            <div class="info">
                <div class="info-div data">
                    <span>24</span>
                    de novembro
                    <button class="botao-calendario">
                        <img src="{{ asset('assets/images/add-to-calendar.svg')}}" alt="adicionar ao calendário">
                    </button>
                </div>
                <div class="info-div hora">
                    <span>18</span>
                    horas
                </div>
                <div class="info-div local">
                    minha casa
                    <button class="botao-mapa">
                        <img src="{{ asset('assets/images/ver-no-mapa.svg')}}" alt="ver no mapa">
                    </button>
                </div>
            </div>
        </div>
        <a href="#ver-mais" class="ver-mais">
            ver mais
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M20.2959 9.79592L12.7959 17.2959C12.6914 17.4008 12.5672 17.484 12.4305 17.5408C12.2937 17.5976 12.1471 17.6268 11.9991 17.6268C11.851 17.6268 11.7044 17.5976 11.5676 17.5408C11.4309 17.484 11.3067 17.4008 11.2022 17.2959L3.70218 9.79592C3.49083 9.58457 3.3721 9.29793 3.3721 8.99904C3.3721 8.70016 3.49083 8.41351 3.70218 8.20217C3.91352 7.99082 4.20017 7.87209 4.49905 7.87209C4.79794 7.87209 5.08458 7.99082 5.29593 8.20217L12 14.9062L18.7041 8.20123C18.9154 7.98989 19.202 7.87115 19.5009 7.87115C19.7998 7.87115 20.0865 7.98989 20.2978 8.20123C20.5091 8.41258 20.6279 8.69922 20.6279 8.99811C20.6279 9.29699 20.5091 9.58364 20.2978 9.79498L20.2959 9.79592Z" fill="#A2B36B"/>
            </svg>

        </a>

    </section>
    <section id="ver-mais">
        @if(session('success'))
            <div style="color: green;">
                {{ session('success') }}
            </div>
        @endif
        <form action="{{ route('guests.store') }}" method="POST">
            @csrf
            <div>
                <input type="radio" name="presenca" value="1" checked id="vou-presenca">
                <input type="radio" name="presenca" value="0" id="nao-presenca">
            </div>
            <div>
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" required>
            </div>
            <div>
                <label for="qnt_acompanhantes">Quantidade de Acompanhantes:</label>
                <input type="number" id="qnt_acompanhantes" name="qnt_acompanhantes" required>
            </div>
            <div>
                <label for="alergias">Alergias:</label>
                <input type="text" id="alergias" name="alergias">
            </div>
            <button type="submit">Enviar</button>
        </form>
    </section>

</body>
</html>
