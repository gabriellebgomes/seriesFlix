<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seriesflix</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700;800;900&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="{{ asset('images/logo-seriesFlix.png') }}">
    <style>
    *{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial, Helvetica, sans-serif;
}
body{
    background-image: url("/images/back-fundo.jpg");
    background-size:cover;
    background-position:center;
    height:100vh;
}
.content{
    width:100%;
    height:100vh;
    background:rgba(0,0,0,0.7);
}

header{
    display:flex;
    justify-content:space-between;
    align-items:center;
    padding:25px 150px;
}

#logo{
    color: #e50914;
    font-size: 3rem;
    font-weight: 900;
    font-family: 'Poppins', sans-serif;
    margin: 0;
}
select{
    background:black;
    color:white;
    border:1px solid #777;
    padding:10px 20px;
    border-radius:4px;
}
main{
    height:80%;
    display:flex;
    flex-direction:column;
    justify-content:center;
    align-items:center;
    color:white;
    text-align:center;
}
main h1{
    font-size:64px;
    max-width:700px;
    font-weight:900;
}
main h3{
    margin-top:20px;
    font-size:24px;
}
main p{
    margin-top:30px;
    font-size:18px;
}
.btn-login{
    display: inline-flex;
    align-items: center;
    justify-content: center;

    width: 80px;
    height: 40px;
    background-color: #e50914;
    color: #fff;
    border: none;
    border-radius: 5px; 
    text-decoration: none;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s;
}
.btn-login:hover{
    background-color: #c11119;
}
</style>
</head>
<body>
    <div class="content">
        <header>
            <h1 id="logo">SERIESFLIX</h1>
            <div>
                <select>
                    <option>Português</option>
                    <option>English</option>
                </select>
            <a href="{{ route('login') }}" class="btn-login">Entrar</a>
            </div>
        </header>
        <main>
            <h1>Filmes, séries e muito mais, sem limites</h1>
            <h3>A partir de R$ 20,90. Cancele quando quiser.</h3>
            <p>
                Quer assistir? Entre ou crie sua conta.
            </p>
            <div class="email-box">
                <br><a href="{{ route('login') }}" class="btn-login">Entrar</a>
                <a href="{{ route('register') }}" class="btn-login">Cadastrar</a>
            </div>
            
        </main>

    </div>

</body>
</html>
