<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <title>ProductLapse</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="row ">
        <div class="col-md-12 bg-light">
            <h1 class="text-center">Starting Time 2.40 and Ending Time 3.45</h1>
        </div>
        <div class="row p-3">
            <div class="col-md-2 mt-3 bg-light" style="height: 100vh">
               <p class="p-3">
                A highly motivated individual wishing to use my analytical and education skills and my primary aim is to work as
                a dynamic and potential executive in any renowned organization that affords me the opportunity for career
                advancement. To secure a well-deserved position in Web Development utilizing my skills in JavaScript with
                Frameworks, Tailwind CSS, PHP/Laravel & MySQL to create responsive dynamic user-friendly web applications
                and to contribute to the success of a potential and growing company.
               </p>
            </div>
            <div class="col-md-10">
                <div class="row">
                    @foreach ($posts as $item)
                    <div class="col-md-4 mt-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12 h-30 rounded">
                                        <img src="{{ asset('img.png') }}" class="w-100 h-100" alt="">
                                    </div>
                                    <div class="col-md-12 mt-2">
                                        <p class="bg-light rounded px-2" >{{ strlen($item->title) > 35 ? substr($item->title, 0, 34) . '...' : $item->title  }}</p>
                                        <p class="bg-light rounded px-2" >{{ strlen($item->description) > 70 ? substr($item->description, 0, 70) . '...' : $item->description  }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="container p-2">
                    <div class="row card pg-info mt-3">
                        <div class="col-md-12 card-body bg-light">
                            There is my Github Repo: <a href="https://github.com/mdparvej45" target="_blank">Link</a> <span class="text-secondary">Note: Maximam Client Project Private. </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>