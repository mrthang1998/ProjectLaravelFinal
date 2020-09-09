<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('css/sb-admin-2.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
    <title>@yield('title')</title>
    @yield('css')

        
</head>

<body>
    <div id="wrapper">
        <ul class="navbar-nav bg-gradient-primary sidebar">
            <a href="#" class="sidebar-brand d-flex align-items-center justify-content-center">
                <div class="sidebar-brand-text mx3">
                    LARAVEL ADMIN
                </div>
            </a>
            <hr class="sidebar-divider">
            <li class="nav-item">
                <a href="{{ route('products.index') }}" class="nav-link">
                    <i class="fa fa-table"></i>
                    <span>Products</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('brands.index') }}" class="nav-link">
                    <i class="fa fa-table"></i>
                    <span>Brands</span>
                </a>
            </li>
        </ul>
        <div id="content" class="">
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                <form class="form-inline my-2 my-lg-0" action="/action_page.php">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search">
                    <button class="btn btn-success" type="submit">Search</button>
                </form>
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}  <span class="caret"></span>
                </a>
            </nav>
            <div class="container-fluid">
            
                @yield('content')
            </div>
                
        </div>
        
    </div>
    
    
    
</body>
</html>