<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recetas Deliciosas</title>
    <!-- Bootstrap CSS -->
    <link href="{{asset("css/bootstrap.min.css")}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset("css/all.min.css")}}">
    <style>
        .hero-section {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://images.unsplash.com/photo-1546069901-ba9599a7e63c?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
            background-size: cover;
            background-position: center;
            height: 60vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-align: center;
            margin-bottom: 3rem;
        }
        
        .recipe-card {
            transition: transform 0.3s ease;
            margin-bottom: 2rem;
            height: 100%;
        }
        
        .recipe-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        
        .recipe-card img {
            height: 200px;
            object-fit: cover;
        }
        
        .category-img {
            width: 100px;
            height: 100px;
            object-fit: cover;
        }
        
        .auth-buttons .btn {
            margin-left: 0.5rem;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold text-success" href="#">
                <i class="fas fa-utensils me-2"></i>Recetas Deliciosas
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Recetas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Categorías</a>
                    </li>
                </ul>
                
                <div class="auth-buttons d-flex">
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/dashboard') }}" class="btn btn-outline-success">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="btn btn-outline-success">Login</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="btn btn-success">Registro</a>
                            @endif
                        @endauth
                    @endif
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="hero-section">
        <div class="container">
            <h1 class="display-4 fw-bold mb-4">Descubre el placer de cocinar</h1>
            <p class="lead mb-5">Más de 1,000 recetas caseras para todos los gustos</p>
            <form class="d-flex justify-content-center">
                <div class="input-group" style="max-width: 500px;">
                    <input type="text" class="form-control form-control-lg" placeholder="Buscar recetas...">
                    <button class="btn btn-success" type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Featured Recipes -->
    <div class="container mb-5">
        <h2 class="text-center mb-5">Recetas Destacadas</h2>
        <div class="row g-4">
            <!-- Recipe 1 -->
            <div class="col-md-4">
                <div class="card recipe-card h-100">
                    <img src="https://images.unsplash.com/photo-1512621776951-a57141f2eefd?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" class="card-img-top" alt="Ensalada Fresca">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Ensalada César</h5>
                        <p class="card-text">Fresca ensalada con pollo a la parrilla, croutones y aderezo casero.</p>
                        <div class="mt-auto d-flex justify-content-between align-items-center">
                            <small class="text-muted"><i class="fas fa-clock me-1"></i> 15 min</small>
                            <a href="#" class="btn btn-sm btn-success">Ver Receta</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Recipe 2 -->
            <div class="col-md-4">
                <div class="card recipe-card h-100">
                    <img src="https://images.unsplash.com/photo-1473093295043-cdd812d0e601?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" class="card-img-top" alt="Pasta">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Pasta Alfredo</h5>
                        <p class="card-text">Crema suave con champiñones y tocino sobre fettuccine al dente.</p>
                        <div class="mt-auto d-flex justify-content-between align-items-center">
                            <small class="text-muted"><i class="fas fa-clock me-1"></i> 25 min</small>
                            <a href="#" class="btn btn-sm btn-success">Ver Receta</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Recipe 3 -->
            <div class="col-md-4">
                <div class="card recipe-card h-100">
                    <img src="https://images.unsplash.com/photo-1484723091739-30a097e8f929?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" class="card-img-top" alt="Panqueques">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Panqueques con Frutas</h5>
                        <p class="card-text">Esponjosos panqueques con frutas frescas de temporada y miel.</p>
                        <div class="mt-auto d-flex justify-content-between align-items-center">
                            <small class="text-muted"><i class="fas fa-clock me-1"></i> 20 min</small>
                            <a href="#" class="btn btn-sm btn-success">Ver Receta</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-5">
            <a href="#" class="btn btn-success btn-lg px-4">
                <i class="fas fa-book me-2"></i>Ver todas las recetas
            </a>
        </div>
    </div>

    <!-- Categories Section -->
    <div class="bg-light py-5">
        <div class="container">
            <h2 class="text-center mb-5">Explora por Categorías</h2>
            <div class="row g-4">
                <div class="col-6 col-md-3 text-center">
                    <div class="p-4 bg-white rounded shadow-sm h-100">
                        <img src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80" 
                             class="img-fluid rounded-circle mb-3 category-img" alt="Desayunos">
                        <h5>Desayunos</h5>
                        <p class="text-muted">25 recetas</p>
                    </div>
                </div>
                
                <div class="col-6 col-md-3 text-center">
                    <div class="p-4 bg-white rounded shadow-sm h-100">
                        <img src="https://images.unsplash.com/photo-1512621776951-a57141f2eefd?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80" 
                             class="img-fluid rounded-circle mb-3 category-img" alt="Ensaladas">
                        <h5>Ensaladas</h5>
                        <p class="text-muted">18 recetas</p>
                    </div>
                </div>
                
                <div class="col-6 col-md-3 text-center">
                    <div class="p-4 bg-white rounded shadow-sm h-100">
                        <img src="https://images.unsplash.com/photo-1473093295043-cdd812d0e601?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80" 
                             class="img-fluid rounded-circle mb-3 category-img" alt="Pastas">
                        <h5>Pastas</h5>
                        <p class="text-muted">32 recetas</p>
                    </div>
                </div>
                
                <div class="col-6 col-md-3 text-center">
                    <div class="p-4 bg-white rounded shadow-sm h-100">
                        <img src="https://images.unsplash.com/photo-1484723091739-30a097e8f929?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80" 
                             class="img-fluid rounded-circle mb-3 category-img" alt="Postres">
                        <h5>Postres</h5>
                        <p class="text-muted">28 recetas</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white py-4 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5><i class="fas fa-utensils me-2"></i>Recetas Deliciosas</h5>
                    <p class="text-muted">Descubre y comparte las mejores recetas caseras.</p>
                </div>
                <div class="col-md-3">
                    <h5>Enlaces</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white text-decoration-none">Inicio</a></li>
                        <li><a href="#" class="text-white text-decoration-none">Recetas</a></li>
                        <li><a href="#" class="text-white text-decoration-none">Categorías</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5>Contacto</h5>
                    <ul class="list-unstyled">
                        <li><i class="fas fa-envelope me-2"></i> contacto@recetas.com</li>
                        <li><i class="fas fa-phone me-2"></i> +1 234 567 890</li>
                    </ul>
                </div>
            </div>
            <hr class="my-4 bg-secondary">
            <div class="text-center">
                <p class="mb-0">&copy; 2023 Recetas Deliciosas. Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="{{asset("js/bootstrap.bundle.min.js")}}"></script>
</body>
</html>