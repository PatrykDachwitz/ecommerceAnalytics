<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div class="app container-fluid m-0 p-0">
        <nav class="app-nav">
            <p>test</p>
            <p>test</p>
        </nav>
        <div class="app-content m-3">
            @section('report')
                <div class="report">
                    <div class="report-toolbar m-3 rounded-2 p-1 fs-5 shadow-sm">
                        report-toolbar
                    </div>
                    <div class="report-content m-3">
                        <div class="report-analytics analytics me-3 shadow-sm rounded-2">
                            <div class="analytics-column" style="min-width:200px">
                                    <div class="analytics-header p-3 fs-5">
                                        <strong>Test title Column</strong>
                                        <img src="https://cdn-icons-png.flaticon.com/512/2985/2985150.png" loading="lazy" width="23" height="23">
                                    </div>
                                    <div class="analytics-content ps-3 py-1 fs-5">
                                        Poland
                                    </div>
                                    <div class="analytics-content ps-3 py-1 fs-5">
                                        Poland
                                    </div>
                                    <div class="analytics-content ps-3 py-1 fs-5">
                                        Poland
                                    </div>
                                    <div class="analytics-content ps-3 py-1 fs-5">
                                        Poland
                                    </div>
                                    <div class="analytics-content ps-3 py-1 fs-5">
                                        Poland
                                    </div>
                            </div>
                            <div class="analytics-column analytics-column-border ">
                            </div>
                            <div class="analytics-column" style="min-width:200px">
                                    <div class="analytics-header p-3 fs-5">
                                        <strong>Test title Column</strong>
                                        <img src="https://cdn-icons-png.flaticon.com/512/2985/2985150.png" loading="lazy" width="23" height="23">
                                    </div>
                                    <div class="analytics-content ps-3 py-1 fs-5">
                                        Poland
                                    </div>
                                    <div class="analytics-content ps-3 py-1 fs-5">
                                        Poland
                                    </div>
                                    <div class="analytics-content ps-3 py-1 fs-5">
                                        Poland
                                    </div>
                                    <div class="analytics-content ps-3 py-1 fs-5">
                                        Poland
                                    </div>
                                    <div class="analytics-content ps-3 py-1 fs-5">
                                        Poland
                                    </div>
                            </div>
                            <div class="analytics-column" style="min-width:200px">
                                    <div class="analytics-header p-3 fs-5">
                                        <strong>Test title Column</strong>
                                        <img src="https://cdn-icons-png.flaticon.com/512/2985/2985150.png" loading="lazy" width="23" height="23">
                                    </div>
                                    <div class="analytics-content ps-3 py-1 fs-5">
                                        Poland
                                    </div>
                                    <div class="analytics-content ps-3 py-1 fs-5">
                                        Poland
                                    </div>
                                    <div class="analytics-content ps-3 py-1 fs-5">
                                        Poland
                                    </div>
                                    <div class="analytics-content ps-3 py-1 fs-5">
                                        Poland
                                    </div>
                                    <div class="analytics-content ps-3 py-1 fs-5">
                                        Poland
                                    </div>
                            </div>
                            <div class="analytics-column" style="min-width:200px">
                                    <div class="analytics-header p-3 fs-5">
                                        <strong>Test title Column</strong>
                                        <img src="https://cdn-icons-png.flaticon.com/512/2985/2985150.png" loading="lazy" width="23" height="23">
                                    </div>
                                    <div class="analytics-content ps-3 py-1 fs-5">
                                        Poland
                                    </div>
                                    <div class="analytics-content ps-3 py-1 fs-5">
                                        Poland
                                    </div>
                                    <div class="analytics-content ps-3 py-1 fs-5">
                                        Poland
                                    </div>
                                    <div class="analytics-content ps-3 py-1 fs-5">
                                        Poland
                                    </div>
                                    <div class="analytics-content ps-3 py-1 fs-5">
                                        Poland
                                    </div>
                            </div>
                            <div class="analytics-column" style="min-width:200px">
                                    <div class="analytics-header p-3 fs-5">
                                        <strong>Test title Column</strong>
                                        <img src="https://cdn-icons-png.flaticon.com/512/2985/2985150.png" loading="lazy" width="23" height="23">
                                    </div>
                                    <div class="analytics-content ps-3 py-1 fs-5">
                                        Poland
                                    </div>
                                    <div class="analytics-content ps-3 py-1 fs-5">
                                        Poland
                                    </div>
                                    <div class="analytics-content ps-3 py-1 fs-5">
                                        Poland
                                    </div>
                                    <div class="analytics-content ps-3 py-1 fs-5">
                                        Poland
                                    </div>
                                    <div class="analytics-content ps-3 py-1 fs-5">
                                        Poland
                                    </div>
                            </div>
                            <div class="analytics-column" style="min-width:200px">
                                    <div class="analytics-header p-3 fs-5">
                                        <strong>Test title Column</strong>
                                        <img src="https://cdn-icons-png.flaticon.com/512/2985/2985150.png" loading="lazy" width="23" height="23">
                                    </div>
                                    <div class="analytics-content ps-3 py-1 fs-5">
                                        Poland
                                    </div>
                                    <div class="analytics-content ps-3 py-1 fs-5">
                                        Poland
                                    </div>
                                    <div class="analytics-content ps-3 py-1 fs-5">
                                        Poland
                                    </div>
                                    <div class="analytics-content ps-3 py-1 fs-5">
                                        Poland
                                    </div>
                                    <div class="analytics-content ps-3 py-1 fs-5">
                                        Poland
                                    </div>
                            </div>
                            <div class="analytics-column" style="min-width:200px">
                                    <div class="analytics-header p-3 fs-5">
                                        <strong>Test title Column</strong>
                                        <img src="https://cdn-icons-png.flaticon.com/512/2985/2985150.png" loading="lazy" width="23" height="23">
                                    </div>
                                    <div class="analytics-content ps-3 py-1 fs-5">
                                        Poland
                                    </div>
                                    <div class="analytics-content ps-3 py-1 fs-5">
                                        Poland
                                    </div>
                                    <div class="analytics-content ps-3 py-1 fs-5">
                                        Poland
                                    </div>
                                    <div class="analytics-content ps-3 py-1 fs-5">
                                        Poland
                                    </div>
                                    <div class="analytics-content ps-3 py-1 fs-5">
                                        Poland
                                    </div>
                            </div>
                            <div class="analytics-column" style="min-width:200px">
                                    <div class="analytics-header p-3 fs-5">
                                        <strong>Test title Column</strong>
                                        <img src="https://cdn-icons-png.flaticon.com/512/2985/2985150.png" loading="lazy" width="23" height="23">
                                    </div>
                                    <div class="analytics-content ps-3 py-1 fs-5">
                                        Poland
                                    </div>
                                    <div class="analytics-content ps-3 py-1 fs-5">
                                        Poland
                                    </div>
                                    <div class="analytics-content ps-3 py-1 fs-5">
                                        Poland
                                    </div>
                                    <div class="analytics-content ps-3 py-1 fs-5">
                                        Poland
                                    </div>
                                    <div class="analytics-content ps-3 py-1 fs-5">
                                        Poland
                                    </div>
                            </div>
                            <div class="analytics-column" style="min-width:200px">
                                    <div class="analytics-header p-3 fs-5">
                                        <strong>Test title Column</strong>
                                        <img src="https://cdn-icons-png.flaticon.com/512/2985/2985150.png" loading="lazy" width="23" height="23">
                                    </div>
                                    <div class="analytics-content ps-3 py-1 fs-5">
                                        Poland
                                    </div>
                                    <div class="analytics-content ps-3 py-1 fs-5">
                                        Poland
                                    </div>
                                    <div class="analytics-content ps-3 py-1 fs-5">
                                        Poland
                                    </div>
                                    <div class="analytics-content ps-3 py-1 fs-5">
                                        Poland
                                    </div>
                                    <div class="analytics-content ps-3 py-1 fs-5">
                                        Poland
                                    </div>
                            </div>
                            <div class="analytics-column" style="min-width:200px">
                                    <div class="analytics-header p-3 fs-5">
                                        <strong>Test title Column</strong>
                                        <img src="https://cdn-icons-png.flaticon.com/512/2985/2985150.png" loading="lazy" width="23" height="23">
                                    </div>
                                    <div class="analytics-content ps-3 py-1 fs-5">
                                        Poland
                                    </div>
                                    <div class="analytics-content ps-3 py-1 fs-5">
                                        Poland
                                    </div>
                                    <div class="analytics-content ps-3 py-1 fs-5">
                                        Poland
                                    </div>
                                    <div class="analytics-content ps-3 py-1 fs-5">
                                        Poland
                                    </div>
                                    <div class="analytics-content ps-3 py-1 fs-5">
                                        Poland
                                    </div>
                            </div>
                            <div class="analytics-column" style="min-width:200px">
                                    <div class="analytics-header p-3 fs-5">
                                        <strong>Test title Column</strong>
                                        <img src="https://cdn-icons-png.flaticon.com/512/2985/2985150.png" loading="lazy" width="23" height="23">
                                    </div>
                                    <div class="analytics-content ps-3 py-1 fs-5">
                                        Poland
                                    </div>
                                    <div class="analytics-content ps-3 py-1 fs-5">
                                        Poland
                                    </div>
                                    <div class="analytics-content ps-3 py-1 fs-5">
                                        Poland
                                    </div>
                                    <div class="analytics-content ps-3 py-1 fs-5">
                                        Poland
                                    </div>
                                    <div class="analytics-content ps-3 py-1 fs-5">
                                        Poland
                                    </div>
                            </div>
                            <div class="analytics-column" style="min-width:200px">
                                    <div class="analytics-header p-3 fs-5">
                                        <strong>Test title Column</strong>
                                        <img src="https://cdn-icons-png.flaticon.com/512/2985/2985150.png" loading="lazy" width="23" height="23">
                                    </div>
                                    <div class="analytics-content ps-3 py-1 fs-5">
                                        Poland
                                    </div>
                                    <div class="analytics-content ps-3 py-1 fs-5">
                                        Poland
                                    </div>
                                    <div class="analytics-content ps-3 py-1 fs-5">
                                        Poland
                                    </div>
                                    <div class="analytics-content ps-3 py-1 fs-5">
                                        Poland
                                    </div>
                                    <div class="analytics-content ps-3 py-1 fs-5">
                                        Poland
                                    </div>
                            </div>
                            <div class="analytics-column" style="min-width:200px">
                                    <div class="analytics-header p-3 fs-5">
                                        <strong>Test title Column</strong>
                                        <img src="https://cdn-icons-png.flaticon.com/512/2985/2985150.png" loading="lazy" width="23" height="23">
                                    </div>
                                    <div class="analytics-content ps-3 py-1 fs-5">
                                        Poland
                                    </div>
                                    <div class="analytics-content ps-3 py-1 fs-5">
                                        Poland
                                    </div>
                                    <div class="analytics-content ps-3 py-1 fs-5">
                                        Poland
                                    </div>
                                    <div class="analytics-content ps-3 py-1 fs-5">
                                        Poland
                                    </div>
                                    <div class="analytics-content ps-3 py-1 fs-5">
                                        Poland
                                    </div>
                            </div>
                            <div class="analytics-column" style="min-width:200px">
                                    <div class="analytics-header p-3 fs-5">
                                        <strong>Test title Column</strong>
                                        <img src="https://cdn-icons-png.flaticon.com/512/2985/2985150.png" loading="lazy" width="23" height="23">
                                    </div>
                                    <div class="analytics-content ps-3 py-1 fs-5">
                                        Poland
                                    </div>
                                    <div class="analytics-content ps-3 py-1 fs-5">
                                        Poland
                                    </div>
                                    <div class="analytics-content ps-3 py-1 fs-5">
                                        Poland
                                    </div>
                                    <div class="analytics-content ps-3 py-1 fs-5">
                                        Poland
                                    </div>
                                    <div class="analytics-content ps-3 py-1 fs-5">
                                        Poland
                                    </div>
                            </div>
                            <div class="analytics-column" style="min-width:200px">
                                    <div class="analytics-header p-3 fs-5">
                                        <strong>Test title Column</strong>
                                        <img src="https://cdn-icons-png.flaticon.com/512/2985/2985150.png" loading="lazy" width="23" height="23">
                                    </div>
                                    <div class="analytics-content ps-3 py-1 fs-5">
                                        Poland
                                    </div>
                                    <div class="analytics-content ps-3 py-1 fs-5">
                                        Poland
                                    </div>
                                    <div class="analytics-content ps-3 py-1 fs-5">
                                        Poland
                                    </div>
                                    <div class="analytics-content ps-3 py-1 fs-5">
                                        Poland
                                    </div>
                                    <div class="analytics-content ps-3 py-1 fs-5">
                                        Poland
                                    </div>
                            </div>
                            <div class="analytics-column" style="min-width:200px">
                                    <div class="analytics-header p-3 fs-5">
                                        <strong>Test title Column</strong>
                                        <img src="https://cdn-icons-png.flaticon.com/512/2985/2985150.png" loading="lazy" width="23" height="23">
                                    </div>
                                    <div class="analytics-content ps-3 py-1 fs-5">
                                        Poland
                                    </div>
                                    <div class="analytics-content ps-3 py-1 fs-5">
                                        Poland
                                    </div>
                                    <div class="analytics-content ps-3 py-1 fs-5">
                                        Poland
                                    </div>
                                    <div class="analytics-content ps-3 py-1 fs-5">
                                        Poland
                                    </div>
                                    <div class="analytics-content ps-3 py-1 fs-5">
                                        Poland
                                    </div>
                            </div>
                            <div class="analytics-column" style="min-width:200px">
                                    <div class="analytics-header p-3 fs-5">
                                        <strong>Test title Column</strong>
                                        <img src="https://cdn-icons-png.flaticon.com/512/2985/2985150.png" loading="lazy" width="23" height="23">
                                    </div>
                                    <div class="analytics-content ps-3 py-1 fs-5">
                                        Poland
                                    </div>
                                    <div class="analytics-content ps-3 py-1 fs-5">
                                        Poland
                                    </div>
                                    <div class="analytics-content ps-3 py-1 fs-5">
                                        Poland
                                    </div>
                                    <div class="analytics-content ps-3 py-1 fs-5">
                                        Poland
                                    </div>
                                    <div class="analytics-content ps-3 py-1 fs-5">
                                        Poland
                                    </div>
                            </div>
                            <div class="analytics-column" style="min-width:200px">
                                    <div class="analytics-header p-3 fs-5">
                                        <strong>Test title Column</strong>
                                        <img src="https://cdn-icons-png.flaticon.com/512/2985/2985150.png" loading="lazy" width="23" height="23">
                                    </div>
                                    <div class="analytics-content ps-3 py-1 fs-5">
                                        Poland
                                    </div>
                                    <div class="analytics-content ps-3 py-1 fs-5">
                                        Poland
                                    </div>
                                    <div class="analytics-content ps-3 py-1 fs-5">
                                        Poland
                                    </div>
                                    <div class="analytics-content ps-3 py-1 fs-5">
                                        Poland
                                    </div>
                                    <div class="analytics-content ps-3 py-1 fs-5">
                                        Poland
                                    </div>
                            </div>
                            <div class="analytics-column" style="min-width:200px">
                                    <div class="analytics-header p-3 fs-5">
                                        <strong>Test title Column</strong>
                                        <img src="https://cdn-icons-png.flaticon.com/512/2985/2985150.png" loading="lazy" width="23" height="23">
                                    </div>
                                    <div class="analytics-content ps-3 py-1 fs-5">
                                        Poland
                                    </div>
                                    <div class="analytics-content ps-3 py-1 fs-5">
                                        Poland
                                    </div>
                                    <div class="analytics-content ps-3 py-1 fs-5">
                                        Poland
                                    </div>
                                    <div class="analytics-content ps-3 py-1 fs-5">
                                        Poland
                                    </div>
                                    <div class="analytics-content ps-3 py-1 fs-5">
                                        Poland
                                    </div>
                            </div>
                            <div class="analytics-column" style="min-width:200px">
                                    <div class="analytics-header p-3 fs-5">
                                        <strong>Test title Column</strong>
                                        <img src="https://cdn-icons-png.flaticon.com/512/2985/2985150.png" loading="lazy" width="23" height="23">
                                    </div>
                                    <div class="analytics-content ps-3 py-1 fs-5">
                                        Poland
                                    </div>
                                    <div class="analytics-content ps-3 py-1 fs-5">
                                        Poland
                                    </div>
                                    <div class="analytics-content ps-3 py-1 fs-5">
                                        Poland
                                    </div>
                                    <div class="analytics-content ps-3 py-1 fs-5">
                                        Poland
                                    </div>
                                    <div class="analytics-content ps-3 py-1 fs-5">
                                        Poland
                                    </div>
                            </div>
                            <div class="analytics-column" style="min-width:200px">
                                    <div class="analytics-header p-3 fs-5">
                                        <strong>Test title Column</strong>
                                        <img src="https://cdn-icons-png.flaticon.com/512/2985/2985150.png" loading="lazy" width="23" height="23">
                                    </div>
                                    <div class="analytics-content ps-3 py-1 fs-5">
                                        Poland
                                    </div>
                                    <div class="analytics-content ps-3 py-1 fs-5">
                                        Poland
                                    </div>
                                    <div class="analytics-content ps-3 py-1 fs-5">
                                        Poland
                                    </div>
                                    <div class="analytics-content ps-3 py-1 fs-5">
                                        Poland
                                    </div>
                                    <div class="analytics-content ps-3 py-1 fs-5">
                                        Poland
                                    </div>
                            </div>

                        </div>

                        <div class="report-parameters rounded-2 shadow-sm p-3">
                            <h2 class="fs-4 text-center mt-2 mb-4">Dostosuj paramtery</h2>
                            <div class="parameters-search">
                                <div class="col-auto">
                                    <label class="visually-hidden" for="autoSizingInputGroup">Szukaj</label>
                                    <div class="searches-group">
                                        <div class="searches-group-icon">
                                            <img src="https://cdn-icons-png.flaticon.com/512/2989/2989907.png" loading="lazy" width="15" height="15">
                                        </div>
                                        <input type="text" class="searches-group-input" id="autoSizingInputGroup" placeholder="Szukaj">
                                    </div>
                                </div>
                            </div>

                            <div class="parameters-buttons d-flex flex-wrap my-3 justify-content-evenly">
                                <button class="btn btn-primary">
                                    źródła
                                </button>
                                <button class="btn btn-outline-primary mx-1">
                                    Wskazniki
                                </button>
                                <button class="btn btn-outline-primary">
                                    Wskazniki
                                </button>
                            </div>

                            <div class="parameters-section mt-3">
                                <div class="section-title mb-2 d-flex flex-wrap justify-content-start align-items-center">
                                    <h3 class="fs-5 m-0"><strong>title Template 1</strong></h3>
                                    <a class="ms-2">
                                        <img src="https://cdn-icons-png.flaticon.com/512/2985/2985150.png" loading="lazy" width="23" height="23" />
                                    </a>
                                </div>
                                <div class="section-content ps-3">
                                    <div class="form-check d-flex flex-wrap align-items-center">
                                        <input class="form-check-input"  type="checkbox" id="inlineFormCheck">
                                        <label class="form-check-label ms-2 fs-5" for="inlineFormCheck">
                                            Template 1
                                        </label>
                                    </div>

                                    <div class="form-check d-flex flex-wrap align-items-center">
                                        <input class="form-check-input"  type="checkbox" id="inlineFormCheck">
                                        <label class="form-check-label ms-2 fs-5" for="inlineFormCheck">
                                            Template 1
                                        </label>
                                    </div>

                                    <div class="form-check d-flex flex-wrap align-items-center">
                                        <input class="form-check-input"  type="checkbox" id="inlineFormCheck">
                                        <label class="form-check-label ms-2 fs-5" for="inlineFormCheck">
                                            Template 1
                                        </label>
                                    </div>
                                    <div class="form-check d-flex flex-wrap align-items-center">
                                        <input class="form-check-input"  type="checkbox" id="inlineFormCheck">
                                        <label class="form-check-label ms-2 fs-5" for="inlineFormCheck">
                                            Template 1
                                        </label>
                                    </div>
                                    <div class="form-check d-flex flex-wrap align-items-center">
                                        <input class="form-check-input"  type="checkbox" id="inlineFormCheck">
                                        <label class="form-check-label ms-2 fs-5" for="inlineFormCheck">
                                            Template 1
                                        </label>
                                    </div>

                                    <div class="form-check d-flex flex-wrap align-items-center">
                                        <input class="form-check-input"  type="checkbox" id="inlineFormCheck">
                                        <label class="form-check-label ms-2 fs-5" for="inlineFormCheck">
                                            Template 1
                                        </label>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @show
        </div>
    </div>

<script>
    const column = document.querySelector('.analytics');
    const columnBorder = document.querySelector('.analytics-column-border');


    columnBorder.addEventListener('mousedown', e => {
        let actualWidth = null;
        const checkedColumn = document.querySelector('.analytics-column');
        const actualWidthColumn = parseInt(checkedColumn.style.minWidth);
        column.addEventListener('mousemove', page => {
            if (actualWidth === null) {
                actualWidth = page.pageX;
            }

            let newWidth = (actualWidthColumn + (page.pageX - actualWidth));

            if (newWidth => 200) {
                checkedColumn.style.minWidth = `${newWidth}px`;
            }


            console.log((actualWidthColumn + (page.pageX - actualWidth)))
           /* console.log(page.pageX - actualWidth)
            console.log(checkedColumn)
            console.log(actualWidthColumn)*/
        });

        columnBorder.addEventListener('mouseup', teat => {
            console.log(teat)
        });

    });
</script>
</body>
</html>
