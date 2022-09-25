<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('build/assets/app.5380b351.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
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
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Сохранить</button>
                        <button type="button" class="btn btn-primary">Отмена</button>
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
                            <p class="card-text">В нашу задачу не входит обосновать какое-либо из существующих или предложить новое понимание этого термина. В аспекте настоящего исследования более существенно попытаться определить его отношение к некоторым другим базовым понятиям, в частности к понятию языка. Здесь можно выделить два подхода.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="{{ asset('images/card_bg.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">В нашу задачу не входит обосновать какое-либо из существующих или предложить новое понимание этого термина. В аспекте настоящего исследования более существенно попытаться определить его отношение к некоторым другим базовым понятиям, в частности к понятию языка. Здесь можно выделить два подхода. Первый: язык мыслится как некоторая первичная сущность, которая получает материальное инобытие, овеществляясь в ТЕКСТЕ (См. определение М.-А.-К.Холидея: "Текст — это язык в действии" — Прим. Лотмана). При всем разнообразии аспектов и подходов здесь выделяется общая презумция: язык предшествует ТЕКСТУ, ТЕКСТ порождается языком… Даже в тех случаях, когда подчеркивается, что именно ТЕКСТ составляет данную лингвисту реальность и что любое изучение языка отправляется от ТЕКСТА, речь идет об эвристической, а не онтологической последовательности: поскольку в само понятие ТЕКСТА включена осмысленность, ТЕКСТ по своей природе подразумевает определенную закодированность. Следовательно, наличие КОДА полагается как нечто предшествующее.
                                С этой презумпцией связано представление о языке как о замкнутой системе, которая способна порождать бесконечно умножающееся открытое множество ТЕКСТОВ. Таково, например, определение Емслевым текста как всего, что было, есть и будет сказано на данном языке. Из этого вытекает, что язык мыслится как панхронная и замкнутая система, а ТЕКСТ — как постоянно наращиваемая по временной оси.
                                Второй подход наиболее употребителен в литературоведческих работах или культуроведческих исследованиях, посвященных общей типологии ТЕКСТОВ… С точки зрения этого второго подхода, ТЕКСТ мыслится как отграниченное, замкнутое в себе конечное образование. Одним из основных его признаков является наличие специфической имманентной структуры, что влечет за собой высокую значимость категории границы ("начала", "конца", "рампы", "рамы", "пьедестала", "кулис" и т.п.). Если в первом случае существенным признаком ТЕКСТА является его протяженность в естественном времени, то во втором ТЕКСТ или тяготеет к панхронности (например, иконические тексты живописи и скульптуры), или же образуют свое особое внутреннее время, отношение которого к естественному способно порождать разнообразные смысловые эффекты. Меняется соотношение ТЕКСТА и КОДА (языка). Осознавая некоторый объект как ТЕКСТ, мы тем самым предполагаем, что он каким-то образом закодирован, ПРЕЗУМЦИЯ кодированности входит в понятие ТЕКСТА. Однако сам этот КОД нам неизвестен — его еще предстоит реконструировать, основываясь на данном нам тексте…
                                В общей системе культуры ТЕКСТЫ выполняют по крайней мере две основные функции: адекватную передачу значений и порождение новых смыслов. Первая функция выполняется наилучшим образом при наиболее полном совпадении КОДОВ говорящего и слушающего и, следовательно, при максимальной однозначности ТЕКСТА. Идеальным предельным механизмом для такой для такой операции будет искусственный язык или ТЕКСТ на искусственном языке. Тяготение к стандартизации, порождающее искусственные языки, и стремление к самоописанию, создающее метаязыковые конструкции, не являются внешними по отношению к языковому и культурному механизму. Ни одна культура не может функционировать без МЕТАТЕКСТОВ и ТЕКСТОВ на искусственных языках. Поскольку именно эта сторона ТЕКСТА наиболее легко моделируется с помощью имеющихся в нашем распоряжении средств, этот аспект ТЕКСТА оказался наиболее заметным. Он сделался объектом изучения, порою отождествляясь с ТЕКСТОМ как таковым и заслоняя другие аспекты.
                                Вторая функция ТЕКСТА — порождение новых смыслов. В этом аспекте ТЕКСТ перестает быть пассивным звеном передачи некоторой константной информации между входом (отправитель) и выходом (получатель). Если в первом случае разница между сообщением на входе и на выходе информационной цепи возможна лишь в результате помех в канале связи и должна быть отнесена за счет технических несовершенств системы, то во втором она составляет самое сущность работы ТЕКСТА как "мыслящего устройства". То, что с первой точки зрения — дефект, со второй — норма, и наоборот. Естественно, что механизм ТЕКСТА должен быть организован в этом случае иначе… "ТЕКСТ в ТЕКСТЕ" — это специфическое риторическое построение, при котором различие в закодированности разных частей ТЕКСТА делается выявленным фактором авторского построения и читательского восприятия ТЕКСТА. Переключение из одной системы семиотического осознания в другую на каком-то внутреннем структурном рубеже составляет в этом случае основу генерирования смысла. Такое построение, прежде всего, обостряет момент игры в ТЕКСТЕ: с позиции другого способа кодирования, ТЕКСТ приобретает черты повышенной условности, подчеркивается его игровой характер: иронический, пародийный, театрализованный смысл и т.д. Одновременно подчеркивается роль границ ТЕКСТА, как внешних, отделяющих его от НЕ-ТЕКСТА, так и внутренних, разделяющих участки различной кодированности. Актуальность границ подчеркивается именно их подвижностью, тем, что при смене установок на тот или иной КОД меняется и структура границ. Так, на фоне уже сложившейся традиции, включающей пьедестал или раму картины в область НЕ-ТЕКСТА, искусство эпохи барокко вводит их в текст (например, превращая пьедестал в скалу и сюжетно связывая ее а единую композицию с фигурой). Игровой момент обостряется не только тем, что эти элементы в одной перспективе оказываются включенными в ТЕКСТ, а в другой — выключенными из него, но и тем, что в обоих случаях мера условности их иная, чем та, которая присуща основному ТЕКСТУ: когда фигуры скульптуры барокко взбираются или соскальзывают с пьедестала или в живописи вылезают из рам, этим подчеркивается, а не стирается тот факт, что одни из них принадлежат вещественной, а другие — художественной реальности. Та же самая игра зрительскими ощущениями разного рода реальности происходит, когда театральное действие сходит со сцены и переносится в реально-бытовое пространство зрительного зала… Риторическое соединение "вещей" и "знаков вещей" (коллаж) в ЕДИНОМ ТЕКСТОВОМ ЦЕЛОМ порождает двойной эффект, подчеркивая одновременно и условность условного и его безусловную подлинность…</p>
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
</html>
