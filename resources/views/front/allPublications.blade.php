<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&amp;family=Poppins:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.7.0/chosen.css">

    <link rel="stylesheet" href="{{ asset('/pr/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/pr/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('/pr/css/spinner.css') }}" >
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <title>All publication page</title>
</head>
<body class="bg_color">
    <header class="header_wrapper">
        <div class="container">
        <div class="row">
                <div class="col-lg-12">
                    <div class="header_content">
                        <div class="logo_img">
                            <img src="{{ asset('/pr/img/Logo.png') }}" class="img-fluid" alt="">
                        </div>
                        <div class="log_out_bnt">
                            <a class="btn" href="{{ url('/auth-logout') }}" role="button"><i class="fa-solid fa-arrow-right-from-bracket"></i> Log Out</a>
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
                            <p>
                                Once we have published the article for you, any further edits may include an extra charge.
                            </p>
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
                                                        <option value=""></option>
                                                        <option value="ASC">Price(ASC)</option>
                                                        <option value="DESC">Price(DESC)</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="range_wreap">
                                                <h3>Price range</h3>
                                                <div id="slider-range"></div>
                                                <div class="slider-labels">
                                                    <div class="caption">
                                                        <span id="slider-range-value1">$0</span>
                                                    </div>
                                                    <div class="text-right caption">
                                                        <span id="slider-range-value2">$56765</span>
                                                    </div>
                                                </div>
                                                <div>
                                                    <input type="hidden" id="min_value" name="min_value" value="">
                                                    <input type="hidden" id="max_value" name="max_value" value="">
                                                </div>
                                            </div>
                                            <div class="form-group wrapper">
                                                <label for="formGroupExampleInput">Select regions</label>
                                                <select multiple="" data-placeholder="Select regions" id="formGroupExampleInput1">
                                                    @foreach($countries as $cnt)
                                                    <option value="{{$cnt->id}}">{{ $cnt->country_name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="select_wreap">
                                                <h3>Select genres</h3>
                                                <div class="publication_list">
                                                    @foreach($genres as $genr)
                                                    <input type="checkbox" id="genres{{$genr->id}}" name="genres" class="checkgenre" value="{{ $genr->id ?? '' }}" style="display:none;">
                                                    <label for="genres{{$genr->id}}"><a id="genid{{$genr->id}}">{{ $genr->genre_name }}</a></label>
                                                    @endforeach
                                                </div>
                                            </div>
                                            <div class="select_wreap">
                                                <h3>Article Type</h3>
                                                <div class="publication_list">
                                                    @foreach($articles as $art)
                                                    <input type="checkbox" id="atype{{ $art->id }}" name="atype" class="checkarticle" value="{{ $art->id ?? '' }}" style="display:none;">
                                                    <label for="atype{{ $art->id }}"><a id="a_id{{$art->id}}">{{ $art->article_type }}</a></label>
                                                    @endforeach
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="ques_btn">
                                                <a class="btn" role="button">Reset all filters</a>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="rightside_publication">
                                        <div class="publications_show">
                                            <?php $total = count($publications); ?>
                                            <span>Showing {{ $total }} of {{ $total }} publications</span>
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
                                                    @foreach($publications as $data)
                                                    <tr id="pub{{ $data->id }}">
                                                        <td class="cpy_content">
                                                            <div class="cpy_logo">
                                                                <div class="cpy_logo_img">
                                                                    <img src="{{ $data->image }}" class="img-fluid" alt="">
                                                                </div>
                                                                <span>
                                                                    <a href="javascript:void(0)">{{ $data->title }}</a>
                                                                </span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <?php 
                                                                if($data->genres ?? ''){
                                                                    $genres = json_decode($data->genres);
                                                                    if(count($genres)>1){ ?>
                                                                        <div class="tooltip tooltip_data"><i class="fa-regular fa-circle-question"></i>
                                                                            <ul class="tooltiptext">
                                                                            <?php 
                                                                                $genres = json_decode($data->genres);
                                                                                foreach($genres as $gen){
                                                                                    $genre = (App\Models\Genre::where('id','=',$gen)->first()); ?>
                                                                                        <li>{{ $genre->genre_name }}</li>
                                                                                <?php     
                                                                                    }
                                                                                ?>
                                                                            </ul>
                                                                        </div> 
                                                            <?php   }else{ ?>
                                                                        <?php 
                                                                            $genres = json_decode($data->genres);
                                                                            foreach($genres as $gen){
                                                                                $genre = (App\Models\Genre::where('id','=',$gen)->first()); ?>
                                                                                {{ $genre->genre_name }}
                                                                            <?php     
                                                                                }
                                                                            ?>
                                                                <?php   }
                                                                    }
                                                                ?>
                                                        </td>
                                                        <td>
                                                            <?php 
                                                                if($data->price == 0){
                                                                    print_r('ASK');
                                                                }else{ ?>
                                                                    ${{ $data->price }}
                                                        <?php    }
                                                                    
                                                            ?>
                                                        </td>
                                                        <td>{{ $data->turn_around_time }}</td>
                                                        <td>{{ $data->domain_authority }}</td>
                                                        <td>
                                                            <?php 
                                                                $article = $data->article_type;
                                                                $articleType = (App\Models\ArticleType::where('id','=',$article)->first());
                                                                print_r($articleType->article_type);    
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <?php 
                                                                $country = $data->country;
                                                                $countries = (App\Models\Country::where('id','=',$country)->first());
                                                                print_r($countries->country_name);
                                                            ?>
                                                        </td>
                                                    </tr>
                                                    @endforeach
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


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.7.0/chosen.jquery.min.js"></script>
    <script src="{{ asset('/pr/js/script.js') }}"></script>
    
    <script>
        $(document).ready(function(){
            var prices = '';
            var countries = '';
            var genres = [];
            var articletype = [];
            var publicationname = '';
            var minprice = '';
            var maxprice = '';

            $(".noUi-handle").on("click", function () {
                $(this).width(50);
            });
            var rangeSlider = document.getElementById("slider-range");
            var moneyFormat = wNumb({
                decimals: 0,
                thousand: ",",
                prefix: "$"
            });
            noUiSlider.create(rangeSlider, {
                start: [0, 30000],
                step: 1,
                range: {
                min: [0],
                max: [30000]
                },
                format: moneyFormat,
                connect: true
            });

    // Set visual min and max values and also update value hidden form inputs
            rangeSlider.noUiSlider.on("update", function (values, handle) {
                document.getElementById("slider-range-value1").innerHTML = values[0];
                document.getElementById("slider-range-value2").innerHTML = values[1];
                document.getElementsByName("min-value").value = moneyFormat.from(values[0]);
                document.getElementsByName("max-value").value = moneyFormat.from(values[1]);
                
                $('#slider-range').click(function(){
                    min = $('#slider-range-value1').html().replace('$','');
                    max = $('#slider-range-value2').html().replace('$','');
                    min_price = min.replace(',','');
                    max_price = max.replace(',','');
                    minprice = min_price;
                    maxprice = max_price;

                    publication(prices,countries,genres,articletype,publicationname,minprice,maxprice);
                })
            });

            $('#exampleFormControlSelect1').change(function(){
                var price = $(this).val();
                prices = price;
                publication(prices,countries,genres,articletype,publicationname,minprice,maxprice);
            });
            
            $('#formGroupExampleInput1').change(function(){
                var country = $(this).val();
                countries = country;
                publication(prices,countries,genres,articletype,publicationname,minprice,maxprice);
            });

            $('.checkgenre').change(function(){
                if(this.checked){
                    var genre = $(this).val(); 
                    $('#genid'+genre).addClass('selected');
                    $('.selected').css('background','rgba(146, 92, 3, 0.17)');
                    $('.selected').css('color','#925C03');
                    genres.push(genre);
                    publication(prices,countries,genres,articletype,publicationname,minprice,maxprice);
                }
            });

            $('.checkarticle').change(function(){
                if(this.checked){
                    var article = $(this).val();
                    $('#a_id'+article).addClass('checked');
                    $('.checked').css('background','rgba(146, 92, 3, 0.17)');
                    $('.checked').css('color','#925C03');
                    articletype.push(article);
                    publication(prices,countries,genres,articletype,publicationname,minprice,maxprice);
                }
            });

            $('#formGroupExampleInput').keyup(function(){
                var name = $(this).val();
                publicationname = name;
                publication(prices,countries,genres,articletype,publicationname,minprice,maxprice);
            });

            function  publication(prices,countries,genres,articletype,publicationname,minprice,maxprice){
                var data = {
                    name:publicationname,
                    price:prices,
                    country:countries,
                    genre:genres,
                    articletype:articletype,
                    minprice:minprice,
                    maxprice:maxprice,
                    _token: "{{ csrf_token() }}"
                }
                $.ajax({
                    url:"{{ url('publicationname') }}",
                    type: "POST",
                    data: data,
                    dataType: "JSON",
                    success: function(response){ 
                        console.log(response);
                        data = [];
                        if(response[0] == "" || response[1] == ""){
                            var html1 = '<span>Nothing here...</span>' ;
                            var total = response[2];
                            $('.publications_show').html('<span>Showing 0 of '+total+' publications</span>');
                            data.push(html1);
                        }else{
                            allpublication = response[0];
                            genres = response[1];
                            total = response[2];
                            result = allpublication.length;
                            num = 0;

                            for(i=0; i<allpublication.length; i++){
                                genre = [];
                                $.each(genres[i],function(key,val){
                                    genrename = val.genre_name;
                                    genre.push(genrename);
                                });

                                if(genres[i].length>1){
                                    genress = '<div class="tooltip tooltip_data"><i class="fa-regular fa-circle-question"></i><ul class="tooltiptext"><li>'+genre+'</li></ul></div>';
                                }else{
                                    genress = genre;
                                }

                                if(allpublication[i].price == 0){
                                    price = 'ASK';
                                }else{
                                    price = '$'+allpublication[i].price+'';
                                }

                                var html = '<tr id="pub'+allpublication[i].id+'"><td class="cpy_content"><div class="cpy_logo"><div class="cpy_logo_img"><img src="'+allpublication[i].image+'" class="img-fluid" alt=""></div><span><a href="javascript:void(0)">'+allpublication[i].title+'</a></span></div></td><td>'+genress+'</td><td>'+price+'</td><td>'+allpublication[i].turn_around_time+'</td><td>'+allpublication[i].domain_authority+'</td><td>'+allpublication[i].article_type.article_type+'</td><td>'+allpublication[i].country.country_name+'</td></tr>';
                                data.push(html);
                                
                                num = num + 1;
                                $('.publications_show').html('<span>Showing '+result+' of '+total+' publications</span>');
                            }
                        }
                        $('tbody').html(data);
                    }
                });
            }
        });
        
    </script>
</body>
</html>