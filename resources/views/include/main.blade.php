<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

        <link href="/css/css.css" rel="stylesheet">
        <link href="/css/treeview.css" rel="stylesheet">
    </head>

    <body>
        <header id="top">
            <nav>
                <div class="container">
                    <div class="row">
                        <div class="col-4">
                            <ul class="nav">
                                <li class="nav-link">
                                    <a href="/">Strona główna</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-8">
                            <ul class="nav">
                                <li class="nav-link">
                                    <a href="/materialy">Materiały</a>
                                </li>                                
                                <li class="nav-link">
                                    <a href="/grupy_materialow">Grupy materiałów</a>
                                </li>
                                <li class="nav-link">
                                    <a href="/jednostki_miary">Jednostki miary</a>
                                </li> 
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>           
        </header>

        <main>
            @yield('content')
        </main>

        <footer class="page-footer">
            <div class="container"></div>
        </footer>
        
        <script src="/js/treeview.js"></script>
        <script src="/js/groups.js"></script>
        <script src="/js/units.js"></script>
        <script src="/js/materials.js"></script>
    </body>
</html>