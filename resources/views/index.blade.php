@extends('layouts.admin') 

@section('content')
  <div class="content">
    <div class="left-text">
      <h1>UNIDAD EDUCATIVA DON BOSCO</h1>
      <p>Donde el conocimiento se encuentra con la determinación.</p>
    </div>
  </div>
@endsection

<style>
  .content {
    position: relative;
    height: 100vh;
    background: #fff0ff;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    padding: 20px;
  }

  .left-text {
    animation: fadeIn 1.5s ease-in-out;
  }

  h1 {
    font-size: 5rem; /* Tamaño de fuente más grande */
    color: #0d47a1; /* Azul oscuro */
    margin-bottom: 20px;
    font-weight: 900; /* Peso de la fuente más grueso */
    text-transform: uppercase;
    letter-spacing: 5px; /* Más separación entre letras */
    text-shadow: 3px 3px 5px rgba(0, 0, 0, 0.3); /* Sombra para mayor contraste */
    animation: slideInTop 1s ease-out;
    transition: transform 0.3s ease-in-out, color 0.3s ease-in-out;
  }

  h1:hover {
    transform: scale(1.15); /* Escala un poco más */
    color: #ffeb3b; /* Amarillo */
    text-shadow: 5px 5px 10px rgba(0, 0, 0, 0.5); /* Aumenta la sombra al hacer hover */
  }

  p {
    font-size: 2rem; /* Aumento en el tamaño del texto */
    color: #0d47a1; /* Azul oscuro */
    font-style: italic;
    animation: slideInBottom 1s ease-out;
    transition: transform 0.3s ease-in-out, color 0.3s ease-in-out;
  }

  p:hover {
    transform: scale(1.05);
    color: #ffeb3b; /* Amarillo */
  }

  @keyframes fadeIn {
    from {
      opacity: 0;
    }
    to {
      opacity: 1;
    }
  }

  @keyframes slideInTop {
    from {
      transform: translateY(-30px);
      opacity: 0;
    }
    to {
      transform: translateY(0);
      opacity: 1;
    }
  }

  @keyframes slideInBottom {
    from {
      transform: translateY(30px);
      opacity: 0;
    }
    to {
      transform: translateY(0);
      opacity: 1;
    }
  }
</style>
