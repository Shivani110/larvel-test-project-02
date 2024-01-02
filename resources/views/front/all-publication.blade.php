<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&amp;family=Poppins:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.7.0/chosen.css">

    <link rel="stylesheet" href="{{ asset('/pr/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/pr/css/responsive.css') }}">
    <title>All publication page</title>
</head>
<body class="bg_color" style="">
    <header class="header_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header_content">
                        <div class="logo_img">
                            <img src="{{ asset('/pr/img/Logo.png') }}" class="img-fluid" alt="">
                        </div>
                        <div class="log_out_bnt">
                            <a class="btn" href="javascript:void(0)" role="button"><i class="fa-solid fa-arrow-right-from-bracket"></i> Log Out</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="publication_wrapper p-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="pricing_content">
                        <div class="pricing_text">
                            <h2>Pricing Sheet (PR-Partners)</h2>
                            <p>Once we have published the article for you, any further edits may include an extra charge.</p>
                        </div>
                        <div class="ques_btn">
                        <a class="btn" href="javascript:void(0)" role="button">Download PR Questionnaire</a>
                    </div>
                </div>
                <div class="tab_btn">
                    <ul class="nav nav-pills" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">All Publication</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Press Packages</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Press Release</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-services-tab" data-toggle="pill" href="#pills-services" role="tab" aria-controls="pills-services" aria-selected="false">Other Services</a>
                        </li>
                    </ul>
                </div>
                <div class="tab_wrapper">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                            <div class="publication_content">
                                <div class="leftside_rang">
                                    <form>
                                        <div class="form-group">
                                            <label for="formGroupExampleInput">Publication name</label>
                                            <input type="text" class="form-control" id="formGroupExampleInput">
                                        </div>
                                        <div class="form-group">
                                            <div class="form-group asc_wrapper">
                                                <label for="exampleFormControlSelect1">Sort by</label>
                                                <select class="form-control" id="exampleFormControlSelect1">
                                                    <option>Price (Asc)</option>
                                                    <option>lorem ipsum</option>
                                                    <option>lorem ipsum</option>
                                                    <option>lorem ipsum</option>
                                                </select>
                                                <div class="chosen-container chosen-container-single" title="" id="exampleFormControlSelect1_chosen" style="width: 100%;">
                                                    <a class="chosen-single"><span>Price (Asc)</span>
                                                <div><b></b>
                                            </div></a>
                                            <div class="chosen-drop">
                                                <div class="chosen-search">
                                                    <input class="chosen-search-input" type="text" autocomplete="off">
                                                    </div>
                                                        <ul class="chosen-results"></ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="range_wreap">
                                            <h3>Price range</h3>
                                            <div id="slider-range" class="noUi-target noUi-ltr noUi-horizontal noUi-background"><div class="noUi-base"><div class="noUi-origin noUi-connect" style="left: 0%;"><div class="noUi-handle noUi-handle-lower"></div></div><div class="noUi-origin noUi-background" style="left: 100%;"><div class="noUi-handle noUi-handle-upper"></div></div></div></div>
                                                <div class="slider-labels">
                                                    <div class="caption">
                                                        <span id="slider-range-value1">$0</span>
                                                    </div>
                                                    <div class="text-right caption">
                                                        <span id="slider-range-value2">$30,000</span>
                                                    </div>
                                                </div>
                                                <div>
                                                    <input type="hidden" name="min-value" value="">
                                                    <input type="hidden" name="max-value" value="">
                                                </div>
                                            </div>
                                            <div class="form-group wrapper">
                                                <label for="formGroupExampleInput">Select regions</label>
                                                <select multiple="" data-placeholder="Select regions">
                                                    <option>lorem ipsum</option>
                                                    <option>lorem ipsum</option>
                                                    <option>lorem ipsum</option>
                                                    <option>lorem ipsum</option>
                                                </select>
                                                <div class="chosen-container chosen-container-multi" title="" style="width: 100%;">
                                                    <ul class="chosen-choices">
                                                        <li class="search-field">
                                                            <input class="chosen-search-input default" type="text" autocomplete="off" value="Select regions" style="width: 113.719px;">
                                                        </li>
                                                    </ul>
                                                    <div class="chosen-drop">
                                                        <ul class="chosen-results"></ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="select_wreap">
                                                <h3>Select genres</h3>
                                                <div class="publication_list">
                                                    <a href="javascript:void(0)">News</a>
                                                    <a href="javascript:void(0)">Fashion</a>
                                                    <a href="javascript:void(0)">Luxury</a>
                                                    <a href="javascript:void(0)">Entertainment</a>
                                                    <a href="javascript:void(0)">Business</a>
                                                    <a href="javascript:void(0)">Tech</a>
                                                    <a href="javascript:void(0)">Lifestyle</a>
                                                    <a href="javascript:void(0)">Real Estate</a>
                                                    <a href="javascript:void(0)">Web 3</a>
                                                    <a href="javascript:void(0)">Music</a>
                                                    <a href="javascript:void(0)">Sports</a>
                                                    <a href="javascript:void(0)">Gaming</a>
                                                    <a href="javascript:void(0)">Alcohol</a>
                                                    <a href="javascript:void(0)">Political</a>
                                                    <a href="javascript:void(0)">CBD</a>
                                                    <a href="javascript:void(0)">Legal</a>
                                                </div>
                                            </div>
                                            <div class="select_wreap">
                                                <h3>Sponsored</h3>
                                                <div class="publication_list">
                                                    <a href="javascript:void(0)">Yes</a>
                                                    <a href="javascript:void(0)">No</a>
                                                    <a href="javascript:void(0)">Discrete</a>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="ques_btn">
                                                <a class="btn" href="javascript:void(0)" role="button">Reset all filters</a>
                                            </div>
                                    </form>
                                </div>
                                <div class="rightside_publication">
                                    <div class="publications_show">
                                        <span>Showing 580 of 580 publications</span>
                                    </div>
                                    <div class="overview_company">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th class="text-left">Publication</th>
                                                    <th>Genres</th>
                                                    <th>Price</th>
                                                    <th>DA
                                                    <div class="tooltip"><i class="fa-regular fa-circle-question"></i>
                                                        <p class="tooltiptext">
                                                            <span>Domain authority</span><br>
                                                            Search engine ranking score (1-100)
                                                        </p>
                                                    </div>
                                                    </th>
                                                    <th>TAT
                                                        <div class="tooltip"><i class="fa-regular fa-circle-question"></i>
                                                            <p class="tooltiptext">
                                                            <span>Time at arrival</span><br>
                                                            Estimated time to deliver
                                                            </p>
                                                        </div>
                                                    </th>
                                                    <th>Article Type</th>
                                                    <th>Country/Region</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="cpy_content">
                                                        <div class="cpy_logo">
                                                            <div class="cpy_logo_img">
                                                                <img src="{{ asset('/pr/img/company_logo1.png') }}" class="img-fluid" alt="">
                                                            </div>
                                                            <span>
                                                                <a href="javascript:void(0)">Entertainment Paper</a>
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>3 genres
                                                        <div class="tooltip tooltip_data"><i class="fa-regular fa-circle-question"></i>
                                                            <ul class="tooltiptext">
                                                                <li>News</li>
                                                                <li>Lifestyle</li>
                                                                <li>Entertainment</li>
                                                            </ul>
                                                        </div> 
                                                    </td>
                                                    <td>5</td>
                                                    <td>1 Week</td>
                                                    <td>5 Genre</td>
                                                    <td>Organic Placement</td>
                                                    <td>Global</td>
                                                </tr>
                                                <tr>
                                                    <td class="cpy_content">
                                                        <div class="cpy_logo">
                                                            <div class="cpy_logo_img">
                                                                <img src="{{ asset('/pr/img/company_logo1.png') }}" class="img-fluid" alt="">
                                                            </div>
                                                            <span>
                                                                <a href="javascript:void(0)">All news Buzz</a>
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>$150</td>
                                                    <td>5</td>
                                                    <td>1 Week</td>
                                                    <td>5 Genre</td>
                                                    <td>Organic Placement</td>
                                                    <td>Global</td>
                                                </tr>
                                                <tr>
                                                    <td class="cpy_content">
                                                        <div class="cpy_logo">
                                                            <div class="cpy_logo_img">
                                                                <img src="{{ asset('/pr/img/company_logo1.png') }}" class="img-fluid" alt="">
                                                            </div>
                                                            <span>
                                                                <a href="javascript:void(0)">Big Time Daily</a>
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>$150</td>
                                                    <td>5</td>
                                                    <td>1 Week</td>
                                                    <td>5 Genre</td>
                                                    <td>Organic Placement</td>
                                                    <td>Global</td>
                                                </tr>
                                                <tr>
                                                    <td class="cpy_content">
                                                        <div class="cpy_logo">
                                                            <div class="cpy_logo_img">
                                                                <img src="{{ asset('/pr/img/company_logo1.png') }}" class="img-fluid" alt="">
                                                            </div>
                                                            <span>
                                                                <a href="javascript:void(0)">Open The News</a>
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>$150</td>
                                                    <td>5</td>
                                                    <td>1 Week</td>
                                                    <td>5 Genre</td>
                                                    <td>Organic Placement</td>
                                                    <td>Global</td>
                                                </tr>
                                    <tr>
                                        <td class="cpy_content">
                                            <div class="cpy_logo">
                                                <div class="cpy_logo_img">
                                                    <img src="{{ asset('/pr/img/company_logo1.png') }}" class="img-fluid" alt="">
                                                </div>
                                                <span>
                                                    <a href="javascript:void(0)">Maxed HipHop</a>
                                                </span>
                                            </div>
                                        </td>
                                        <td>$150</td>
                                        <td>5</td>
                                        <td>1 Week</td>
                                        <td>5 Genre</td>
                                        <td>Organic Placement</td>
                                        <td>Global</td>
                                    </tr>
                                    <tr>
                                        <td class="cpy_content">
                                            <div class="cpy_logo">
                                                <div class="cpy_logo_img">
                                                    <img src="{{ asset('/pr/img/company_logo1.png') }}" class="img-fluid" alt="">
                                                </div>
                                                <span>
                                                    <a href="javascript:void(0)">Entertainment Paper</a>
                                                </span>
                                            </div>
                                        </td>
                                        <td>$150</td>
                                        <td>5</td>
                                        <td>1 Week</td>
                                        <td>5 Genre</td>
                                        <td>Organic Placement</td>
                                        <td>Global</td>
                                    </tr>
                                    <tr>
                                        <td class="cpy_content">
                                            <div class="cpy_logo">
                                                <div class="cpy_logo_img">
                                                    <img src="{{ asset('/pr/img/company_logo1.png') }}" class="img-fluid" alt="">
                                                </div>
                                                <span>
                                                    <a href="javascript:void(0)">All news Buzz</a>
                                                </span>
                                            </div>
                                        </td>
                                        <td>$150</td>
                                        <td>5</td>
                                        <td>1 Week</td>
                                        <td>5 Genre</td>
                                        <td>Organic Placement</td>
                                        <td>Global</td>
                                    </tr>
                                    <tr>
                                        <td class="cpy_content">
                                        <div class="cpy_logo">
                                            <div class="cpy_logo_img">
                                            <img src="{{ asset('/pr/img/company_logo1.png') }}" class="img-fluid" alt="">
                                            </div>
                                            <span>
                                            <a href="javascript:void(0)">Big Time Daily</a>
                                            </span>
                                        </div>
                                        </td>
                                        <td>$150</td>
                                        <td>5</td>
                                        <td>1 Week</td>
                                        <td>5 Genre</td>
                                        <td>Organic Placement</td>
                                        <td>Global</td>
                                    </tr>
                                    <tr>
                                        <td class="cpy_content">
                                        <div class="cpy_logo">
                                            <div class="cpy_logo_img">
                                            <img src="{{ asset('/pr/img/company_logo1.png') }}" class="img-fluid" alt="">
                                            </div>
                                            <span>
                                            <a href="javascript:void(0)">Open The News</a>
                                            </span>
                                        </div>
                                        </td>
                                        <td>$150</td>
                                        <td>5</td>
                                        <td>1 Week</td>
                                        <td>5 Genre</td>
                                        <td>Organic Placement</td>
                                        <td>Global</td>
                                    </tr>
                                    <tr>
                                        <td class="cpy_content">
                                        <div class="cpy_logo">
                                            <div class="cpy_logo_img">
                                            <img src="{{ asset('/pr/img/company_logo1.png') }}" class="img-fluid" alt="">
                                            </div>
                                            <span>
                                            <a href="javascript:void(0)">Maxed HipHop</a>
                                            </span>
                                        </div>
                                        </td>
                                        <td>$150</td>
                                        <td>5</td>
                                        <td>1 Week</td>
                                        <td>5 Genre</td>
                                        <td>Organic Placement</td>
                                        <td>Global</td>
                                    </tr>
                                    <tr>
                                        <td class="cpy_content">
                                        <div class="cpy_logo">
                                            <div class="cpy_logo_img">
                                            <img src="{{ asset('/pr/img/company_logo1.png') }}" class="img-fluid" alt="">
                                            </div>
                                            <span>
                                            <a href="javascript:void(0)">Entertainment Paper</a>
                                            </span>
                                        </div>
                                        </td>
                                        <td>$150</td>
                                        <td>5</td>
                                        <td>1 Week</td>
                                        <td>5 Genre</td>
                                        <td>Organic Placement</td>
                                        <td>Global</td>
                                    </tr>
                                    <tr>
                                        <td class="cpy_content">
                                        <div class="cpy_logo">
                                            <div class="cpy_logo_img">
                                            <img src="{{ asset('/pr/img/company_logo1.png') }}" class="img-fluid" alt="">
                                            </div>
                                            <span>
                                            <a href="javascript:void(0)">All news Buzz</a>
                                            </span>
                                        </div>
                                        </td>
                                        <td>$150</td>
                                        <td>5</td>
                                        <td>1 Week</td>
                                        <td>5 Genre</td>
                                        <td>Organic Placement</td>
                                        <td>Global</td>
                                    </tr>
                                    <tr>
                                        <td class="cpy_content">
                                        <div class="cpy_logo">
                                            <div class="cpy_logo_img">
                                            <img src="{{ asset('/pr/img/company_logo1.png') }}" class="img-fluid" alt="">
                                            </div>
                                            <span>
                                            <a href="javascript:void(0)">Big Time Daily</a>
                                            </span>
                                        </div>
                                        </td>
                                        <td>$150</td>
                                        <td>5</td>
                                        <td>1 Week</td>
                                        <td>5 Genre</td>
                                        <td>Organic Placement</td>
                                        <td>Global</td>
                                    </tr>
                                    <tr>
                                        <td class="cpy_content">
                                        <div class="cpy_logo">
                                            <div class="cpy_logo_img">
                                            <img src="{{ asset('/pr/img/company_logo1.png') }}" class="img-fluid" alt="">
                                            </div>
                                            <span>
                                            <a href="javascript:void(0)">Open The News</a>
                                            </span>
                                        </div>
                                        </td>
                                        <td>$150</td>
                                        <td>5</td>
                                        <td>1 Week</td>
                                        <td>5 Genre</td>
                                        <td>Organic Placement</td>
                                        <td>Global</td>
                                    </tr>
                                    <tr>
                                        <td class="cpy_content">
                                        <div class="cpy_logo">
                                            <div class="cpy_logo_img">
                                            <img src="{{ asset('/pr/img/company_logo1.png') }}" class="img-fluid" alt="">
                                            </div>
                                            <span>
                                            <a href="javascript:void(0)">Maxed HipHop</a>
                                            </span>
                                        </div>
                                        </td>
                                        <td>$150</td>
                                        <td>5</td>
                                        <td>1 Week</td>
                                        <td>5 Genre</td>
                                        <td>Organic Placement</td>
                                        <td>Global</td>
                                    </tr>
                                    <tr>
                                        <td class="cpy_content">
                                        <div class="cpy_logo">
                                            <div class="cpy_logo_img">
                                            <img src="{{ asset('/pr/img/company_logo1.png') }}" class="img-fluid" alt="">
                                            </div>
                                            <span>
                                            <a href="javascript:void(0)">Entertainment Paper</a>
                                            </span>
                                        </div>
                                        </td>
                                        <td>$150</td>
                                        <td>5</td>
                                        <td>1 Week</td>
                                        <td>5 Genre</td>
                                        <td>Organic Placement</td>
                                        <td>Global</td>
                                    </tr>
                                    <tr>
                                        <td class="cpy_content">
                                        <div class="cpy_logo">
                                            <div class="cpy_logo_img">
                                            <img src="{{ asset('/pr/img/company_logo1.png') }}" class="img-fluid" alt="">
                                            </div>
                                            <span>
                                            <a href="javascript:void(0)">All news Buzz</a>
                                            </span>
                                        </div>
                                        </td>
                                        <td>$150</td>
                                        <td>5</td>
                                        <td>1 Week</td>
                                        <td>5 Genre</td>
                                        <td>Organic Placement</td>
                                        <td>Global</td>
                                    </tr>
                                    <tr>
                                        <td class="cpy_content">
                                        <div class="cpy_logo">
                                            <div class="cpy_logo_img">
                                            <img src="{{ asset('/pr/img/company_logo1.png') }}" class="img-fluid" alt="">
                                            </div>
                                            <span>
                                            <a href="javascript:void(0)">Big Time Daily</a>
                                            </span>
                                        </div>
                                        </td>
                                        <td>$150</td>
                                        <td>5</td>
                                        <td>1 Week</td>
                                        <td>5 Genre</td>
                                        <td>Organic Placement</td>
                                        <td>Global</td>
                                    </tr>
                                    <tr>
                                        <td class="cpy_content">
                                        <div class="cpy_logo">
                                            <div class="cpy_logo_img">
                                            <img src="{{ asset('/pr/img/company_logo1.png') }}" class="img-fluid" alt="">
                                            </div>
                                            <span>
                                            <a href="javascript:void(0)">Open The News</a>
                                            </span>
                                        </div>
                                        </td>
                                        <td>$150</td>
                                        <td>5</td>
                                        <td>1 Week</td>
                                        <td>5 Genre</td>
                                        <td>Organic Placement</td>
                                        <td>Global</td>
                                    </tr>
                                    <tr>
                                        <td class="cpy_content">
                                        <div class="cpy_logo">
                                            <div class="cpy_logo_img">
                                            <img src="{{ asset('/pr/img/company_logo1.png') }}" class="img-fluid" alt="">
                                            </div>
                                            <span>
                                            <a href="javascript:void(0)">Maxed HipHop</a>
                                            </span>
                                        </div>
                                        </td>
                                        <td>$150</td>
                                        <td>5</td>
                                        <td>1 Week</td>
                                        <td>5 Genre</td>
                                        <td>Organic Placement</td>
                                        <td>Global</td>
                                    </tr>
                                    <tr>
                                        <td class="cpy_content">
                                        <div class="cpy_logo">
                                            <div class="cpy_logo_img">
                                            <img src="{{ asset('/pr/img/company_logo1.png') }}" class="img-fluid" alt="">
                                            </div>
                                            <span>
                                            <a href="javascript:void(0)">Entertainment Paper</a>
                                            </span>
                                        </div>
                                        </td>
                                        <td>$150</td>
                                        <td>5</td>
                                        <td>1 Week</td>
                                        <td>5 Genre</td>
                                        <td>Organic Placement</td>
                                        <td>Global</td>
                                    </tr>
                                    <tr>
                                        <td class="cpy_content">
                                        <div class="cpy_logo">
                                            <div class="cpy_logo_img">
                                            <img src="{{ asset('/pr/img/company_logo1.png') }}" class="img-fluid" alt="">
                                            </div>
                                            <span>
                                            <a href="javascript:void(0)">All news Buzz</a>
                                            </span>
                                        </div>
                                        </td>
                                        <td>$150</td>
                                        <td>5</td>
                                        <td>1 Week</td>
                                        <td>5 Genre</td>
                                        <td>Organic Placement</td>
                                        <td>Global</td>
                                    </tr>
                                    <tr>
                                        <td class="cpy_content">
                                        <div class="cpy_logo">
                                            <div class="cpy_logo_img">
                                            <img src="{{ asset('/pr/img/company_logo1.png') }}" class="img-fluid" alt="">
                                            </div>
                                            <span>
                                            <a href="javascript:void(0)">Big Time Daily</a>
                                            </span>
                                        </div>
                                        </td>
                                        <td>$150</td>
                                        <td>5</td>
                                        <td>1 Week</td>
                                        <td>5 Genre</td>
                                        <td>Organic Placement</td>
                                        <td>Global</td>
                                    </tr>
                                    <tr>
                                        <td class="cpy_content">
                                        <div class="cpy_logo">
                                            <div class="cpy_logo_img">
                                            <img src="{{ asset('/pr/img/company_logo1.png') }}" class="img-fluid" alt="">
                                            </div>
                                            <span>
                                            <a href="javascript:void(0)">Open The News</a>
                                            </span>
                                        </div>
                                        </td>
                                        <td>$150</td>
                                        <td>5</td>
                                        <td>1 Week</td>
                                        <td>5 Genre</td>
                                        <td>Organic Placement</td>
                                        <td>Global</td>
                                    </tr>
                                    <tr>
                                        <td class="cpy_content">
                                        <div class="cpy_logo">
                                            <div class="cpy_logo_img">
                                            <img src="{{ asset('/pr/img/company_logo1.png') }}" class="img-fluid" alt="">
                                            </div>
                                            <span>
                                            <a href="javascript:void(0)">Maxed HipHop</a>
                                            </span>
                                        </div>
                                        </td>
                                        <td>$150</td>
                                        <td>5</td>
                                        <td>1 Week</td>
                                        <td>5 Genre</td>
                                        <td>Organic Placement</td>
                                        <td>Global</td>
                                    </tr>
                                    <tr>
                                        <td class="cpy_content">
                                        <div class="cpy_logo">
                                            <div class="cpy_logo_img">
                                            <img src="{{ asset('/pr/img/company_logo1.png') }}" class="img-fluid" alt="">
                                            </div>
                                            <span>
                                            <a href="javascript:void(0)">Entertainment Paper</a>
                                            </span>
                                        </div>
                                        </td>
                                        <td>$150</td>
                                        <td>5</td>
                                        <td>1 Week</td>
                                        <td>5 Genre</td>
                                        <td>Organic Placement</td>
                                        <td>Global</td>
                                    </tr>
                                    <tr>
                                        <td class="cpy_content">
                                        <div class="cpy_logo">
                                            <div class="cpy_logo_img">
                                            <img src="{{ asset('/pr/img/company_logo1.png') }}" class="img-fluid" alt="">
                                            </div>
                                            <span>
                                            <a href="javascript:void(0)">All news Buzz</a>
                                            </span>
                                        </div>
                                        </td>
                                        <td>$150</td>
                                        <td>5</td>
                                        <td>1 Week</td>
                                        <td>5 Genre</td>
                                        <td>Organic Placement</td>
                                        <td>Global</td>
                                    </tr>
                                    <tr>
                                        <td class="cpy_content">
                                        <div class="cpy_logo">
                                            <div class="cpy_logo_img">
                                            <img src="{{ asset('/pr/img/company_logo1.png') }}" class="img-fluid" alt="">
                                            </div>
                                            <span>
                                            <a href="javascript:void(0)">Big Time Daily</a>
                                            </span>
                                        </div>
                                        </td>
                                        <td>$150</td>
                                        <td>5</td>
                                        <td>1 Week</td>
                                        <td>5 Genre</td>
                                        <td>Organic Placement</td>
                                        <td>Global</td>
                                    </tr>
                                    <tr>
                                        <td class="cpy_content">
                                        <div class="cpy_logo">
                                            <div class="cpy_logo_img">
                                            <img src="{{ asset('/pr/img/company_logo1.png') }}" class="img-fluid" alt="">
                                            </div>
                                            <span>
                                            <a href="javascript:void(0)">Open The News</a>
                                            </span>
                                        </div>
                                        </td>
                                        <td>$150</td>
                                        <td>5</td>
                                        <td>1 Week</td>
                                        <td>5 Genre</td>
                                        <td>Organic Placement</td>
                                        <td>Global</td>
                                    </tr>
                                    <tr>
                                        <td class="cpy_content">
                                        <div class="cpy_logo">
                                            <div class="cpy_logo_img">
                                            <img src="{{ asset('/pr/img/company_logo1.png') }}" class="img-fluid" alt="">
                                            </div>
                                            <span>
                                            <a href="javascript:void(0)">Maxed HipHop</a>
                                            </span>
                                        </div>
                                        </td>
                                        <td>$150</td>
                                        <td>5</td>
                                        <td>1 Week</td>
                                        <td>5 Genre</td>
                                        <td>Organic Placement</td>
                                        <td>Global</td>
                                    </tr>
                                    <tr>
                                        <td class="cpy_content">
                                        <div class="cpy_logo">
                                            <div class="cpy_logo_img">
                                            <img src="{{ asset('/pr/img/company_logo1.png') }}" class="img-fluid" alt="">
                                            </div>
                                            <span>
                                            <a href="javascript:void(0)">Entertainment Paper</a>
                                            </span>
                                        </div>
                                        </td>
                                        <td>$150</td>
                                        <td>5</td>
                                        <td>1 Week</td>
                                        <td>5 Genre</td>
                                        <td>Organic Placement</td>
                                        <td>Global</td>
                                    </tr>
                                    <tr>
                                        <td class="cpy_content">
                                        <div class="cpy_logo">
                                            <div class="cpy_logo_img">
                                            <img src="{{ asset('/pr/img/company_logo1.png') }}" class="img-fluid" alt="">
                                            </div>
                                            <span>
                                            <a href="javascript:void(0)">All news Buzz</a>
                                            </span>
                                        </div>
                                        </td>
                                        <td>$150</td>
                                        <td>5</td>
                                        <td>1 Week</td>
                                        <td>5 Genre</td>
                                        <td>Organic Placement</td>
                                        <td>Global</td>
                                    </tr>
                                    <tr>
                                        <td class="cpy_content">
                                        <div class="cpy_logo">
                                            <div class="cpy_logo_img">
                                            <img src="{{ asset('/pr/img/company_logo1.png') }}" class="img-fluid" alt="">
                                            </div>
                                            <span>
                                            <a href="javascript:void(0)">Big Time Daily</a>
                                            </span>
                                        </div>
                                        </td>
                                        <td>$150</td>
                                        <td>5</td>
                                        <td>1 Week</td>
                                        <td>5 Genre</td>
                                        <td>Organic Placement</td>
                                        <td>Global</td>
                                    </tr>
                                    <tr>
                                        <td class="cpy_content">
                                        <div class="cpy_logo">
                                            <div class="cpy_logo_img">
                                            <img src="{{ asset('/pr/img/company_logo1.png') }}" class="img-fluid" alt="">
                                            </div>
                                            <span>
                                            <a href="javascript:void(0)">Open The News</a>
                                            </span>
                                        </div>
                                        </td>
                                        <td>$150</td>
                                        <td>5</td>
                                        <td>1 Week</td>
                                        <td>5 Genre</td>
                                        <td>Organic Placement</td>
                                        <td>Global</td>
                                    </tr>
                                    <tr>
                                        <td class="cpy_content">
                                        <div class="cpy_logo">
                                            <div class="cpy_logo_img">
                                            <img src="{{ asset('/pr/img/company_logo1.png') }}" class="img-fluid" alt="">
                                            </div>
                                            <span>
                                            <a href="javascript:void(0)">Maxed HipHop</a>
                                            </span>
                                        </div>
                                        </td>
                                        <td>$150</td>
                                        <td>5</td>
                                        <td>1 Week</td>
                                        <td>5 Genre</td>
                                        <td>Organic Placement</td>
                                        <td>Global</td>
                                    </tr>
                                    <tr>
                                        <td class="cpy_content">
                                        <div class="cpy_logo">
                                            <div class="cpy_logo_img">
                                            <img src="{{ asset('/pr/img/company_logo1.png') }}" class="img-fluid" alt="">
                                            </div>
                                            <span>
                                            <a href="javascript:void(0)">Entertainment Paper</a>
                                            </span>
                                        </div>
                                        </td>
                                        <td>$150</td>
                                        <td>5</td>
                                        <td>1 Week</td>
                                        <td>5 Genre</td>
                                        <td>Organic Placement</td>
                                        <td>Global</td>
                                    </tr>
                                    <tr>
                                        <td class="cpy_content">
                                        <div class="cpy_logo">
                                            <div class="cpy_logo_img">
                                            <img src="{{ asset('/pr/img/company_logo1.png') }}" class="img-fluid" alt="">
                                            </div>
                                            <span>
                                            <a href="javascript:void(0)">All news Buzz</a>
                                            </span>
                                        </div>
                                        </td>
                                        <td>$150</td>
                                        <td>5</td>
                                        <td>1 Week</td>
                                        <td>5 Genre</td>
                                        <td>Organic Placement</td>
                                        <td>Global</td>
                                    </tr>
                                    <tr>
                                        <td class="cpy_content">
                                        <div class="cpy_logo">
                                            <div class="cpy_logo_img">
                                            <img src="{{ asset('/pr/img/company_logo1.png') }}" class="img-fluid" alt="">
                                            </div>
                                            <span>
                                            <a href="javascript:void(0)">Big Time Daily</a>
                                            </span>
                                        </div>
                                        </td>
                                        <td>$150</td>
                                        <td>5</td>
                                        <td>1 Week</td>
                                        <td>5 Genre</td>
                                        <td>Organic Placement</td>
                                        <td>Global</td>
                                    </tr>
                                    <tr>
                                        <td class="cpy_content">
                                        <div class="cpy_logo">
                                            <div class="cpy_logo_img">
                                            <img src="{{ asset('/pr/img/company_logo1.png') }}" class="img-fluid" alt="">
                                            </div>
                                            <span>
                                            <a href="javascript:void(0)">Open The News</a>
                                            </span>
                                        </div>
                                        </td>
                                        <td>$150</td>
                                        <td>5</td>
                                        <td>1 Week</td>
                                        <td>5 Genre</td>
                                        <td>Organic Placement</td>
                                        <td>Global</td>
                                    </tr>
                                    <tr>
                                        <td class="cpy_content">
                                        <div class="cpy_logo">
                                            <div class="cpy_logo_img">
                                            <img src="{{ asset('/pr/img/company_logo1.png') }}" class="img-fluid" alt="">
                                            </div>
                                            <span>
                                            <a href="javascript:void(0)">Maxed HipHop</a>
                                            </span>
                                        </div>
                                        </td>
                                        <td>$150</td>
                                        <td>5</td>
                                        <td>1 Week</td>
                                        <td>5 Genre</td>
                                        <td>Organic Placement</td>
                                        <td>Global</td>
                                    </tr>
                                    <tr>
                                        <td class="cpy_content">
                                        <div class="cpy_logo">
                                            <div class="cpy_logo_img">
                                            <img src="{{ asset('/pr/img/company_logo1.png') }}" class="img-fluid" alt="">
                                            </div>
                                            <span>
                                            <a href="javascript:void(0)">Entertainment Paper</a>
                                            </span>
                                        </div>
                                        </td>
                                        <td>$150</td>
                                        <td>5</td>
                                        <td>1 Week</td>
                                        <td>5 Genre</td>
                                        <td>Organic Placement</td>
                                        <td>Global</td>
                                    </tr>
                                    <tr>
                                        <td class="cpy_content">
                                        <div class="cpy_logo">
                                            <div class="cpy_logo_img">
                                            <img src="{{ asset('/pr/img/company_logo1.png') }}" class="img-fluid" alt="">
                                            </div>
                                            <span>
                                            <a href="javascript:void(0)">All news Buzz</a>
                                            </span>
                                        </div>
                                        </td>
                                        <td>$150</td>
                                        <td>5</td>
                                        <td>1 Week</td>
                                        <td>5 Genre</td>
                                        <td>Organic Placement</td>
                                        <td>Global</td>
                                    </tr>
                                    <tr>
                                        <td class="cpy_content">
                                        <div class="cpy_logo">
                                            <div class="cpy_logo_img">
                                            <img src="{{ asset('/pr/img/company_logo1.png') }}" class="img-fluid" alt="">
                                            </div>
                                            <span>
                                            <a href="javascript:void(0)">Big Time Daily</a>
                                            </span>
                                        </div>
                                        </td>
                                        <td>$150</td>
                                        <td>5</td>
                                        <td>1 Week</td>
                                        <td>5 Genre</td>
                                        <td>Organic Placement</td>
                                        <td>Global</td>
                                    </tr>
                                    <tr>
                                        <td class="cpy_content">
                                        <div class="cpy_logo">
                                            <div class="cpy_logo_img">
                                            <img src="{{ asset('/pr/img/company_logo1.png') }}" class="img-fluid" alt="">
                                            </div>
                                            <span>
                                            <a href="javascript:void(0)">Open The News</a>
                                            </span>
                                        </div>
                                        </td>
                                        <td>$150</td>
                                        <td>5</td>
                                        <td>1 Week</td>
                                        <td>5 Genre</td>
                                        <td>Organic Placement</td>
                                        <td>Global</td>
                                    </tr>
                                    <tr>
                                        <td class="cpy_content">
                                        <div class="cpy_logo">
                                            <div class="cpy_logo_img">
                                            <img src="{{ asset('/pr/img/company_logo1.png') }}" class="img-fluid" alt="">
                                            </div>
                                            <span>
                                            <a href="javascript:void(0)">Maxed HipHop</a>
                                            </span>
                                        </div>
                                        </td>
                                        <td>$150</td>
                                        <td>5</td>
                                        <td>1 Week</td>
                                        <td>5 Genre</td>
                                        <td>Organic Placement</td>
                                        <td>Global</td>
                                    </tr>
                                    <tr>
                                        <td class="cpy_content">
                                        <div class="cpy_logo">
                                            <div class="cpy_logo_img">
                                            <img src="{{ asset('/pr/img/company_logo1.png') }}" class="img-fluid" alt="">
                                            </div>
                                            <span>
                                            <a href="javascript:void(0)">Entertainment Paper</a>
                                            </span>
                                        </div>
                                        </td>
                                        <td>$150</td>
                                        <td>5</td>
                                        <td>1 Week</td>
                                        <td>5 Genre</td>
                                        <td>Organic Placement</td>
                                        <td>Global</td>
                                    </tr>
                                    <tr>
                                        <td class="cpy_content">
                                        <div class="cpy_logo">
                                            <div class="cpy_logo_img">
                                            <img src="{{ asset('/pr/img/company_logo1.png') }}" class="img-fluid" alt="">
                                            </div>
                                            <span>
                                            <a href="javascript:void(0)">All news Buzz</a>
                                            </span>
                                        </div>
                                        </td>
                                        <td>$150</td>
                                        <td>5</td>
                                        <td>1 Week</td>
                                        <td>5 Genre</td>
                                        <td>Organic Placement</td>
                                        <td>Global</td>
                                    </tr>
                                    <tr>
                                        <td class="cpy_content">
                                        <div class="cpy_logo">
                                            <div class="cpy_logo_img">
                                            <img src="{{ asset('/pr/img/company_logo1.png') }}" class="img-fluid" alt="">
                                            </div>
                                            <span>
                                            <a href="javascript:void(0)">Big Time Daily</a>
                                            </span>
                                        </div>
                                        </td>
                                        <td>$150</td>
                                        <td>5</td>
                                        <td>1 Week</td>
                                        <td>5 Genre</td>
                                        <td>Organic Placement</td>
                                        <td>Global</td>
                                    </tr>
                                    <tr>
                                        <td class="cpy_content">
                                        <div class="cpy_logo">
                                            <div class="cpy_logo_img">
                                            <img src="{{ asset('/pr/img/company_logo1.png') }}" class="img-fluid" alt="">
                                            </div>
                                            <span>
                                            <a href="javascript:void(0)">Open The News</a>
                                            </span>
                                        </div>
                                        </td>
                                        <td>$150</td>
                                        <td>5</td>
                                        <td>1 Week</td>
                                        <td>5 Genre</td>
                                        <td>Organic Placement</td>
                                        <td>Global</td>
                                    </tr>
                                    <tr>
                                        <td class="cpy_content">
                                        <div class="cpy_logo">
                                            <div class="cpy_logo_img">
                                            <img src="{{ asset('/pr/img/company_logo1.png') }}" class="img-fluid" alt="">
                                            </div>
                                            <span>
                                            <a href="javascript:void(0)">Maxed HipHop</a>
                                            </span>
                                        </div>
                                        </td>
                                        <td>$150</td>
                                        <td>5</td>
                                        <td>1 Week</td>
                                        <td>5 Genre</td>
                                        <td>Organic Placement</td>
                                        <td>Global</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <div class="business_wrapper">
                    <div class="business_content">
                        <h3>Business</h3>
                        <div class="business_grid">
                        <div class="business_wreap">
                            <h4 class="bundle_text"><span>Bundle 1</span> <span class="business_price">$2,800</span></h4>
                            <h4 class="retail_text">Retail: $3,200</h4>
                            <div class="business_list">
                            <h5>Publication</h5>
                            <ul class="m-0">
                                <li>LA Weekly</li>
                                <li>IB Times (SG)</li>
                                <li>Digital Journal</li>
                                <li>NY Weekly</li>
                                <li>Daily Scanner</li>
                            </ul>
                            </div>
                        </div>
                        <div class="business_wreap">
                            <h4 class="bundle_text"><span>Bundle 2</span> <span class="business_price">$2,800</span></h4>
                            <h4 class="retail_text">Retail: $3,200</h4>
                            <div class="business_list">
                            <h5>Publication</h5>
                            <ul class="m-0">
                                <li>LA Weekly</li>
                                <li>IB Times (SG)</li>
                                <li>Digital Journal</li>
                                <li>NY Weekly</li>
                                <li>Daily Scanner</li>
                            </ul>
                            </div>
                        </div>
                        <div class="business_wreap">
                            <h4 class="bundle_text"><span>Bundle 3</span> <span class="business_price">$2,800</span></h4>
                            <h4 class="retail_text">Retail: $3,200</h4>
                            <div class="business_list">
                            <h5>Publication</h5>
                            <ul class="m-0">
                                <li>LA Weekly</li>
                                <li>IB Times (SG)</li>
                                <li>Digital Journal</li>
                                <li>NY Weekly</li>
                                <li>Daily Scanner</li>
                            </ul>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="business_content">
                        <h3>Entertainment</h3>
                        <div class="business_grid">
                        <div class="business_wreap">
                            <h4 class="bundle_text"><span>Bundle 1</span> <span class="business_price">$2,800</span></h4>
                            <h4 class="retail_text">Retail: $3,200</h4>
                            <div class="business_list">
                            <h5>Publication</h5>
                            <ul class="m-0">
                                <li>LA Weekly</li>
                                <li>IB Times (SG)</li>
                                <li>Digital Journal</li>
                                <li>NY Weekly</li>
                                <li>Daily Scanner</li>
                            </ul>
                            </div>
                        </div>
                        <div class="business_wreap">
                            <h4 class="bundle_text"><span>Bundle 2</span> <span class="business_price">$2,800</span></h4>
                            <h4 class="retail_text">Retail: $3,200</h4>
                            <div class="business_list">
                            <h5>Publication</h5>
                            <ul class="m-0">
                                <li>LA Weekly</li>
                                <li>IB Times (SG)</li>
                                <li>Digital Journal</li>
                                <li>NY Weekly</li>
                                <li>Daily Scanner</li>
                            </ul>
                            </div>
                        </div>
                        <div class="business_wreap">
                            <h4 class="bundle_text"><span>Bundle 3</span> <span class="business_price">$2,800</span></h4>
                            <h4 class="retail_text">Retail: $3,200</h4>
                            <div class="business_list">
                            <h5>Publication</h5>
                            <ul class="m-0">
                                <li>LA Weekly</li>
                                <li>IB Times (SG)</li>
                                <li>Digital Journal</li>
                                <li>NY Weekly</li>
                                <li>Daily Scanner</li>
                            </ul>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="business_content">
                        <h3>Crypto</h3>
                        <div class="business_grid">
                        <div class="business_wreap">
                            <h4 class="bundle_text"><span>Bundle 1</span> <span class="business_price">$2,800</span></h4>
                            <h4 class="retail_text">Retail: $3,200</h4>
                            <div class="business_list">
                            <h5>Publication</h5>
                            <ul class="m-0">
                                <li>LA Weekly</li>
                                <li>IB Times (SG)</li>
                                <li>Digital Journal</li>
                                <li>NY Weekly</li>
                                <li>Daily Scanner</li>
                            </ul>
                            </div>
                        </div>
                        <div class="business_wreap">
                            <h4 class="bundle_text"><span>Bundle 2</span> <span class="business_price">$2,800</span></h4>
                            <h4 class="retail_text">Retail: $3,200</h4>
                            <div class="business_list">
                            <h5>Publication</h5>
                            <ul class="m-0">
                                <li>LA Weekly</li>
                                <li>IB Times (SG)</li>
                                <li>Digital Journal</li>
                                <li>NY Weekly</li>
                                <li>Daily Scanner</li>
                            </ul>
                            </div>
                        </div>
                        <div class="business_wreap">
                            <h4 class="bundle_text"><span>Bundle 3</span> <span class="business_price">$2,800</span></h4>
                            <h4 class="retail_text">Retail: $3,200</h4>
                            <div class="business_list">
                            <h5>Publication</h5>
                            <ul class="m-0">
                                <li>LA Weekly</li>
                                <li>IB Times (SG)</li>
                                <li>Digital Journal</li>
                                <li>NY Weekly</li>
                                <li>Daily Scanner</li>
                            </ul>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="business_content">
                        <h3>Music</h3>
                        <div class="business_grid">
                        <div class="business_wreap">
                            <h4 class="bundle_text"><span>Bundle 1</span> <span class="business_price">$2,800</span></h4>
                            <h4 class="retail_text">Retail: $3,200</h4>
                            <div class="business_list">
                            <h5>Publication</h5>
                            <ul class="m-0">
                                <li>LA Weekly</li>
                                <li>IB Times (SG)</li>
                                <li>Digital Journal</li>
                                <li>NY Weekly</li>
                                <li>Daily Scanner</li>
                            </ul>
                            </div>
                        </div>
                        <div class="business_wreap">
                            <h4 class="bundle_text"><span>Bundle 2</span> <span class="business_price">$2,800</span></h4>
                            <h4 class="retail_text">Retail: $3,200</h4>
                            <div class="business_list">
                            <h5>Publication</h5>
                            <ul class="m-0">
                                <li>LA Weekly</li>
                                <li>IB Times (SG)</li>
                                <li>Digital Journal</li>
                                <li>NY Weekly</li>
                                <li>Daily Scanner</li>
                            </ul>
                            </div>
                        </div>
                        <div class="business_wreap">
                            <h4 class="bundle_text"><span>Bundle 3</span> <span class="business_price">$2,800</span></h4>
                            <h4 class="retail_text">Retail: $3,200</h4>
                            <div class="business_list">
                            <h5>Publication</h5>
                            <ul class="m-0">
                                <li>LA Weekly</li>
                                <li>IB Times (SG)</li>
                                <li>Digital Journal</li>
                                <li>NY Weekly</li>
                                <li>Daily Scanner</li>
                            </ul>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                    <div class="business_wrapper">
                    <div class="business_content">
                        <h3>Publications</h3>
                        <div class="business_grid">
                        <div class="business_wreap">
                            <h4 class="bundle_text"><span>Price</span> <span class="business_price">$600</span></h4>
                            <p>8 Yahoo sites with Yahoo finance and News</p>
                        </div>
                        <div class="business_wreap">
                            <h4 class="bundle_text"><span>Price</span> <span class="business_price">$800</span></h4>
                            <p>20+ Yahoo sites, Benzinga, Morning watch, Digital journal, Market watch, Street insider</p>
                        </div>
                        <div class="business_wreap">
                            <h4 class="bundle_text"><span>Price</span> <span class="business_price">$600</span></h4>
                            <p>8 Yahoo sites with Yahoo finance and News</p>
                        </div>
                        <div class="business_wreap">
                            <h4 class="bundle_text"><span>Price</span> <span class="business_price">$600</span></h4>
                            <p>8 Yahoo sites with Yahoo finance and News</p>
                        </div>
                        <div class="business_wreap">
                            <h4 class="bundle_text"><span>Price</span> <span class="business_price">$600</span></h4>
                            <p>8 Yahoo sites with Yahoo finance and News</p>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="pills-services" role="tabpanel" aria-labelledby="pills-services-tab">
                    <div class="business_wrapper">
                    <div class="business_content">
                        <h3>Other Services</h3>
                        <div class="business_grid">
                        <div class="business_wreap">
                            <h4 class="bundle_text"><span>PR services</span></h4>
                            <div class="business_list">
                            <h5>Publication</h5>
                            <ul class="m-0">
                                <li>LA Weekly</li>
                                <li>IB Times (SG)</li>
                                <li>Digital Journal</li>
                                <li>NY Weekly</li>
                                <li>Daily Scanner</li>
                            </ul>
                            </div>
                        </div>
                        <div class="business_wreap">
                            <h4 class="bundle_text"><span>Social media services</span></h4>
                            <div class="business_list">
                            <h5>Publication</h5>
                            <ul class="m-0">
                                <li>LA Weekly</li>
                                <li>IB Times (SG)</li>
                                <li>Digital Journal</li>
                                <li>NY Weekly</li>
                                <li>Daily Scanner</li>
                            </ul>
                            </div>
                        </div>
                        <div class="business_wreap">
                            <h4 class="bundle_text"><span>Other services</span></h4>
                            <div class="business_list">
                            <h5>Publication</h5>
                            <ul class="m-0">
                                <li>LA Weekly</li>
                                <li>IB Times (SG)</li>
                                <li>Digital Journal</li>
                                <li>NY Weekly</li>
                                <li>Daily Scanner</li>
                            </ul>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </section>

  <footer class="footer_wrapper charge_color">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="footer_content">
            <p>© 2023 PR Partners International</p>
          </div>
        </div>
      </div>
    </div>
  </footer>


  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.7.0/chosen.jquery.min.js"></script>
  <script src="{{ asset('/pr/js/script.js') }}"></script>


</body>
</html>