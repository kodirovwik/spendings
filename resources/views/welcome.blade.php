<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('build/assets/app.5380b351.css') }}">
    <script src = "{{ asset('build/assets/app.024077bb.js') }}"></script>

    <title>Document</title>
</head>
<body>
<img alt="header" class="header" src="{{ asset('images/Header.png')}}">
    <div class="container">
        <div class="filters">

        </div>
        <div class="buttons">
            <button id="new_spending" type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">Новая трата</button>
            <button id="new_spending_type" type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal1">Новая категория трат</button>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Добавить новую трату</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body modal-body-group">
                        <div class="my-input-group">
                            <label>Введите сумму:</label>
                            <input class="amount" type="number">
                        </div>
                        <div class="my-input-group">
                            <label>Введите название:</label>
                            <input type="text">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Добавить новую категорию трат</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div>
                            <label>Введите название:</label>
                            <input type="text">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary">Сохранить</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Отмена</button>
                    </div>
                </div>
            </div>
        </div>
            <div class="row row-cols-1 row-cols-md-4  g-4">
                <div class="col">
                    <div id="card1" class="card">
                        <img src="{{ asset('images/card_bg.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="{{ asset('images/card_bg.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="{{ asset('images/card_bg.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="{{ asset('images/card_bg.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div id="card1" class="card">
                        <img src="{{ asset('images/card_bg.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div id="card1" class="card">
                        <img src="{{ asset('images/card_bg.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                </div>
            </div>
    </div>
</body>
<footer>

</footer>
<style>
    .header {
        width: 100%;
    }
    .filters {
        height: 100px;
        border: 1px solid green;
        margin-bottom: 30px;
    }
    .buttons {
        display: flex;
        justify-content: flex-end;
        margin-bottom: 80px;
    }
    #new_spending {
        margin-right: 30px;
    }
    body {
        /*background: gray;*/
    }
    .card {
        background: #809456;
        margin-bottom: 100px;
        width: 250px;
    }
    #card1 {
        background: #7076AA;
    }
    footer {
        height: 200px;
        border: 1px solid green;
    }
    .modal-body {
        margin: auto 60px;
        display: flex;
        justify-content: space-around;
    }
    .modal-body-group {
        display: flex;
        align-items: center;
        flex-direction: column;
    }
    .my-input-group {
        width: 100%;
        display: flex;
        justify-content: space-between;
    }
    .amount {
        margin-bottom: 10px;
    }
    input {
        margin-left: 5px;
    }
    .col {
        display: flex;
        justify-content: space-around;
    }
    .btn {
        background: green;
        border: none;
    }
</style>
</html>
